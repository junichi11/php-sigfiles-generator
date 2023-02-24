<?php



namespace {

	/**
	 * <p>Provides string comparison capability with support for appropriate locale-sensitive sort orderings.</p>
	 * @link https://php.net/manual/en/class.collator.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	class Collator {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const DEFAULT_VALUE = -1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const PRIMARY = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const SECONDARY = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const TERTIARY = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const DEFAULT_STRENGTH = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const QUATERNARY = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const IDENTICAL = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const OFF = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const ON = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const SHIFTED = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const NON_IGNORABLE = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const LOWER_FIRST = 24;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const UPPER_FIRST = 25;

		/**
		 * @var int <p>Sort strings with different accents from the back of the string. This attribute is automatically set to <i>On</i> for the French locales and a few others. Users normally would not need to explicitly set this attribute. There is a string comparison performance cost when it is set <i>On</i>, but sort key length is unaffected. Possible values are:</p><ul> <li><b><code>Collator::ON</code></b></li> <li><b><code>Collator::OFF</code></b>(default)</li> <li><b><code>Collator::DEFAULT_VALUE</code></b></li> </ul> <p></p> <p><b>Example #1 FRENCH_COLLATION rules</b></p> <p></p><ul> <li>F=OFF cote &lt; cot&#xE9; &lt; c&#xF4;te &lt; c&#xF4;t&#xE9; </li> <li>F=ON cote &lt; c&#xF4;te &lt; cot&#xE9; &lt; c&#xF4;t&#xE9;</li> </ul>
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const FRENCH_COLLATION = 0;

		/**
		 * @var int <p>The Alternate attribute is used to control the handling of the so called variable characters in the UCA: whitespace, punctuation and symbols. If Alternate is set to <i>NonIgnorable</i> (N), then differences among these characters are of the same importance as differences among letters. If Alternate is set to <i>Shifted</i> (S), then these characters are of only minor importance. The <i>Shifted</i> value is often used in combination with <i>Strength</i> set to Quaternary. In such a case, whitespace, punctuation, and symbols are considered when comparing strings, but only if all other aspects of the strings (base letters, accents, and case) are identical. If Alternate is not set to Shifted, then there is no difference between a Strength of 3 and a Strength of 4. For more information and examples, see Variable_Weighting in the &#xBB;&#xA0;UCA. The reason the Alternate values are not simply <i>On</i> and <i>Off</i> is that additional Alternate values may be added in the future. The UCA option Blanked is expressed with Strength set to 3, and Alternate set to Shifted. The default for most locales is NonIgnorable. If Shifted is selected, it may be slower if there are many strings that are the same except for punctuation; sort key length will not be affected unless the strength level is also increased.</p> <p>Possible values are:</p><ul> <li><b><code>Collator::NON_IGNORABLE</code></b>(default)</li> <li><b><code>Collator::SHIFTED</code></b></li> <li><b><code>Collator::DEFAULT_VALUE</code></b></li> </ul> <p></p> <p><b>Example #2 ALTERNATE_HANDLING rules</b></p> <p></p><ul> <li> S=3, A=N di Silva &lt; Di Silva &lt; diSilva &lt; U.S.A. &lt; USA </li> <li> S=3, A=S di Silva = diSilva &lt; Di Silva &lt; U.S.A. = USA </li> <li> S=4, A=S di Silva &lt; diSilva &lt; Di Silva &lt; U.S.A. &lt; USA </li> </ul>
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const ALTERNATE_HANDLING = 1;

		/**
		 * @var int <p>The Case_First attribute is used to control whether uppercase letters come before lowercase letters or vice versa, in the absence of other differences in the strings. The possible values are <i>Uppercase_First</i> (U) and <i>Lowercase_First</i> (L), plus the standard <i>Default</i> and <i>Off</i>. There is almost no difference between the Off and Lowercase_First options in terms of results, so typically users will not use Lowercase_First: only Off or Uppercase_First. (People interested in the detailed differences between X and L should consult the <code>Collation Customization</code>). Specifying either L or U won't affect string comparison performance, but will affect the sort key length.</p> <p>Possible values are:</p><ul> <li><b><code>Collator::OFF</code></b>(default)</li> <li><b><code>Collator::LOWER_FIRST</code></b></li> <li><b><code>Collator::UPPER_FIRST</code></b></li> <li><b><code>Collator:DEFAULT</code></b></li> </ul> <p></p> <p><b>Example #3 CASE_FIRST rules</b></p> <p></p><ul> <li>C=X or C=L "china" &lt; "China" &lt; "denmark" &lt; "Denmark"</li> <li>C=U "China" &lt; "china" &lt; "Denmark" &lt; "denmark"</li> </ul>
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const CASE_FIRST = 2;

		/**
		 * @var int <p>The Case_Level attribute is used when ignoring accents but not case. In such a situation, set Strength to be <i>Primary</i>, and Case_Level to be <i>On</i>. In most locales, this setting is Off by default. There is a small string comparison performance and sort key impact if this attribute is set to be <i>On</i>.</p> <p>Possible values are:</p><ul> <li><b><code>Collator::OFF</code></b>(default)</li> <li><b><code>Collator::ON</code></b></li> <li><b><code>Collator::DEFAULT_VALUE</code></b></li> </ul> <p></p> <p><b>Example #4 CASE_LEVEL rules</b></p> <p></p><ul> <li>S=1, E=X role = Role = r&#xF4;le</li> <li>S=1, E=O role = r&#xF4;le &lt; Role</li> </ul>
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const CASE_LEVEL = 3;

		/**
		 * @var int <p>The Normalization setting determines whether text is thoroughly normalized or not in comparison. Even if the setting is off (which is the default for many locales), text as represented in common usage will compare correctly (for details, see UTN #5). Only if the accent marks are in noncanonical order will there be a problem. If the setting is <i>On</i>, then the best results are guaranteed for all possible text input. There is a medium string comparison performance cost if this attribute is <i>On</i>, depending on the frequency of sequences that require normalization. There is no significant effect on sort key length. If the input text is known to be in NFD or NFKD normalization forms, there is no need to enable this Normalization option.</p> <p>Possible values are:</p><ul> <li><b><code>Collator::OFF</code></b>(default)</li> <li><b><code>Collator::ON</code></b></li> <li><b><code>Collator::DEFAULT_VALUE</code></b></li> </ul>
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const NORMALIZATION_MODE = 4;

		/**
		 * @var int <p>The ICU Collation Service supports many levels of comparison (named "Levels", but also known as "Strengths"). Having these categories enables ICU to sort strings precisely according to local conventions. However, by allowing the levels to be selectively employed, searching for a string in text can be performed with various matching conditions. For more detailed information, see <code>collator_set_strength()</code> chapter.</p> <p>Possible values are:</p><ul> <li><b><code>Collator::PRIMARY</code></b></li> <li><b><code>Collator::SECONDARY</code></b></li> <li><b><code>Collator::TERTIARY</code></b>(default)</li> <li><b><code>Collator::QUATERNARY</code></b></li> <li><b><code>Collator::IDENTICAL</code></b></li> <li><b><code>Collator::DEFAULT_VALUE</code></b></li> </ul>
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const STRENGTH = 5;

		/**
		 * @var int <p>Compatibility with JIS x 4061 requires the introduction of an additional level to distinguish Hiragana and Katakana characters. If compatibility with that standard is required, then this attribute should be set <i>On</i>, and the strength set to Quaternary. This will affect sort key length and string comparison string comparison performance.</p> <p>Possible values are:</p><ul> <li><b><code>Collator::OFF</code></b>(default)</li> <li><b><code>Collator::ON</code></b></li> <li><b><code>Collator::DEFAULT_VALUE</code></b></li> </ul>
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const HIRAGANA_QUATERNARY_MODE = 6;

		/**
		 * @var int <p>When turned on, this attribute generates a collation key for the numeric value of substrings of digits. This is a way to get '100' to sort AFTER '2'.</p> <p>Possible values are:</p><ul> <li><b><code>Collator::OFF</code></b>(default)</li> <li><b><code>Collator::ON</code></b></li> <li><b><code>Collator::DEFAULT_VALUE</code></b></li> </ul>
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const NUMERIC_COLLATION = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const SORT_REGULAR = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const SORT_STRING = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.collator.php
		 */
		const SORT_NUMERIC = 2;

		/**
		 * Create a collator
		 * <p>Creates a new instance of <code>Collator</code>.</p>
		 * @param string $locale <p>The locale whose collation rules should be used. Special values for locales can be passed in - if an empty <code>string</code> is passed for the locale, the default locale's collation rules will be used. If <code>"root"</code> is passed, &#xBB;&#xA0;UCA rules will be used.</p> <p>The <code>locale</code> attribute is typically the most important attribute for correct sorting and matching, according to the user expectations in different countries and regions. The default &#xBB;&#xA0;UCA ordering will only sort a few languages such as Dutch and Portuguese correctly ("correctly" meaning according to the normal expectations for users of the languages). Otherwise, you need to supply the locale to UCA in order to properly collate text for a given language. Thus a locale needs to be supplied so as to choose a collator that is correctly tailored for that locale. The choice of a locale will automatically preset the values for all of the attributes to something that is reasonable for that locale. Thus most of the time the other attributes do not need to be explicitly set. In some cases, the choice of locale will make a difference in string comparison performance and/or sort key length.</p>
		 * @return self
		 * @link https://php.net/manual/en/collator.construct.php
		 * @see Collator::create(), collator_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function __construct(string $locale) {}

		/**
		 * Sort array maintaining index association
		 * <p>Object-oriented style</p><p>This function sorts an array such that array indices maintain their correlation with the array elements they are associated with. This is used mainly when sorting associative arrays where the actual element order is significant. Array elements will have sort order according to current locale rules.</p><p>Equivalent to standard PHP <code>asort()</code>.</p>
		 * @param array $array <p>Array of strings to sort.</p>
		 * @param int $flags <p>Optional sorting type, one of the following:</p><ul> <li> <p><b><code>Collator::SORT_REGULAR</code></b> - compare items normally (don't change types)</p> </li> <li> <p><b><code>Collator::SORT_NUMERIC</code></b> - compare items numerically</p> </li> <li> <p><b><code>Collator::SORT_STRING</code></b> - compare items as strings</p> </li> </ul> <p>Default <code>flags</code> value is <b><code>Collator::SORT_REGULAR</code></b>. It is also used if an invalid <code>flags</code> value has been specified.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/collator.asort.php
		 * @see collator_sort(), collator_sort_with_sort_keys()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function asort(array &$array, int $flags = Collator::SORT_REGULAR): bool {}

		/**
		 * Compare two Unicode strings
		 * <p>Object-oriented style</p><p>Compare two Unicode strings according to collation rules.</p>
		 * @param string $string1 <p>The first string to compare.</p>
		 * @param string $string2 <p>The second string to compare.</p>
		 * @return int|false <p>Return comparison result:</p><ul> <li> <p>1 if <code>string1</code> is <i>greater</i> than <code>string2</code> ;</p> </li> <li> <p>0 if <code>string1</code> is <i>equal</i> to <code>string2</code>;</p> </li> <li> <p>-1 if <code>string1</code> is <i>less</i> than <code>string2</code> .</p> </li> </ul> Returns <b><code>false</code></b> on failure. <p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
		 * @link https://php.net/manual/en/collator.compare.php
		 * @see collator_sort()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function compare(string $string1, string $string2): int|false {}

		/**
		 * Create a collator
		 * <p>Object-oriented style</p><p>The strings will be compared using the options already specified.</p>
		 * @param string $locale <p>The locale containing the required collation rules. Special values for locales can be passed in - if an empty <code>string</code> is passed for the locale, the default locale collation rules will be used. If <code>"root"</code> is passed, &#xBB;&#xA0;UCA rules will be used.</p>
		 * @return ?Collator <p>Return new instance of <code>Collator</code> object, or <b><code>null</code></b> on error.</p>
		 * @link https://php.net/manual/en/collator.create.php
		 * @see Collator::__construct()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function create(string $locale): ?\Collator {}

		/**
		 * Get collation attribute value
		 * <p>Object-oriented style</p><p>Get a value of an integer collator attribute.</p>
		 * @param int $attribute <p>Attribute to get value for.</p>
		 * @return int|false <p>Attribute value, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/collator.getattribute.php
		 * @see collator_set_attribute(), collator_get_strength()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getAttribute(int $attribute): int|false {}

		/**
		 * Get collator's last error code
		 * <p>Object-oriented style</p><p></p>
		 * @return int|false <p>Error code returned by the last Collator API function call, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/collator.geterrorcode.php
		 * @see collator_get_error_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getErrorCode(): int|false {}

		/**
		 * Get text for collator's last error code
		 * <p>Object-oriented style</p><p>Retrieves the message for the last error.</p>
		 * @return string|false <p>Description of an error occurred in the last Collator API function call, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/collator.geterrormessage.php
		 * @see collator_get_error_code()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getErrorMessage(): string|false {}

		/**
		 * Get the locale name of the collator
		 * <p>Object-oriented style</p><p>Get collector locale name.</p>
		 * @param int $type <p>You can choose between valid and actual locale ( <b><code>Locale::VALID_LOCALE</code></b> and <b><code>Locale::ACTUAL_LOCALE</code></b>, respectively).</p>
		 * @return string|false <p>Real locale name from which the collation data comes. If the collator was instantiated from rules or an error occurred, returns <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/collator.getlocale.php
		 * @see collator_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getLocale(int $type): string|false {}

		/**
		 * Get sorting key for a string
		 * <p>Object-oriented style</p><p>Return collation key for a string. Collation keys can be compared directly instead of strings, though are implementation specific and may change between ICU library versions. Sort keys are generally only useful in databases or other circumstances where function calls are extremely expensive.</p>
		 * @param string $string <p>The string to produce the key from.</p>
		 * @return string|false <p>Returns the collation key for the string, or <b><code>false</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
		 * @link https://php.net/manual/en/collator.getsortkey.php
		 * @see collator_sort(), collator_sort_with_sort_keys()
		 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 1.0.3
		 */
		public function getSortKey(string $string): string|false {}

		/**
		 * Get current collation strength
		 * <p>Object-oriented style</p><p></p>
		 * @return int <p>Returns current collation strength, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/collator.getstrength.php
		 * @see collator_set_strength(), collator_get_attribute()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getStrength(): int {}

		/**
		 * Set collation attribute
		 * <p>Object-oriented style</p><p></p>
		 * @param int $attribute <p>Attribute.</p>
		 * @param int $value <p>Attribute value.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/collator.setattribute.php
		 * @see collator_get_attribute(), collator_set_strength()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function setAttribute(int $attribute, int $value): bool {}

		/**
		 * Set collation strength
		 * <p>Object-oriented style</p><p>The &#xBB;&#xA0;ICU Collation Service supports many levels of comparison (named "Levels", but also known as "Strengths"). Having these categories enables ICU to sort strings precisely according to local conventions. However, by allowing the levels to be selectively employed, searching for a string in text can be performed with various matching conditions.</p><p></p><p><i>Primary Level</i>: Typically, this is used to denote differences between base characters (for example, "a" &lt; "b"). It is the strongest difference. For example, dictionaries are divided into different sections by base character. This is also called the <code>level 1</code> strength.</p><p><i>Secondary Level</i>: Accents in the characters are considered secondary differences (for example, "as" &lt; "&#xE0;s" &lt; "at"). Other differences between letters can also be considered secondary differences, depending on the language. A secondary difference is ignored when there is a primary difference anywhere in the strings. This is also called the <code>level 2</code> strength.</p><p><b>Note</b>:</p><p>Note: In some languages (such as Danish), certain accented letters are considered to be separate base characters. In most languages, however, an accented letter only has a secondary difference from the unaccented version of that letter.</p><p><i>Tertiary Level</i>: Upper and lower case differences in characters are distinguished at the tertiary level (for example, "ao" &lt; "Ao" &lt; "a&#xF2;"). In addition, a variant of a letter differs from the base form on the tertiary level (such as "A" and " "). Another example is the difference between large and small Kana. A tertiary difference is ignored when there is a primary or secondary difference anywhere in the strings. This is also called the <code>level 3</code> strength.</p><p><i>Quaternary Level</i>: When punctuation is ignored (see Ignoring Punctuations ) at levels 1-3, an additional level can be used to distinguish words with and without punctuation (for example, "ab" &lt; "a-b" &lt; "aB"). This difference is ignored when there is a primary, secondary or tertiary difference. This is also known as the <code>level 4</code> strength. The quaternary level should only be used if ignoring punctuation is required or when processing Japanese text (see Hiragana processing).</p><p><i>Identical Level</i>: When all other levels are equal, the identical level is used as a tiebreaker. The Unicode code point values of the NFD form of each string are compared at this level, just in case there is no difference at levels 1-4. For example, Hebrew cantillation marks are only distinguished at this level. This level should be used sparingly, as only code point values differences between two strings is an extremely rare occurrence. Using this level substantially decreases the performance for both incremental comparison and sort key generation (as well as increasing the sort key length). It is also known as <code>level 5</code> strength.</p><p>For example, people may choose to ignore accents or ignore accents and case when searching for text. Almost all characters are distinguished by the first three levels, and in most locales the default value is thus Tertiary. However, if Alternate is set to be Shifted, then the Quaternary strength can be used to break ties among whitespace, punctuation, and symbols that would otherwise be ignored. If very fine distinctions among characters are required, then the Identical strength can be used (for example, Identical Strength distinguishes between the Mathematical Bold Small A and the Mathematical Italic Small A.). However, using levels higher than Tertiary the Identical strength result in significantly longer sort keys, and slower string comparison performance for equal strings.</p>
		 * @param int $strength <p>Strength to set.</p> <p>Possible values are:</p><ul> <li> <p><b><code>Collator::PRIMARY</code></b></p> </li> <li> <p><b><code>Collator::SECONDARY</code></b></p> </li> <li> <p><b><code>Collator::TERTIARY</code></b></p> </li> <li> <p><b><code>Collator::QUATERNARY</code></b></p> </li> <li> <p><b><code>Collator::IDENTICAL</code></b></p> </li> <li> <p><b><code>Collator::DEFAULT_STRENGTH</code></b></p> </li> </ul>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/collator.setstrength.php
		 * @see collator_get_strength()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function setStrength(int $strength): bool {}

		/**
		 * Sort array using specified collator
		 * <p>Object-oriented style</p><p>This function sorts an array according to current locale rules.</p><p>Equivalent to standard PHP <code>sort()</code> .</p>
		 * @param array $array <p>Array of strings to sort.</p>
		 * @param int $flags <p>Optional sorting type, one of the following:</p> <p></p><ul> <li> <p><b><code>Collator::SORT_REGULAR</code></b> - compare items normally (don't change types)</p> </li> <li> <p><b><code>Collator::SORT_NUMERIC</code></b> - compare items numerically</p> </li> <li> <p><b><code>Collator::SORT_STRING</code></b> - compare items as strings</p> </li> </ul> Default sorting type is <b><code>Collator::SORT_REGULAR</code></b>. It is also used if an invalid <code>flags</code> value has been specified.
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/collator.sort.php
		 * @see collator_asort(), collator_sort_with_sort_keys()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function sort(array &$array, int $flags = Collator::SORT_REGULAR): bool {}

		/**
		 * Sort array using specified collator and sort keys
		 * <p>Object-oriented style</p><p>Similar to <code>collator_sort()</code> but uses ICU sorting keys produced by ucol_getSortKey() to gain more speed on large arrays.</p>
		 * @param array $array <p>Array of strings to sort</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/collator.sortwithsortkeys.php
		 * @see collator_sort(), collator_asort()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function sortWithSortKeys(array &$array): bool {}
	}

	/**
	 * <p>A &#x201C;break iterator&#x201D; is an ICU object that exposes methods for locating boundaries in text (e.g. word or sentence boundaries). The PHP <b>IntlBreakIterator</b> serves as the base class for all types of ICU break iterators. Where extra functionality is available, the intl extension may expose the ICU break iterator with suitable subclasses, such as <code>IntlRuleBasedBreakIterator</code> or <code>IntlCodePointBreakIterator</code>.</p>
	 * <p>This class implements <code>IteratorAggregate</code>. Traversing an <b>IntlBreakIterator</b> yields non-negative integer values representing the successive locations of the text boundaries, expressed as UTF-8 code units (byte) counts, taken from the beginning of the text (which has the location <code>0</code>). The keys yielded by the iterator simply form the sequence of natural numbers <code>{0, 1, 2, &#x2026;}</code>.</p>
	 * @link https://php.net/manual/en/class.intlbreakiterator.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	class IntlBreakIterator implements \IteratorAggregate {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const DONE = -1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const WORD_NONE = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const WORD_NONE_LIMIT = 100;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const WORD_NUMBER = 100;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const WORD_NUMBER_LIMIT = 200;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const WORD_LETTER = 200;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const WORD_LETTER_LIMIT = 300;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const WORD_KANA = 300;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const WORD_KANA_LIMIT = 400;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const WORD_IDEO = 400;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const WORD_IDEO_LIMIT = 500;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const LINE_SOFT = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const LINE_SOFT_LIMIT = 100;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const LINE_HARD = 100;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const LINE_HARD_LIMIT = 200;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const SENTENCE_TERM = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const SENTENCE_TERM_LIMIT = 100;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const SENTENCE_SEP = 100;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlbreakiterator.php
		 */
		public const SENTENCE_SEP_LIMIT = 200;

		/**
		 * Private constructor for disallowing instantiation
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link https://php.net/manual/en/intlbreakiterator.construct.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		private function __construct() {}

		/**
		 * Create break iterator for boundaries of combining character sequences
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createcharacterinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createCharacterInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for boundaries of code points
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return IntlCodePointBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createcodepointinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createCodePointInstance(): \IntlCodePointBreakIterator {}

		/**
		 * Create break iterator for logically possible line breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createlineinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createLineInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for sentence breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createsentenceinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createSentenceInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for title-casing breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createtitleinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createTitleInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for word breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createwordinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createWordInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Get index of current position
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.current.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function current(): int {}

		/**
		 * Set position to the first character in the text
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.first.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function first(): int {}

		/**
		 * Advance the iterator to the first boundary following specified offset
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.following.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function following(int $offset): int {}

		/**
		 * Get last error code on the object
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.geterrorcode.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getErrorCode(): int {}

		/**
		 * Get last error message on the object
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link https://php.net/manual/en/intlbreakiterator.geterrormessage.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getErrorMessage(): string {}

		/**
		 * Get the locale associated with the object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $type
		 * @return string|false
		 * @link https://php.net/manual/en/intlbreakiterator.getlocale.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getLocale(int $type): string|false {}

		/**
		 * Create iterator for navigating fragments between boundaries
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $type <p>Optional key type. Possible values are:</p><ul> <li> <b><code>IntlPartsIterator::KEY_SEQUENTIAL</code></b> - The default. Sequentially increasing integers used as key. </li> <li> <b><code>IntlPartsIterator::KEY_LEFT</code></b> - Byte offset left of current part used as key. </li> <li> <b><code>IntlPartsIterator::KEY_RIGHT</code></b> - Byte offset right of current part used as key. </li> </ul>
		 * @return IntlPartsIterator
		 * @link https://php.net/manual/en/intlbreakiterator.getpartsiterator.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getPartsIterator(string $type = 'IntlPartsIterator::KEY_SEQUENTIAL'): \IntlPartsIterator {}

		/**
		 * Get the text being scanned
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ?string
		 * @link https://php.net/manual/en/intlbreakiterator.gettext.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getText(): ?string {}

		/**
		 * Tell whether an offset is a boundaryʼs offset
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset
		 * @return bool
		 * @link https://php.net/manual/en/intlbreakiterator.isboundary.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function isBoundary(int $offset): bool {}

		/**
		 * Set the iterator position to index beyond the last character
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.last.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function last(): int {}

		/**
		 * Advance the iterator the next boundary
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?int $offset
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.next.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function next(?int $offset = null): int {}

		/**
		 * Set the iterator position to the first boundary before an offset
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.preceding.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function preceding(int $offset): int {}

		/**
		 * Set the iterator position to the boundary immediately before the current
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.previous.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function previous(): int {}

		/**
		 * Set the text being scanned
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $text
		 * @return ?bool
		 * @link https://php.net/manual/en/intlbreakiterator.settext.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setText(string $text): ?bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.intlcalendar.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	class IntlCalendar {

		/**
		 * @var int <p>Calendar field numerically representing an era, for instance <code>1</code> for AD and <code>0</code> for BC in the Gregorian/Julian calendars and <code>235</code> for the Heisei (&#x5E73;&#x6210;) era in the Japanese calendar. Not all calendars have more than one era.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_ERA = 0;

		/**
		 * @var int <p>Calendar field for the year. This is not unique across eras. If the calendar type has more than one era, generally the minimum value for this field will be <code>1</code>.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_YEAR = 1;

		/**
		 * @var int <p>Calendar field for the month. The month sequence is zero-based, so January (here used to signify the first month of the calendar; this may be called another name, such as Muharram in the Islamic calendar) is represented by <code>0</code>, February by <code>1</code>, &#x2026;, December by <code>11</code> and, for calendars that have it, the 13th or leap month by <code>12</code>.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_MONTH = 2;

		/**
		 * @var int <p>Calendar field for the number of the week of the year. This depends on which day of the week is deemed to start the week and the minimal number of days in a week.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_WEEK_OF_YEAR = 3;

		/**
		 * @var int <p>Calendar field for the number of the week of the month. This depends on which day of the week is deemed to start the week and the minimal number of days in a week.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_WEEK_OF_MONTH = 4;

		/**
		 * @var int <p>Calendar field for the day of the month. The same as <b><code>IntlCalendar::FIELD_DAY_OF_MONTH</code></b>, which has a clearer name.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_DATE = 5;

		/**
		 * @var int <p>Calendar field for the day of the year. For the Gregorian calendar, starts with <b><code>1</code></b> and ends with <b><code>365</code></b> or <b><code>366</code></b>.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_DAY_OF_YEAR = 6;

		/**
		 * @var int <p>Calendar field for the day of the week. Its values start with <code>1</code> (Sunday, see <b><code>IntlCalendar::DOW_SUNDAY</code></b> and subsequent constants) and the last valid value is 7 (Saturday).</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_DAY_OF_WEEK = 7;

		/**
		 * @var int <p>Given a day of the week (Sunday, Monday, &#x2026;), this calendar field assigns an ordinal to such a day of the week in a specific month. Thus, if the value of this field is <code>1</code> and the value of the day of the week is <code>2</code> (Monday), then the set day of the month is the 1st Monday of the month; the maximum value is <code>5</code>.</p> <p>Additionally, the value <code>0</code> and negative values are also allowed. The value <code>0</code> encompasses the seven days that occur immediately before the first seven days of a month (which therefore have a &#x2018;day of week in month&#x2019; with value <code>1</code>). Negative values starts counting from the end of the month &#x2013; <code>-1</code> points to the last occurrence of a day of the week in a month, <code>-2</code> to the second last, and so on.</p> <p>Unlike <b><code>IntlCalendar::FIELD_WEEK_OF_MONTH</code></b> and <b><code>IntlCalendar::FIELD_WEEK_OF_YEAR</code></b>, this value does not depend on <code>IntlCalendar::getFirstDayOfWeek()</code> or on <code>IntlCalendar::getMinimalDaysInFirstWeek()</code>. The first Monday is the first Monday, even if it occurs in a week that belongs to the previous month.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_DAY_OF_WEEK_IN_MONTH = 8;

		/**
		 * @var int <p>Calendar field indicating whether a time is before noon (value <code>0</code>, AM) or after (<code>1</code>). Midnight is AM, noon is PM.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_AM_PM = 9;

		/**
		 * @var int <p>Calendar field for the hour, without specifying whether it&#x2BC;s in the morning or in the afternoon. Valid values are <code>0</code> to <code>11</code>.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_HOUR = 10;

		/**
		 * @var int <p>Calendar field for the full (24h) hour of the day. Valid values are <code>0</code> to <code>23</code>.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_HOUR_OF_DAY = 11;

		/**
		 * @var int <p>Calendar field for the minutes component of the time.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_MINUTE = 12;

		/**
		 * @var int <p>Calendar field for the seconds component of the time.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_SECOND = 13;

		/**
		 * @var int <p>Calendar field the milliseconds component of the time.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_MILLISECOND = 14;

		/**
		 * @var int <p>Calendar field indicating the raw offset of the timezone, in milliseconds. The raw offset is the timezone offset, excluding any offset due to daylight saving time.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_ZONE_OFFSET = 15;

		/**
		 * @var int <p>Calendar field for the daylight saving time offset of the calendar&#x2BC;s timezone, in milliseconds, if active for calendar&#x2BC;s time.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_DST_OFFSET = 16;

		/**
		 * @var int <p>Calendar field representing the year for week of year purposes.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_YEAR_WOY = 17;

		/**
		 * @var int <p>Calendar field for the localized day of the week. This is a value between <code>1</code> and <code>7</code>, <code>1</code> being used for the day of the week that matches the value returned by <code>IntlCalendar::getFirstDayOfWeek()</code>.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_DOW_LOCAL = 18;

		/**
		 * @var int <p>Calendar field for a year number representation that is continuous across eras. For the Gregorian calendar, the value of this field matches that of <b><code>IntlCalendar::FIELD_YEAR</code></b> for AD years; a BC year <code>y</code> is represented by <code>-y + 1</code>.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_EXTENDED_YEAR = 19;

		/**
		 * @var int <p>Calendar field for a modified Julian day number. It is different from a conventional Julian day number in that its transitions occur at local zone midnight rather than at noon UTC. It uniquely identifies a date.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_JULIAN_DAY = 20;

		/**
		 * @var int <p>Calendar field encompassing the information in <b><code>IntlCalendar::FIELD_HOUR_OF_DAY</code></b>, <b><code>IntlCalendar::FIELD_MINUTE</code></b>, <b><code>IntlCalendar::FIELD_SECOND</code></b> and <b><code>IntlCalendar::FIELD_MILLISECOND</code></b>. Range is from the <code>0</code> to <code>24 &#42; 3600 &#42; 1000 - 1</code>. It is not the amount of milliseconds elapsed in the day since on DST transitions it will have discontinuities analog to those of the wall time.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_MILLISECONDS_IN_DAY = 21;

		/**
		 * @var int <p>Calendar field whose value is <code>1</code> for indicating a leap month and <code>0</code> otherwise.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_IS_LEAP_MONTH = 22;

		/**
		 * @var int <p>The total number of fields.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_FIELD_COUNT = 23;

		/**
		 * @var int <p>Alias for <b><code>IntlCalendar::FIELD_DATE</code></b>.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const FIELD_DAY_OF_MONTH = 5;

		/**
		 * @var int <p>Sunday.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_SUNDAY = 1;

		/**
		 * @var int <p>Monday.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_MONDAY = 2;

		/**
		 * @var int <p>Tuesday.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_TUESDAY = 3;

		/**
		 * @var int <p>Wednesday.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_WEDNESDAY = 4;

		/**
		 * @var int <p>Thursday.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_THURSDAY = 5;

		/**
		 * @var int <p>Friday.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_FRIDAY = 6;

		/**
		 * @var int <p>Saturday.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_SATURDAY = 7;

		/**
		 * @var int <p>Output of <code>IntlCalendar::getDayOfWeekType()</code> indicating a day of week is a weekday.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_TYPE_WEEKDAY = 0;

		/**
		 * @var int <p>Output of <code>IntlCalendar::getDayOfWeekType()</code> indicating a day of week belongs to the weekend.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_TYPE_WEEKEND = 1;

		/**
		 * @var int <p>Output of <code>IntlCalendar::getDayOfWeekType()</code> indicating the weekend begins during the given day of week.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_TYPE_WEEKEND_OFFSET = 2;

		/**
		 * @var int <p>Output of <code>IntlCalendar::getDayOfWeekType()</code> indicating the weekend ends during the given day of week.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const DOW_TYPE_WEEKEND_CEASE = 3;

		/**
		 * @var int <p>Output of <code>IntlCalendar::getSkippedWallTimeOption()</code> indicating that wall times in the skipped range should refer to the same instant as wall times with one hour less and of <code>IntlCalendar::getRepeatedWallTimeOption()</code> indicating the wall times in the repeated range should refer to the instant of the first occurrence of such wall time.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const WALLTIME_FIRST = 1;

		/**
		 * @var int <p>Output of <code>IntlCalendar::getSkippedWallTimeOption()</code> indicating that wall times in the skipped range should refer to the same instant as wall times with one hour after and of <code>IntlCalendar::getRepeatedWallTimeOption()</code> indicating the wall times in the repeated range should refer to the instant of the second occurrence of such wall time.</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const WALLTIME_LAST = 0;

		/**
		 * @var int <p>Output of <code>IntlCalendar::getSkippedWallTimeOption()</code> indicating that wall times in the skipped range should refer to the instant when the daylight saving time transition occurs (begins).</p>
		 * @link https://php.net/manual/en/class.intlcalendar.php
		 */
		public const WALLTIME_NEXT_VALID = 2;

		/**
		 * Private constructor for disallowing instantiation
		 * <p>A private constructor for disallowing instantiation with the new operator.</p><p>Call <code>IntlCalendar::createInstance()</code> instead.</p>
		 * @return self
		 * @link https://php.net/manual/en/intlcalendar.construct.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		private function __construct() {}

		/**
		 * Add a (signed) amount of time to a field
		 * <p>Object-oriented style</p><p>Add a signed amount to a field. Adding a positive amount allows advances in time, even if the numeric value of the field decreases (e.g. when working with years in BC dates).</p><p>Other fields may need to adjusted &#x2013; for instance, adding a month to the 31st of January will result in the 28th (or 29th) of February. Contrary to <code>IntlCalendar::roll()</code>, when a value wraps around, more significant fields may change. For instance, adding a day to the 31st of January will result in the 1st of February, not the 1st of January.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @param int $value <p>The signed amount to add to the current field. If the amount is positive, the instant will be moved forward; if it is negative, the instant will be moved into the past. The unit is implicit to the field type. For instance, hours for <b><code>IntlCalendar::FIELD_HOUR_OF_DAY</code></b>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.add.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function add(int $field, int $value): bool {}

		/**
		 * Whether this objectʼs time is after that of the passed object
		 * <p>Object-oriented style</p><p>Returns whether this object&#x2BC;s time succeeds the argument&#x2BC;s time.</p>
		 * @param \IntlCalendar $other <p>The calendar whose time will be checked against the primary object&#x2BC;s time.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this object&#x2BC;s current time is after that of the <code>calendar</code> argument&#x2BC;s time. Returns <b><code>false</code></b> otherwise.</p><p>On failure <b><code>false</code></b> is also returned. To detect error conditions use <code>intl_get_error_code()</code>, or set up Intl to throw exceptions.</p>
		 * @link https://php.net/manual/en/intlcalendar.after.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function after(\IntlCalendar $other): bool {}

		/**
		 * Whether this objectʼs time is before that of the passed object
		 * <p>Object-oriented style</p><p>Returns whether this object&#x2BC;s time precedes the argument&#x2BC;s time.</p>
		 * @param \IntlCalendar $other <p>The calendar whose time will be checked against the primary object&#x2BC;s time.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this object&#x2BC;s current time is before that of the <code>calendar</code> argument&#x2BC;s time. Returns <b><code>false</code></b> otherwise.</p><p>On failure <b><code>false</code></b> is also returned. To detect error conditions use <code>intl_get_error_code()</code>, or set up Intl to throw exceptions.</p>
		 * @link https://php.net/manual/en/intlcalendar.before.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function before(\IntlCalendar $other): bool {}

		/**
		 * Clear a field or all fields
		 * <p>Object-oriented style</p><p>Clears either all of the fields or a specific field. A cleared field is marked as unset, giving it the lowest priority against overlapping fields or even default values when calculating the time. Additionally, its value is set to <code>0</code>, though given the field&#x2BC;s low priority, its value may have been internally set to another value by the time the field has finished been queried.</p>
		 * @param ?int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.clear.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function clear(?int $field = null): true {}

		/**
		 * Create a new IntlCalendar
		 * <p>Object-oriented style</p><p>Given a timezone and locale, this method creates an <code>IntlCalendar</code> object. This factory method may return a subclass of <code>IntlCalendar</code>.</p><p>The calendar created will represent the time instance at which it was created, based on the system time. The fields can all be cleared by calling <b>IntCalendar::clear()</b> with no arguments. See also <code>IntlGregorianCalendar::__construct()</code>.</p>
		 * @param \IntlTimeZone|\DateTimeZone|string|null $timezone <p>The timezone to use.</p> <ul> <li> <p><b><code>null</code></b>, in which case the default timezone will be used, as specified in the ini setting date.timezone or through the function <code>date_default_timezone_set()</code> and as returned by <code>date_default_timezone_get()</code>.</p> </li> <li> <p>An <code>IntlTimeZone</code>, which will be used directly.</p> </li> <li> <p>A <code>DateTimeZone</code>. Its identifier will be extracted and an ICU timezone object will be created; the timezone will be backed by ICU&#x2BC;s database, not PHP&#x2BC;s.</p> </li> <li> <p>A <code>string</code>, which should be a valid ICU timezone identifier. See <code>IntlTimeZone::createTimeZoneIDEnumeration()</code>. Raw offsets such as <code>"GMT+08:30"</code> are also accepted.</p> </li> </ul>
		 * @param ?string $locale <p>A locale to use or <b><code>null</code></b> to use the default locale.</p>
		 * @return ?IntlCalendar <p>The created <code>IntlCalendar</code> instance or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.createinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function createInstance(\IntlTimeZone|\DateTimeZone|string|null $timezone = null, ?string $locale = null): ?\IntlCalendar {}

		/**
		 * Compare time of two IntlCalendar objects for equality
		 * <p>Object-oriented style</p><p>Returns true if this calendar and the given calendar have the same time. The settings, calendar types and field states do not have to be the same.</p>
		 * @param \IntlCalendar $other <p>The calendar to compare with the primary object.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the current time of both this and the passed in <code>IntlCalendar</code> object are the same, or <b><code>false</code></b> otherwise.</p><p>On failure <b><code>false</code></b> is also returned. To detect error conditions use <code>intl_get_error_code()</code>, or set up Intl to throw exceptions.</p>
		 * @link https://php.net/manual/en/intlcalendar.equals.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function equals(\IntlCalendar $other): bool {}

		/**
		 * Calculate difference between given time and this objectʼs time
		 * <p>Object-oriented style</p><p>Return the difference between the given time and the time this object is set to, with respect to the quantity specified the <code>field</code> parameter.</p><p>This method is meant to be called successively, first with the most significant field of interest down to the least significant field. To this end, as a side effect, this calendar&#x2BC;s value for the field specified is advanced by the amount returned.</p>
		 * @param float $timestamp <p>The time against which to compare the quantity represented by the <code>field</code>. For the result to be positive, the time given for this parameter must be ahead of the time of the object the method is being invoked on.</p>
		 * @param int $field <p>The field that represents the quantity being compared.</p> <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>Returns a (signed) difference of time in the unit associated with the specified field or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.fielddifference.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function fieldDifference(float $timestamp, int $field): int|false {}

		/**
		 * Create an IntlCalendar from a DateTime object or string
		 * <p>Object-oriented style</p><p>Creates an <code>IntlCalendar</code> object either from a <code>DateTime</code> object or from a string from which a <code>DateTime</code> object can be built.</p><p>The new calendar will represent not only the same instant as the given <code>DateTime</code> (subject to precision loss for dates very far into the past or future), but also the same timezone (subject to the caveat that different timezone databases will be used, and therefore the results may differ).</p>
		 * @param \DateTime|string $datetime <p>A <code>DateTime</code> object or a <code>string</code> that can be passed to <code>DateTime::__construct()</code>.</p>
		 * @param ?string $locale
		 * @return ?IntlCalendar <p>The created <code>IntlCalendar</code> object or <b><code>null</code></b> in case of failure. If a <code>string</code> is passed, any exception that occurs inside the <code>DateTime</code> constructor is propagated.</p>
		 * @link https://php.net/manual/en/intlcalendar.fromdatetime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a2
		 */
		public static function fromDateTime(\DateTime|string $datetime, ?string $locale = null): ?\IntlCalendar {}

		/**
		 * Get the value for a field
		 * <p>Object-oriented style</p><p>Gets the value for a specific field.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An integer with the value of the time field.</p>
		 * @link https://php.net/manual/en/intlcalendar.get.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function get(int $field): int|false {}

		/**
		 * The maximum value for a field, considering the objectʼs current time
		 * <p>Object-oriented style</p><p>Returns a field&#x2BC;s relative maximum value around the current time. The exact semantics vary by field, but in the general case this is the value that would be obtained if one would set the field value into the smallest relative maximum for the field and would increment it until reaching the global maximum or the field value wraps around, in which the value returned would be the global maximum or the value before the wrapping, respectively.</p><p>For instance, in the gregorian calendar, the actual maximum value for the day of month would vary between <code>28</code> and <code>31</code>, depending on the month and year of the current time.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing the maximum value in the units associated with the given <code>field</code> or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getactualmaximum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getActualMaximum(int $field): int|false {}

		/**
		 * The minimum value for a field, considering the objectʼs current time
		 * <p>Object-oriented style</p><p>Returns a field&#x2BC;s relative minimum value around the current time. The exact semantics vary by field, but in the general case this is the value that would be obtained if one would set the field value into the greatest relative minimum for the field and would decrement it until reaching the global minimum or the field value wraps around, in which the value returned would be the global minimum or the value before the wrapping, respectively.</p><p>For the Gregorian calendar, this is always the same as <code>IntlCalendar::getMinimum()</code>.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing the minimum value in the field&#x2BC;s unit or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getactualminimum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getActualMinimum(int $field): int|false {}

		/**
		 * Get array of locales for which there is data
		 * <p>Object-oriented style</p><p>Gives the list of locales for which calendars are installed. As of ICU 51, this is the list of all installed ICU locales.</p>
		 * @return array <p>An <code>array</code> of <code>string</code>s, one for which locale.</p>
		 * @link https://php.net/manual/en/intlcalendar.getavailablelocales.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getAvailableLocales(): array {}

		/**
		 * Tell whether a day is a weekday, weekend or a day that has a transition between the two
		 * <p>Object-oriented style</p><p>Returns whether the passed day is a weekday (<b><code>IntlCalendar::DOW_TYPE_WEEKDAY</code></b>), a weekend day (<b><code>IntlCalendar::DOW_TYPE_WEEKEND</code></b>), a day during which a transition occurs into the weekend (<b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b>) or a day during which the weekend ceases (<b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b>).</p><p>If the return is either <b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b> or <b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b>, then <code>IntlCalendar::getWeekendTransition()</code> can be called to obtain the time of the transition.</p><p>This function requires ICU 4.4 or later.</p>
		 * @param int $dayOfWeek <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, &#x2026;, <b><code>IntlCalendar::DOW_SATURDAY</code></b>.</p>
		 * @return int|false <p>Returns one of the constants <b><code>IntlCalendar::DOW_TYPE_WEEKDAY</code></b>, <b><code>IntlCalendar::DOW_TYPE_WEEKEND</code></b>, <b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b> or <b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b> or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getdayofweektype.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getDayOfWeekType(int $dayOfWeek): int|false {}

		/**
		 * Get last error code on the object
		 * <p>Object-oriented style (method):</p><p>Returns the numeric ICU error code for the last call on this object (including cloning) or the <code>IntlCalendar</code> given for the <code>calendar</code> parameter (in the procedural&#x2012;style version). This may indicate only a warning (negative error code) or no error at all (<b><code>U_ZERO_ERROR</code></b>). The actual presence of an error can be tested with <code>intl_is_failure()</code>.</p><p>Invalid arguments detected on the PHP side (before invoking functions of the ICU library) are not recorded for the purposes of this function.</p><p>The last error that occurred in any call to a function of the intl extension, including early argument errors, can be obtained with <code>intl_get_error_code()</code>. This function resets the global error code, but not the object&#x2BC;s error code.</p>
		 * @return int|false <p>An ICU error code indicating either success, failure or a warning. Returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.geterrorcode.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getErrorCode(): int|false {}

		/**
		 * Get last error message on the object
		 * <p>Object-oriented style (method):</p><p>Returns the error message (if any) associated with the error reported by <code>IntlCalendar::getErrorCode()</code> or <code>intlcal_get_error_code()</code>. If there is no associated error message, only the string representation of the name of the error constant will be returned. Otherwise, the message also includes a message set on the side of the PHP binding.</p>
		 * @return string|false <p>The error message associated with last error that occurred in a function call on this object, or a string indicating the non-existence of an error. Returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.geterrormessage.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getErrorMessage(): string|false {}

		/**
		 * Get the first day of the week for the calendarʼs locale
		 * <p>Object-oriented style</p><p>The week day deemed to start a week, either the default value for this locale or the value set with <code>IntlCalendar::setFirstDayOfWeek()</code>.</p>
		 * @return int|false <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, &#x2026;, <b><code>IntlCalendar::DOW_SATURDAY</code></b> or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getfirstdayofweek.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getFirstDayOfWeek(): int|false {}

		/**
		 * Get the largest local minimum value for a field
		 * <p>Object-oriented style</p><p>Returns the largest local minimum for a field. This should be a value larger or equal to that returned by <code>IntlCalendar::getActualMinimum()</code>, which is in its turn larger or equal to that returned by <code>IntlCalendar::getMinimum()</code>. All these three functions return the same value for the Gregorian calendar.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing a field value, in the field&#x2BC;s unit, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getgreatestminimum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getGreatestMinimum(int $field): int|false {}

		/**
		 * Get set of locale keyword values
		 * <p>Object-oriented style</p><p>For a given locale key, get the set of values for that key that would result in a different behavior. For now, only the <code>'calendar'</code> keyword is supported.</p><p>This function requires ICU 4.2 or later.</p>
		 * @param string $keyword <p>The locale keyword for which relevant values are to be queried. Only <code>'calendar'</code> is supported.</p>
		 * @param string $locale <p>The locale onto which the keyword/value pair are to be appended.</p>
		 * @param bool $onlyCommon <p>Whether to show only the values commonly used for the specified locale.</p>
		 * @return IntlIterator|false <p>An iterator that yields strings with the locale keyword values or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getkeywordvaluesforlocale.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getKeywordValuesForLocale(string $keyword, string $locale, bool $onlyCommon): \IntlIterator|false {}

		/**
		 * Get the smallest local maximum for a field
		 * <p>Object-oriented style</p><p>Returns the smallest local maximumw for a field. This should be a value smaller or equal to that returned by <b>IntlCalendar::getActualMaxmimum()</b>, which is in its turn smaller or equal to that returned by <code>IntlCalendar::getMaximum()</code>.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing a field value in the field&#x2BC;s unit or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getleastmaximum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getLeastMaximum(int $field): int|false {}

		/**
		 * Get the locale associated with the object
		 * <p>Object-oriented style</p><p>Returns the locale used by this calendar object.</p>
		 * @param int $type <p>Whether to fetch the actual locale (the locale from which the calendar data originates, with <b><code>Locale::ACTUAL_LOCALE</code></b>) or the valid locale, i.e., the most specific locale supported by ICU relatively to the requested locale &#x2013; see <b><code>Locale::VALID_LOCALE</code></b>. From the most general to the most specific, the locales are ordered in this fashion &#x2013; actual locale, valid locale, requested locale.</p>
		 * @return string|false <p>A locale string or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getlocale.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getLocale(int $type): string|false {}

		/**
		 * Get the global maximum value for a field
		 * <p>Object-oriented style</p><p>Gets the global maximum for a field, in this specific calendar. This value is larger or equal to that returned by <code>IntlCalendar::getActualMaximum()</code>, which is in its turn larger or equal to that returned by <code>IntlCalendar::getLeastMaximum()</code>.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing a field value in the field&#x2BC;s unit or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getmaximum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getMaximum(int $field): int|false {}

		/**
		 * Get minimal number of days the first week in a year or month can have
		 * <p>Object-oriented style</p><p>Returns the smallest number of days the first week of a year or month must have in the new year or month. For instance, in the Gregorian calendar, if this value is 1, then the first week of the year will necessarily include January 1st, while if this value is 7, then the week with January 1st will be the first week of the year only if the day of the week for January 1st matches the day of the week returned by <code>IntlCalendar::getFirstDayOfWeek()</code>; otherwise it will be the previous year&#x2BC;s last week.</p>
		 * @return int|false <p>An <code>int</code> representing a number of days or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getminimaldaysinfirstweek.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getMinimalDaysInFirstWeek(): int|false {}

		/**
		 * Get the global minimum value for a field
		 * <p>Object-oriented style</p><p>Gets the global minimum for a field, in this specific calendar. This value is smaller or equal to that returned by <code>IntlCalendar::getActualMinimum()</code>, which is in its turn smaller or equal to that returned by <code>IntlCalendar::getGreatestMinimum()</code>. For the Gregorian calendar, these three functions always return the same value (for each field).</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing a value for the given field in the field&#x2BC;s unit or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getminimum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getMinimum(int $field): int|false {}

		/**
		 * Get number representing the current time
		 * <p>Object-oriented style</p><p>The number of milliseconds that have passed since the reference date. This number is derived from the system time.</p>
		 * @return float <p>A <code>float</code> representing a number of milliseconds since the epoch, not counting leap seconds.</p>
		 * @link https://php.net/manual/en/intlcalendar.getnow.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getNow(): float {}

		/**
		 * Get behavior for handling repeating wall time
		 * <p>Object-oriented style</p><p>Gets the current strategy for dealing with wall times that are repeated whenever the clock is set back during dailight saving time end transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p><p>This function requires ICU 4.9 or later.</p>
		 * @return int <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b> or <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.getrepeatedwalltimeoption.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getRepeatedWallTimeOption(): int {}

		/**
		 * Get behavior for handling skipped wall time
		 * <p>Object-oriented style</p><p>Gets the current strategy for dealing with wall times that are skipped whenever the clock is forwarded during dailight saving time start transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p><p>The calendar must be lenient for this option to have any effect, otherwise attempting to set a non-existing time will cause an error.</p><p>This function requires ICU 4.9 or later.</p>
		 * @return int <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b>, <b><code>IntlCalendar::WALLTIME_LAST</code></b> or <b><code>IntlCalendar::WALLTIME_NEXT_VALID</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.getskippedwalltimeoption.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getSkippedWallTimeOption(): int {}

		/**
		 * Get time currently represented by the object
		 * <p>Object-oriented style</p><p>Returns the time associated with this object, expressed as the number of milliseconds since the epoch.</p>
		 * @return float|false <p>A <code>float</code> representing the number of milliseconds elapsed since the reference time (1 Jan 1970 00:00:00 UTC), or <b><code>false</code></b> on failure</p>
		 * @link https://php.net/manual/en/intlcalendar.gettime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getTime(): float|false {}

		/**
		 * Get the objectʼs timezone
		 * <p>Object-oriented style</p><p>Returns the <code>IntlTimeZone</code> object associated with this calendar.</p>
		 * @return IntlTimeZone|false <p>An <code>IntlTimeZone</code> object corresponding to the one used internally in this object. Returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.gettimezone.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getTimeZone(): \IntlTimeZone|false {}

		/**
		 * Get the calendar type
		 * <p>Object-oriented style</p><p>A string describing the type of this calendar. This is one of the valid values for the calendar keyword value <code>'calendar'</code>.</p>
		 * @return string <p>A <code>string</code> representing the calendar type, such as <code>'gregorian'</code>, <code>'islamic'</code>, etc.</p>
		 * @link https://php.net/manual/en/intlcalendar.gettype.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getType(): string {}

		/**
		 * Get time of the day at which weekend begins or ends
		 * <p>Object-oriented style</p><p>Returns the number of milliseconds after midnight at which the weekend begins or ends.</p><p>This is only applicable for days of the week for which <code>IntlCalendar::getDayOfWeekType()</code> returns either <b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b> or <b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b>. Calling this function for other days of the week is an error condition.</p><p>This function requires ICU 4.4 or later.</p>
		 * @param int $dayOfWeek <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, &#x2026;, <b><code>IntlCalendar::DOW_SATURDAY</code></b>.</p>
		 * @return int|false <p>The number of milliseconds into the day at which the weekend begins or ends or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getweekendtransition.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getWeekendTransition(int $dayOfWeek): int|false {}

		/**
		 * Whether the objectʼs time is in Daylight Savings Time
		 * <p>Object-oriented style</p><p>Whether, for the instant represented by this object and for this object&#x2BC;s timezone, daylight saving time is in place.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the date is in Daylight Savings Time, <b><code>false</code></b> otherwise.</p><p>On failure <b><code>false</code></b> is also returned. To detect error conditions use <code>intl_get_error_code()</code>, or set up Intl to throw exceptions.</p>
		 * @link https://php.net/manual/en/intlcalendar.indaylighttime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function inDaylightTime(): bool {}

		/**
		 * Whether another calendar is equal but for a different time
		 * <p>Object-oriented style</p><p>Returns whether this and the given object are equivalent for all purposes except as to the time they have set. The locales do not have to match, as long as no change in behavior results from such mismatch. This includes the timezone, whether the lenient mode is set, the repeated and skipped wall time settings, the days of the week when the weekend starts and ceases and the times where such transitions occur. It may also include other calendar specific settings, such as the Gregorian/Julian transition instant.</p>
		 * @param \IntlCalendar $other <p>The other calendar against which the comparison is to be made.</p>
		 * @return bool <p>Assuming there are no argument errors, returns <b><code>true</code></b> if the calendars are equivalent except possibly for their set time.</p>
		 * @link https://php.net/manual/en/intlcalendar.isequivalentto.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function isEquivalentTo(\IntlCalendar $other): bool {}

		/**
		 * Whether date/time interpretation is in lenient mode
		 * <p>Object-oriented style</p><p>Returns whether the current date/time interpretations is lenient (the default). If that is case, some out of range values for fields will be accepted instead of raising an error.</p>
		 * @return bool <p>A <code>bool</code> representing whether the calendar is set to lenient mode.</p>
		 * @link https://php.net/manual/en/intlcalendar.islenient.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function isLenient(): bool {}

		/**
		 * Whether a field is set
		 * <p>Object-oriented style</p><p>Returns whether a field is set (as opposed to clear). Set fields take priority over unset fields and their default values when the date/time is being calculated. Fields set later take priority over fields set earlier.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return bool <p>Assuming there are no argument errors, returns <b><code>true</code></b> if the field is set.</p>
		 * @link https://php.net/manual/en/intlcalendar.isset.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function isSet(int $field): bool {}

		/**
		 * Whether a certain date/time is in the weekend
		 * <p>Object-oriented style</p><p>Returns whether either the obejct&#x2BC;s current time or the provided timestamp occur during a weekend in this object&#x2BC;s calendar system.</p><p>This function requires ICU 4.4 or later.</p>
		 * @param ?float $timestamp <p>An optional timestamp representing the number of milliseconds since the epoch, excluding leap seconds. If <b><code>null</code></b>, this object&#x2BC;s current time is used instead.</p>
		 * @return bool <p>A <code>bool</code> indicating whether the given or this object&#x2BC;s time occurs in a weekend.</p><p>On failure <b><code>false</code></b> is also returned. To detect error conditions use <code>intl_get_error_code()</code>, or set up Intl to throw exceptions.</p>
		 * @link https://php.net/manual/en/intlcalendar.isweekend.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function isWeekend(?float $timestamp = null): bool {}

		/**
		 * Add value to field without carrying into more significant fields
		 * <p>Object-oriented style</p><p>Adds a (signed) amount to a field. The difference with respect to <code>IntlCalendar::add()</code> is that when the field value overflows, it does not carry into more significant fields.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @param int|bool $value <p>The (signed) amount to add to the field, <b><code>true</code></b> for rolling up (adding <code>1</code>), or <b><code>false</code></b> for rolling down (subtracting <code>1</code>).</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.roll.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function roll(int $field, int|bool $value): bool {}

		/**
		 * Set a time field or several common fields at once
		 * <p>Object-oriented style</p><p>Sets either a specific field to the given value, or sets at once several common fields. The range of values that are accepted depend on whether the calendar is using the lenient mode.</p><p>For fields that conflict, the fields that are set later have priority.</p><p>This method cannot be called with exactly four arguments.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @param int $value <p>The new value of the given field.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.set.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function set(int $field, int $value): true {}

		/**
		 * Set the day on which the week is deemed to start
		 * <p>Object-oriented style</p><p>Defines the day of week deemed to start the week. This affects the behavior of fields that depend on the concept of week start and end such as <b><code>IntlCalendar::FIELD_WEEK_OF_YEAR</code></b> and <b><code>IntlCalendar::FIELD_YEAR_WOY</code></b>.</p>
		 * @param int $dayOfWeek <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, &#x2026;, <b><code>IntlCalendar::DOW_SATURDAY</code></b>.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.setfirstdayofweek.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setFirstDayOfWeek(int $dayOfWeek): true {}

		/**
		 * Set whether date/time interpretation is to be lenient
		 * <p>Object-oriented style</p><p>Defines whether the calendar is &#x2018;lenient mode&#x2019;. In such a mode, some of out-of-bounds values for some fields are accepted, the behavior being similar to that of <code>IntlCalendar::add()</code> (i.e., the value wraps around, carrying into more significant fields each time). If the lenient mode is off, then such values will generate an error.</p>
		 * @param bool $lenient <p>Use <b><code>true</code></b> to activate the lenient mode; <b><code>false</code></b> otherwise.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.setlenient.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setLenient(bool $lenient): true {}

		/**
		 * Set minimal number of days the first week in a year or month can have
		 * <p>Object-oriented style</p><p>Sets the smallest number of days the first week of a year or month must have in the new year or month. For instance, in the Gregorian calendar, if this value is 1, then the first week of the year will necessarily include January 1st, while if this value is 7, then the week with January 1st will be the first week of the year only if the day of the week for January 1st matches the day of the week returned by <code>IntlCalendar::getFirstDayOfWeek()</code>; otherwise it will be the previous year&#x2BC;s last week.</p>
		 * @param int $days <p>The number of minimal days to set.</p>
		 * @return bool <p><b><code>true</code></b> on success, <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.setminimaldaysinfirstweek.php
		 * @since PHP 5 >= 5.5.1, PHP 7, PHP 8
		 */
		public function setMinimalDaysInFirstWeek(int $days): bool {}

		/**
		 * Set behavior for handling repeating wall times at negative timezone offset transitions
		 * <p>Object-oriented style</p><p>Sets the current strategy for dealing with wall times that are repeated whenever the clock is set back during dailight saving time end transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b> (take the post-DST instant). The other possible value is <b><code>IntlCalendar::WALLTIME_FIRST</code></b> (take the instant that occurs during DST).</p><p>This function requires ICU 4.9 or later.</p>
		 * @param int $option <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b> or <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.setrepeatedwalltimeoption.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setRepeatedWallTimeOption(int $option): true {}

		/**
		 * Set behavior for handling skipped wall times at positive timezone offset transitions
		 * <p>Object-oriented style</p><p>Sets the current strategy for dealing with wall times that are skipped whenever the clock is forwarded during dailight saving time start transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b> (take it as being the same instant as the one when the wall time is one hour more). Alternative values are <b><code>IntlCalendar::WALLTIME_FIRST</code></b> (same instant as the one with a wall time of one hour less) and <b><code>IntlCalendar::WALLTIME_NEXT_VALID</code></b> (same instant as when DST begins).</p><p>This affects only the instant represented by the calendar (as reported by <code>IntlCalendar::getTime()</code>), the field values will not be rewritten accordingly.</p><p>The calendar must be lenient for this option to have any effect, otherwise attempting to set a non-existing time will cause an error.</p><p>This function requires ICU 4.9 or later.</p>
		 * @param int $option <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b>, <b><code>IntlCalendar::WALLTIME_LAST</code></b> or <b><code>IntlCalendar::WALLTIME_NEXT_VALID</code></b>.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.setskippedwalltimeoption.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setSkippedWallTimeOption(int $option): true {}

		/**
		 * Set the calendar time in milliseconds since the epoch
		 * <p>Object-oriented style</p><p>Sets the instant represented by this object. The instant is represented by a <code>float</code> whose value should be an integer number of milliseconds since the epoch (1 Jan 1970 00:00:00.000 UTC), ignoring leap seconds. All the field values will be recalculated accordingly.</p>
		 * @param float $timestamp <p>An instant represented by the number of number of milliseconds between such instant and the epoch, ignoring leap seconds.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success and <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.settime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setTime(float $timestamp): bool {}

		/**
		 * Set the timezone used by this calendar
		 * <p>Object-oriented style</p><p>Defines a new timezone for this calendar. The time represented by the object is preserved to the detriment of the field values.</p>
		 * @param \IntlTimeZone|\DateTimeZone|string|null $timezone <p>The new timezone to be used by this calendar. It can be specified in the following ways:</p><ul> <li> <p><b><code>null</code></b>, in which case the default timezone will be used, as specified in the ini setting date.timezone or through the function <code>date_default_timezone_set()</code> and as returned by <code>date_default_timezone_get()</code>.</p> </li> <li> <p>An <code>IntlTimeZone</code>, which will be used directly.</p> </li> <li> <p>A <code>DateTimeZone</code>. Its identifier will be extracted and an ICU timezone object will be created; the timezone will be backed by ICU&#x2BC;s database, not PHP&#x2BC;s.</p> </li> <li> <p>A <code>string</code>, which should be a valid ICU timezone identifier. See <code>IntlTimeZone::createTimeZoneIDEnumeration()</code>. Raw offsets such as <code>"GMT+08:30"</code> are also accepted.</p> </li> </ul>
		 * @return bool <p>Returns <b><code>true</code></b> on success and <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.settimezone.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setTimeZone(\IntlTimeZone|\DateTimeZone|string|null $timezone): bool {}

		/**
		 * Convert an IntlCalendar into a DateTime object
		 * <p>Object-oriented style</p><p>Create a <code>DateTime</code> object that represents the same instant (up to second precision, with a rounding error of less than 1 second) and has an analog timezone to this object (the difference being <code>DateTime</code>&#x2BC;s timezone will be backed by PHP&#x2BC;s timezone while <code>IntlCalendar</code>&#x2BC;s timezone is backed by ICU&#x2BC;s).</p>
		 * @return DateTime|false <p>A <code>DateTime</code> object with the same timezone as this object (though using PHP&#x2BC;s database instead of ICU&#x2BC;s) and the same time, except for the smaller precision (second precision instead of millisecond). Returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.todatetime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a2
		 */
		public function toDateTime(): \DateTime|false {}
	}

	/**
	 * <p><b>IntlChar</b> provides access to a number of utility methods that can be used to access information about Unicode characters.</p>
	 * <p>The methods and constants adhere closely to the names and behavior used by the underlying ICU library.</p>
	 * @link https://php.net/manual/en/class.intlchar.php
	 * @since PHP 7, PHP 8
	 */
	class IntlChar {

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const UNICODE_VERSION = '14.0';

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CODEPOINT_MIN = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CODEPOINT_MAX = 1114111;

		/**
		 * @var float <p>Special value that is returned by <code>IntlChar::getNumericValue()</code> when no numeric value is defined for a code point.</p>
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const NO_NUMERIC_VALUE = -123456789;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_ALPHABETIC = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_BINARY_START = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_ASCII_HEX_DIGIT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_BIDI_CONTROL = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_BIDI_MIRRORED = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_DASH = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_DEFAULT_IGNORABLE_CODE_POINT = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_DEPRECATED = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_DIACRITIC = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_EXTENDER = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_FULL_COMPOSITION_EXCLUSION = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_GRAPHEME_BASE = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_GRAPHEME_EXTEND = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_GRAPHEME_LINK = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_HEX_DIGIT = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_HYPHEN = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_ID_CONTINUE = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_ID_START = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_IDEOGRAPHIC = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_IDS_BINARY_OPERATOR = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_IDS_TRINARY_OPERATOR = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_JOIN_CONTROL = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_LOGICAL_ORDER_EXCEPTION = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_LOWERCASE = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_MATH = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NONCHARACTER_CODE_POINT = 24;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_QUOTATION_MARK = 25;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_RADICAL = 26;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_SOFT_DOTTED = 27;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_TERMINAL_PUNCTUATION = 28;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_UNIFIED_IDEOGRAPH = 29;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_UPPERCASE = 30;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_WHITE_SPACE = 31;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_XID_CONTINUE = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_XID_START = 33;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CASE_SENSITIVE = 34;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_S_TERM = 35;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_VARIATION_SELECTOR = 36;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NFD_INERT = 37;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NFKD_INERT = 38;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NFC_INERT = 39;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NFKC_INERT = 40;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_SEGMENT_STARTER = 41;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_PATTERN_SYNTAX = 42;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_PATTERN_WHITE_SPACE = 43;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_POSIX_ALNUM = 44;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_POSIX_BLANK = 45;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_POSIX_GRAPH = 46;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_POSIX_PRINT = 47;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_POSIX_XDIGIT = 48;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CASED = 49;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CASE_IGNORABLE = 50;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CHANGES_WHEN_LOWERCASED = 51;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CHANGES_WHEN_UPPERCASED = 52;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CHANGES_WHEN_TITLECASED = 53;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CHANGES_WHEN_CASEFOLDED = 54;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CHANGES_WHEN_CASEMAPPED = 55;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CHANGES_WHEN_NFKC_CASEFOLDED = 56;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_BINARY_LIMIT = 72;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_BIDI_CLASS = 4096;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_INT_START = 4096;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_BLOCK = 4097;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CANONICAL_COMBINING_CLASS = 4098;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_DECOMPOSITION_TYPE = 4099;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_EAST_ASIAN_WIDTH = 4100;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_GENERAL_CATEGORY = 4101;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_JOINING_GROUP = 4102;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_JOINING_TYPE = 4103;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_LINE_BREAK = 4104;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NUMERIC_TYPE = 4105;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_SCRIPT = 4106;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_HANGUL_SYLLABLE_TYPE = 4107;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NFD_QUICK_CHECK = 4108;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NFKD_QUICK_CHECK = 4109;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NFC_QUICK_CHECK = 4110;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NFKC_QUICK_CHECK = 4111;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_LEAD_CANONICAL_COMBINING_CLASS = 4112;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_TRAIL_CANONICAL_COMBINING_CLASS = 4113;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_GRAPHEME_CLUSTER_BREAK = 4114;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_SENTENCE_BREAK = 4115;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_WORD_BREAK = 4116;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_BIDI_PAIRED_BRACKET_TYPE = 4117;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_INT_LIMIT = 4121;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_GENERAL_CATEGORY_MASK = 8192;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_MASK_START = 8192;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_MASK_LIMIT = 8193;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NUMERIC_VALUE = 12288;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_DOUBLE_START = 12288;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_DOUBLE_LIMIT = 12289;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_AGE = 16384;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_STRING_START = 16384;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_BIDI_MIRRORING_GLYPH = 16385;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_CASE_FOLDING = 16386;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_ISO_COMMENT = 16387;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_LOWERCASE_MAPPING = 16388;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NAME = 16389;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_SIMPLE_CASE_FOLDING = 16390;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_SIMPLE_LOWERCASE_MAPPING = 16391;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_SIMPLE_TITLECASE_MAPPING = 16392;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_SIMPLE_UPPERCASE_MAPPING = 16393;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_TITLECASE_MAPPING = 16394;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_UNICODE_1_NAME = 16395;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_UPPERCASE_MAPPING = 16396;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_BIDI_PAIRED_BRACKET = 16397;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_STRING_LIMIT = 16398;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_SCRIPT_EXTENSIONS = 28672;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_OTHER_PROPERTY_START = 28672;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_OTHER_PROPERTY_LIMIT = 28673;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_INVALID_CODE = -1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_UNASSIGNED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_GENERAL_OTHER_TYPES = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_UPPERCASE_LETTER = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_LOWERCASE_LETTER = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_TITLECASE_LETTER = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_MODIFIER_LETTER = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_OTHER_LETTER = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_NON_SPACING_MARK = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_ENCLOSING_MARK = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_COMBINING_SPACING_MARK = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_LETTER_NUMBER = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_OTHER_NUMBER = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_SPACE_SEPARATOR = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_LINE_SEPARATOR = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_PARAGRAPH_SEPARATOR = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_CONTROL_CHAR = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_FORMAT_CHAR = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_PRIVATE_USE_CHAR = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_SURROGATE = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_DASH_PUNCTUATION = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_START_PUNCTUATION = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_END_PUNCTUATION = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_CONNECTOR_PUNCTUATION = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_OTHER_PUNCTUATION = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_MATH_SYMBOL = 24;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_CURRENCY_SYMBOL = 25;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_MODIFIER_SYMBOL = 26;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_OTHER_SYMBOL = 27;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_INITIAL_PUNCTUATION = 28;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_FINAL_PUNCTUATION = 29;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_CATEGORY_CHAR_CATEGORY_COUNT = 30;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_LEFT_TO_RIGHT = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_RIGHT_TO_LEFT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_EUROPEAN_NUMBER = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_ARABIC_NUMBER = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_BLOCK_SEPARATOR = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_SEGMENT_SEPARATOR = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_WHITE_SPACE_NEUTRAL = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_OTHER_NEUTRAL = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_DIR_NON_SPACING_MARK = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_BOUNDARY_NEUTRAL = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_FIRST_STRONG_ISOLATE = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_DIRECTION_CHAR_DIRECTION_COUNT = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_NO_BLOCK = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BASIC_LATIN = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LATIN_1_SUPPLEMENT = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LATIN_EXTENDED_A = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LATIN_EXTENDED_B = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_IPA_EXTENSIONS = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SPACING_MODIFIER_LETTERS = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GREEK = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CYRILLIC = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ARMENIAN = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HEBREW = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ARABIC = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SYRIAC = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_THAANA = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_DEVANAGARI = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BENGALI = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GURMUKHI = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GUJARATI = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ORIYA = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TAMIL = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TELUGU = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KANNADA = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MALAYALAM = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SINHALA = 24;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_THAI = 25;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LAO = 26;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TIBETAN = 27;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MYANMAR = 28;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GEORGIAN = 29;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HANGUL_JAMO = 30;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ETHIOPIC = 31;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CHEROKEE = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS = 33;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_OGHAM = 34;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_RUNIC = 35;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KHMER = 36;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MONGOLIAN = 37;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LATIN_EXTENDED_ADDITIONAL = 38;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GREEK_EXTENDED = 39;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GENERAL_PUNCTUATION = 40;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SUPERSCRIPTS_AND_SUBSCRIPTS = 41;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CURRENCY_SYMBOLS = 42;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_COMBINING_MARKS_FOR_SYMBOLS = 43;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LETTERLIKE_SYMBOLS = 44;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_NUMBER_FORMS = 45;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ARROWS = 46;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MATHEMATICAL_OPERATORS = 47;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MISCELLANEOUS_TECHNICAL = 48;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CONTROL_PICTURES = 49;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_OPTICAL_CHARACTER_RECOGNITION = 50;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ENCLOSED_ALPHANUMERICS = 51;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BOX_DRAWING = 52;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BLOCK_ELEMENTS = 53;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GEOMETRIC_SHAPES = 54;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MISCELLANEOUS_SYMBOLS = 55;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_DINGBATS = 56;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BRAILLE_PATTERNS = 57;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_RADICALS_SUPPLEMENT = 58;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KANGXI_RADICALS = 59;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_IDEOGRAPHIC_DESCRIPTION_CHARACTERS = 60;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_SYMBOLS_AND_PUNCTUATION = 61;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HIRAGANA = 62;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KATAKANA = 63;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BOPOMOFO = 64;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HANGUL_COMPATIBILITY_JAMO = 65;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KANBUN = 66;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BOPOMOFO_EXTENDED = 67;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ENCLOSED_CJK_LETTERS_AND_MONTHS = 68;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_COMPATIBILITY = 69;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A = 70;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS = 71;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_YI_SYLLABLES = 72;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_YI_RADICALS = 73;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HANGUL_SYLLABLES = 74;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HIGH_SURROGATES = 75;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HIGH_PRIVATE_USE_SURROGATES = 76;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LOW_SURROGATES = 77;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PRIVATE_USE_AREA = 78;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PRIVATE_USE = 78;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS = 79;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ALPHABETIC_PRESENTATION_FORMS = 80;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_A = 81;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_COMBINING_HALF_MARKS = 82;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_COMPATIBILITY_FORMS = 83;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SMALL_FORM_VARIANTS = 84;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_B = 85;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SPECIALS = 86;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HALFWIDTH_AND_FULLWIDTH_FORMS = 87;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_OLD_ITALIC = 88;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GOTHIC = 89;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_DESERET = 90;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BYZANTINE_MUSICAL_SYMBOLS = 91;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MUSICAL_SYMBOLS = 92;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MATHEMATICAL_ALPHANUMERIC_SYMBOLS = 93;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B = 94;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT = 95;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TAGS = 96;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CYRILLIC_SUPPLEMENT = 97;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CYRILLIC_SUPPLEMENTARY = 97;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TAGALOG = 98;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HANUNOO = 99;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BUHID = 100;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TAGBANWA = 101;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A = 102;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SUPPLEMENTAL_ARROWS_A = 103;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SUPPLEMENTAL_ARROWS_B = 104;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B = 105;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SUPPLEMENTAL_MATHEMATICAL_OPERATORS = 106;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KATAKANA_PHONETIC_EXTENSIONS = 107;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_VARIATION_SELECTORS = 108;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_A = 109;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_B = 110;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LIMBU = 111;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TAI_LE = 112;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KHMER_SYMBOLS = 113;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PHONETIC_EXTENSIONS = 114;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_ARROWS = 115;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_YIJING_HEXAGRAM_SYMBOLS = 116;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LINEAR_B_SYLLABARY = 117;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LINEAR_B_IDEOGRAMS = 118;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_AEGEAN_NUMBERS = 119;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_UGARITIC = 120;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SHAVIAN = 121;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_OSMANYA = 122;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CYPRIOT_SYLLABARY = 123;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TAI_XUAN_JING_SYMBOLS = 124;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_VARIATION_SELECTORS_SUPPLEMENT = 125;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ANCIENT_GREEK_MUSICAL_NOTATION = 126;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ANCIENT_GREEK_NUMBERS = 127;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ARABIC_SUPPLEMENT = 128;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BUGINESE = 129;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_STROKES = 130;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_SUPPLEMENT = 131;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_COPTIC = 132;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ETHIOPIC_EXTENDED = 133;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ETHIOPIC_SUPPLEMENT = 134;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GEORGIAN_SUPPLEMENT = 135;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GLAGOLITIC = 136;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KHAROSHTHI = 137;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MODIFIER_TONE_LETTERS = 138;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_NEW_TAI_LUE = 139;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_OLD_PERSIAN = 140;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PHONETIC_EXTENSIONS_SUPPLEMENT = 141;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SUPPLEMENTAL_PUNCTUATION = 142;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SYLOTI_NAGRI = 143;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TIFINAGH = 144;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_VERTICAL_FORMS = 145;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_NKO = 146;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BALINESE = 147;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LATIN_EXTENDED_C = 148;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LATIN_EXTENDED_D = 149;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PHAGS_PA = 150;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PHOENICIAN = 151;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CUNEIFORM = 152;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CUNEIFORM_NUMBERS_AND_PUNCTUATION = 153;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_COUNTING_ROD_NUMERALS = 154;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SUNDANESE = 155;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LEPCHA = 156;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_OL_CHIKI = 157;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CYRILLIC_EXTENDED_A = 158;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_VAI = 159;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CYRILLIC_EXTENDED_B = 160;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SAURASHTRA = 161;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KAYAH_LI = 162;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_REJANG = 163;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CHAM = 164;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ANCIENT_SYMBOLS = 165;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PHAISTOS_DISC = 166;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LYCIAN = 167;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CARIAN = 168;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LYDIAN = 169;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MAHJONG_TILES = 170;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_DOMINO_TILES = 171;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SAMARITAN = 172;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED = 173;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TAI_THAM = 174;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_VEDIC_EXTENSIONS = 175;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LISU = 176;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BAMUM = 177;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_COMMON_INDIC_NUMBER_FORMS = 178;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_DEVANAGARI_EXTENDED = 179;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HANGUL_JAMO_EXTENDED_A = 180;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_JAVANESE = 181;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MYANMAR_EXTENDED_A = 182;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TAI_VIET = 183;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MEETEI_MAYEK = 184;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_HANGUL_JAMO_EXTENDED_B = 185;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_IMPERIAL_ARAMAIC = 186;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_OLD_SOUTH_ARABIAN = 187;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_AVESTAN = 188;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_INSCRIPTIONAL_PARTHIAN = 189;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_INSCRIPTIONAL_PAHLAVI = 190;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_OLD_TURKIC = 191;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_RUMI_NUMERAL_SYMBOLS = 192;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KAITHI = 193;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_EGYPTIAN_HIEROGLYPHS = 194;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ENCLOSED_ALPHANUMERIC_SUPPLEMENT = 195;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ENCLOSED_IDEOGRAPHIC_SUPPLEMENT = 196;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C = 197;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MANDAIC = 198;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BATAK = 199;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ETHIOPIC_EXTENDED_A = 200;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BRAHMI = 201;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BAMUM_SUPPLEMENT = 202;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KANA_SUPPLEMENT = 203;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PLAYING_CARDS = 204;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS = 205;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_EMOTICONS = 206;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TRANSPORT_AND_MAP_SYMBOLS = 207;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ALCHEMICAL_SYMBOLS = 208;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D = 209;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ARABIC_EXTENDED_A = 210;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS = 211;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CHAKMA = 212;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MEETEI_MAYEK_EXTENSIONS = 213;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MEROITIC_CURSIVE = 214;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MEROITIC_HIEROGLYPHS = 215;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MIAO = 216;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SHARADA = 217;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SORA_SOMPENG = 218;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SUNDANESE_SUPPLEMENT = 219;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TAKRI = 220;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_BASSA_VAH = 221;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_CAUCASIAN_ALBANIAN = 222;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_COPTIC_EPACT_NUMBERS = 223;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_EXTENDED = 224;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_DUPLOYAN = 225;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ELBASAN = 226;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GEOMETRIC_SHAPES_EXTENDED = 227;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_GRANTHA = 228;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KHOJKI = 229;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_KHUDAWADI = 230;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LATIN_EXTENDED_E = 231;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_LINEAR_A = 232;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MAHAJANI = 233;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MANICHAEAN = 234;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MENDE_KIKAKUI = 235;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MODI = 236;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MRO = 237;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_MYANMAR_EXTENDED_B = 238;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_NABATAEAN = 239;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_OLD_NORTH_ARABIAN = 240;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_OLD_PERMIC = 241;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_ORNAMENTAL_DINGBATS = 242;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PAHAWH_HMONG = 243;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PALMYRENE = 244;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PAU_CIN_HAU = 245;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_PSALTER_PAHLAVI = 246;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SHORTHAND_FORMAT_CONTROLS = 247;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SIDDHAM = 248;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SINHALA_ARCHAIC_NUMBERS = 249;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_SUPPLEMENTAL_ARROWS_C = 250;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_TIRHUTA = 251;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_WARANG_CITI = 252;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_COUNT = 321;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BLOCK_CODE_INVALID_CODE = -1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BPT_NONE = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BPT_OPEN = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BPT_CLOSE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const BPT_COUNT = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const EA_NEUTRAL = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const EA_AMBIGUOUS = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const EA_HALFWIDTH = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const EA_FULLWIDTH = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const EA_NARROW = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const EA_WIDE = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const EA_COUNT = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const UNICODE_CHAR_NAME = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const UNICODE_10_CHAR_NAME = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const EXTENDED_CHAR_NAME = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_NAME_ALIAS = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const CHAR_NAME_CHOICE_COUNT = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SHORT_PROPERTY_NAME = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LONG_PROPERTY_NAME = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const PROPERTY_NAME_CHOICE_COUNT = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_NONE = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_CANONICAL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_COMPAT = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_CIRCLE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_FINAL = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_FONT = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_FRACTION = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_INITIAL = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_ISOLATED = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_MEDIAL = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_NARROW = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_NOBREAK = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_SMALL = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_SQUARE = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_SUB = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_SUPER = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_VERTICAL = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_WIDE = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const DT_COUNT = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JT_NON_JOINING = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JT_JOIN_CAUSING = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JT_DUAL_JOINING = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JT_LEFT_JOINING = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JT_RIGHT_JOINING = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JT_TRANSPARENT = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JT_COUNT = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_NO_JOINING_GROUP = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_AIN = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_ALAPH = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_ALEF = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_BEH = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_BETH = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_DAL = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_DALATH_RISH = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_E = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_FEH = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_FINAL_SEMKATH = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_GAF = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_GAMAL = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_HAH = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_TEH_MARBUTA_GOAL = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_HAMZA_ON_HEH_GOAL = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_HE = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_HEH = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_HEH_GOAL = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_HETH = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_KAF = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_KAPH = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_KNOTTED_HEH = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_LAM = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_LAMADH = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MEEM = 24;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MIM = 25;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_NOON = 26;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_NUN = 27;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_PE = 28;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_QAF = 29;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_QAPH = 30;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_REH = 31;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_REVERSED_PE = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_SAD = 33;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_SADHE = 34;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_SEEN = 35;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_SEMKATH = 36;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_SHIN = 37;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_SWASH_KAF = 38;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_SYRIAC_WAW = 39;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_TAH = 40;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_TAW = 41;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_TEH_MARBUTA = 42;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_TETH = 43;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_WAW = 44;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_YEH = 45;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_YEH_BARREE = 46;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_YEH_WITH_TAIL = 47;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_YUDH = 48;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_YUDH_HE = 49;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_ZAIN = 50;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_FE = 51;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_KHAPH = 52;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_ZHAIN = 53;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_BURUSHASKI_YEH_BARREE = 54;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_FARSI_YEH = 55;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_NYA = 56;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_ROHINGYA_YEH = 57;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_ALEPH = 58;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_AYIN = 59;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_BETH = 60;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_DALETH = 61;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_DHAMEDH = 62;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_FIVE = 63;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_GIMEL = 64;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_HETH = 65;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_HUNDRED = 66;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_KAPH = 67;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_LAMEDH = 68;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_MEM = 69;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_NUN = 70;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_ONE = 71;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_PE = 72;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_QOPH = 73;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_RESH = 74;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_SADHE = 75;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_SAMEKH = 76;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_TAW = 77;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_TEN = 78;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_TETH = 79;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_THAMEDH = 80;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_TWENTY = 81;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_WAW = 82;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_YODH = 83;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_MANICHAEAN_ZAYIN = 84;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_STRAIGHT_WAW = 85;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const JG_COUNT = 104;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_OTHER = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_CONTROL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_CR = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_EXTEND = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_L = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_LF = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_LV = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_LVT = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_T = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_V = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_SPACING_MARK = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_PREPEND = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_REGIONAL_INDICATOR = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const GCB_COUNT = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_OTHER = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_ALETTER = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_FORMAT = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_KATAKANA = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_MIDLETTER = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_MIDNUM = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_NUMERIC = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_EXTENDNUMLET = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_CR = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_EXTEND = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_LF = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_MIDNUMLET = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_NEWLINE = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_REGIONAL_INDICATOR = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_HEBREW_LETTER = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_SINGLE_QUOTE = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_DOUBLE_QUOTE = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const WB_COUNT = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_OTHER = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_ATERM = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_CLOSE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_FORMAT = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_LOWER = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_NUMERIC = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_OLETTER = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_SEP = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_SP = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_STERM = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_UPPER = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_CR = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_EXTEND = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_LF = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_SCONTINUE = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const SB_COUNT = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_UNKNOWN = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_AMBIGUOUS = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_ALPHABETIC = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_BREAK_BOTH = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_BREAK_AFTER = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_BREAK_BEFORE = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_MANDATORY_BREAK = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_CONTINGENT_BREAK = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_CLOSE_PUNCTUATION = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_COMBINING_MARK = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_CARRIAGE_RETURN = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_EXCLAMATION = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_GLUE = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_HYPHEN = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_IDEOGRAPHIC = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_INSEPARABLE = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_INSEPERABLE = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_INFIX_NUMERIC = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_LINE_FEED = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_NONSTARTER = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_NUMERIC = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_OPEN_PUNCTUATION = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_POSTFIX_NUMERIC = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_PREFIX_NUMERIC = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_QUOTATION = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_COMPLEX_CONTEXT = 24;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_SURROGATE = 25;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_SPACE = 26;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_BREAK_SYMBOLS = 27;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_ZWSPACE = 28;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_NEXT_LINE = 29;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_WORD_JOINER = 30;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_H2 = 31;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_H3 = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_JL = 33;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_JT = 34;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_JV = 35;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_CLOSE_PARENTHESIS = 36;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_CONDITIONAL_JAPANESE_STARTER = 37;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_HEBREW_LETTER = 38;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_REGIONAL_INDICATOR = 39;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const LB_COUNT = 43;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const NT_NONE = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const NT_DECIMAL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const NT_DIGIT = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const NT_NUMERIC = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const NT_COUNT = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const HST_NOT_APPLICABLE = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const HST_LEADING_JAMO = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const HST_VOWEL_JAMO = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const HST_TRAILING_JAMO = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const HST_LV_SYLLABLE = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const HST_LVT_SYLLABLE = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const HST_COUNT = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const FOLD_CASE_DEFAULT = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlchar.php
		 */
		public const FOLD_CASE_EXCLUDE_SPECIAL_I = 1;

		/**
		 * Get the "age" of the code point
		 * <p>Gets the "age" of the code point.</p><p>The "age" is the Unicode version when the code point was first designated (as a non-character or for Private Use) or assigned a character. This can be useful to avoid emitting code points to receiving processes that do not accept newer characters.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?array <p>The Unicode version number, as an <code>array</code>. For example, version <i>1.3.31.2</i> would be represented as <code>[1, 3, 31, 2]</code>. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.charage.php
		 * @see IntlChar::getUnicodeVersion(), IntlChar::getIntPropertyMinValue(), IntlChar::getIntPropertyValue()
		 * @since PHP 7, PHP 8
		 */
		public static function charAge(int|string $codepoint): ?array {}

		/**
		 * Get the decimal digit value of a decimal digit character
		 * <p>Returns the decimal digit value of a decimal digit character.</p><p>Such characters have the general category "Nd" (decimal digit numbers) and a Numeric_Type of Decimal.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?int <p>The decimal digit value of <code>codepoint</code>, or <code>-1</code> if it is not a decimal digit character. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.chardigitvalue.php
		 * @see IntlChar::getNumericValue()
		 * @since PHP 7, PHP 8
		 */
		public static function charDigitValue(int|string $codepoint): ?int {}

		/**
		 * Get bidirectional category value for a code point
		 * <p>Returns the bidirectional category value for the code point, which is used in the &#xBB;&#xA0;Unicode bidirectional algorithm (UAX #9).</p><p><b>Note</b>:</p><p>Some unassigned code points have bidi values of R or AL because they are in blocks that are reserved for Right-To-Left scripts.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?int <p>The bidirectional category value; one of the following constants:</p><ul> <li><b><code>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_ARABIC_NUMBER</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_BLOCK_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_SEGMENT_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_WHITE_SPACE_NEUTRAL</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_OTHER_NEUTRAL</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_DIR_NON_SPACING_MARK</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_BOUNDARY_NEUTRAL</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_FIRST_STRONG_ISOLATE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_CHAR_DIRECTION_COUNT</code></b></li> </ul> Returns <b><code>null</code></b> on failure.
		 * @link https://php.net/manual/en/intlchar.chardirection.php
		 * @since PHP 7, PHP 8
		 */
		public static function charDirection(int|string $codepoint): ?int {}

		/**
		 * Find Unicode character by name and return its code point value
		 * <p>Finds a Unicode character by its name and returns its code point value.</p><p>The name is matched exactly and completely. If the name does not correspond to a code point, <b><code>null</code></b> is returned.</p><p>A Unicode 1.0 name is matched only if it differs from the modern name. Unicode names are all uppercase. Extended names are lowercase followed by an uppercase hexadecimal number, and within angle brackets.</p>
		 * @param string $name <p>Full name of the Unicode character.</p>
		 * @param int $type <p>Which set of names to use for the lookup. Can be any of these constants:</p><ul> <li><b><code>IntlChar::UNICODE_CHAR_NAME</code></b> (default)</li> <li><b><code>IntlChar::UNICODE_10_CHAR_NAME</code></b></li> <li><b><code>IntlChar::EXTENDED_CHAR_NAME</code></b></li> <li><b><code>IntlChar::CHAR_NAME_ALIAS</code></b></li> <li><b><code>IntlChar::CHAR_NAME_CHOICE_COUNT</code></b></li> </ul>
		 * @return ?int <p>The Unicode value of the code point with the given name (as an <code>int</code>), or <b><code>null</code></b> if there is no such code point.</p>
		 * @link https://php.net/manual/en/intlchar.charfromname.php
		 * @see IntlChar::charName(), IntlChar::enumCharNames()
		 * @since PHP 7, PHP 8
		 */
		public static function charFromName(string $name, int $type = IntlChar::UNICODE_CHAR_NAME): ?int {}

		/**
		 * Get the "mirror-image" character for a code point
		 * <p>Maps the specified character to a "mirror-image" character.</p><p>For characters with the <i>Bidi_Mirrored</i> property, implementations sometimes need a "poor man's" mapping to another Unicode character (code point) such that the default glyph may serve as the mirror-image of the default glyph of the specified character. This is useful for text conversion to and from codepages with visual order, and for displays without glyph selection capabilities.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return int|string|null <p>Returns another Unicode code point that may serve as a mirror-image substitute, or <code>codepoint</code> itself if there is no such mapping or <code>codepoint</code> does not have the <i>Bidi_Mirrored</i> property.</p><p>The return type is <code>int</code> unless the code point was passed as a UTF-8 <code>string</code>, in which case a <code>string</code> is returned. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.charmirror.php
		 * @see IntlChar::isMirrored()
		 * @since PHP 7, PHP 8
		 */
		public static function charMirror(int|string $codepoint): int|string|null {}

		/**
		 * Retrieve the name of a Unicode character
		 * <p>Retrieves the name of a Unicode character.</p><p>Depending on <code>type</code>, the resulting character name is the "modern" name or the name that was defined in Unicode version 1.0. The name contains only "invariant" characters like A-Z, 0-9, space, and '-'. Unicode 1.0 names are only retrieved if they are different from the modern names and if ICU contains the data for them.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @param int $type <p>Which set of names to use for the lookup. Can be any of these constants:</p><ul> <li><b><code>IntlChar::UNICODE_CHAR_NAME</code></b> (default)</li> <li><b><code>IntlChar::UNICODE_10_CHAR_NAME</code></b></li> <li><b><code>IntlChar::EXTENDED_CHAR_NAME</code></b></li> <li><b><code>IntlChar::CHAR_NAME_ALIAS</code></b></li> <li><b><code>IntlChar::CHAR_NAME_CHOICE_COUNT</code></b></li> </ul>
		 * @return ?string <p>The corresponding name, or an empty string if there is no name for this character, or <b><code>null</code></b> if there is no such code point.</p>
		 * @link https://php.net/manual/en/intlchar.charname.php
		 * @see IntlChar::charFromName(), IntlChar::enumCharNames()
		 * @since PHP 7, PHP 8
		 */
		public static function charName(int|string $codepoint, int $type = IntlChar::UNICODE_CHAR_NAME): ?string {}

		/**
		 * Get the general category value for a code point
		 * <p>Returns the general category value for the code point.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?int <p>Returns the general category type, which may be one of the following constants:</p><ul> <li><b><code>IntlChar::CHAR_CATEGORY_UNASSIGNED</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_GENERAL_OTHER_TYPES</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_UPPERCASE_LETTER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_LOWERCASE_LETTER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_TITLECASE_LETTER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_MODIFIER_LETTER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_OTHER_LETTER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_NON_SPACING_MARK</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_ENCLOSING_MARK</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_COMBINING_SPACING_MARK</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_LETTER_NUMBER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_OTHER_NUMBER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_SPACE_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_LINE_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_PARAGRAPH_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_CONTROL_CHAR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_FORMAT_CHAR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_PRIVATE_USE_CHAR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_SURROGATE</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_DASH_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_START_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_END_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_CONNECTOR_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_OTHER_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_MATH_SYMBOL</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_CURRENCY_SYMBOL</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_MODIFIER_SYMBOL</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_OTHER_SYMBOL</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_INITIAL_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_FINAL_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_CHAR_CATEGORY_COUNT</code></b></li> </ul>
		 * @link https://php.net/manual/en/intlchar.chartype.php
		 * @since PHP 7, PHP 8
		 */
		public static function charType(int|string $codepoint): ?int {}

		/**
		 * Return Unicode character by code point value
		 * <p>Returns a string containing the character specified by the Unicode code point value.</p><p>This function complements <code>IntlChar::ord()</code>.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?string <p>A string containing the single character specified by the Unicode code point value, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.chr.php
		 * @see IntlChar::ord(), mb_chr(), chr()
		 * @since PHP 7, PHP 8
		 */
		public static function chr(int|string $codepoint): ?string {}

		/**
		 * Get the decimal digit value of a code point for a given radix
		 * <p>Returns the decimal digit value of the code point in the specified radix.</p><p>If the radix is not in the range <code>2&lt;=radix&lt;=36</code> or if the value of <code>codepoint</code> is not a valid digit in the specified radix, <b><code>false</code></b> is returned. A character is a valid digit if at least one of the following is true:</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @param int $base <p>The radix (defaults to <code>10</code>).</p>
		 * @return int|false|null <p>Returns the numeric value represented by the character in the specified radix, or <b><code>false</code></b> if there is no value or if the value exceeds the radix. Returns <b><code>null</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
		 * @link https://php.net/manual/en/intlchar.digit.php
		 * @see IntlChar::forDigit(), IntlChar::charDigitValue(), IntlChar::isdigit()
		 * @since PHP 7, PHP 8
		 */
		public static function digit(int|string $codepoint, int $base = 10): int|false|null {}

		/**
		 * Enumerate all assigned Unicode characters within a range
		 * <p>Enumerate all assigned Unicode characters between the start and limit code points (start inclusive, limit exclusive) and call a function for each, passing the code point value and the character name.</p><p>For Unicode 1.0 names, only those are enumerated that differ from the modern names.</p>
		 * @param int|string $start <p>The first code point in the enumeration range.</p>
		 * @param int|string $end <p>One more than the last code point in the enumeration range (the first one after the range).</p>
		 * @param callable $callback <p>The function that is to be called for each character name. The following three arguments will be passed into it:</p><ul> <li><code>int</code> <code>$codepoint</code> - The numeric code point value</li> <li><code>int</code> <code>$nameChoice</code> - The same value as the <code>type</code> parameter below</li> <li><code>string</code> <code>$name</code> - The name of the character</li> </ul>
		 * @param int $type <p>Selector for which kind of names to enumerate. Can be any of these constants:</p><ul> <li><b><code>IntlChar::UNICODE_CHAR_NAME</code></b> (default)</li> <li><b><code>IntlChar::UNICODE_10_CHAR_NAME</code></b></li> <li><b><code>IntlChar::EXTENDED_CHAR_NAME</code></b></li> <li><b><code>IntlChar::CHAR_NAME_ALIAS</code></b></li> <li><b><code>IntlChar::CHAR_NAME_CHOICE_COUNT</code></b></li> </ul>
		 * @return ?bool <p>Returns <b><code>null</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.enumcharnames.php
		 * @see IntlChar::charName(), IntlChar::charFromName()
		 * @since PHP 7, PHP 8
		 */
		public static function enumCharNames(int|string $start, int|string $end, callable $callback, int $type = IntlChar::UNICODE_CHAR_NAME): ?bool {}

		/**
		 * Enumerate all code points with their Unicode general categories
		 * <p>Enumerates efficiently all code points with their Unicode general categories. This is useful for building data structures, for enumerating all assigned code points, etc.</p><p>For each contiguous range of code points with a given general category ("character type"), the <code>callback</code> function is called. Adjacent ranges have different types. The Unicode Standard guarantees that the numeric value of the type is 0..31.</p>
		 * @param callable $callback <p>The function that is to be called for each contiguous range of code points with the same general category. The following three arguments will be passed into it:</p><ul> <li><code>int</code> <code>$start</code> - The starting code point of the range</li> <li><code>int</code> <code>$end</code> - The ending code point of the range</li> <li><code>int</code> <code>$name</code> - The category type (one of the <code>IntlChar::CHAR_CATEGORY_&#42;</code> constants)</li> </ul>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/intlchar.enumchartypes.php
		 * @since PHP 7, PHP 8
		 */
		public static function enumCharTypes(callable $callback): void {}

		/**
		 * Perform case folding on a code point
		 * <p>The given character is mapped to its case folding equivalent; if the character has no case folding equivalent, the character itself is returned.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @param int $options <p>Either <b><code>IntlChar::FOLD_CASE_DEFAULT</code></b> (default) or <b><code>IntlChar::FOLD_CASE_EXCLUDE_SPECIAL_I</code></b>.</p>
		 * @return int|string|null <p>Returns the <i>Simple_Case_Folding</i> of the code point, if any; otherwise the code point itself on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.foldcase.php
		 * @since PHP 7, PHP 8
		 */
		public static function foldCase(int|string $codepoint, int $options = IntlChar::FOLD_CASE_DEFAULT): int|string|null {}

		/**
		 * Get character representation for a given digit and radix
		 * <p>Determines the character representation for a specific digit in the specified radix.</p><p>If the value of radix is not a valid radix, or the value of digit is not a valid digit in the specified radix, the null character (<code>U+0000</code>) is returned.</p><p>The radix argument is valid if it is greater than or equal to <code>2</code> and less than or equal to <code>36</code>. The digit argument is valid if <code>0 &lt;= digit &lt; radix</code>.</p><p>If the digit is less than <code>10</code>, then '0' + digit is returned. Otherwise, the value 'a' + digit - 10 is returned.</p>
		 * @param int $digit <p>The number to convert to a character.</p>
		 * @param int $base <p>The radix (defaults to <code>10</code>).</p>
		 * @return int <p>The character representation (as a <code>string</code>) of the specified digit in the specified radix.</p>
		 * @link https://php.net/manual/en/intlchar.fordigit.php
		 * @see IntlChar::digit(), IntlChar::charDigitValue(), IntlChar::isdigit()
		 * @since PHP 7, PHP 8
		 */
		public static function forDigit(int $digit, int $base = 10): int {}

		/**
		 * Get the paired bracket character for a code point
		 * <p>Maps the specified character to its paired bracket character.</p><p>For <code>Bidi_Paired_Bracket_Type!=None</code>, this is the same as <code>IntlChar::charMirror()</code>. Otherwise <code>codepoint</code> itself is returned.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return int|string|null <p>Returns the paired bracket code point, or <code>codepoint</code> itself if there is no such mapping. Returns <b><code>null</code></b> on failure.</p><p>The return type is <code>int</code> unless the code point was passed as a UTF-8 <code>string</code>, in which case a <code>string</code> is returned. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.getbidipairedbracket.php
		 * @see IntlChar::charMirror()
		 * @since PHP 7, PHP 8
		 */
		public static function getBidiPairedBracket(int|string $codepoint): int|string|null {}

		/**
		 * Get the Unicode allocation block containing a code point
		 * <p>Returns the Unicode allocation block that contains the character.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?int <p>Returns the block value for <code>codepoint</code>. See the <code>IntlChar::BLOCK_CODE_&#42;</code> constants for possible return values. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.getblockcode.php
		 * @since PHP 7, PHP 8
		 */
		public static function getBlockCode(int|string $codepoint): ?int {}

		/**
		 * Get the combining class of a code point
		 * <p>Returns the combining class of the code point.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?int <p>Returns the combining class of the character. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.getcombiningclass.php
		 * @since PHP 7, PHP 8
		 */
		public static function getCombiningClass(int|string $codepoint): ?int {}

		/**
		 * Get the FC_NFKC_Closure property for a code point
		 * <p>Gets the FC_NFKC_Closure property string for a character.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return string|false|null <p>Returns the FC_NFKC_Closure property string for the <code>codepoint</code>, or an empty string if there is none. Returns <b><code>null</code></b> or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.getfc-nfkc-closure.php
		 * @since PHP 7, PHP 8
		 */
		public static function getFC_NFKC_Closure(int|string $codepoint): string|false|null {}

		/**
		 * Get the max value for a Unicode property
		 * <p>Gets the maximum value for an enumerated/integer/binary Unicode property.</p>
		 * @param int $property <p>The Unicode property to lookup (see the <code>IntlChar::PROPERTY_&#42;</code> constants).</p>
		 * @return int <p>The maximum value returned by <code>IntlChar::getIntPropertyValue()</code> for a Unicode property. <code>&lt;=0</code> if the property selector is out of range.</p>
		 * @link https://php.net/manual/en/intlchar.getintpropertymaxvalue.php
		 * @see IntlChar::hasBinaryProperty(), IntlChar::getIntPropertyMinValue(), IntlChar::getIntPropertyValue(), IntlChar::getUnicodeVersion()
		 * @since PHP 7, PHP 8
		 */
		public static function getIntPropertyMaxValue(int $property): int {}

		/**
		 * Get the min value for a Unicode property
		 * <p>Gets the minimum value for an enumerated/integer/binary Unicode property.</p>
		 * @param int $property <p>The Unicode property to lookup (see the <code>IntlChar::PROPERTY_&#42;</code> constants).</p>
		 * @return int <p>The minimum value returned by <code>IntlChar::getIntPropertyValue()</code> for a Unicode property. <code>0</code> if the property selector is out of range.</p>
		 * @link https://php.net/manual/en/intlchar.getintpropertyminvalue.php
		 * @see IntlChar::hasBinaryProperty(), IntlChar::getIntPropertyMaxValue(), IntlChar::getIntPropertyValue(), IntlChar::getUnicodeVersion()
		 * @since PHP 7, PHP 8
		 */
		public static function getIntPropertyMinValue(int $property): int {}

		/**
		 * Get the value for a Unicode property for a code point
		 * <p>Gets the property value for an enumerated or integer Unicode property for a code point. Also returns binary and mask property values.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @param int $property <p>The Unicode property to lookup (see the <code>IntlChar::PROPERTY_&#42;</code> constants).</p>
		 * @return ?int <p>Returns the numeric value that is directly the property value or, for enumerated properties, corresponds to the numeric value of the enumerated constant of the respective property value enumeration type. Returns <b><code>null</code></b> on failure.</p><p>Returns <code>0</code> or <code>1</code> (for <b><code>false</code></b>/<b><code>true</code></b>) for binary Unicode properties.</p><p>Returns a bit-mask for mask properties.</p><p>Returns <code>0</code> if <code>property</code> is out of bounds or if the Unicode version does not have data for the property at all, or not for this code point.</p>
		 * @link https://php.net/manual/en/intlchar.getintpropertyvalue.php
		 * @see IntlChar::hasBinaryProperty(), IntlChar::getIntPropertyMinValue(), IntlChar::getIntPropertyMaxValue(), IntlChar::getUnicodeVersion()
		 * @since PHP 7, PHP 8
		 */
		public static function getIntPropertyValue(int|string $codepoint, int $property): ?int {}

		/**
		 * Get the numeric value for a Unicode code point
		 * <p>Gets the numeric value for a Unicode code point as defined in the Unicode Character Database.</p><p>For characters without any numeric values in the Unicode Character Database, this function will return <b><code>IntlChar::NO_NUMERIC_VALUE</code></b>.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?float <p>Numeric value of <code>codepoint</code>, or <b><code>IntlChar::NO_NUMERIC_VALUE</code></b> if none is defined. This constant was added in PHP 7.0.6, prior to this version the literal value (<code>float</code>)<code>-123456789</code> may be used instead. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.getnumericvalue.php
		 * @since PHP 7, PHP 8
		 */
		public static function getNumericValue(int|string $codepoint): ?float {}

		/**
		 * Get the property constant value for a given property name
		 * <p>Returns the property constant value for a given property name, as specified in the Unicode database file PropertyAliases.txt. Short, long, and any other variants are recognized.</p><p>In addition, this function maps the synthetic names "gcm" / "General_Category_Mask" to the property <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY_MASK</code></b>. These names are not in PropertyAliases.txt.</p><p>This function complements <code>IntlChar::getPropertyName()</code>.</p>
		 * @param string $alias <p>The property name to be matched. The name is compared using "loose matching" as described in PropertyAliases.txt.</p>
		 * @return int <p>Returns an <code>IntlChar::PROPERTY_</code> constant value, or <b><code>IntlChar::PROPERTY_INVALID_CODE</code></b> if the given name does not match any property.</p>
		 * @link https://php.net/manual/en/intlchar.getpropertyenum.php
		 * @see IntlChar::getPropertyName()
		 * @since PHP 7, PHP 8
		 */
		public static function getPropertyEnum(string $alias): int {}

		/**
		 * Get the Unicode name for a property
		 * <p>Returns the Unicode name for a given property, as given in the Unicode database file PropertyAliases.txt.</p><p>In addition, this function maps the property <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY_MASK</code></b> to the synthetic names "gcm" / "General_Category_Mask". These names are not in PropertyAliases.txt.</p><p>This function complements <code>IntlChar::getPropertyEnum()</code>.</p>
		 * @param int $property <p>The Unicode property to lookup (see the <code>IntlChar::PROPERTY_&#42;</code> constants).</p> <p><b><code>IntlChar::PROPERTY_INVALID_CODE</code></b> should not be used. Also, if <code>property</code> is out of range, <b><code>false</code></b> is returned.</p>
		 * @param int $type <p>Selector for which name to get. If out of range, <b><code>false</code></b> is returned.</p> <p>All properties have a long name. Most have a short name, but some do not. Unicode allows for additional names; if present these will be returned by adding 1, 2, etc. to <b><code>IntlChar::LONG_PROPERTY_NAME</code></b>.</p>
		 * @return string|false <p>Returns the name, or <b><code>false</code></b> if either the <code>property</code> or the <code>type</code> is out of range.</p><p>If a given <code>type</code> returns <b><code>false</code></b>, then all larger values of <code>type</code> will return <b><code>false</code></b>, with one exception: if <b><code>false</code></b> is returned for <b><code>IntlChar::SHORT_PROPERTY_NAME</code></b>, then <b><code>IntlChar::LONG_PROPERTY_NAME</code></b> (and higher) may still return a non-<b><code>false</code></b> value.</p>
		 * @link https://php.net/manual/en/intlchar.getpropertyname.php
		 * @see IntlChar::getPropertyEnum()
		 * @since PHP 7, PHP 8
		 */
		public static function getPropertyName(int $property, int $type = IntlChar::LONG_PROPERTY_NAME): string|false {}

		/**
		 * Get the property value for a given value name
		 * <p>Returns the property value integer for a given value name, as specified in the Unicode database file PropertyValueAliases.txt. Short, long, and any other variants are recognized.</p><p><b>Note</b>:</p><p>Some of the names in PropertyValueAliases.txt will only be recognized with <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY_MASK</code></b>, not <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY</code></b>. These include:</p>
		 * @param int $property <p>The Unicode property to lookup (see the <code>IntlChar::PROPERTY_&#42;</code> constants).</p> <p>If out of range, or this method doesn't work with the given value, <b><code>IntlChar::PROPERTY_INVALID_CODE</code></b> is returned.</p>
		 * @param string $name <p>The value name to be matched. The name is compared using "loose matching" as described in PropertyValueAliases.txt.</p>
		 * @return int <p>Returns the corresponding value integer, or <b><code>IntlChar::PROPERTY_INVALID_CODE</code></b> if the given name does not match any value of the given property, or if the property is invalid.</p>
		 * @link https://php.net/manual/en/intlchar.getpropertyvalueenum.php
		 * @since PHP 7, PHP 8
		 */
		public static function getPropertyValueEnum(int $property, string $name): int {}

		/**
		 * Get the Unicode name for a property value
		 * <p>Returns the Unicode name for a given property value, as given in the Unicode database file PropertyValueAliases.txt.</p><p><b>Note</b>:</p><p>Some of the names in PropertyValueAliases.txt can only be retrieved using <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY_MASK</code></b>, not <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY</code></b>. These include:</p>
		 * @param int $property <p>The Unicode property to lookup (see the <code>IntlChar::PROPERTY_&#42;</code> constants).</p> <p>If out of range, or this method doesn't work with the given value, <b><code>false</code></b> is returned.</p>
		 * @param int $value <p>Selector for a value for the given property. If out of range, <b><code>false</code></b> is returned.</p> <p>In general, valid values range from <code>0</code> up to some maximum. There are a couple exceptions:</p><ul> <li> <b><code>IntlChar::PROPERTY_BLOCK</code></b> values begin at the non-zero value <b><code>IntlChar::BLOCK_CODE_BASIC_LATIN</code></b> </li> <li> <b><code>IntlChar::PROPERTY_CANONICAL_COMBINING_CLASS</code></b> values are not contiguous and range from 0..240. </li> </ul>
		 * @param int $type <p>Selector for which name to get. If out of range, <b><code>false</code></b> is returned.</p> <p>All values have a long name. Most have a short name, but some do not. Unicode allows for additional names; if present these will be returned by adding 1, 2, etc. to <b><code>IntlChar::LONG_PROPERTY_NAME</code></b>.</p>
		 * @return string|false <p>Returns the name, or <b><code>false</code></b> if either the <code>property</code> or the <code>type</code> is out of range. Returns <b><code>null</code></b> on failure.</p><p>If a given <code>type</code> returns <b><code>false</code></b>, then all larger values of <code>type</code> will return <b><code>false</code></b>, with one exception: if <b><code>false</code></b> is returned for <b><code>IntlChar::SHORT_PROPERTY_NAME</code></b>, then <b><code>IntlChar::LONG_PROPERTY_NAME</code></b> (and higher) may still return a non-<b><code>false</code></b> value.</p>
		 * @link https://php.net/manual/en/intlchar.getpropertyvaluename.php
		 * @since PHP 7, PHP 8
		 */
		public static function getPropertyValueName(int $property, int $value, int $type = IntlChar::LONG_PROPERTY_NAME): string|false {}

		/**
		 * Get the Unicode version
		 * <p>Gets the Unicode version information.</p><p>The version array is filled in with the version information for the Unicode standard that is currently used by ICU. For example, Unicode version 3.1.1 is represented as an array with the values <code>[3, 1, 1, 0]</code>.</p>
		 * @return array <p>An array containing the Unicode version number.</p>
		 * @link https://php.net/manual/en/intlchar.getunicodeversion.php
		 * @see IntlChar::charAge()
		 * @since PHP 7, PHP 8
		 */
		public static function getUnicodeVersion(): array {}

		/**
		 * Check a binary Unicode property for a code point
		 * <p>Checks a binary Unicode property for a code point.</p><p>Unicode, especially in version 3.2, defines many more properties than the original set in UnicodeData.txt.</p><p>The properties APIs are intended to reflect Unicode properties as defined in the Unicode Character Database (UCD) and Unicode Technical Reports (UTR). For details about the properties see &#xBB;&#xA0;http://www.unicode.org/ucd/. For names of Unicode properties see the UCD file PropertyAliases.txt.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @param int $property <p>The Unicode property to lookup (see the <code>IntlChar::PROPERTY_&#42;</code> constants).</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> or <b><code>false</code></b> according to the binary Unicode property value for <code>codepoint</code>. Also <b><code>false</code></b> if <code>property</code> is out of bounds or if the Unicode version does not have data for the property at all, or not for this code point. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.hasbinaryproperty.php
		 * @see IntlChar::getIntPropertyValue(), IntlChar::getUnicodeVersion()
		 * @since PHP 7, PHP 8
		 */
		public static function hasBinaryProperty(int|string $codepoint, int $property): ?bool {}

		/**
		 * Check if code point is an ignorable character
		 * <p>Determines if the specified character should be regarded as an ignorable character in an identifier.</p><p><b><code>true</code></b> for characters with general category "Cf" (format controls) as well as non-whitespace ISO controls (U+0000..U+0008, U+000E..U+001B, U+007F..U+009F).</p><p><b>Note</b>:</p><p>Note that Unicode just recommends to ignore Cf (format controls).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is ignorable in identifiers, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isidignorable.php
		 * @see IntlChar::isIDStart(), IntlChar::isIDPart()
		 * @since PHP 7, PHP 8
		 */
		public static function isIDIgnorable(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is permissible in an identifier
		 * <p>Determines if the specified character is permissible in an identifier.</p><p><b><code>true</code></b> for characters with general categories "L" (letters), "Nl" (letter numbers), "Nd" (decimal digits), "Mc" and "Mn" (combining marks), "Pc" (connecting punctuation), and u_isIDIgnorable(c).</p><p><b>Note</b>:</p><p>This is almost the same as Unicode's ID_Continue (<b><code>IntlChar::PROPERTY_ID_CONTINUE</code></b>) except that Unicode recommends to ignore Cf which is less than <code>IntlChar::isIDIgnorable()</code>.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is the code point may occur in an identifier, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isidpart.php
		 * @see IntlChar::isIDIgnorable(), IntlChar::isIDStart()
		 * @since PHP 7, PHP 8
		 */
		public static function isIDPart(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is permissible as the first character in an identifier
		 * <p>Determines if the specified character is permissible as the first character in an identifier according to Unicode (The Unicode Standard, Version 3.0, chapter 5.16 Identifiers).</p><p><b><code>true</code></b> for characters with general categories "L" (letters) and "Nl" (letter numbers).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> may start an identifier, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isidstart.php
		 * @see IntlChar::isalpha(), IntlChar::isIDPart()
		 * @since PHP 7, PHP 8
		 */
		public static function isIDStart(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is an ISO control code
		 * <p>Determines whether the specified code point is an ISO control code.</p><p><b><code>true</code></b> for U+0000..U+001f and U+007f..U+009f (general category "Cc").</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is an ISO control code, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isisocontrol.php
		 * @see IntlChar::iscntrl()
		 * @since PHP 7, PHP 8
		 */
		public static function isISOControl(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is permissible in a Java identifier
		 * <p>Determines if the specified character is permissible in a Java identifier.</p><p>In addition to <code>IntlChar::isIDPart()</code>, <b><code>true</code></b> for characters with general category "Sc" (currency symbols).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> may occur in a Java identifier, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isjavaidpart.php
		 * @see IntlChar::isIDIgnorable(), IntlChar::isIDPart(), IntlChar::isJavaIDStart(), IntlChar::isalpha(), IntlChar::isdigit()
		 * @since PHP 7, PHP 8
		 */
		public static function isJavaIDPart(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is permissible as the first character in a Java identifier
		 * <p>Determines if the specified character is permissible as the start of a Java identifier.</p><p>In addition to <code>IntlChar::isIDStart()</code>, <b><code>true</code></b> for characters with general categories "Sc" (currency symbols) and "Pc" (connecting punctuation).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> may start a Java identifier, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isjavaidstart.php
		 * @see IntlChar::isIDStart(), IntlChar::isJavaIDPart(), IntlChar::isalpha()
		 * @since PHP 7, PHP 8
		 */
		public static function isJavaIDStart(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a space character according to Java
		 * <p>Determine if the specified code point is a space character according to Java.</p><p><b><code>true</code></b> for characters with general categories "Z" (separators), which does not include control codes (e.g., TAB or Line Feed).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a space character according to Java, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isjavaspacechar.php
		 * @see IntlChar::isspace(), IntlChar::isWhitespace(), IntlChar::isUWhiteSpace()
		 * @since PHP 7, PHP 8
		 */
		public static function isJavaSpaceChar(int|string $codepoint): ?bool {}

		/**
		 * Check if code point has the Bidi_Mirrored property
		 * <p>Determines whether the code point has the Bidi_Mirrored property.</p><p>This property is set for characters that are commonly used in Right-To-Left contexts and need to be displayed with a "mirrored" glyph.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> has the Bidi_Mirrored property, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.ismirrored.php
		 * @see IntlChar::charMirror()
		 * @since PHP 7, PHP 8
		 */
		public static function isMirrored(int|string $codepoint): ?bool {}

		/**
		 * Check if code point has the Alphabetic Unicode property
		 * <p>Check if a code point has the Alphabetic Unicode property.</p><p>This is the same as <code>IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_ALPHABETIC)</code></p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> has the Alphabetic Unicode property, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isualphabetic.php
		 * @see IntlChar::isalpha(), IntlChar::hasBinaryProperty()
		 * @since PHP 7, PHP 8
		 */
		public static function isUAlphabetic(int|string $codepoint): ?bool {}

		/**
		 * Check if code point has the Lowercase Unicode property
		 * <p>Check if a code point has the Lowercase Unicode property.</p><p>This is the same as <code>IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_LOWERCASE)</code></p><p><b>Note</b>:</p><p>This is different than <code>IntlChar::islower()</code> and will return <b><code>true</code></b> for more characters.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> has the Lowercase Unicode property, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isulowercase.php
		 * @see IntlChar::islower(), IntlChar::hasBinaryProperty()
		 * @since PHP 7, PHP 8
		 */
		public static function isULowercase(int|string $codepoint): ?bool {}

		/**
		 * Check if code point has the Uppercase Unicode property
		 * <p>Check if a code point has the Uppercase Unicode property.</p><p>This is the same as <code>IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_UPPERCASE)</code></p><p><b>Note</b>:</p><p>This is different than <code>IntlChar::isupper()</code> and will return <b><code>true</code></b> for more characters.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> has the Uppercase Unicode property, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isuuppercase.php
		 * @see IntlChar::isupper(), IntlChar::hasBinaryProperty()
		 * @since PHP 7, PHP 8
		 */
		public static function isUUppercase(int|string $codepoint): ?bool {}

		/**
		 * Check if code point has the White_Space Unicode property
		 * <p>Check if a code point has the White_Space Unicode property.</p><p>This is the same as <code>IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_WHITE_SPACE)</code></p><p><b>Note</b>:</p><p>This is different from both <code>IntlChar::isspace()</code> and <code>IntlChar::isWhitespace()</code>.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> has the White_Space Unicode property, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isuwhitespace.php
		 * @see IntlChar::isspace(), IntlChar::isWhitespace(), IntlChar::isJavaSpaceChar(), IntlChar::hasBinaryProperty()
		 * @since PHP 7, PHP 8
		 */
		public static function isUWhiteSpace(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a whitespace character according to ICU
		 * <p>Determines if the specified code point is a whitespace character according to ICU.</p><p>A character is considered to be a ICU whitespace character if and only if it satisfies one of the following criteria:</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a whitespace character according to ICU, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.iswhitespace.php
		 * @see IntlChar::isspace(), IntlChar::isJavaSpaceChar(), IntlChar::isUWhiteSpace()
		 * @since PHP 7, PHP 8
		 */
		public static function isWhitespace(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is an alphanumeric character
		 * <p>Determines whether the specified code point is an alphanumeric character (letter or digit). <b><code>true</code></b> for characters with general categories "L" (letters) and "Nd" (decimal digit numbers).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is an alphanumeric character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isalnum.php
		 * @see IntlChar::isalpha(), IntlChar::isdigit()
		 * @since PHP 7, PHP 8
		 */
		public static function isalnum(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a letter character
		 * <p>Determines whether the specified code point is a letter character. <b><code>true</code></b> for general categories "L" (letters).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a letter character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isalpha.php
		 * @see IntlChar::isalnum(), IntlChar::isdigit()
		 * @since PHP 7, PHP 8
		 */
		public static function isalpha(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a base character
		 * <p>Determines whether the specified code point is a base character. <b><code>true</code></b> for general categories "L" (letters), "N" (numbers), "Mc" (spacing combining marks), and "Me" (enclosing marks).</p><p><b>Note</b>:</p><p>This is different from the Unicode definition in chapter 3.5, conformance clause D13, which defines base characters to be all characters (not Cn) that do not graphically combine with preceding characters (M) and that are neither control (Cc) or format (Cf) characters.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a base character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isbase.php
		 * @see IntlChar::isalpha(), IntlChar::isdigit()
		 * @since PHP 7, PHP 8
		 */
		public static function isbase(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a "blank" or "horizontal space" character
		 * <p>Determines whether the specified code point is a "blank" or "horizontal space", a character that visibly separates words on a line.</p><p>The following are equivalent definitions:</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is either a "blank" or "horizontal space" character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isblank.php
		 * @see IntlChar::isspace(), IntlChar::isJavaSpaceChar(), IntlChar::isUWhiteSpace(), IntlChar::isWhitespace()
		 * @since PHP 7, PHP 8
		 */
		public static function isblank(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a control character
		 * <p>Determines whether the specified code point is a control character.</p><p>A control character is one of the following:</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a control character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.iscntrl.php
		 * @see IntlChar::isprint()
		 * @since PHP 7, PHP 8
		 */
		public static function iscntrl(int|string $codepoint): ?bool {}

		/**
		 * Check whether the code point is defined
		 * <p>Determines whether the specified code point is "defined", which usually means that it is assigned a character.</p><p><b><code>true</code></b> for general categories other than "Cn" (other, not assigned).</p><p><b>Note</b>:</p><p>Note that non-character code points (e.g., U+FDD0) are not "defined" (they are Cn), but surrogate code points are "defined" (Cs).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a defined character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isdefined.php
		 * @see IntlChar::isdigit(), IntlChar::isalpha(), IntlChar::isalnum(), IntlChar::isupper(), IntlChar::islower(), IntlChar::istitle()
		 * @since PHP 7, PHP 8
		 */
		public static function isdefined(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a digit character
		 * <p>Determines whether the specified code point is a digit character.</p><p><b><code>true</code></b> for characters with general category "Nd" (decimal digit numbers). Beginning with Unicode 4, this is the same as testing for the Numeric_Type of Decimal.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a digit character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isdigit.php
		 * @see IntlChar::isalpha(), IntlChar::isalnum(), IntlChar::isxdigit()
		 * @since PHP 7, PHP 8
		 */
		public static function isdigit(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a graphic character
		 * <p>Determines whether the specified code point is a "graphic" character (printable, excluding spaces).</p><p><b><code>true</code></b> for all characters except those with general categories "Cc" (control codes), "Cf" (format controls), "Cs" (surrogates), "Cn" (unassigned), and "Z" (separators).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a "graphic" character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isgraph.php
		 * @since PHP 7, PHP 8
		 */
		public static function isgraph(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a lowercase letter
		 * <p>Determines whether the specified code point has the general category "Ll" (lowercase letter).</p><p><b>Note</b>:</p><p>This misses some characters that are also lowercase but have a different general category value. In order to include those, use <code>IntlChar::isULowercase()</code>.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is an Ll lowercase letter, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.islower.php
		 * @see IntlChar::isupper(), IntlChar::istitle(), IntlChar::tolower(), IntlChar::toupper()
		 * @since PHP 7, PHP 8
		 */
		public static function islower(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a printable character
		 * <p>Determines whether the specified code point is a printable character.</p><p><b><code>true</code></b> for general categories other than "C" (controls).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a printable character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isprint.php
		 * @see IntlChar::iscntrl()
		 * @since PHP 7, PHP 8
		 */
		public static function isprint(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is punctuation character
		 * <p>Determines whether the specified code point is a punctuation character.</p><p><b><code>true</code></b> for characters with general categories "P" (punctuation).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a punctuation character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.ispunct.php
		 * @since PHP 7, PHP 8
		 */
		public static function ispunct(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a space character
		 * <p>Determines if the specified character is a space character or not.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a space character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isspace.php
		 * @see IntlChar::isJavaSpaceChar(), IntlChar::isWhitespace(), IntlChar::isUWhiteSpace()
		 * @since PHP 7, PHP 8
		 */
		public static function isspace(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a titlecase letter
		 * <p>Determines whether the specified code point is a titlecase letter.</p><p><b><code>true</code></b> for general category "Lt" (titlecase letter).</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a titlecase letter, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.istitle.php
		 * @see IntlChar::isupper(), IntlChar::islower(), IntlChar::totitle()
		 * @since PHP 7, PHP 8
		 */
		public static function istitle(int|string $codepoint): ?bool {}

		/**
		 * Check if code point has the general category "Lu" (uppercase letter)
		 * <p>Determines whether the specified code point has the general category "Lu" (uppercase letter).</p><p><b>Note</b>:</p><p>This misses some characters that are also uppercase but have a different general category value. In order to include those, use <code>IntlChar::isUUppercase()</code>.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is an Lu uppercase letter, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isupper.php
		 * @see IntlChar::islower(), IntlChar::istitle(), IntlChar::tolower(), IntlChar::toupper()
		 * @since PHP 7, PHP 8
		 */
		public static function isupper(int|string $codepoint): ?bool {}

		/**
		 * Check if code point is a hexadecimal digit
		 * <p>Determines whether the specified code point is a hexadecimal digit.</p><p><b><code>true</code></b> for characters with general category "Nd" (decimal digit numbers) as well as Latin letters a-f and A-F in both ASCII and Fullwidth ASCII. (That is, for letters with code points 0041..0046, 0061..0066, FF21..FF26, FF41..FF46.)</p><p>This is equivalent to <code>IntlChar::digit($codepoint, 16) &gt;= 0</code>.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?bool <p>Returns <b><code>true</code></b> if <code>codepoint</code> is a hexadecimal character, <b><code>false</code></b> if not. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.isxdigit.php
		 * @see IntlChar::isdigit()
		 * @since PHP 7, PHP 8
		 */
		public static function isxdigit(int|string $codepoint): ?bool {}

		/**
		 * Return Unicode code point value of character
		 * <p>Returns the Unicode code point value of the given character.</p><p>This function complements <code>IntlChar::chr()</code>.</p>
		 * @param int|string $character <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return ?int <p>Returns the Unicode code point value as an integer.</p>
		 * @link https://php.net/manual/en/intlchar.ord.php
		 * @see IntlChar::chr(), mb_ord(), ord()
		 * @since PHP 7, PHP 8
		 */
		public static function ord(int|string $character): ?int {}

		/**
		 * Make Unicode character lowercase
		 * <p>The given character is mapped to its lowercase equivalent. If the character has no lowercase equivalent, the original character itself is returned.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return int|string|null <p>Returns the Simple_Lowercase_Mapping of the code point, if any; otherwise the code point itself. Returns <b><code>null</code></b> on failure.</p><p>The return type is <code>int</code> unless the code point was passed as a UTF-8 <code>string</code>, in which case a <code>string</code> is returned. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.tolower.php
		 * @see IntlChar::totitle(), IntlChar::toupper(), mb_strtolower()
		 * @since PHP 7, PHP 8
		 */
		public static function tolower(int|string $codepoint): int|string|null {}

		/**
		 * Make Unicode character titlecase
		 * <p>The given character is mapped to its titlecase equivalent. If the character has no titlecase equivalent, the original character itself is returned.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return int|string|null <p>Returns the Simple_Titlecase_Mapping of the code point, if any; otherwise the code point itself. Returns <b><code>null</code></b> on failure.</p><p>The return type is <code>int</code> unless the code point was passed as a UTF-8 <code>string</code>, in which case a <code>string</code> is returned. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.totitle.php
		 * @see IntlChar::tolower(), IntlChar::toupper(), mb_convert_case()
		 * @since PHP 7, PHP 8
		 */
		public static function totitle(int|string $codepoint): int|string|null {}

		/**
		 * Make Unicode character uppercase
		 * <p>The given character is mapped to its uppercase equivalent. If the character has no uppercase equivalent, the character itself is returned.</p>
		 * @param int|string $codepoint <p>The <code>int</code> codepoint value (e.g. <code>0x2603</code> for <i>U+2603 SNOWMAN</i>), or the character encoded as a UTF-8 <code>string</code> (e.g. <code>"\u{2603}"</code>)</p>
		 * @return int|string|null <p>Returns the Simple_Uppercase_Mapping of the code point, if any; otherwise the code point itself.</p><p>The return type is <code>int</code> unless the code point was passed as a UTF-8 <code>string</code>, in which case a <code>string</code> is returned. Returns <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlchar.toupper.php
		 * @see IntlChar::tolower(), IntlChar::totitle(), mb_strtoupper()
		 * @since PHP 7, PHP 8
		 */
		public static function toupper(int|string $codepoint): int|string|null {}
	}

	/**
	 * <p>This break iterator identifies the boundaries between UTF-8 code points.</p>
	 * @link https://php.net/manual/en/class.intlcodepointbreakiterator.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	class IntlCodePointBreakIterator extends \IntlBreakIterator {

		/**
		 * Create break iterator for boundaries of combining character sequences
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createcharacterinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createCharacterInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for boundaries of code points
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return IntlCodePointBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createcodepointinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createCodePointInstance(): \IntlCodePointBreakIterator {}

		/**
		 * Create break iterator for logically possible line breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createlineinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createLineInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for sentence breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createsentenceinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createSentenceInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for title-casing breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createtitleinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createTitleInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for word breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createwordinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createWordInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Get index of current position
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.current.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function current(): int {}

		/**
		 * Set position to the first character in the text
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.first.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function first(): int {}

		/**
		 * Advance the iterator to the first boundary following specified offset
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.following.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function following(int $offset): int {}

		/**
		 * Get last error code on the object
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.geterrorcode.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getErrorCode(): int {}

		/**
		 * Get last error message on the object
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link https://php.net/manual/en/intlbreakiterator.geterrormessage.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getErrorMessage(): string {}

		/**
		 * Get last code point passed over after advancing or receding the iterator
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlcodepointbreakiterator.getlastcodepoint.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getLastCodePoint(): int {}

		/**
		 * Get the locale associated with the object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $type
		 * @return string|false
		 * @link https://php.net/manual/en/intlbreakiterator.getlocale.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getLocale(int $type): string|false {}

		/**
		 * Create iterator for navigating fragments between boundaries
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $type <p>Optional key type. Possible values are:</p><ul> <li> <b><code>IntlPartsIterator::KEY_SEQUENTIAL</code></b> - The default. Sequentially increasing integers used as key. </li> <li> <b><code>IntlPartsIterator::KEY_LEFT</code></b> - Byte offset left of current part used as key. </li> <li> <b><code>IntlPartsIterator::KEY_RIGHT</code></b> - Byte offset right of current part used as key. </li> </ul>
		 * @return IntlPartsIterator
		 * @link https://php.net/manual/en/intlbreakiterator.getpartsiterator.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getPartsIterator(string $type = 'IntlPartsIterator::KEY_SEQUENTIAL'): \IntlPartsIterator {}

		/**
		 * Get the text being scanned
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ?string
		 * @link https://php.net/manual/en/intlbreakiterator.gettext.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getText(): ?string {}

		/**
		 * Tell whether an offset is a boundaryʼs offset
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset
		 * @return bool
		 * @link https://php.net/manual/en/intlbreakiterator.isboundary.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function isBoundary(int $offset): bool {}

		/**
		 * Set the iterator position to index beyond the last character
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.last.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function last(): int {}

		/**
		 * Advance the iterator the next boundary
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?int $offset
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.next.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function next(?int $offset = null): int {}

		/**
		 * Set the iterator position to the first boundary before an offset
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.preceding.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function preceding(int $offset): int {}

		/**
		 * Set the iterator position to the boundary immediately before the current
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.previous.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function previous(): int {}

		/**
		 * Set the text being scanned
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $text
		 * @return ?bool
		 * @link https://php.net/manual/en/intlbreakiterator.settext.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setText(string $text): ?bool {}
	}

	/**
	 * <p>Date Formatter is a concrete class that enables locale-dependent formatting/parsing of dates using pattern strings and/or canned patterns.</p>
	 * <p>This class represents the ICU date formatting functionality. It allows users to display dates in a localized format or to parse strings into PHP date values using pattern strings and/or canned patterns.</p>
	 * @link https://php.net/manual/en/class.intldateformatter.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	class IntlDateFormatter {

		/**
		 * @var int Completely specified style (Tuesday, April 12, 1952 AD or 3:30:42pm PST)
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const FULL = 0;

		/**
		 * @var int Long style (January 12, 1952 or 3:30:32pm)
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const LONG = 1;

		/**
		 * @var int Medium style (Jan 12, 1952)
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const MEDIUM = 2;

		/**
		 * @var int Most abbreviated style, only essential data (12/13/52 or 3:30pm)
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const SHORT = 3;

		/**
		 * @var int Do not include this element
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const NONE = -1;

		/**
		 * @var int The same as <b><code>IntlDateFormatter::FULL</code></b>, but yesterday, today, and tomorrow show as <code>yesterday</code>, <code>today</code>, and <code>tomorrow</code>, respectively. Available as of PHP 8.0.0, for <code>dateType</code> only.
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const RELATIVE_FULL = 128;

		/**
		 * @var int The same as <b><code>IntlDateFormatter::LONG</code></b>, but yesterday, today, and tomorrow show as <code>yesterday</code>, <code>today</code>, and <code>tomorrow</code>, respectively. Available as of PHP 8.0.0, for <code>dateType</code> only.
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const RELATIVE_LONG = 129;

		/**
		 * @var int The same as <b><code>IntlDateFormatter::MEDIUM</code></b>, but yesterday, today, and tomorrow show as <code>yesterday</code>, <code>today</code>, and <code>tomorrow</code>, respectively. Available as of PHP 8.0.0, for <code>dateType</code> only.
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const RELATIVE_MEDIUM = 130;

		/**
		 * @var int The same as <b><code>IntlDateFormatter::SHORT</code></b>, but yesterday, today, and tomorrow show as <code>yesterday</code>, <code>today</code>, and <code>tomorrow</code>, respectively. Available as of PHP 8.0.0, for <code>dateType</code> only.
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const RELATIVE_SHORT = 131;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const GREGORIAN = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intldateformatter.php
		 */
		public const TRADITIONAL = 0;

		/**
		 * Create a date formatter
		 * <p>Object-oriented style</p><p>Object-oriented style (constructor)</p><p>Create a date formatter.</p>
		 * @param ?string $locale <p>Locale to use when formatting or parsing or <b><code>null</code></b> to use the value specified in the ini setting intl.default_locale.</p>
		 * @param int $dateType <p>Date type to use (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>). This is one of the IntlDateFormatter constants.</p>
		 * @param int $timeType <p>Time type to use (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>). This is one of the IntlDateFormatter constants.</p>
		 * @param \IntlTimeZone|\DateTimeZone|string|null $timezone <p>Time zone ID. The default (and the one used if <b><code>null</code></b> is given) is the one returned by <code>date_default_timezone_get()</code> or, if applicable, that of the <code>IntlCalendar</code> object passed for the <code>calendar</code> parameter. This ID must be a valid identifier on ICU&#x2BC;s database or an ID representing an explicit offset, such as <code>GMT-05:30</code>.</p> <p>This can also be an <code>IntlTimeZone</code> or a <code>DateTimeZone</code> object.</p>
		 * @param \IntlCalendar|int|null $calendar <p>Calendar to use for formatting or parsing. The default value is <b><code>null</code></b>, which corresponds to <b><code>IntlDateFormatter::GREGORIAN</code></b>. This can either be one of the IntlDateFormatter calendar constants or an <code>IntlCalendar</code>. Any <code>IntlCalendar</code> object passed will be clone; it will not be changed by the <code>IntlDateFormatter</code>. This will determine the calendar type used (gregorian, islamic, persian, etc.) and, if <b><code>null</code></b> is given for the <code>timezone</code> parameter, also the timezone used.</p>
		 * @param ?string $pattern <p>Optional pattern to use when formatting or parsing. Possible patterns are documented at &#xBB;&#xA0;https://unicode-org.github.io/icu/userguide/format_parse/datetime/.</p>
		 * @return ?IntlDateFormatter <p>The created <code>IntlDateFormatter</code> or <b><code>null</code></b> in case of failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.create.php
		 * @see datefmt_format(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function __construct(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, \IntlTimeZone|\DateTimeZone|string|null $timezone = null, \IntlCalendar|int|null $calendar = null, ?string $pattern = null) {}

		/**
		 * Create a date formatter
		 * <p>Object-oriented style</p><p>Object-oriented style (constructor)</p><p>Create a date formatter.</p>
		 * @param ?string $locale <p>Locale to use when formatting or parsing or <b><code>null</code></b> to use the value specified in the ini setting intl.default_locale.</p>
		 * @param int $dateType <p>Date type to use (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>). This is one of the IntlDateFormatter constants.</p>
		 * @param int $timeType <p>Time type to use (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>). This is one of the IntlDateFormatter constants.</p>
		 * @param \IntlTimeZone|\DateTimeZone|string|null $timezone <p>Time zone ID. The default (and the one used if <b><code>null</code></b> is given) is the one returned by <code>date_default_timezone_get()</code> or, if applicable, that of the <code>IntlCalendar</code> object passed for the <code>calendar</code> parameter. This ID must be a valid identifier on ICU&#x2BC;s database or an ID representing an explicit offset, such as <code>GMT-05:30</code>.</p> <p>This can also be an <code>IntlTimeZone</code> or a <code>DateTimeZone</code> object.</p>
		 * @param \IntlCalendar|int|null $calendar <p>Calendar to use for formatting or parsing. The default value is <b><code>null</code></b>, which corresponds to <b><code>IntlDateFormatter::GREGORIAN</code></b>. This can either be one of the IntlDateFormatter calendar constants or an <code>IntlCalendar</code>. Any <code>IntlCalendar</code> object passed will be clone; it will not be changed by the <code>IntlDateFormatter</code>. This will determine the calendar type used (gregorian, islamic, persian, etc.) and, if <b><code>null</code></b> is given for the <code>timezone</code> parameter, also the timezone used.</p>
		 * @param ?string $pattern <p>Optional pattern to use when formatting or parsing. Possible patterns are documented at &#xBB;&#xA0;https://unicode-org.github.io/icu/userguide/format_parse/datetime/.</p>
		 * @return ?IntlDateFormatter <p>The created <code>IntlDateFormatter</code> or <b><code>null</code></b> in case of failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.create.php
		 * @see datefmt_format(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, \IntlTimeZone|\DateTimeZone|string|null $timezone = null, \IntlCalendar|int|null $calendar = null, ?string $pattern = null): ?\IntlDateFormatter {}

		/**
		 * Format the date/time value as a string
		 * <p>Object-oriented style</p><p>Formats the time value as a string.</p>
		 * @param \IntlCalendar|\DateTimeInterface|array|string|int|float $datetime <p>Value to format. This may be a <code>DateTimeInterface</code> object, an <code>IntlCalendar</code> object, a numeric type representing a (possibly fractional) number of seconds since epoch or an <code>array</code> in the format output by <code>localtime()</code>.</p> <p>If a <code>DateTime</code> or an <code>IntlCalendar</code> object is passed, its timezone is not considered. The object will be formatted using the formater&#x2BC;s configured timezone. If one wants to use the timezone of the object to be formatted, <code>IntlDateFormatter::setTimeZone()</code> must be called before with the object&#x2BC;s timezone. Alternatively, the static function <code>IntlDateFormatter::formatObject()</code> may be used instead.</p>
		 * @return string|false <p>The formatted string or, if an error occurred, <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/intldateformatter.format.php
		 * @see datefmt_create(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message(), datefmt_format_object()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function format(\IntlCalendar|\DateTimeInterface|array|string|int|float $datetime): string|false {}

		/**
		 * Formats an object
		 * <p>Object-oriented style</p><p>This function allows formatting an <code>IntlCalendar</code> or <code>DateTime</code> object without first explicitly creating a <code>IntlDateFormatter</code> object.</p><p>The temporary <code>IntlDateFormatter</code> that will be created will take the timezone from the passed in object. The timezone database bundled with PHP will not be used &#x2013; ICU's will be used instead. The timezone identifier used in <code>DateTime</code> objects must therefore also exist in ICU's database.</p>
		 * @param \IntlCalendar|\DateTimeInterface $datetime <p>An object of type <code>IntlCalendar</code> or <code>DateTime</code>. The timezone information in the object will be used.</p>
		 * @param array|int|string|null $format <p>How to format the date/time. This can either be an <code>array</code> with two elements (first the date style, then the time style, these being one of the constants <b><code>IntlDateFormatter::NONE</code></b>, <b><code>IntlDateFormatter::SHORT</code></b>, <b><code>IntlDateFormatter::MEDIUM</code></b>, <b><code>IntlDateFormatter::LONG</code></b>, <b><code>IntlDateFormatter::FULL</code></b>), an <code>int</code> with the value of one of these constants (in which case it will be used both for the time and the date) or a <code>string</code> with the format described in &#xBB;&#xA0;the ICU documentation. If <b><code>null</code></b>, the default style will be used.</p>
		 * @param ?string $locale <p>The locale to use, or <b><code>null</code></b> to use the default one.</p>
		 * @return string|false <p>A string with result or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.formatobject.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0
		 */
		public static function formatObject(\IntlCalendar|\DateTimeInterface $datetime, array|int|string|null $format = null, ?string $locale = null): string|false {}

		/**
		 * Get the calendar type used for the IntlDateFormatter
		 * <p>Object-oriented style</p><p></p>
		 * @return int|false <p>The calendar type being used by the formatter. Either <b><code>IntlDateFormatter::TRADITIONAL</code></b> or <b><code>IntlDateFormatter::GREGORIAN</code></b>. Returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.getcalendar.php
		 * @see datefmt_get_calendar_object(), datefmt_set_calendar(), datefmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getCalendar(): int|false {}

		/**
		 * Get copy of formatterʼs calendar object
		 * <p>Object-oriented style</p><p>Obtain a copy of the calendar object used internally by this formatter. This calendar will have a type (as in gregorian, japanese, buddhist, roc, persian, islamic, etc.) and a timezone that match the type and timezone used by the formatter. The date/time of the object is unspecified.</p>
		 * @return IntlCalendar|false|null <p>A copy of the internal calendar object used by this formatter, or <b><code>null</code></b> if none has been set, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.getcalendarobject.php
		 * @see IntlDateFormatter::getCalendar(), IntlDateFormatter::setCalendar()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0
		 */
		public function getCalendarObject(): \IntlCalendar|false|null {}

		/**
		 * Get the datetype used for the IntlDateFormatter
		 * <p>Object-oriented style</p><p>Returns date type used by the formatter.</p>
		 * @return int|false <p>The current date type value of the formatter, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.getdatetype.php
		 * @see datefmt_get_timetype(), datefmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getDateType(): int|false {}

		/**
		 * Get the error code from last operation
		 * <p>Object-oriented style</p><p>Get the error code from last operation. Returns error code from the last number formatting operation.</p>
		 * @return int <p>The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.</p>
		 * @link https://php.net/manual/en/intldateformatter.geterrorcode.php
		 * @see datefmt_get_error_message(), intl_get_error_code(), intl_is_failure()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getErrorCode(): int {}

		/**
		 * Get the error text from the last operation
		 * <p>Object-oriented style</p><p>Get the error text from the last operation.</p>
		 * @return string <p>Description of the last error.</p>
		 * @link https://php.net/manual/en/intldateformatter.geterrormessage.php
		 * @see datefmt_get_error_code(), intl_get_error_code(), intl_is_failure()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getErrorMessage(): string {}

		/**
		 * Get the locale used by formatter
		 * <p>Object-oriented style</p><p>Get locale used by the formatter.</p>
		 * @param int $type <p>You can choose between valid and actual locale ( <b><code>Locale::VALID_LOCALE</code></b>, <b><code>Locale::ACTUAL_LOCALE</code></b>, respectively). The default is the actual locale.</p>
		 * @return string|false <p>The locale of this formatter, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.getlocale.php
		 * @see datefmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getLocale(int $type = ULOC_ACTUAL_LOCALE): string|false {}

		/**
		 * Get the pattern used for the IntlDateFormatter
		 * <p>Object-oriented style</p><p>Get pattern used by the formatter.</p>
		 * @return string|false <p>The pattern string being used to format/parse, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.getpattern.php
		 * @see datefmt_set_pattern(), datefmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getPattern(): string|false {}

		/**
		 * Get the timetype used for the IntlDateFormatter
		 * <p>Object-oriented style</p><p>Return time type used by the formatter.</p>
		 * @return int|false <p>The current date type value of the formatter, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.gettimetype.php
		 * @see datefmt_get_datetype(), datefmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getTimeType(): int|false {}

		/**
		 * Get formatterʼs timezone
		 * <p>Object-oriented style</p><p>Returns an <code>IntlTimeZone</code> object representing the timezone that will be used by this object to format dates and times. When formatting <code>IntlCalendar</code> and <code>DateTime</code> objects with this <code>IntlDateFormatter</code>, the timezone used will be the one returned by this method, not the one associated with the objects being formatted.</p>
		 * @return IntlTimeZone|false <p>The associated <code>IntlTimeZone</code> object or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.gettimezone.php
		 * @see IntlDateFormatter::getTimeZoneId(), IntlDateFormatter::setTimeZone()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0
		 */
		public function getTimeZone(): \IntlTimeZone|false {}

		/**
		 * Get the timezone-id used for the IntlDateFormatter
		 * <p>Object-oriented style</p><p>Get the timezone-id used for the IntlDateFormatter.</p>
		 * @return string|false <p>ID string for the time zone used by this formatter, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.gettimezoneid.php
		 * @see datefmt_set_timezone(), datefmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getTimeZoneId(): string|false {}

		/**
		 * Get the lenient used for the IntlDateFormatter
		 * <p>Object-oriented style</p><p>Check if the parser is strict or lenient in interpreting inputs that do not match the pattern exactly.</p>
		 * @return bool <p><b><code>true</code></b> if parser is lenient, <b><code>false</code></b> if parser is strict. By default the parser is lenient.</p>
		 * @link https://php.net/manual/en/intldateformatter.islenient.php
		 * @see datefmt_set_lenient(), datefmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function isLenient(): bool {}

		/**
		 * Parse string to a field-based time value
		 * <p>Object-oriented style</p><p>Converts string $value to a field-based time value ( an array of various fields), starting at $parse_pos and consuming as much of the input value as possible.</p>
		 * @param string $string <p>string to convert to a time</p>
		 * @param int $offset <p>Position at which to start the parsing in $value (zero-based). If no error occurs before $value is consumed, $parse_pos will contain -1 otherwise it will contain the position at which parsing ended . If $parse_pos &gt; strlen($value), the parse fails immediately.</p>
		 * @return array|false <p>Localtime compatible array of integers : contains 24 hour clock value in tm_hour field, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.localtime.php
		 * @see datefmt_create(), datefmt_format(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function localtime(string $string, int &$offset = null): array|false {}

		/**
		 * Parse string to a timestamp value
		 * <p>Object-oriented style</p><p>Converts <code>string</code> to an incremental time value, starting at <code>offset</code> and consuming as much of the input value as possible.</p>
		 * @param string $string <p>string to convert to a time</p>
		 * @param int $offset <p>Position at which to start the parsing in <code>string</code> (zero-based). If no error occurs before <code>string</code> is consumed, <code>offset</code> will contain -1 otherwise it will contain the position at which parsing ended (and the error occurred). This variable will contain the end position if the parse fails. If <code>offset</code> &gt; <code>strlen($string)</code>, the parse fails immediately.</p>
		 * @return int|float|false <p>Timestamp of parsed value, or <b><code>false</code></b> if value cannot be parsed.</p>
		 * @link https://php.net/manual/en/intldateformatter.parse.php
		 * @see datefmt_create(), datefmt_format(), datefmt_localtime(), datefmt_get_error_code(), datefmt_get_error_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function parse(string $string, int &$offset = null): int|float|false {}

		/**
		 * Sets the calendar type used by the formatter
		 * <p>Object-oriented style</p><p>Sets the calendar or calendar type used by the formatter.</p>
		 * @param \IntlCalendar|int|null $calendar <p>This can either be: the calendar type to use (default is <b><code>IntlDateFormatter::GREGORIAN</code></b>, which is also used if <b><code>null</code></b> is specified) or an <code>IntlCalendar</code> object.</p> <p>Any <code>IntlCalendar</code> object passed in will be cloned; no modifications will be made to the argument object.</p> <p>The timezone of the formatter will only be kept if an <code>IntlCalendar</code> object is not passed, otherwise the new timezone will be that of the passed object.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.setcalendar.php
		 * @see datefmt_get_calendar(), datefmt_get_calendar_object(), datefmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function setCalendar(\IntlCalendar|int|null $calendar): bool {}

		/**
		 * Set the leniency of the parser
		 * <p>Object-oriented style</p><p>Define if the parser is strict or lenient in interpreting inputs that do not match the pattern exactly. Enabling lenient parsing allows the parser to accept otherwise flawed date or time patterns, parsing as much as possible to obtain a value. Extra space, unrecognized tokens, or invalid values ("February 30th") are not accepted.</p>
		 * @param bool $lenient <p>Sets whether the parser is lenient or not, default is <b><code>true</code></b> (lenient).</p>
		 * @return void <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.setlenient.php
		 * @see datefmt_is_lenient(), datefmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function setLenient(bool $lenient): void {}

		/**
		 * Set the pattern used for the IntlDateFormatter
		 * <p>Object-oriented style</p><p>Set the pattern used for the IntlDateFormatter.</p>
		 * @param string $pattern <p>New pattern string to use. Possible patterns are documented at &#xBB;&#xA0;https://unicode-org.github.io/icu/userguide/format_parse/datetime/.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. Bad formatstrings are usually the cause of the failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.setpattern.php
		 * @see datefmt_get_pattern(), datefmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function setPattern(string $pattern): bool {}

		/**
		 * Sets formatterʼs timezone
		 * <p>Object-oriented style</p><p>Sets the timezone used for the IntlDateFormatter. object.</p>
		 * @param \IntlTimeZone|\DateTimeZone|string|null $timezone <p>The timezone to use for this formatter. This can be specified in the following forms:</p> <ul> <li> <p><b><code>null</code></b>, in which case the default timezone will be used, as specified in the ini setting date.timezone or through the function <code>date_default_timezone_set()</code> and as returned by <code>date_default_timezone_get()</code>.</p> </li> <li> <p>An <code>IntlTimeZone</code>, which will be used directly.</p> </li> <li> <p>A <code>DateTimeZone</code>. Its identifier will be extracted and an ICU timezone object will be created; the timezone will be backed by ICU&#x2BC;s database, not PHP&#x2BC;s.</p> </li> <li> <p>A <code>string</code>, which should be a valid ICU timezone identifier. See <code>IntlTimeZone::createTimeZoneIDEnumeration()</code>. Raw offsets such as <code>"GMT+08:30"</code> are also accepted.</p> </li> </ul>
		 * @return ?bool <p>Returns <b><code>null</code></b> on success and <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldateformatter.settimezone.php
		 * @see IntlDateFormatter::getTimeZone()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0
		 */
		public function setTimeZone(\IntlTimeZone|\DateTimeZone|string|null $timezone): ?bool {}
	}

	/**
	 * <p>Generates localized date and/or time format pattern strings suitable for use in <code>IntlDateFormatter</code>.</p>
	 * @link https://php.net/manual/en/class.intldatepatterngenerator.php
	 * @since PHP 8 >= 8.1.0
	 */
	class IntlDatePatternGenerator {

		/**
		 * Creates a new IntlDatePatternGenerator instance
		 * <p>Creates a new <code>IntlDatePatternGenerator</code> instance.</p>
		 * @param ?string $locale <p>The locale. If <b><code>null</code></b> is passed, uses the ini setting intl.default_locale.</p>
		 * @return ?IntlDatePatternGenerator <p>Returns an <code>IntlDatePatternGenerator</code> instance on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldatepatterngenerator.create.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function __construct(?string $locale = null) {}

		/**
		 * Creates a new IntlDatePatternGenerator instance
		 * <p>Creates a new <code>IntlDatePatternGenerator</code> instance.</p>
		 * @param ?string $locale <p>The locale. If <b><code>null</code></b> is passed, uses the ini setting intl.default_locale.</p>
		 * @return ?IntlDatePatternGenerator <p>Returns an <code>IntlDatePatternGenerator</code> instance on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldatepatterngenerator.create.php
		 * @since PHP 8 >= 8.1.0
		 */
		public static function create(?string $locale = null): ?\IntlDatePatternGenerator {}

		/**
		 * Determines the most suitable date/time format
		 * <p>Determines which date/time format is most suitable for a particular locale.</p>
		 * @param string $skeleton <p>The skeleton.</p>
		 * @return string|false <p>Returns a format, accepted by <code>DateTimeInterface::format()</code> on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intldatepatterngenerator.getbestpattern.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function getBestPattern(string $skeleton): string|false {}
	}

	/**
	 * <p>This class is used for generating exceptions when errors occur inside intl functions. Such exceptions are only generated when intl.use_exceptions is enabled.</p>
	 * @link https://php.net/manual/en/class.intlexception.php
	 * @since PHP 5 > 5.5.0, PHP 7, PHP 8, PECL intl > 3.0.0a1
	 */
	class IntlException extends \Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * Construct the exception
		 * <p>Constructs the Exception.</p>
		 * @param string $message <p>The Exception message to throw.</p>
		 * @param int $code <p>The Exception code.</p>
		 * @param ?\Throwable $previous <p>The previous exception used for the exception chaining.</p>
		 * @return self
		 * @link https://php.net/manual/en/exception.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null) {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * @link https://php.net/manual/en/class.intlgregoriancalendar.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	class IntlGregorianCalendar extends \IntlCalendar {

		/**
		 * Create the Gregorian Calendar class
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \IntlTimeZone $tz
		 * @param string $locale
		 * @return self
		 * @link https://php.net/manual/en/intlgregoriancalendar.construct.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function __construct(\IntlTimeZone $tz = null, string $locale = null) {}

		/**
		 * Add a (signed) amount of time to a field
		 * <p>Object-oriented style</p><p>Add a signed amount to a field. Adding a positive amount allows advances in time, even if the numeric value of the field decreases (e.g. when working with years in BC dates).</p><p>Other fields may need to adjusted &#x2013; for instance, adding a month to the 31st of January will result in the 28th (or 29th) of February. Contrary to <code>IntlCalendar::roll()</code>, when a value wraps around, more significant fields may change. For instance, adding a day to the 31st of January will result in the 1st of February, not the 1st of January.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @param int $value <p>The signed amount to add to the current field. If the amount is positive, the instant will be moved forward; if it is negative, the instant will be moved into the past. The unit is implicit to the field type. For instance, hours for <b><code>IntlCalendar::FIELD_HOUR_OF_DAY</code></b>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.add.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function add(int $field, int $value): bool {}

		/**
		 * Whether this objectʼs time is after that of the passed object
		 * <p>Object-oriented style</p><p>Returns whether this object&#x2BC;s time succeeds the argument&#x2BC;s time.</p>
		 * @param \IntlCalendar $other <p>The calendar whose time will be checked against the primary object&#x2BC;s time.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this object&#x2BC;s current time is after that of the <code>calendar</code> argument&#x2BC;s time. Returns <b><code>false</code></b> otherwise.</p><p>On failure <b><code>false</code></b> is also returned. To detect error conditions use <code>intl_get_error_code()</code>, or set up Intl to throw exceptions.</p>
		 * @link https://php.net/manual/en/intlcalendar.after.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function after(\IntlCalendar $other): bool {}

		/**
		 * Whether this objectʼs time is before that of the passed object
		 * <p>Object-oriented style</p><p>Returns whether this object&#x2BC;s time precedes the argument&#x2BC;s time.</p>
		 * @param \IntlCalendar $other <p>The calendar whose time will be checked against the primary object&#x2BC;s time.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this object&#x2BC;s current time is before that of the <code>calendar</code> argument&#x2BC;s time. Returns <b><code>false</code></b> otherwise.</p><p>On failure <b><code>false</code></b> is also returned. To detect error conditions use <code>intl_get_error_code()</code>, or set up Intl to throw exceptions.</p>
		 * @link https://php.net/manual/en/intlcalendar.before.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function before(\IntlCalendar $other): bool {}

		/**
		 * Clear a field or all fields
		 * <p>Object-oriented style</p><p>Clears either all of the fields or a specific field. A cleared field is marked as unset, giving it the lowest priority against overlapping fields or even default values when calculating the time. Additionally, its value is set to <code>0</code>, though given the field&#x2BC;s low priority, its value may have been internally set to another value by the time the field has finished been queried.</p>
		 * @param ?int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.clear.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function clear(?int $field = null): true {}

		/**
		 * Create a new IntlCalendar
		 * <p>Object-oriented style</p><p>Given a timezone and locale, this method creates an <code>IntlCalendar</code> object. This factory method may return a subclass of <code>IntlCalendar</code>.</p><p>The calendar created will represent the time instance at which it was created, based on the system time. The fields can all be cleared by calling <b>IntCalendar::clear()</b> with no arguments. See also <code>IntlGregorianCalendar::__construct()</code>.</p>
		 * @param \IntlTimeZone|\DateTimeZone|string|null $timezone <p>The timezone to use.</p> <ul> <li> <p><b><code>null</code></b>, in which case the default timezone will be used, as specified in the ini setting date.timezone or through the function <code>date_default_timezone_set()</code> and as returned by <code>date_default_timezone_get()</code>.</p> </li> <li> <p>An <code>IntlTimeZone</code>, which will be used directly.</p> </li> <li> <p>A <code>DateTimeZone</code>. Its identifier will be extracted and an ICU timezone object will be created; the timezone will be backed by ICU&#x2BC;s database, not PHP&#x2BC;s.</p> </li> <li> <p>A <code>string</code>, which should be a valid ICU timezone identifier. See <code>IntlTimeZone::createTimeZoneIDEnumeration()</code>. Raw offsets such as <code>"GMT+08:30"</code> are also accepted.</p> </li> </ul>
		 * @param ?string $locale <p>A locale to use or <b><code>null</code></b> to use the default locale.</p>
		 * @return ?IntlCalendar <p>The created <code>IntlCalendar</code> instance or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.createinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function createInstance(\IntlTimeZone|\DateTimeZone|string|null $timezone = null, ?string $locale = null): ?\IntlCalendar {}

		/**
		 * Compare time of two IntlCalendar objects for equality
		 * <p>Object-oriented style</p><p>Returns true if this calendar and the given calendar have the same time. The settings, calendar types and field states do not have to be the same.</p>
		 * @param \IntlCalendar $other <p>The calendar to compare with the primary object.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the current time of both this and the passed in <code>IntlCalendar</code> object are the same, or <b><code>false</code></b> otherwise.</p><p>On failure <b><code>false</code></b> is also returned. To detect error conditions use <code>intl_get_error_code()</code>, or set up Intl to throw exceptions.</p>
		 * @link https://php.net/manual/en/intlcalendar.equals.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function equals(\IntlCalendar $other): bool {}

		/**
		 * Calculate difference between given time and this objectʼs time
		 * <p>Object-oriented style</p><p>Return the difference between the given time and the time this object is set to, with respect to the quantity specified the <code>field</code> parameter.</p><p>This method is meant to be called successively, first with the most significant field of interest down to the least significant field. To this end, as a side effect, this calendar&#x2BC;s value for the field specified is advanced by the amount returned.</p>
		 * @param float $timestamp <p>The time against which to compare the quantity represented by the <code>field</code>. For the result to be positive, the time given for this parameter must be ahead of the time of the object the method is being invoked on.</p>
		 * @param int $field <p>The field that represents the quantity being compared.</p> <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>Returns a (signed) difference of time in the unit associated with the specified field or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.fielddifference.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function fieldDifference(float $timestamp, int $field): int|false {}

		/**
		 * Create an IntlCalendar from a DateTime object or string
		 * <p>Object-oriented style</p><p>Creates an <code>IntlCalendar</code> object either from a <code>DateTime</code> object or from a string from which a <code>DateTime</code> object can be built.</p><p>The new calendar will represent not only the same instant as the given <code>DateTime</code> (subject to precision loss for dates very far into the past or future), but also the same timezone (subject to the caveat that different timezone databases will be used, and therefore the results may differ).</p>
		 * @param \DateTime|string $datetime <p>A <code>DateTime</code> object or a <code>string</code> that can be passed to <code>DateTime::__construct()</code>.</p>
		 * @param ?string $locale
		 * @return ?IntlCalendar <p>The created <code>IntlCalendar</code> object or <b><code>null</code></b> in case of failure. If a <code>string</code> is passed, any exception that occurs inside the <code>DateTime</code> constructor is propagated.</p>
		 * @link https://php.net/manual/en/intlcalendar.fromdatetime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a2
		 */
		public static function fromDateTime(\DateTime|string $datetime, ?string $locale = null): ?\IntlCalendar {}

		/**
		 * Get the value for a field
		 * <p>Object-oriented style</p><p>Gets the value for a specific field.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An integer with the value of the time field.</p>
		 * @link https://php.net/manual/en/intlcalendar.get.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function get(int $field): int|false {}

		/**
		 * The maximum value for a field, considering the objectʼs current time
		 * <p>Object-oriented style</p><p>Returns a field&#x2BC;s relative maximum value around the current time. The exact semantics vary by field, but in the general case this is the value that would be obtained if one would set the field value into the smallest relative maximum for the field and would increment it until reaching the global maximum or the field value wraps around, in which the value returned would be the global maximum or the value before the wrapping, respectively.</p><p>For instance, in the gregorian calendar, the actual maximum value for the day of month would vary between <code>28</code> and <code>31</code>, depending on the month and year of the current time.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing the maximum value in the units associated with the given <code>field</code> or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getactualmaximum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getActualMaximum(int $field): int|false {}

		/**
		 * The minimum value for a field, considering the objectʼs current time
		 * <p>Object-oriented style</p><p>Returns a field&#x2BC;s relative minimum value around the current time. The exact semantics vary by field, but in the general case this is the value that would be obtained if one would set the field value into the greatest relative minimum for the field and would decrement it until reaching the global minimum or the field value wraps around, in which the value returned would be the global minimum or the value before the wrapping, respectively.</p><p>For the Gregorian calendar, this is always the same as <code>IntlCalendar::getMinimum()</code>.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing the minimum value in the field&#x2BC;s unit or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getactualminimum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getActualMinimum(int $field): int|false {}

		/**
		 * Get array of locales for which there is data
		 * <p>Object-oriented style</p><p>Gives the list of locales for which calendars are installed. As of ICU 51, this is the list of all installed ICU locales.</p>
		 * @return array <p>An <code>array</code> of <code>string</code>s, one for which locale.</p>
		 * @link https://php.net/manual/en/intlcalendar.getavailablelocales.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getAvailableLocales(): array {}

		/**
		 * Tell whether a day is a weekday, weekend or a day that has a transition between the two
		 * <p>Object-oriented style</p><p>Returns whether the passed day is a weekday (<b><code>IntlCalendar::DOW_TYPE_WEEKDAY</code></b>), a weekend day (<b><code>IntlCalendar::DOW_TYPE_WEEKEND</code></b>), a day during which a transition occurs into the weekend (<b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b>) or a day during which the weekend ceases (<b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b>).</p><p>If the return is either <b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b> or <b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b>, then <code>IntlCalendar::getWeekendTransition()</code> can be called to obtain the time of the transition.</p><p>This function requires ICU 4.4 or later.</p>
		 * @param int $dayOfWeek <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, &#x2026;, <b><code>IntlCalendar::DOW_SATURDAY</code></b>.</p>
		 * @return int|false <p>Returns one of the constants <b><code>IntlCalendar::DOW_TYPE_WEEKDAY</code></b>, <b><code>IntlCalendar::DOW_TYPE_WEEKEND</code></b>, <b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b> or <b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b> or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getdayofweektype.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getDayOfWeekType(int $dayOfWeek): int|false {}

		/**
		 * Get last error code on the object
		 * <p>Object-oriented style (method):</p><p>Returns the numeric ICU error code for the last call on this object (including cloning) or the <code>IntlCalendar</code> given for the <code>calendar</code> parameter (in the procedural&#x2012;style version). This may indicate only a warning (negative error code) or no error at all (<b><code>U_ZERO_ERROR</code></b>). The actual presence of an error can be tested with <code>intl_is_failure()</code>.</p><p>Invalid arguments detected on the PHP side (before invoking functions of the ICU library) are not recorded for the purposes of this function.</p><p>The last error that occurred in any call to a function of the intl extension, including early argument errors, can be obtained with <code>intl_get_error_code()</code>. This function resets the global error code, but not the object&#x2BC;s error code.</p>
		 * @return int|false <p>An ICU error code indicating either success, failure or a warning. Returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.geterrorcode.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getErrorCode(): int|false {}

		/**
		 * Get last error message on the object
		 * <p>Object-oriented style (method):</p><p>Returns the error message (if any) associated with the error reported by <code>IntlCalendar::getErrorCode()</code> or <code>intlcal_get_error_code()</code>. If there is no associated error message, only the string representation of the name of the error constant will be returned. Otherwise, the message also includes a message set on the side of the PHP binding.</p>
		 * @return string|false <p>The error message associated with last error that occurred in a function call on this object, or a string indicating the non-existence of an error. Returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.geterrormessage.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getErrorMessage(): string|false {}

		/**
		 * Get the first day of the week for the calendarʼs locale
		 * <p>Object-oriented style</p><p>The week day deemed to start a week, either the default value for this locale or the value set with <code>IntlCalendar::setFirstDayOfWeek()</code>.</p>
		 * @return int|false <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, &#x2026;, <b><code>IntlCalendar::DOW_SATURDAY</code></b> or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getfirstdayofweek.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getFirstDayOfWeek(): int|false {}

		/**
		 * Get the largest local minimum value for a field
		 * <p>Object-oriented style</p><p>Returns the largest local minimum for a field. This should be a value larger or equal to that returned by <code>IntlCalendar::getActualMinimum()</code>, which is in its turn larger or equal to that returned by <code>IntlCalendar::getMinimum()</code>. All these three functions return the same value for the Gregorian calendar.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing a field value, in the field&#x2BC;s unit, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getgreatestminimum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getGreatestMinimum(int $field): int|false {}

		/**
		 * Get the Gregorian Calendar change date
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return float <p>Returns the change date.</p>
		 * @link https://php.net/manual/en/intlgregoriancalendar.getgregorianchange.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getGregorianChange(): float {}

		/**
		 * Get set of locale keyword values
		 * <p>Object-oriented style</p><p>For a given locale key, get the set of values for that key that would result in a different behavior. For now, only the <code>'calendar'</code> keyword is supported.</p><p>This function requires ICU 4.2 or later.</p>
		 * @param string $keyword <p>The locale keyword for which relevant values are to be queried. Only <code>'calendar'</code> is supported.</p>
		 * @param string $locale <p>The locale onto which the keyword/value pair are to be appended.</p>
		 * @param bool $onlyCommon <p>Whether to show only the values commonly used for the specified locale.</p>
		 * @return IntlIterator|false <p>An iterator that yields strings with the locale keyword values or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getkeywordvaluesforlocale.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getKeywordValuesForLocale(string $keyword, string $locale, bool $onlyCommon): \IntlIterator|false {}

		/**
		 * Get the smallest local maximum for a field
		 * <p>Object-oriented style</p><p>Returns the smallest local maximumw for a field. This should be a value smaller or equal to that returned by <b>IntlCalendar::getActualMaxmimum()</b>, which is in its turn smaller or equal to that returned by <code>IntlCalendar::getMaximum()</code>.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing a field value in the field&#x2BC;s unit or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getleastmaximum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getLeastMaximum(int $field): int|false {}

		/**
		 * Get the locale associated with the object
		 * <p>Object-oriented style</p><p>Returns the locale used by this calendar object.</p>
		 * @param int $type <p>Whether to fetch the actual locale (the locale from which the calendar data originates, with <b><code>Locale::ACTUAL_LOCALE</code></b>) or the valid locale, i.e., the most specific locale supported by ICU relatively to the requested locale &#x2013; see <b><code>Locale::VALID_LOCALE</code></b>. From the most general to the most specific, the locales are ordered in this fashion &#x2013; actual locale, valid locale, requested locale.</p>
		 * @return string|false <p>A locale string or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getlocale.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getLocale(int $type): string|false {}

		/**
		 * Get the global maximum value for a field
		 * <p>Object-oriented style</p><p>Gets the global maximum for a field, in this specific calendar. This value is larger or equal to that returned by <code>IntlCalendar::getActualMaximum()</code>, which is in its turn larger or equal to that returned by <code>IntlCalendar::getLeastMaximum()</code>.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing a field value in the field&#x2BC;s unit or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getmaximum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getMaximum(int $field): int|false {}

		/**
		 * Get minimal number of days the first week in a year or month can have
		 * <p>Object-oriented style</p><p>Returns the smallest number of days the first week of a year or month must have in the new year or month. For instance, in the Gregorian calendar, if this value is 1, then the first week of the year will necessarily include January 1st, while if this value is 7, then the week with January 1st will be the first week of the year only if the day of the week for January 1st matches the day of the week returned by <code>IntlCalendar::getFirstDayOfWeek()</code>; otherwise it will be the previous year&#x2BC;s last week.</p>
		 * @return int|false <p>An <code>int</code> representing a number of days or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getminimaldaysinfirstweek.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getMinimalDaysInFirstWeek(): int|false {}

		/**
		 * Get the global minimum value for a field
		 * <p>Object-oriented style</p><p>Gets the global minimum for a field, in this specific calendar. This value is smaller or equal to that returned by <code>IntlCalendar::getActualMinimum()</code>, which is in its turn smaller or equal to that returned by <code>IntlCalendar::getGreatestMinimum()</code>. For the Gregorian calendar, these three functions always return the same value (for each field).</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return int|false <p>An <code>int</code> representing a value for the given field in the field&#x2BC;s unit or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getminimum.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getMinimum(int $field): int|false {}

		/**
		 * Get number representing the current time
		 * <p>Object-oriented style</p><p>The number of milliseconds that have passed since the reference date. This number is derived from the system time.</p>
		 * @return float <p>A <code>float</code> representing a number of milliseconds since the epoch, not counting leap seconds.</p>
		 * @link https://php.net/manual/en/intlcalendar.getnow.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getNow(): float {}

		/**
		 * Get behavior for handling repeating wall time
		 * <p>Object-oriented style</p><p>Gets the current strategy for dealing with wall times that are repeated whenever the clock is set back during dailight saving time end transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p><p>This function requires ICU 4.9 or later.</p>
		 * @return int <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b> or <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.getrepeatedwalltimeoption.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getRepeatedWallTimeOption(): int {}

		/**
		 * Get behavior for handling skipped wall time
		 * <p>Object-oriented style</p><p>Gets the current strategy for dealing with wall times that are skipped whenever the clock is forwarded during dailight saving time start transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p><p>The calendar must be lenient for this option to have any effect, otherwise attempting to set a non-existing time will cause an error.</p><p>This function requires ICU 4.9 or later.</p>
		 * @return int <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b>, <b><code>IntlCalendar::WALLTIME_LAST</code></b> or <b><code>IntlCalendar::WALLTIME_NEXT_VALID</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.getskippedwalltimeoption.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getSkippedWallTimeOption(): int {}

		/**
		 * Get time currently represented by the object
		 * <p>Object-oriented style</p><p>Returns the time associated with this object, expressed as the number of milliseconds since the epoch.</p>
		 * @return float|false <p>A <code>float</code> representing the number of milliseconds elapsed since the reference time (1 Jan 1970 00:00:00 UTC), or <b><code>false</code></b> on failure</p>
		 * @link https://php.net/manual/en/intlcalendar.gettime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getTime(): float|false {}

		/**
		 * Get the objectʼs timezone
		 * <p>Object-oriented style</p><p>Returns the <code>IntlTimeZone</code> object associated with this calendar.</p>
		 * @return IntlTimeZone|false <p>An <code>IntlTimeZone</code> object corresponding to the one used internally in this object. Returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.gettimezone.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getTimeZone(): \IntlTimeZone|false {}

		/**
		 * Get the calendar type
		 * <p>Object-oriented style</p><p>A string describing the type of this calendar. This is one of the valid values for the calendar keyword value <code>'calendar'</code>.</p>
		 * @return string <p>A <code>string</code> representing the calendar type, such as <code>'gregorian'</code>, <code>'islamic'</code>, etc.</p>
		 * @link https://php.net/manual/en/intlcalendar.gettype.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getType(): string {}

		/**
		 * Get time of the day at which weekend begins or ends
		 * <p>Object-oriented style</p><p>Returns the number of milliseconds after midnight at which the weekend begins or ends.</p><p>This is only applicable for days of the week for which <code>IntlCalendar::getDayOfWeekType()</code> returns either <b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b> or <b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b>. Calling this function for other days of the week is an error condition.</p><p>This function requires ICU 4.4 or later.</p>
		 * @param int $dayOfWeek <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, &#x2026;, <b><code>IntlCalendar::DOW_SATURDAY</code></b>.</p>
		 * @return int|false <p>The number of milliseconds into the day at which the weekend begins or ends or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.getweekendtransition.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getWeekendTransition(int $dayOfWeek): int|false {}

		/**
		 * Whether the objectʼs time is in Daylight Savings Time
		 * <p>Object-oriented style</p><p>Whether, for the instant represented by this object and for this object&#x2BC;s timezone, daylight saving time is in place.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the date is in Daylight Savings Time, <b><code>false</code></b> otherwise.</p><p>On failure <b><code>false</code></b> is also returned. To detect error conditions use <code>intl_get_error_code()</code>, or set up Intl to throw exceptions.</p>
		 * @link https://php.net/manual/en/intlcalendar.indaylighttime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function inDaylightTime(): bool {}

		/**
		 * Whether another calendar is equal but for a different time
		 * <p>Object-oriented style</p><p>Returns whether this and the given object are equivalent for all purposes except as to the time they have set. The locales do not have to match, as long as no change in behavior results from such mismatch. This includes the timezone, whether the lenient mode is set, the repeated and skipped wall time settings, the days of the week when the weekend starts and ceases and the times where such transitions occur. It may also include other calendar specific settings, such as the Gregorian/Julian transition instant.</p>
		 * @param \IntlCalendar $other <p>The other calendar against which the comparison is to be made.</p>
		 * @return bool <p>Assuming there are no argument errors, returns <b><code>true</code></b> if the calendars are equivalent except possibly for their set time.</p>
		 * @link https://php.net/manual/en/intlcalendar.isequivalentto.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function isEquivalentTo(\IntlCalendar $other): bool {}

		/**
		 * Determine if the given year is a leap year
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $year
		 * @return bool <p>Returns <b><code>true</code></b> for leap years, <b><code>false</code></b> otherwise and on failure.</p>
		 * @link https://php.net/manual/en/intlgregoriancalendar.isleapyear.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function isLeapYear(int $year): bool {}

		/**
		 * Whether date/time interpretation is in lenient mode
		 * <p>Object-oriented style</p><p>Returns whether the current date/time interpretations is lenient (the default). If that is case, some out of range values for fields will be accepted instead of raising an error.</p>
		 * @return bool <p>A <code>bool</code> representing whether the calendar is set to lenient mode.</p>
		 * @link https://php.net/manual/en/intlcalendar.islenient.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function isLenient(): bool {}

		/**
		 * Whether a field is set
		 * <p>Object-oriented style</p><p>Returns whether a field is set (as opposed to clear). Set fields take priority over unset fields and their default values when the date/time is being calculated. Fields set later take priority over fields set earlier.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @return bool <p>Assuming there are no argument errors, returns <b><code>true</code></b> if the field is set.</p>
		 * @link https://php.net/manual/en/intlcalendar.isset.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function isSet(int $field): bool {}

		/**
		 * Whether a certain date/time is in the weekend
		 * <p>Object-oriented style</p><p>Returns whether either the obejct&#x2BC;s current time or the provided timestamp occur during a weekend in this object&#x2BC;s calendar system.</p><p>This function requires ICU 4.4 or later.</p>
		 * @param ?float $timestamp <p>An optional timestamp representing the number of milliseconds since the epoch, excluding leap seconds. If <b><code>null</code></b>, this object&#x2BC;s current time is used instead.</p>
		 * @return bool <p>A <code>bool</code> indicating whether the given or this object&#x2BC;s time occurs in a weekend.</p><p>On failure <b><code>false</code></b> is also returned. To detect error conditions use <code>intl_get_error_code()</code>, or set up Intl to throw exceptions.</p>
		 * @link https://php.net/manual/en/intlcalendar.isweekend.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function isWeekend(?float $timestamp = null): bool {}

		/**
		 * Add value to field without carrying into more significant fields
		 * <p>Object-oriented style</p><p>Adds a (signed) amount to a field. The difference with respect to <code>IntlCalendar::add()</code> is that when the field value overflows, it does not carry into more significant fields.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @param int|bool $value <p>The (signed) amount to add to the field, <b><code>true</code></b> for rolling up (adding <code>1</code>), or <b><code>false</code></b> for rolling down (subtracting <code>1</code>).</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.roll.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function roll(int $field, int|bool $value): bool {}

		/**
		 * Set a time field or several common fields at once
		 * <p>Object-oriented style</p><p>Sets either a specific field to the given value, or sets at once several common fields. The range of values that are accepted depend on whether the calendar is using the lenient mode.</p><p>For fields that conflict, the fields that are set later have priority.</p><p>This method cannot be called with exactly four arguments.</p>
		 * @param int $field <p>One of the <code>IntlCalendar</code> date/time field constants. These are integer values between <code>0</code> and <b><code>IntlCalendar::FIELD_COUNT</code></b>.</p>
		 * @param int $value <p>The new value of the given field.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.set.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function set(int $field, int $value): true {}

		/**
		 * Set the day on which the week is deemed to start
		 * <p>Object-oriented style</p><p>Defines the day of week deemed to start the week. This affects the behavior of fields that depend on the concept of week start and end such as <b><code>IntlCalendar::FIELD_WEEK_OF_YEAR</code></b> and <b><code>IntlCalendar::FIELD_YEAR_WOY</code></b>.</p>
		 * @param int $dayOfWeek <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, &#x2026;, <b><code>IntlCalendar::DOW_SATURDAY</code></b>.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.setfirstdayofweek.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setFirstDayOfWeek(int $dayOfWeek): true {}

		/**
		 * Set the Gregorian Calendar the change date
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param float $timestamp
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlgregoriancalendar.setgregorianchange.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setGregorianChange(float $timestamp): bool {}

		/**
		 * Set whether date/time interpretation is to be lenient
		 * <p>Object-oriented style</p><p>Defines whether the calendar is &#x2018;lenient mode&#x2019;. In such a mode, some of out-of-bounds values for some fields are accepted, the behavior being similar to that of <code>IntlCalendar::add()</code> (i.e., the value wraps around, carrying into more significant fields each time). If the lenient mode is off, then such values will generate an error.</p>
		 * @param bool $lenient <p>Use <b><code>true</code></b> to activate the lenient mode; <b><code>false</code></b> otherwise.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.setlenient.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setLenient(bool $lenient): true {}

		/**
		 * Set minimal number of days the first week in a year or month can have
		 * <p>Object-oriented style</p><p>Sets the smallest number of days the first week of a year or month must have in the new year or month. For instance, in the Gregorian calendar, if this value is 1, then the first week of the year will necessarily include January 1st, while if this value is 7, then the week with January 1st will be the first week of the year only if the day of the week for January 1st matches the day of the week returned by <code>IntlCalendar::getFirstDayOfWeek()</code>; otherwise it will be the previous year&#x2BC;s last week.</p>
		 * @param int $days <p>The number of minimal days to set.</p>
		 * @return bool <p><b><code>true</code></b> on success, <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.setminimaldaysinfirstweek.php
		 * @since PHP 5 >= 5.5.1, PHP 7, PHP 8
		 */
		public function setMinimalDaysInFirstWeek(int $days): bool {}

		/**
		 * Set behavior for handling repeating wall times at negative timezone offset transitions
		 * <p>Object-oriented style</p><p>Sets the current strategy for dealing with wall times that are repeated whenever the clock is set back during dailight saving time end transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b> (take the post-DST instant). The other possible value is <b><code>IntlCalendar::WALLTIME_FIRST</code></b> (take the instant that occurs during DST).</p><p>This function requires ICU 4.9 or later.</p>
		 * @param int $option <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b> or <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.setrepeatedwalltimeoption.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setRepeatedWallTimeOption(int $option): true {}

		/**
		 * Set behavior for handling skipped wall times at positive timezone offset transitions
		 * <p>Object-oriented style</p><p>Sets the current strategy for dealing with wall times that are skipped whenever the clock is forwarded during dailight saving time start transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b> (take it as being the same instant as the one when the wall time is one hour more). Alternative values are <b><code>IntlCalendar::WALLTIME_FIRST</code></b> (same instant as the one with a wall time of one hour less) and <b><code>IntlCalendar::WALLTIME_NEXT_VALID</code></b> (same instant as when DST begins).</p><p>This affects only the instant represented by the calendar (as reported by <code>IntlCalendar::getTime()</code>), the field values will not be rewritten accordingly.</p><p>The calendar must be lenient for this option to have any effect, otherwise attempting to set a non-existing time will cause an error.</p><p>This function requires ICU 4.9 or later.</p>
		 * @param int $option <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b>, <b><code>IntlCalendar::WALLTIME_LAST</code></b> or <b><code>IntlCalendar::WALLTIME_NEXT_VALID</code></b>.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/intlcalendar.setskippedwalltimeoption.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setSkippedWallTimeOption(int $option): true {}

		/**
		 * Set the calendar time in milliseconds since the epoch
		 * <p>Object-oriented style</p><p>Sets the instant represented by this object. The instant is represented by a <code>float</code> whose value should be an integer number of milliseconds since the epoch (1 Jan 1970 00:00:00.000 UTC), ignoring leap seconds. All the field values will be recalculated accordingly.</p>
		 * @param float $timestamp <p>An instant represented by the number of number of milliseconds between such instant and the epoch, ignoring leap seconds.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success and <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.settime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setTime(float $timestamp): bool {}

		/**
		 * Set the timezone used by this calendar
		 * <p>Object-oriented style</p><p>Defines a new timezone for this calendar. The time represented by the object is preserved to the detriment of the field values.</p>
		 * @param \IntlTimeZone|\DateTimeZone|string|null $timezone <p>The new timezone to be used by this calendar. It can be specified in the following ways:</p><ul> <li> <p><b><code>null</code></b>, in which case the default timezone will be used, as specified in the ini setting date.timezone or through the function <code>date_default_timezone_set()</code> and as returned by <code>date_default_timezone_get()</code>.</p> </li> <li> <p>An <code>IntlTimeZone</code>, which will be used directly.</p> </li> <li> <p>A <code>DateTimeZone</code>. Its identifier will be extracted and an ICU timezone object will be created; the timezone will be backed by ICU&#x2BC;s database, not PHP&#x2BC;s.</p> </li> <li> <p>A <code>string</code>, which should be a valid ICU timezone identifier. See <code>IntlTimeZone::createTimeZoneIDEnumeration()</code>. Raw offsets such as <code>"GMT+08:30"</code> are also accepted.</p> </li> </ul>
		 * @return bool <p>Returns <b><code>true</code></b> on success and <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.settimezone.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setTimeZone(\IntlTimeZone|\DateTimeZone|string|null $timezone): bool {}

		/**
		 * Convert an IntlCalendar into a DateTime object
		 * <p>Object-oriented style</p><p>Create a <code>DateTime</code> object that represents the same instant (up to second precision, with a rounding error of less than 1 second) and has an analog timezone to this object (the difference being <code>DateTime</code>&#x2BC;s timezone will be backed by PHP&#x2BC;s timezone while <code>IntlCalendar</code>&#x2BC;s timezone is backed by ICU&#x2BC;s).</p>
		 * @return DateTime|false <p>A <code>DateTime</code> object with the same timezone as this object (though using PHP&#x2BC;s database instead of ICU&#x2BC;s) and the same time, except for the smaller precision (second precision instead of millisecond). Returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intlcalendar.todatetime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a2
		 */
		public function toDateTime(): \DateTime|false {}
	}

	/**
	 * <p>This class represents iterator objects throughout the intl extension whenever the iterator cannot be identified with any other object provided by the extension. The distinct iterator object used internally by the <code>foreach</code> construct can only be obtained (in the relevant part here) from objects, so objects of this class serve the purpose of providing the hook through which this internal object can be obtained. As a convenience, this class also implements the <code>Iterator</code> interface, allowing the collection of values to be navigated using the methods defined in that interface. Both these methods and the internal iterator objects provided to <code>foreach</code> are backed by the same state (e.g. the position of the iterator and its current value).</p>
	 * <p>Subclasses may provide richer functionality.</p>
	 * @link https://php.net/manual/en/class.intliterator.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	class IntlIterator implements \Iterator {

		/**
		 * Get the current element
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed
		 * @link https://php.net/manual/en/intliterator.current.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get the current key
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed
		 * @link https://php.net/manual/en/intliterator.key.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move forward to the next element
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/intliterator.next.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator to the first element
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/intliterator.rewind.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Check if current position is valid
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool
		 * @link https://php.net/manual/en/intliterator.valid.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Objects of this class can be obtained from <code>IntlBreakIterator</code> objects. While the break iterators provide a sequence of boundary positions when iterated, <b>IntlPartsIterator</b> objects provide, as a convenience, the text fragments comprehended between two successive boundaries.</p>
	 * <p>The keys may represent the offset of the left boundary, right boundary, or they may just the sequence of non-negative integers. See <code>IntlBreakIterator::getPartsIterator()</code>.</p>
	 * @link https://php.net/manual/en/class.intlpartsiterator.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	class IntlPartsIterator extends \IntlIterator {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlpartsiterator.php
		 */
		public const KEY_SEQUENTIAL = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlpartsiterator.php
		 */
		public const KEY_LEFT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intlpartsiterator.php
		 */
		public const KEY_RIGHT = 2;

		/**
		 * Get the current element
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed
		 * @link https://php.net/manual/en/intliterator.current.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get IntlBreakIterator backing this parts iterator
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return IntlBreakIterator
		 * @link https://php.net/manual/en/intlpartsiterator.getbreakiterator.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getBreakIterator(): \IntlBreakIterator {}

		/**
		 * Get the current key
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed
		 * @link https://php.net/manual/en/intliterator.key.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move forward to the next element
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/intliterator.next.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator to the first element
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/intliterator.rewind.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Check if current position is valid
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool
		 * @link https://php.net/manual/en/intliterator.valid.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>A subclass of <code>IntlBreakIterator</code> that encapsulates ICU break iterators whose behavior is specified using a set of rules. This is the most common kind of break iterators.</p>
	 * <p>These rules are described in the &#xBB;&#xA0;ICU Boundary Analysis User Guide.</p>
	 * @link https://php.net/manual/en/class.intlrulebasedbreakiterator.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	class IntlRuleBasedBreakIterator extends \IntlBreakIterator {

		/**
		 * Create iterator from ruleset
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $rules
		 * @param bool $compiled
		 * @return self
		 * @link https://php.net/manual/en/intlrulebasedbreakiterator.construct.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function __construct(string $rules, bool $compiled = false) {}

		/**
		 * Create break iterator for boundaries of combining character sequences
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createcharacterinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createCharacterInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for boundaries of code points
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return IntlCodePointBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createcodepointinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createCodePointInstance(): \IntlCodePointBreakIterator {}

		/**
		 * Create break iterator for logically possible line breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createlineinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createLineInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for sentence breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createsentenceinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createSentenceInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for title-casing breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createtitleinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createTitleInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Create break iterator for word breaks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $locale
		 * @return ?IntlBreakIterator
		 * @link https://php.net/manual/en/intlbreakiterator.createwordinstance.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createWordInstance(?string $locale = null): ?\IntlBreakIterator {}

		/**
		 * Get index of current position
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.current.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function current(): int {}

		/**
		 * Set position to the first character in the text
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.first.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function first(): int {}

		/**
		 * Advance the iterator to the first boundary following specified offset
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.following.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function following(int $offset): int {}

		/**
		 * Get the binary form of compiled rules
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string|false
		 * @link https://php.net/manual/en/intlrulebasedbreakiterator.getbinaryrules.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getBinaryRules(): string|false {}

		/**
		 * Get last error code on the object
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.geterrorcode.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getErrorCode(): int {}

		/**
		 * Get last error message on the object
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link https://php.net/manual/en/intlbreakiterator.geterrormessage.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getErrorMessage(): string {}

		/**
		 * Get the locale associated with the object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $type
		 * @return string|false
		 * @link https://php.net/manual/en/intlbreakiterator.getlocale.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getLocale(int $type): string|false {}

		/**
		 * Create iterator for navigating fragments between boundaries
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $type <p>Optional key type. Possible values are:</p><ul> <li> <b><code>IntlPartsIterator::KEY_SEQUENTIAL</code></b> - The default. Sequentially increasing integers used as key. </li> <li> <b><code>IntlPartsIterator::KEY_LEFT</code></b> - Byte offset left of current part used as key. </li> <li> <b><code>IntlPartsIterator::KEY_RIGHT</code></b> - Byte offset right of current part used as key. </li> </ul>
		 * @return IntlPartsIterator
		 * @link https://php.net/manual/en/intlbreakiterator.getpartsiterator.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getPartsIterator(string $type = 'IntlPartsIterator::KEY_SEQUENTIAL'): \IntlPartsIterator {}

		/**
		 * Get the largest status value from the break rules that determined the current break position
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlrulebasedbreakiterator.getrulestatus.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getRuleStatus(): int {}

		/**
		 * Get the status values from the break rules that determined the current break position
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array|false
		 * @link https://php.net/manual/en/intlrulebasedbreakiterator.getrulestatusvec.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getRuleStatusVec(): array|false {}

		/**
		 * Get the rule set used to create this object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string|false
		 * @link https://php.net/manual/en/intlrulebasedbreakiterator.getrules.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getRules(): string|false {}

		/**
		 * Get the text being scanned
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ?string
		 * @link https://php.net/manual/en/intlbreakiterator.gettext.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getText(): ?string {}

		/**
		 * Tell whether an offset is a boundaryʼs offset
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset
		 * @return bool
		 * @link https://php.net/manual/en/intlbreakiterator.isboundary.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function isBoundary(int $offset): bool {}

		/**
		 * Set the iterator position to index beyond the last character
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.last.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function last(): int {}

		/**
		 * Advance the iterator the next boundary
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?int $offset
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.next.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function next(?int $offset = null): int {}

		/**
		 * Set the iterator position to the first boundary before an offset
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.preceding.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function preceding(int $offset): int {}

		/**
		 * Set the iterator position to the boundary immediately before the current
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intlbreakiterator.previous.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function previous(): int {}

		/**
		 * Set the text being scanned
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $text
		 * @return ?bool
		 * @link https://php.net/manual/en/intlbreakiterator.settext.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setText(string $text): ?bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.intltimezone.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	class IntlTimeZone {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const DISPLAY_SHORT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const DISPLAY_LONG = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const DISPLAY_SHORT_GENERIC = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const DISPLAY_LONG_GENERIC = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const DISPLAY_SHORT_GMT = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const DISPLAY_LONG_GMT = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const DISPLAY_SHORT_COMMONLY_USED = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const DISPLAY_GENERIC_LOCATION = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const TYPE_ANY = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const TYPE_CANONICAL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.intltimezone.php
		 */
		public const TYPE_CANONICAL_LOCATION = 2;

		/**
		 * Private constructor to disallow direct instantiation
		 * @return self
		 * @link https://php.net/manual/en/intltimezone.construct.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		private function __construct() {}

		/**
		 * Get the number of IDs in the equivalency group that includes the given ID
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $timezoneId
		 * @return int|false
		 * @link https://php.net/manual/en/intltimezone.countequivalentids.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function countEquivalentIDs(string $timezoneId): int|false {}

		/**
		 * Create a new copy of the default timezone for this host
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return IntlTimeZone
		 * @link https://php.net/manual/en/intltimezone.createdefault.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function createDefault(): \IntlTimeZone {}

		/**
		 * Get an enumeration over time zone IDs associated with the given country or offset
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \IntlTimeZone|string|int|float|null $countryOrRawOffset
		 * @return IntlIterator|false
		 * @link https://php.net/manual/en/intltimezone.createenumeration.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function createEnumeration(\IntlTimeZone|string|int|float|null $countryOrRawOffset = null): \IntlIterator|false {}

		/**
		 * Create a timezone object for the given ID
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $timezoneId
		 * @return ?IntlTimeZone
		 * @link https://php.net/manual/en/intltimezone.createtimezone.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function createTimeZone(string $timezoneId): ?\IntlTimeZone {}

		/**
		 * Get an enumeration over system time zone IDs with the given filter conditions
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $type
		 * @param ?string $region
		 * @param ?int $rawOffset
		 * @return IntlIterator|false <p>Returns <code>IntlIterator</code> or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intltimezone.createtimezoneidenumeration.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createTimeZoneIDEnumeration(int $type, ?string $region = null, ?int $rawOffset = null): \IntlIterator|false {}

		/**
		 * Create a timezone object from DateTimeZone
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \DateTimeZone $timezone
		 * @return ?IntlTimeZone
		 * @link https://php.net/manual/en/intltimezone.fromdatetimezone.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function fromDateTimeZone(\DateTimeZone $timezone): ?\IntlTimeZone {}

		/**
		 * Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $timezoneId
		 * @param bool $isSystemId
		 * @return string|false
		 * @link https://php.net/manual/en/intltimezone.getcanonicalid.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getCanonicalID(string $timezoneId, bool &$isSystemId = null): string|false {}

		/**
		 * Get the amount of time to be added to local standard time to get local wall clock time
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intltimezone.getdstsavings.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getDSTSavings(): int {}

		/**
		 * Get a name of this time zone suitable for presentation to the user
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param bool $dst
		 * @param int $style
		 * @param ?string $locale
		 * @return string|false
		 * @link https://php.net/manual/en/intltimezone.getdisplayname.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getDisplayName(bool $dst = false, int $style = IntlTimeZone::DISPLAY_LONG, ?string $locale = null): string|false {}

		/**
		 * Get an ID in the equivalency group that includes the given ID
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $timezoneId
		 * @param int $offset
		 * @return string|false
		 * @link https://php.net/manual/en/intltimezone.getequivalentid.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getEquivalentID(string $timezoneId, int $offset): string|false {}

		/**
		 * Get last error code on the object
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int|false
		 * @link https://php.net/manual/en/intltimezone.geterrorcode.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getErrorCode(): int|false {}

		/**
		 * Get last error message on the object
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string|false
		 * @link https://php.net/manual/en/intltimezone.geterrormessage.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getErrorMessage(): string|false {}

		/**
		 * Create GMT (UTC) timezone
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return IntlTimeZone
		 * @link https://php.net/manual/en/intltimezone.getgmt.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getGMT(): \IntlTimeZone {}

		/**
		 * Get timezone ID
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string|false
		 * @link https://php.net/manual/en/intltimezone.getid.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getID(): string|false {}

		/**
		 * Translate a Windows timezone into a system timezone
		 * <p>Object-oriented style (method):</p><p>Translates a Windows timezone (e.g. "Pacific Standard Time") into a system timezone (e.g. "America/Los_Angeles").</p><p><b>Note</b>:  This function requires ICU version &#x2265; 52. </p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $timezoneId
		 * @param ?string $region
		 * @return string|false <p>Returns the system timezone or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intltimezone.getidforwindowsid.php
		 * @since PHP 7 >= 7.1.0, PHP 8
		 */
		public static function getIDForWindowsID(string $timezoneId, ?string $region = null): string|false {}

		/**
		 * Get the time zone raw and GMT offset for the given moment in time
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param float $timestamp
		 * @param bool $local
		 * @param int $rawOffset
		 * @param int $dstOffset
		 * @return bool
		 * @link https://php.net/manual/en/intltimezone.getoffset.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getOffset(float $timestamp, bool $local, int &$rawOffset, int &$dstOffset): bool {}

		/**
		 * Get the raw GMT offset (before taking daylight savings time into account
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/intltimezone.getrawoffset.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getRawOffset(): int {}

		/**
		 * Get the region code associated with the given system time zone ID
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $timezoneId
		 * @return string|false <p>Return region or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intltimezone.getregion.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function getRegion(string $timezoneId): string|false {}

		/**
		 * Get the timezone data version currently used by ICU
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string|false
		 * @link https://php.net/manual/en/intltimezone.gettzdataversion.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getTZDataVersion(): string|false {}

		/**
		 * Get the "unknown" time zone
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return IntlTimeZone <p>Returns <code>IntlTimeZone</code> or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intltimezone.getunknown.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function getUnknown(): \IntlTimeZone {}

		/**
		 * Translate a system timezone into a Windows timezone
		 * <p>Object-oriented style (method):</p><p>Translates a system timezone (e.g. "America/Los_Angeles") into a Windows timezone (e.g. "Pacific Standard Time").</p><p><b>Note</b>:  This function requires ICU version &#x2265; 52. </p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $timezoneId
		 * @return string|false <p>Returns the Windows timezone or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/intltimezone.getwindowsid.php
		 * @since PHP 7 >= 7.1.0, PHP 8
		 */
		public static function getWindowsID(string $timezoneId): string|false {}

		/**
		 * Check if this zone has the same rules and offset as another zone
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \IntlTimeZone $other
		 * @return bool
		 * @link https://php.net/manual/en/intltimezone.hassamerules.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function hasSameRules(\IntlTimeZone $other): bool {}

		/**
		 * Convert to DateTimeZone object
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return DateTimeZone|false
		 * @link https://php.net/manual/en/intltimezone.todatetimezone.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function toDateTimeZone(): \DateTimeZone|false {}

		/**
		 * Check if this time zone uses daylight savings time
		 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool
		 * @link https://php.net/manual/en/intltimezone.usedaylighttime.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function useDaylightTime(): bool {}
	}

	/**
	 * <p>A "Locale" is an identifier used to get language, culture, or regionally-specific behavior from an API. PHP locales are organized and identified the same way that the CLDR locales used by ICU (and many vendors of Unix-like operating systems, the Mac, Java, and so forth) use. Locales are identified using RFC 4646 language tags (which use hyphen, not underscore) in addition to the more traditional underscore-using identifiers. Unless otherwise noted the functions in this class are tolerant of both formats.</p>
	 * <p>Examples of identifiers include:</p>
	 * <p>The Locale class (and related procedural functions) are used to interact with locale identifiers--to verify that an ID is well-formed, valid, etc. The extensions used by CLDR in UAX #35 (and inherited by ICU) are valid and used wherever they would be in ICU normally.</p>
	 * <p>Locales cannot be instantiated as objects. All of the functions/methods provided are static.</p>
	 * <p>The null or empty string obtains the "root" locale. The "root" locale is equivalent to "en_US_POSIX" in CLDR. Language tags (and thus locale identifiers) are case insensitive. There exists a canonicalization function to make case match the specification.</p>
	 * @link https://php.net/manual/en/class.locale.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	class Locale {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.locale.php
		 */
		public const ACTUAL_LOCALE = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.locale.php
		 */
		public const VALID_LOCALE = 1;

		/**
		 * @var null Used as locale parameter with the methods of the various locale affected classes, such as NumberFormatter. This constant would make the methods to use default locale.
		 * @link https://php.net/manual/en/class.locale.php
		 */
		public const DEFAULT_LOCALE = null;

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.locale.php
		 */
		public const LANG_TAG = 'language';

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.locale.php
		 */
		public const EXTLANG_TAG = 'extlang';

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.locale.php
		 */
		public const SCRIPT_TAG = 'script';

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.locale.php
		 */
		public const REGION_TAG = 'region';

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.locale.php
		 */
		public const VARIANT_TAG = 'variant';

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.locale.php
		 */
		public const GRANDFATHERED_LANG_TAG = 'grandfathered';

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.locale.php
		 */
		public const PRIVATE_TAG = 'private';

		/**
		 * Tries to find out best available locale based on HTTP "Accept-Language" header
		 * <p>Object-oriented style</p><p>Tries to find locale that can satisfy the language list that is requested by the HTTP "Accept-Language" header.</p>
		 * @param string $header <p>The string containing the "Accept-Language" header according to format in RFC 2616.</p>
		 * @return string|false <p>The corresponding locale identifier.</p><p>Returns <b><code>false</code></b> when the length of <code>header</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
		 * @link https://php.net/manual/en/locale.acceptfromhttp.php
		 * @see locale_lookup()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function acceptFromHttp(string $header): string|false {}

		/**
		 * Canonicalize the locale string
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $locale
		 * @return ?string <p>Canonicalized locale string.</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
		 * @link https://php.net/manual/en/locale.canonicalize.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function canonicalize(string $locale): ?string {}

		/**
		 * Returns a correctly ordered and delimited locale ID
		 * <p>Object-oriented style</p><p>Returns a correctly ordered and delimited locale ID the keys identify the particular locale ID subtags, and the values are the associated subtag values.</p>
		 * @param array $subtags <p>An <code>array</code> containing a list of key-value pairs, where the keys identify the particular locale ID subtags, and the values are the associated subtag values.</p><p><b>Note</b>:</p><p>The <code>'variant'</code> and <code>'private'</code> subtags can take maximum 15 values whereas <code>'extlang'</code> can take maximum 3 values. For instance, variants are allowed with the suffix ranging from 0-14. Hence the keys for the input array can be <code>variant0</code>, <code>variant1</code>, &#x2026;,<code>variant14</code>. In the returned locale id, the subtag is ordered by suffix resulting in <code>variant0</code> followed by <code>variant1</code> followed by <code>variant2</code> and so on.</p> <p>Alternatively, the <code>'variant'</code>, <code>'private'</code> and <code>'extlang'</code> values can be specified as array under specific key (e.g. <code>'variant'</code>). In this case no limits on the number of recognized subtags apply.</p>
		 * @return string|false <p>The corresponding locale identifier, or <b><code>false</code></b> when <code>subtags</code> is empty.</p>
		 * @link https://php.net/manual/en/locale.composelocale.php
		 * @see locale_parse()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function composeLocale(array $subtags): string|false {}

		/**
		 * Checks if a language tag filter matches with locale
		 * <p>Object-oriented style</p><p>Checks if a <code>languageTag</code> filter matches with <code>locale</code> according to RFC 4647's basic filtering algorithm</p>
		 * @param string $languageTag <p>The language tag to check</p>
		 * @param string $locale <p>The language range to check against</p>
		 * @param bool $canonicalize <p>If true, the arguments will be converted to canonical form before matching.</p>
		 * @return ?bool <p><b><code>true</code></b> if <code>locale</code> matches <code>languageTag</code> <b><code>false</code></b> otherwise.</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
		 * @link https://php.net/manual/en/locale.filtermatches.php
		 * @see locale_lookup()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function filterMatches(string $languageTag, string $locale, bool $canonicalize = false): ?bool {}

		/**
		 * Gets the variants for the input locale
		 * <p>Object-oriented style</p><p>Gets the variants for the input locale</p>
		 * @param string $locale <p>The locale to extract the variants from</p>
		 * @return ?array <p>The <code>array</code> containing the list of all variants subtag for the locale or <b><code>null</code></b> if not present</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
		 * @link https://php.net/manual/en/locale.getallvariants.php
		 * @see locale_get_primary_language(), locale_get_script(), locale_get_region()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getAllVariants(string $locale): ?array {}

		/**
		 * Gets the default locale value from the INTL global 'default_locale'
		 * <p>Object-oriented style</p><p>Gets the default locale value. At the PHP initialization this value is set to 'intl.default_locale' value from php.ini if that value exists or from ICU's function uloc_getDefault().</p>
		 * @return string <p>The current runtime locale</p>
		 * @link https://php.net/manual/en/locale.getdefault.php
		 * @see locale_set_default()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getDefault(): string {}

		/**
		 * Returns an appropriately localized display name for language of the inputlocale
		 * <p>Object-oriented style</p><p>Returns an appropriately localized display name for language of the input locale. If is <b><code>null</code></b> then the default locale is used.</p>
		 * @param string $locale <p>The locale to return a display language for</p>
		 * @param ?string $displayLocale <p>Optional format locale to use to display the language name</p>
		 * @return string|false <p>Display name of the language for the <code>locale</code> in the format appropriate for <code>displayLocale</code>, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/locale.getdisplaylanguage.php
		 * @see locale_get_display_name(), locale_get_display_script(), locale_get_display_region(), locale_get_display_variant()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getDisplayLanguage(string $locale, ?string $displayLocale = null): string|false {}

		/**
		 * Returns an appropriately localized display name for the input locale
		 * <p>Object-oriented style</p><p>Returns an appropriately localized display name for the input locale. If <code>locale</code> is <b><code>null</code></b> then the default locale is used.</p>
		 * @param string $locale <p>The locale to return a display name for.</p>
		 * @param ?string $displayLocale <p>optional format locale</p>
		 * @return string|false <p>Display name of the locale in the format appropriate for <code>displayLocale</code>, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/locale.getdisplayname.php
		 * @see locale_get_display_language(), locale_get_display_script(), locale_get_display_region(), locale_get_display_variant()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getDisplayName(string $locale, ?string $displayLocale = null): string|false {}

		/**
		 * Returns an appropriately localized display name for region of the input locale
		 * <p>Object-oriented style</p><p>Returns an appropriately localized display name for region of the input locale. If is <b><code>null</code></b> then the default locale is used.</p>
		 * @param string $locale <p>The locale to return a display region for.</p>
		 * @param ?string $displayLocale <p>Optional format locale to use to display the region name</p>
		 * @return string|false <p>Display name of the region for the <code>locale</code> in the format appropriate for <code>displayLocale</code>, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/locale.getdisplayregion.php
		 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_script(), locale_get_display_variant()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getDisplayRegion(string $locale, ?string $displayLocale = null): string|false {}

		/**
		 * Returns an appropriately localized display name for script of the input locale
		 * <p>Object-oriented style</p><p>Returns an appropriately localized display name for script of the input locale. If is <b><code>null</code></b> then the default locale is used.</p>
		 * @param string $locale <p>The locale to return a display script for</p>
		 * @param ?string $displayLocale <p>Optional format locale to use to display the script name</p>
		 * @return string|false <p>Display name of the script for the <code>locale</code> in the format appropriate for <code>displayLocale</code>, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/locale.getdisplayscript.php
		 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_region(), locale_get_display_variant()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getDisplayScript(string $locale, ?string $displayLocale = null): string|false {}

		/**
		 * Returns an appropriately localized display name for variants of the input locale
		 * <p>Object-oriented style</p><p>Returns an appropriately localized display name for variants of the input locale. If is <b><code>null</code></b> then the default locale is used.</p>
		 * @param string $locale <p>The locale to return a display variant for</p>
		 * @param ?string $displayLocale <p>Optional format locale to use to display the variant name</p>
		 * @return string|false <p>Display name of the variant for the <code>locale</code> in the format appropriate for <code>displayLocale</code>, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/locale.getdisplayvariant.php
		 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_script(), locale_get_display_region()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getDisplayVariant(string $locale, ?string $displayLocale = null): string|false {}

		/**
		 * Gets the keywords for the input locale
		 * <p>Object-oriented style</p><p>Gets the keywords for the input locale.</p>
		 * @param string $locale <p>The locale to extract the keywords from</p>
		 * @return array|false|null <p>Associative <code>array</code> containing the keyword-value pairs for this locale</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
		 * @link https://php.net/manual/en/locale.getkeywords.php
		 * @see locale_get_all_variants()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getKeywords(string $locale): array|false|null {}

		/**
		 * Gets the primary language for the input locale
		 * <p>Object-oriented style</p><p>Gets the primary language for the input locale</p>
		 * @param string $locale <p>The locale to extract the primary language code from</p>
		 * @return ?string <p>The language code associated with the language.</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
		 * @link https://php.net/manual/en/locale.getprimarylanguage.php
		 * @see locale_get_script(), locale_get_region(), locale_get_all_variants()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getPrimaryLanguage(string $locale): ?string {}

		/**
		 * Gets the region for the input locale
		 * <p>Object-oriented style</p><p>Gets the region for the input locale.</p>
		 * @param string $locale <p>The locale to extract the region code from</p>
		 * @return ?string <p>The region subtag for the locale or <b><code>null</code></b> if not present</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
		 * @link https://php.net/manual/en/locale.getregion.php
		 * @see locale_get_primary_language(), locale_get_script(), locale_get_all_variants()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getRegion(string $locale): ?string {}

		/**
		 * Gets the script for the input locale
		 * <p>Object-oriented style</p><p>Gets the script for the input locale.</p>
		 * @param string $locale <p>The locale to extract the script code from</p>
		 * @return ?string <p>The script subtag for the locale or <b><code>null</code></b> if not present</p>
		 * @link https://php.net/manual/en/locale.getscript.php
		 * @see locale_get_primary_language(), locale_get_region(), locale_get_all_variants()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function getScript(string $locale): ?string {}

		/**
		 * Searches the language tag list for the best match to the language
		 * <p>Object-oriented style</p><p>Searches the items in <code>languageTag</code> for the best match to the language range specified in <code>locale</code> according to RFC 4647's lookup algorithm.</p>
		 * @param array $languageTag <p>An <code>array</code> containing a list of language tags to compare to <code>locale</code>. Maximum 100 items allowed.</p>
		 * @param string $locale <p>The locale to use as the language range when matching.</p>
		 * @param bool $canonicalize <p>If true, the arguments will be converted to canonical form before matching.</p>
		 * @param ?string $defaultLocale <p>The locale to use if no match is found.</p>
		 * @return ?string <p>The closest matching language tag or default value.</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
		 * @link https://php.net/manual/en/locale.lookup.php
		 * @see locale_filter_matches()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function lookup(array $languageTag, string $locale, bool $canonicalize = false, ?string $defaultLocale = null): ?string {}

		/**
		 * Returns a key-value array of locale ID subtag elements
		 * <p>Object-oriented style</p><p>Returns a key-value array of locale ID subtag elements.</p>
		 * @param string $locale <p>The locale to extract the subtag array from. Note: The 'variant' and 'private' subtags can take maximum 15 values whereas 'extlang' can take maximum 3 values.</p>
		 * @return ?array <p>Returns an array containing a list of key-value pairs, where the keys identify the particular locale ID subtags, and the values are the associated subtag values. The array will be ordered as the locale id subtags e.g. in the locale id if variants are '-varX-varY-varZ' then the returned array will have variant0=&gt;varX , variant1=&gt;varY , variant2=&gt;varZ</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
		 * @link https://php.net/manual/en/locale.parselocale.php
		 * @see locale_compose()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function parseLocale(string $locale): ?array {}

		/**
		 * Sets the default runtime locale
		 * <p>Object-oriented style</p><p>Sets the default runtime locale to <code>locale</code>. This changes the value of INTL global 'default_locale' locale identifier. UAX #35 extensions are accepted.</p>
		 * @param string $locale <p>Is a BCP 47 compliant language tag.</p>
		 * @return bool <p>Returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/locale.setdefault.php
		 * @see locale_get_default()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function setDefault(string $locale): bool {}
	}

	/**
	 * <p>MessageFormatter is a concrete class that enables users to produce concatenated, language-neutral messages. The methods supplied in this class are used to build all the messages that are seen by end users.</p>
	 * <p>The MessageFormatter class assembles messages from various fragments (such as text fragments, numbers, and dates) supplied by the program. Because of the MessageFormatter class, the program does not need to know the order of the fragments. The class uses the formatting specifications for the fragments to assemble them into a message that is contained in a single string within a resource bundle. For example, MessageFormatter enables you to print the phrase "Finished printing x out of y files..." in a manner that still allows for flexibility in translation.</p>
	 * <p>Previously, an end user message was created as a sentence and handled as a string. This procedure created problems for localizers because the sentence structure, word order, number format and so on are very different from language to language. The language-neutral way to create messages keeps each part of the message separate and provides keys to the data. Using these keys, the MessageFormatter class can concatenate the parts of the message, localize them, and display a well-formed string to the end user.</p>
	 * <p>MessageFormatter takes a set of objects, formats them, and then inserts the formatted strings into the pattern at the appropriate places. Choice formats can be used in conjunction with MessageFormatter to handle plurals, match numbers, and select from an array of items. Typically, the message format will come from resources and the arguments will be dynamically set at runtime.</p>
	 * @link https://php.net/manual/en/class.messageformatter.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	class MessageFormatter {

		/**
		 * Constructs a new Message Formatter
		 * <p>Object-oriented style (method)</p><p>Object-oriented style (constructor):</p><p>Constructs a new Message Formatter</p>
		 * @param string $locale <p>The locale to use when formatting arguments</p>
		 * @param string $pattern <p>The pattern string to stick arguments into. The pattern uses an 'apostrophe-friendly' syntax; see &#xBB;&#xA0;Quoting/Escaping for details.</p>
		 * @return ?MessageFormatter <p>The formatter <code>object</code>, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/messageformatter.create.php
		 * @see msgfmt_format(), msgfmt_parse(), msgfmt_get_error_code(), msgfmt_get_error_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function __construct(string $locale, string $pattern) {}

		/**
		 * Constructs a new Message Formatter
		 * <p>Object-oriented style (method)</p><p>Object-oriented style (constructor):</p><p>Constructs a new Message Formatter</p>
		 * @param string $locale <p>The locale to use when formatting arguments</p>
		 * @param string $pattern <p>The pattern string to stick arguments into. The pattern uses an 'apostrophe-friendly' syntax; see &#xBB;&#xA0;Quoting/Escaping for details.</p>
		 * @return ?MessageFormatter <p>The formatter <code>object</code>, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/messageformatter.create.php
		 * @see msgfmt_format(), msgfmt_parse(), msgfmt_get_error_code(), msgfmt_get_error_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function create(string $locale, string $pattern): ?\MessageFormatter {}

		/**
		 * Format the message
		 * <p>Object-oriented style</p><p>Format the message by substituting the data into the format string according to the locale rules</p>
		 * @param array $values <p>Arguments to insert into the format string</p>
		 * @return string|false <p>The formatted string, or <b><code>false</code></b> if an error occurred</p>
		 * @link https://php.net/manual/en/messageformatter.format.php
		 * @see msgfmt_create(), msgfmt_parse(), msgfmt_format_message(), msgfmt_get_error_code(), msgfmt_get_error_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function format(array $values): string|false {}

		/**
		 * Quick format message
		 * <p>Object-oriented style</p><p>Quick formatting function that formats the string without having to explicitly create the formatter object. Use this function when the format operation is done only once and does not need any parameters or state to be kept or when wanting to customize the output by providing additional context to ICU directly.</p>
		 * @param string $locale <p>The locale to use for formatting locale-dependent parts</p>
		 * @param string $pattern <p>The pattern <code>string</code> to insert things into. The pattern uses an 'apostrophe-friendly' syntax; see &#xBB;&#xA0;Quoting/Escaping for details.</p>
		 * @param array $values <p>The <code>array</code> of values to insert into the format <code>string</code></p>
		 * @return string|false <p>The formatted pattern string or <b><code>false</code></b> if an error occurred</p>
		 * @link https://php.net/manual/en/messageformatter.formatmessage.php
		 * @see msgfmt_create(), msgfmt_parse(), msgfmt_get_error_code(), msgfmt_get_error_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function formatMessage(string $locale, string $pattern, array $values): string|false {}

		/**
		 * Get the error code from last operation
		 * <p>Object-oriented style</p><p>Get the error code from last operation.</p>
		 * @return int <p>The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.</p>
		 * @link https://php.net/manual/en/messageformatter.geterrorcode.php
		 * @see msgfmt_get_error_message(), intl_get_error_code(), intl_is_failure()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getErrorCode(): int {}

		/**
		 * Get the error text from the last operation
		 * <p>Object-oriented style</p><p>Get the error text from the last operation.</p>
		 * @return string <p>Description of the last error.</p>
		 * @link https://php.net/manual/en/messageformatter.geterrormessage.php
		 * @see msgfmt_get_error_code(), intl_get_error_code(), intl_is_failure()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getErrorMessage(): string {}

		/**
		 * Get the locale for which the formatter was created
		 * <p>Object-oriented style</p><p>Get the locale for which the formatter was created.</p>
		 * @return string <p>The locale name</p>
		 * @link https://php.net/manual/en/messageformatter.getlocale.php
		 * @see msgfmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getLocale(): string {}

		/**
		 * Get the pattern used by the formatter
		 * <p>Object-oriented style</p><p>Get the pattern used by the formatter</p>
		 * @return string|false <p>The pattern <code>string</code> for this message formatter, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/messageformatter.getpattern.php
		 * @see msgfmt_create(), msgfmt_set_pattern()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getPattern(): string|false {}

		/**
		 * Parse input string according to pattern
		 * <p>Object-oriented style</p><p>Parses input <code>string</code> and return any extracted items as an <code>array</code>.</p>
		 * @param string $string <p>The <code>string</code> to parse</p>
		 * @return array|false <p>An <code>array</code> containing the items extracted, or <b><code>false</code></b> on error</p>
		 * @link https://php.net/manual/en/messageformatter.parse.php
		 * @see msgfmt_create(), msgfmt_format(), msgfmt_parse_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function parse(string $string): array|false {}

		/**
		 * Quick parse input string
		 * <p>Object-oriented style</p><p>Parses input string without explicitly creating the formatter object. Use this function when the format operation is done only once and does not need any parameters or state to be kept.</p>
		 * @param string $locale <p>The locale to use for parsing locale-dependent parts</p>
		 * @param string $pattern <p>The pattern with which to parse the <code>message</code>.</p>
		 * @param string $message <p>The <code>string</code> to parse, conforming to the <code>pattern</code>.</p>
		 * @return array|false <p>An <code>array</code> containing items extracted, or <b><code>false</code></b> on error</p>
		 * @link https://php.net/manual/en/messageformatter.parsemessage.php
		 * @see msgfmt_create(), msgfmt_format_message(), msgfmt_parse()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function parseMessage(string $locale, string $pattern, string $message): array|false {}

		/**
		 * Set the pattern used by the formatter
		 * <p>Object-oriented style</p><p>Set the pattern used by the formatter</p>
		 * @param string $pattern <p>The pattern <code>string</code> to use in this message formatter. The pattern uses an 'apostrophe-friendly' syntax; see &#xBB;&#xA0;Quoting/Escaping for details.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/messageformatter.setpattern.php
		 * @see msgfmt_create(), msgfmt_get_pattern()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function setPattern(string $pattern): bool {}
	}

	/**
	 * <p>Normalization is a process that involves transforming characters and sequences of characters into a formally-defined underlying representation. This process is most important when text needs to be compared for sorting and searching, but it is also used when storing text to ensure that the text is stored in a consistent representation.</p>
	 * <p>The Unicode Consortium has defined a number of normalization forms reflecting the various needs of applications:</p>
	 * @link https://php.net/manual/en/class.normalizer.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	class Normalizer {

		/**
		 * @var int Normalization Form D (NFD) - Canonical Decomposition
		 * @link https://php.net/manual/en/class.normalizer.php
		 */
		public const FORM_D = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.normalizer.php
		 */
		public const NFD = 4;

		/**
		 * @var int Normalization Form KD (NFKD) - Compatibility Decomposition
		 * @link https://php.net/manual/en/class.normalizer.php
		 */
		public const FORM_KD = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.normalizer.php
		 */
		public const NFKD = 8;

		/**
		 * @var int Normalization Form C (NFC) - Canonical Decomposition followed by Canonical Composition
		 * @link https://php.net/manual/en/class.normalizer.php
		 */
		public const FORM_C = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.normalizer.php
		 */
		public const NFC = 16;

		/**
		 * @var int Normalization Form KC (NFKC) - Compatibility Decomposition, followed by Canonical Composition
		 * @link https://php.net/manual/en/class.normalizer.php
		 */
		public const FORM_KC = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.normalizer.php
		 */
		public const NFKC = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.normalizer.php
		 */
		public const FORM_KC_CF = 48;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.normalizer.php
		 */
		public const NFKC_CF = 48;

		/**
		 * Gets the Decomposition_Mapping property for the given UTF-8 encoded code point
		 * <p>Object-oriented style</p><p>Gets the Decomposition_Mapping property, as specified in the Unicode Character Database (UCD), for the given UTF-8 encoded code point.</p>
		 * @param string $string <p>The input string, which should be a single, UTF-8 encoded, code point.</p>
		 * @param int $form
		 * @return ?string <p>Returns a <code>string</code> containing the Decomposition_Mapping property, if present in the UCD.</p><p>Returns <b><code>null</code></b> if there is no Decomposition_Mapping property for the character.</p>
		 * @link https://php.net/manual/en/normalizer.getrawdecomposition.php
		 * @since PHP 7 >= 7.3, PHP 8
		 */
		public static function getRawDecomposition(string $string, int $form = Normalizer::FORM_C): ?string {}

		/**
		 * Checks if the provided string is already in the specified normalization form
		 * <p>Object-oriented style</p><p>Checks if the provided string is already in the specified normalization form.</p>
		 * @param string $string <p>The input string to normalize</p>
		 * @param int $form <p>One of the normalization forms.</p>
		 * @return bool <p><b><code>true</code></b> if normalized, <b><code>false</code></b> otherwise or if there an error</p>
		 * @link https://php.net/manual/en/normalizer.isnormalized.php
		 * @see normalizer_normalize()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function isNormalized(string $string, int $form = Normalizer::FORM_C): bool {}

		/**
		 * Normalizes the input provided and returns the normalized string
		 * <p>Object-oriented style</p><p>Normalizes the input provided and returns the normalized string</p>
		 * @param string $string <p>The input string to normalize</p>
		 * @param int $form <p>One of the normalization forms.</p>
		 * @return string|false <p>The normalized string or <b><code>false</code></b> if an error occurred.</p>
		 * @link https://php.net/manual/en/normalizer.normalize.php
		 * @see normalizer_is_normalized()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function normalize(string $string, int $form = Normalizer::FORM_C): string|false {}
	}

	/**
	 * <p>Programs store and operate on numbers using a locale-independent binary representation. When displaying or printing a number it is converted to a locale-specific string. For example, the number 12345.67 is "12,345.67" in the US, "12 345,67" in France and "12.345,67" in Germany.</p>
	 * <p>By invoking the methods provided by the NumberFormatter class, you can format numbers, currencies, and percentages according to the specified or default locale. NumberFormatter is locale-sensitive so you need to create a new NumberFormatter for each locale. NumberFormatter methods format primitive-type numbers, such as double and output the number as a locale-specific string.</p>
	 * <p>For currencies you can use currency format type to create a formatter that returns a string with the formatted number and the appropriate currency sign. Of course, the NumberFormatter class is unaware of exchange rates so, the number output is the same regardless of the specified currency. This means that the same number has different monetary values depending on the currency locale. If the number is 9988776.65 the results will be:</p>
	 * <p>In order to format percentages, create a locale-specific formatter with percentage format type. With this formatter, a decimal fraction such as 0.75 is displayed as 75%.</p>
	 * <p>For more complex formatting, like spelled-out numbers, the rule-based number formatters are used.</p>
	 * @link https://php.net/manual/en/class.numberformatter.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	class NumberFormatter {

		/**
		 * @var int Decimal format defined by pattern
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PATTERN_DECIMAL = 0;

		/**
		 * @var int Decimal format
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const DECIMAL = 1;

		/**
		 * @var int Currency format
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const CURRENCY = 2;

		/**
		 * @var int Percent format
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PERCENT = 3;

		/**
		 * @var int Scientific format
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const SCIENTIFIC = 4;

		/**
		 * @var int Spellout rule-based format
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const SPELLOUT = 5;

		/**
		 * @var int Ordinal rule-based format
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ORDINAL = 6;

		/**
		 * @var int Duration rule-based format
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const DURATION = 7;

		/**
		 * @var int Rule-based format defined by pattern
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PATTERN_RULEBASED = 9;

		/**
		 * @var int Alias for PATTERN_DECIMAL
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const IGNORE = 0;

		/**
		 * @var int Currency format for accounting, e.g., <code>($3.00)</code> for negative currency amount instead of <code>-$3.00</code>. Available as of PHP 7.4.1 and ICU 53.
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const CURRENCY_ACCOUNTING = 12;

		/**
		 * @var int Default format for the locale
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const DEFAULT_STYLE = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ROUND_CEILING = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ROUND_FLOOR = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ROUND_DOWN = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ROUND_UP = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ROUND_HALFEVEN = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ROUND_HALFDOWN = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ROUND_HALFUP = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PAD_BEFORE_PREFIX = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PAD_AFTER_PREFIX = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PAD_BEFORE_SUFFIX = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PAD_AFTER_SUFFIX = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PARSE_INT_ONLY = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const GROUPING_USED = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const DECIMAL_ALWAYS_SHOWN = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const MAX_INTEGER_DIGITS = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const MIN_INTEGER_DIGITS = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const INTEGER_DIGITS = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const MAX_FRACTION_DIGITS = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const MIN_FRACTION_DIGITS = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const FRACTION_DIGITS = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const MULTIPLIER = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const GROUPING_SIZE = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ROUNDING_MODE = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ROUNDING_INCREMENT = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const FORMAT_WIDTH = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PADDING_POSITION = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const SECONDARY_GROUPING_SIZE = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const SIGNIFICANT_DIGITS_USED = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const MIN_SIGNIFICANT_DIGITS = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const MAX_SIGNIFICANT_DIGITS = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const LENIENT_PARSE = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const POSITIVE_PREFIX = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const POSITIVE_SUFFIX = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const NEGATIVE_PREFIX = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const NEGATIVE_SUFFIX = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PADDING_CHARACTER = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const CURRENCY_CODE = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const DEFAULT_RULESET = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PUBLIC_RULESETS = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const DECIMAL_SEPARATOR_SYMBOL = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const GROUPING_SEPARATOR_SYMBOL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PATTERN_SEPARATOR_SYMBOL = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PERCENT_SYMBOL = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const ZERO_DIGIT_SYMBOL = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const DIGIT_SYMBOL = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const MINUS_SIGN_SYMBOL = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PLUS_SIGN_SYMBOL = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const CURRENCY_SYMBOL = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const INTL_CURRENCY_SYMBOL = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const MONETARY_SEPARATOR_SYMBOL = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const EXPONENTIAL_SYMBOL = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PERMILL_SYMBOL = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const PAD_ESCAPE_SYMBOL = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const INFINITY_SYMBOL = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const NAN_SYMBOL = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const SIGNIFICANT_DIGIT_SYMBOL = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const MONETARY_GROUPING_SEPARATOR_SYMBOL = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const TYPE_DEFAULT = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const TYPE_INT32 = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const TYPE_INT64 = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const TYPE_DOUBLE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.numberformatter.php
		 */
		public const TYPE_CURRENCY = 4;

		/**
		 * Create a number formatter
		 * <p>Object-oriented style (method)</p><p>Object-oriented style (constructor):</p><p>Creates a number formatter.</p>
		 * @param string $locale <p>Locale in which the number would be formatted (locale name, e.g. en_CA).</p>
		 * @param int $style <p>Style of the formatting, one of the  format style constants. If <b><code>NumberFormatter::PATTERN_DECIMAL</code></b> or <b><code>NumberFormatter::PATTERN_RULEBASED</code></b> is passed then the number format is opened using the given pattern, which must conform to the syntax described in &#xBB;&#xA0;ICU DecimalFormat documentation or &#xBB;&#xA0;ICU RuleBasedNumberFormat documentation, respectively.</p>
		 * @param ?string $pattern <p>Pattern string if the chosen style requires a pattern.</p>
		 * @return ?NumberFormatter <p>Returns <code>NumberFormatter</code> object or <b><code>null</code></b> on error.</p>
		 * @link https://php.net/manual/en/numberformatter.create.php
		 * @see numfmt_format(), numfmt_parse()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function __construct(string $locale, int $style, ?string $pattern = null) {}

		/**
		 * Create a number formatter
		 * <p>Object-oriented style (method)</p><p>Object-oriented style (constructor):</p><p>Creates a number formatter.</p>
		 * @param string $locale <p>Locale in which the number would be formatted (locale name, e.g. en_CA).</p>
		 * @param int $style <p>Style of the formatting, one of the  format style constants. If <b><code>NumberFormatter::PATTERN_DECIMAL</code></b> or <b><code>NumberFormatter::PATTERN_RULEBASED</code></b> is passed then the number format is opened using the given pattern, which must conform to the syntax described in &#xBB;&#xA0;ICU DecimalFormat documentation or &#xBB;&#xA0;ICU RuleBasedNumberFormat documentation, respectively.</p>
		 * @param ?string $pattern <p>Pattern string if the chosen style requires a pattern.</p>
		 * @return ?NumberFormatter <p>Returns <code>NumberFormatter</code> object or <b><code>null</code></b> on error.</p>
		 * @link https://php.net/manual/en/numberformatter.create.php
		 * @see numfmt_format(), numfmt_parse()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public static function create(string $locale, int $style, ?string $pattern = null): ?\NumberFormatter {}

		/**
		 * Format a number
		 * <p>Object-oriented style</p><p>Format a numeric value according to the formatter rules.</p>
		 * @param int|float $num <p>The value to format. Can be <code>int</code> or <code>float</code>, other values will be converted to a numeric value.</p>
		 * @param int $type <p>The  formatting type to use. Note that <b><code>NumberFormatter::TYPE_CURRENCY</code></b> is not supported; use <code>NumberFormatter::formatCurrency()</code> instead.</p>
		 * @return string|false <p>Returns the string containing formatted value, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/numberformatter.format.php
		 * @see numfmt_get_error_code(), numfmt_format_currency(), numfmt_parse(), msgfmt_format_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function format(int|float $num, int $type = NumberFormatter::TYPE_DEFAULT): string|false {}

		/**
		 * Format a currency value
		 * <p>Object-oriented style</p><p>Format the currency value according to the formatter rules.</p>
		 * @param float $amount <p>The numeric currency value.</p>
		 * @param string $currency <p>The 3-letter ISO 4217 currency code indicating the currency to use.</p>
		 * @return string|false <p>String representing the formatted currency value, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/numberformatter.formatcurrency.php
		 * @see numfmt_get_error_code(), numfmt_format(), numfmt_parse_currency(), msgfmt_format_message()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function formatCurrency(float $amount, string $currency): string|false {}

		/**
		 * Get an attribute
		 * <p>Object-oriented style</p><p>Get a numeric attribute associated with the formatter. An example of a numeric attribute is the number of integer digits the formatter will produce.</p>
		 * @param int $attribute <p>Attribute specifier - one of the  numeric attribute constants.</p>
		 * @return int|float|false <p>Return attribute value on success, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/numberformatter.getattribute.php
		 * @see numfmt_get_error_code(), numfmt_get_text_attribute(), numfmt_set_attribute()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getAttribute(int $attribute): int|float|false {}

		/**
		 * Get formatter's last error code
		 * <p>Object-oriented style</p><p>Get error code from the last function performed by the formatter.</p>
		 * @return int <p>Returns error code from last formatter call.</p>
		 * @link https://php.net/manual/en/numberformatter.geterrorcode.php
		 * @see numfmt_get_error_message(), intl_get_error_code(), intl_is_failure()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getErrorCode(): int {}

		/**
		 * Get formatter's last error message
		 * <p>Object-oriented style</p><p>Get error message from the last function performed by the formatter.</p>
		 * @return string <p>Returns error message from last formatter call.</p>
		 * @link https://php.net/manual/en/numberformatter.geterrormessage.php
		 * @see numfmt_get_error_code(), intl_get_error_code(), intl_is_failure()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getErrorMessage(): string {}

		/**
		 * Get formatter locale
		 * <p>Object-oriented style</p><p>Get formatter locale name.</p>
		 * @param int $type <p>You can choose between valid and actual locale ( <b><code>Locale::VALID_LOCALE</code></b>, <b><code>Locale::ACTUAL_LOCALE</code></b>, respectively). The default is the actual locale.</p>
		 * @return string|false <p>The locale name used to create the formatter, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/numberformatter.getlocale.php
		 * @see numfmt_create(), numfmt_get_error_code()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getLocale(int $type = ULOC_ACTUAL_LOCALE): string|false {}

		/**
		 * Get formatter pattern
		 * <p>Object-oriented style</p><p>Extract pattern used by the formatter.</p>
		 * @return string|false <p>Pattern <code>string</code> that is used by the formatter, or <b><code>false</code></b> if an error happens.</p>
		 * @link https://php.net/manual/en/numberformatter.getpattern.php
		 * @see numfmt_get_error_code(), numfmt_set_pattern(), numfmt_create()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getPattern(): string|false {}

		/**
		 * Get a symbol value
		 * <p>Object-oriented style</p><p>Get a symbol associated with the formatter. The formatter uses symbols to represent the special locale-dependent characters in a number, for example the percent sign. This API is not supported for rule-based formatters.</p>
		 * @param int $symbol <p>Symbol specifier, one of the  format symbol constants.</p>
		 * @return string|false <p>The symbol string or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/numberformatter.getsymbol.php
		 * @see numfmt_get_error_code(), numfmt_set_symbol()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getSymbol(int $symbol): string|false {}

		/**
		 * Get a text attribute
		 * <p>Object-oriented style</p><p>Get a text attribute associated with the formatter. An example of a text attribute is the suffix for positive numbers. If the formatter does not understand the attribute, <b><code>U_UNSUPPORTED_ERROR</code></b> error is produced. Rule-based formatters only understand <b><code>NumberFormatter::DEFAULT_RULESET</code></b> and <b><code>NumberFormatter::PUBLIC_RULESETS</code></b>.</p>
		 * @param int $attribute <p>Attribute specifier - one of the  text attribute constants.</p>
		 * @return string|false <p>Return attribute value on success, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/numberformatter.gettextattribute.php
		 * @see numfmt_get_error_code(), numfmt_get_attribute(), numfmt_set_text_attribute()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function getTextAttribute(int $attribute): string|false {}

		/**
		 * Parse a number
		 * <p>Object-oriented style</p><p>Parse a string into a number using the current formatter rules.</p>
		 * @param string $string <p>The string to parse for the number.</p>
		 * @param int $type <p>The  formatting type to use. By default, <b><code>NumberFormatter::TYPE_DOUBLE</code></b> is used. Note that <b><code>NumberFormatter::TYPE_CURRENCY</code></b> is not supported; use <code>NumberFormatter::parseCurrency()</code> instead.</p>
		 * @param int $offset <p>Offset in the string at which to begin parsing. On return, this value will hold the offset at which parsing ended.</p>
		 * @return int|float|false <p>The value of the parsed number or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/numberformatter.parse.php
		 * @see numfmt_get_error_code(), numfmt_format(), numfmt_parse_currency()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function parse(string $string, int $type = NumberFormatter::TYPE_DOUBLE, int &$offset = null): int|float|false {}

		/**
		 * Parse a currency number
		 * <p>Object-oriented style</p><p>Parse a string into a float and a currency using the current formatter.</p>
		 * @param string $string
		 * @param string $currency <p>Parameter to receive the currency name (3-letter ISO 4217 currency code).</p>
		 * @param int $offset <p>Offset in the string at which to begin parsing. On return, this value will hold the offset at which parsing ended.</p>
		 * @return float|false <p>The parsed numeric value or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/numberformatter.parsecurrency.php
		 * @see numfmt_get_error_code(), numfmt_parse(), numfmt_format_currency()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function parseCurrency(string $string, string &$currency, int &$offset = null): float|false {}

		/**
		 * Set an attribute
		 * <p>Object-oriented style</p><p>Set a numeric attribute associated with the formatter. An example of a numeric attribute is the number of integer digits the formatter will produce.</p>
		 * @param int $attribute <p>Attribute specifier - one of the  numeric attribute constants.</p>
		 * @param int|float $value <p>The attribute value.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/numberformatter.setattribute.php
		 * @see numfmt_get_error_code(), numfmt_get_attribute(), numfmt_set_text_attribute()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function setAttribute(int $attribute, int|float $value): bool {}

		/**
		 * Set formatter pattern
		 * <p>Object-oriented style</p><p>Set the pattern used by the formatter. Can not be used on a rule-based formatter.</p>
		 * @param string $pattern <p>Pattern in syntax described in &#xBB;&#xA0;ICU DecimalFormat documentation.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/numberformatter.setpattern.php
		 * @see numfmt_get_error_code(), numfmt_create(), numfmt_get_pattern()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function setPattern(string $pattern): bool {}

		/**
		 * Set a symbol value
		 * <p>Object-oriented style</p><p>Set a symbol associated with the formatter. The formatter uses symbols to represent the special locale-dependent characters in a number, for example the percent sign. This API is not supported for rule-based formatters.</p>
		 * @param int $symbol <p>Symbol specifier, one of the  format symbol constants.</p>
		 * @param string $value <p>Text for the symbol.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/numberformatter.setsymbol.php
		 * @see numfmt_get_error_code(), numfmt_get_symbol()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function setSymbol(int $symbol, string $value): bool {}

		/**
		 * Set a text attribute
		 * <p>Object-oriented style</p><p>Set a text attribute associated with the formatter. An example of a text attribute is the suffix for positive numbers. If the formatter does not understand the attribute, <b><code>U_UNSUPPORTED_ERROR</code></b> error is produced. Rule-based formatters only understand <b><code>NumberFormatter::DEFAULT_RULESET</code></b> and <b><code>NumberFormatter::PUBLIC_RULESETS</code></b>.</p>
		 * @param int $attribute <p>Attribute specifier - one of the text attribute constants.</p>
		 * @param string $value <p>Text for the attribute value.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/numberformatter.settextattribute.php
		 * @see numfmt_get_error_code(), numfmt_get_text_attribute(), numfmt_set_attribute()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
		 */
		public function setTextAttribute(int $attribute, string $value): bool {}
	}

	/**
	 * <p>Localized software products often require sets of data that are to be customized depending on current locale, e.g.: messages, labels, formatting patterns. ICU resource mechanism allows to define sets of resources that the application can load on locale basis, while accessing them in unified locale-independent fashion.</p>
	 * <p>This class implements access to ICU resource data files. These files are binary data arrays which ICU uses to store the localized data.</p>
	 * <p>ICU resource bundle can hold simple resources and complex resources. Complex resources are containers which can be either integer-indexed or string-indexed (just like PHP arrays). Simple resources can be of the following types: string, integer, binary data field or integer array.</p>
	 * <p><b>ResourceBundle</b> supports direct access to the data through array access pattern and iteration via foreach, as well as access via class methods. The result will be PHP value for simple resources and <b>ResourceBundle</b> object for complex ones. All resources are read-only.</p>
	 * @link https://php.net/manual/en/class.resourcebundle.php
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	class ResourceBundle implements \IteratorAggregate, \Countable {

		/**
		 * Create a resource bundle
		 * <p>Object-oriented style (method)</p><p>Object-oriented style (constructor):</p><p>Creates a resource bundle.</p>
		 * @param ?string $locale <p>Locale for which the resources should be loaded (locale name, e.g. en_CA).</p>
		 * @param ?string $bundle <p>The directory where the data is stored or the name of the .dat file.</p>
		 * @param bool $fallback <p>Whether locale should match exactly or fallback to parent locale is allowed.</p>
		 * @return ?ResourceBundle <p>Returns <code>ResourceBundle</code> object or <b><code>null</code></b> on error.</p>
		 * @link https://php.net/manual/en/resourcebundle.create.php
		 * @see resourcebundle_get()
		 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function __construct(?string $locale, ?string $bundle, bool $fallback = true) {}

		/**
		 * Get number of elements in the bundle
		 * <p>Object-oriented style</p><p>Get the number of elements in the bundle.</p>
		 * @return int <p>Returns number of elements in the bundle.</p>
		 * @link https://php.net/manual/en/resourcebundle.count.php
		 * @see resourcebundle_get()
		 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function count(): int {}

		/**
		 * Create a resource bundle
		 * <p>Object-oriented style (method)</p><p>Object-oriented style (constructor):</p><p>Creates a resource bundle.</p>
		 * @param ?string $locale <p>Locale for which the resources should be loaded (locale name, e.g. en_CA).</p>
		 * @param ?string $bundle <p>The directory where the data is stored or the name of the .dat file.</p>
		 * @param bool $fallback <p>Whether locale should match exactly or fallback to parent locale is allowed.</p>
		 * @return ?ResourceBundle <p>Returns <code>ResourceBundle</code> object or <b><code>null</code></b> on error.</p>
		 * @link https://php.net/manual/en/resourcebundle.create.php
		 * @see resourcebundle_get()
		 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public static function create(?string $locale, ?string $bundle, bool $fallback = true): ?\ResourceBundle {}

		/**
		 * Get data from the bundle
		 * <p>Object-oriented style</p><p>Get the data from the bundle by index or string key.</p>
		 * @param string|int $index <p>Data index, must be string or integer.</p>
		 * @param bool $fallback <p>Whether locale should match exactly or fallback to parent locale is allowed.</p>
		 * @return mixed <p>Returns the data located at the index or <b><code>null</code></b> on error. Strings, integers and binary data strings are returned as corresponding PHP types, integer array is returned as PHP array. Complex types are returned as <code>ResourceBundle</code> object.</p>
		 * @link https://php.net/manual/en/resourcebundle.get.php
		 * @see resourcebundle_count()
		 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function get(string|int $index, bool $fallback = true): mixed {}

		/**
		 * Get bundle's last error code
		 * <p>Object-oriented style</p><p>Get error code from the last function performed by the bundle object.</p>
		 * @return int <p>Returns error code from last bundle object call.</p>
		 * @link https://php.net/manual/en/resourcebundle.geterrorcode.php
		 * @see resourcebundle_get_error_message(), intl_get_error_code(), intl_is_failure()
		 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function getErrorCode(): int {}

		/**
		 * Get bundle's last error message
		 * <p>Object-oriented style</p><p>Get error message from the last function performed by the bundle object.</p>
		 * @return string <p>Returns error message from last bundle object's call.</p>
		 * @link https://php.net/manual/en/resourcebundle.geterrormessage.php
		 * @see resourcebundle_get_error_code(), intl_get_error_code(), intl_is_failure()
		 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function getErrorMessage(): string {}

		/**
		 * Get supported locales
		 * <p>Object-oriented style</p><p>Get available locales from ResourceBundle name.</p>
		 * @param string $bundle <p>Path of ResourceBundle for which to get available locales, or empty string for default locales list.</p>
		 * @return array|false <p>Returns the list of locales supported by the bundle, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/resourcebundle.locales.php
		 * @see resourcebundle_get()
		 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public static function getLocales(string $bundle): array|false {}
	}

	/**
	 * <p>This class is provided because Unicode contains large number of characters and incorporates the varied writing systems of the world and their incorrect usage can expose programs or systems to possible security attacks using characters similarity.</p>
	 * <p>Provided methods allow to check whether an individual string is likely an attempt at confusing the reader (<code>spoof detection</code>), such as "p&#x430;yp&#x430;l" spelled with Cyrillic '&#x430;' characters.</p>
	 * @link https://php.net/manual/en/class.spoofchecker.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	class Spoofchecker {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const SINGLE_SCRIPT_CONFUSABLE = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const MIXED_SCRIPT_CONFUSABLE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const WHOLE_SCRIPT_CONFUSABLE = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const ANY_CASE = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const SINGLE_SCRIPT = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const INVISIBLE = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const CHAR_LIMIT = 64;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const ASCII = 268435456;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const HIGHLY_RESTRICTIVE = 805306368;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const MODERATELY_RESTRICTIVE = 1073741824;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const MINIMALLY_RESTRICTIVE = 1342177280;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const UNRESTRICTIVE = 1610612736;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.spoofchecker.php
		 */
		public const SINGLE_SCRIPT_RESTRICTIVE = 536870912;

		/**
		 * Constructor
		 * <p>Creates new instance of Spoofchecker.</p>
		 * @return self
		 * @link https://php.net/manual/en/spoofchecker.construct.php
		 * @since No version information available, might only be in Git
		 */
		public function __construct() {}

		/**
		 * Checks if given strings can be confused
		 * <p>Checks whether two given strings can easily be mistaken.</p>
		 * @param string $string1 <p>First string to check.</p>
		 * @param string $string2 <p>Second string to check.</p>
		 * @param int $errorCode <p>This variable is set by-reference to <code>int</code> containing an error, if there was any.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if two given strings can be confused, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/spoofchecker.areconfusable.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function areConfusable(string $string1, string $string2, int &$errorCode = null): bool {}

		/**
		 * Checks if a given text contains any suspicious characters
		 * <p>Checks if given string contains any suspicious characters like letters which are almost identical visually, but are Unicode characters from different sets.</p>
		 * @param string $string <p>String to test.</p>
		 * @param int $errorCode <p>This variable is set by-reference to <code>int</code> containing an error, if there was any.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if there are suspicious characters, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/spoofchecker.issuspicious.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function isSuspicious(string $string, int &$errorCode = null): bool {}

		/**
		 * Locales to use when running checks
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $locales
		 * @return void
		 * @link https://php.net/manual/en/spoofchecker.setallowedlocales.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function setAllowedLocales(string $locales): void {}

		/**
		 * Set the checks to run
		 * <p>Sets the checks that will be performed by <code>SpoofChecker::isSuspicious()</code>.</p>
		 * @param int $checks <p>The checks that will be performed by <code>SpoofChecker::isSuspicious()</code>. A bitmask of <b><code>Spoofchecker::SINGLE_SCRIPT_CONFUSABLE</code></b>, <b><code>Spoofchecker::MIXED_SCRIPT_CONFUSABLE</code></b>, <b><code>Spoofchecker::WHOLE_SCRIPT_CONFUSABLE</code></b>, <b><code>Spoofchecker::ANY_CASE</code></b>, <b><code>Spoofchecker::SINGLE_SCRIPT</code></b>, <b><code>Spoofchecker::INVISIBLE</code></b>, or <b><code>Spoofchecker::CHAR_LIMIT</code></b>. Defaults to all checks as of ICU 58; prior to that version, <b><code>Spoofchecker::SINGLE_SCRIPT</code></b> was excluded.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spoofchecker.setchecks.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function setChecks(int $checks): void {}
	}

	/**
	 * <p>Transliterator provides transliteration of strings.</p>
	 * @link https://php.net/manual/en/class.transliterator.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	class Transliterator {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.transliterator.php
		 */
		public const FORWARD = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.transliterator.php
		 */
		public const REVERSE = 1;

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.transliterator.php#transliterator.props.id
		 */
		public $id;

		/**
		 * Private constructor to deny instantiation
		 * <p>This method should not be called. Its only purpose is to deny instantiation with the new operator.</p><p>Use the factory methods <code>Transliterator::create()</code> or <code>Transliterator::createFromRules()</code> instead.</p>
		 * @return self
		 * @link https://php.net/manual/en/transliterator.construct.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		final private function __construct() {}

		/**
		 * Create a transliterator
		 * <p>Object-oriented style</p><p>Opens a Transliterator by ID.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $id <p>The ID. A list of all registered transliterator IDs can be retrieved by using <code>Transliterator::listIDs()</code>.</p>
		 * @param int $direction <p>The direction, defaults to Transliterator::FORWARD. May also be set to Transliterator::REVERSE.</p>
		 * @return ?Transliterator <p>Returns a <code>Transliterator</code> object on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/transliterator.create.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public static function create(string $id, int $direction = Transliterator::FORWARD): ?\Transliterator {}

		/**
		 * Create transliterator from rules
		 * <p>Object-oriented style</p><p>Creates a Transliterator from rules.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $rules <p>The rules as defined in Transform Rules Syntax of UTS #35: Unicode LDML.</p>
		 * @param int $direction <p>The direction, defaults to Transliterator::FORWARD. May also be set to Transliterator::REVERSE.</p>
		 * @return ?Transliterator <p>Returns a <code>Transliterator</code> object on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/transliterator.createfromrules.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public static function createFromRules(string $rules, int $direction = Transliterator::FORWARD): ?\Transliterator {}

		/**
		 * Create an inverse transliterator
		 * <p>Object-oriented style</p><p>Opens the inverse transliterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ?Transliterator <p>Returns a <code>Transliterator</code> object on success, or <b><code>null</code></b> on failure</p>
		 * @link https://php.net/manual/en/transliterator.createinverse.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function createInverse(): ?\Transliterator {}

		/**
		 * Get last error code
		 * <p>Object-oriented style</p><p>Gets the last error code for this transliterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int|false <p>The error code on success, or <b><code>false</code></b> if none exists, or on failure.</p>
		 * @link https://php.net/manual/en/transliterator.geterrorcode.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function getErrorCode(): int|false {}

		/**
		 * Get last error message
		 * <p>Object-oriented style</p><p>Gets the last error message for this transliterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string|false <p>The error message on success, or <b><code>false</code></b> if none exists, or on failure.</p>
		 * @link https://php.net/manual/en/transliterator.geterrormessage.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function getErrorMessage(): string|false {}

		/**
		 * Get transliterator IDs
		 * <p>Object-oriented style</p><p>Returns an array with the registered transliterator IDs.</p>
		 * @return array|false <p>An <code>array</code> of registered transliterator IDs on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/transliterator.listids.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public static function listIDs(): array|false {}

		/**
		 * Transliterate a string
		 * <p>Object-oriented style</p><p>Transforms a string or part thereof using an ICU transliterator.</p>
		 * @param string $string <p>The string to be transformed.</p>
		 * @param int $start <p>The start index (in UTF-16 code units) from which the string will start to be transformed, inclusive. Indexing starts at 0. The text before will be left as is.</p>
		 * @param int $end <p>The end index (in UTF-16 code units) until which the string will be transformed, exclusive. Indexing starts at 0. The text after will be left as is.</p>
		 * @return string|false <p>The transformed string on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/transliterator.transliterate.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
		 */
		public function transliterate(string $string, int $start = 0, int $end = -1): string|false {}
	}

	/**
	 * @link https://php.net/manual/en/class.uconverter.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	class UConverter {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const REASON_UNASSIGNED = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const REASON_ILLEGAL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const REASON_IRREGULAR = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const REASON_RESET = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const REASON_CLOSE = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const REASON_CLONE = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const UNSUPPORTED_CONVERTER = -1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const SBCS = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const DBCS = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const MBCS = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LATIN_1 = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const UTF8 = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const UTF16_BigEndian = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const UTF16_LittleEndian = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const UTF32_BigEndian = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const UTF32_LittleEndian = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const EBCDIC_STATEFUL = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const ISO_2022 = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_1 = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_2 = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_3 = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_4 = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_5 = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_6 = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_8 = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_11 = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_16 = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_17 = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_18 = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_19 = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const LMBCS_LAST = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const HZ = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const SCSU = 24;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const ISCII = 25;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const US_ASCII = 26;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const UTF7 = 27;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const BOCU1 = 28;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const UTF16 = 29;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const UTF32 = 30;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const CESU8 = 31;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.uconverter.php
		 */
		public const IMAP_MAILBOX = 32;

		/**
		 * Create UConverter object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?string $destination_encoding
		 * @param ?string $source_encoding
		 * @return self
		 * @link https://php.net/manual/en/uconverter.construct.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function __construct(?string $destination_encoding = null, ?string $source_encoding = null) {}

		/**
		 * Convert string from one charset to another
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $str
		 * @param bool $reverse
		 * @return string|false
		 * @link https://php.net/manual/en/uconverter.convert.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function convert(string $str, bool $reverse = false): string|false {}

		/**
		 * Default "from" callback function
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $reason
		 * @param array $source
		 * @param int $codePoint
		 * @param int $error
		 * @return string|int|array|null
		 * @link https://php.net/manual/en/uconverter.fromucallback.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function fromUCallback(int $reason, array $source, int $codePoint, int &$error): string|int|array|null {}

		/**
		 * Get the aliases of the given name
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return array|false|null
		 * @link https://php.net/manual/en/uconverter.getaliases.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getAliases(string $name): array|false|null {}

		/**
		 * Get the available canonical converter names
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link https://php.net/manual/en/uconverter.getavailable.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getAvailable(): array {}

		/**
		 * Get the destination encoding
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string|false|null
		 * @link https://php.net/manual/en/uconverter.getdestinationencoding.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getDestinationEncoding(): string|false|null {}

		/**
		 * Get the destination converter type
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int|false|null
		 * @link https://php.net/manual/en/uconverter.getdestinationtype.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getDestinationType(): int|false|null {}

		/**
		 * Get last error code on the object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/uconverter.geterrorcode.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getErrorCode(): int {}

		/**
		 * Get last error message on the object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ?string
		 * @link https://php.net/manual/en/uconverter.geterrormessage.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getErrorMessage(): ?string {}

		/**
		 * Get the source encoding
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string|false|null
		 * @link https://php.net/manual/en/uconverter.getsourceencoding.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getSourceEncoding(): string|false|null {}

		/**
		 * Get the source converter type
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int|false|null
		 * @link https://php.net/manual/en/uconverter.getsourcetype.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getSourceType(): int|false|null {}

		/**
		 * Get standards associated to converter names
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ?array
		 * @link https://php.net/manual/en/uconverter.getstandards.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function getStandards(): ?array {}

		/**
		 * Get substitution chars
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string|false|null
		 * @link https://php.net/manual/en/uconverter.getsubstchars.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function getSubstChars(): string|false|null {}

		/**
		 * Get string representation of the callback reason
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $reason
		 * @return string
		 * @link https://php.net/manual/en/uconverter.reasontext.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function reasonText(int $reason): string {}

		/**
		 * Set the destination encoding
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $encoding
		 * @return bool
		 * @link https://php.net/manual/en/uconverter.setdestinationencoding.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setDestinationEncoding(string $encoding): bool {}

		/**
		 * Set the source encoding
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $encoding
		 * @return bool
		 * @link https://php.net/manual/en/uconverter.setsourceencoding.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setSourceEncoding(string $encoding): bool {}

		/**
		 * Set the substitution chars
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $chars
		 * @return bool
		 * @link https://php.net/manual/en/uconverter.setsubstchars.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function setSubstChars(string $chars): bool {}

		/**
		 * Default "to" callback function
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $reason
		 * @param string $source
		 * @param string $codeUnits
		 * @param int $error
		 * @return string|int|array|null
		 * @link https://php.net/manual/en/uconverter.toucallback.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public function toUCallback(int $reason, string $source, string $codeUnits, int &$error): string|int|array|null {}

		/**
		 * Convert a string from one character encoding to another
		 * <p>Converts <code>str</code> from <code>fromEncoding</code> to <code>toEncoding</code>.</p>
		 * @param string $str <p>The <code>string</code> to be converted.</p>
		 * @param string $toEncoding <p>The desired encoding of the result.</p>
		 * @param string $fromEncoding <p>The current encoding used to interpret <code>str</code>.</p>
		 * @param ?array $options <p>An optional <code>array</code>, which may contain the following keys:</p><ul> <li> <code>'to_subst'</code> - the substitution character to use in place of any character of <code>str</code> which cannot be encoded in <code>toEncoding</code>. If specified, it must represent a single character in the target encoding. </li> </ul>
		 * @return string|false <p>Returns the converted string or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/uconverter.transcode.php
		 * @see mb_convert_encoding(), iconv()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
		 */
		public static function transcode(string $str, string $toEncoding, string $fromEncoding, ?array $options = null): string|false {}
	}

	/**
	 * Sort array maintaining index association
	 * <p>Object-oriented style</p><p>This function sorts an array such that array indices maintain their correlation with the array elements they are associated with. This is used mainly when sorting associative arrays where the actual element order is significant. Array elements will have sort order according to current locale rules.</p><p>Equivalent to standard PHP <code>asort()</code>.</p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @param array $array <p>Array of strings to sort.</p>
	 * @param int $flags <p>Optional sorting type, one of the following:</p><ul> <li> <p><b><code>Collator::SORT_REGULAR</code></b> - compare items normally (don't change types)</p> </li> <li> <p><b><code>Collator::SORT_NUMERIC</code></b> - compare items numerically</p> </li> <li> <p><b><code>Collator::SORT_STRING</code></b> - compare items as strings</p> </li> </ul> <p>Default <code>flags</code> value is <b><code>Collator::SORT_REGULAR</code></b>. It is also used if an invalid <code>flags</code> value has been specified.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/collator.asort.php
	 * @see collator_sort(), collator_sort_with_sort_keys()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_asort(\Collator $object, array &$array, int $flags = Collator::SORT_REGULAR): bool {}

	/**
	 * Compare two Unicode strings
	 * <p>Object-oriented style</p><p>Compare two Unicode strings according to collation rules.</p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @param string $string1 <p>The first string to compare.</p>
	 * @param string $string2 <p>The second string to compare.</p>
	 * @return int|false <p>Return comparison result:</p><ul> <li> <p>1 if <code>string1</code> is <i>greater</i> than <code>string2</code> ;</p> </li> <li> <p>0 if <code>string1</code> is <i>equal</i> to <code>string2</code>;</p> </li> <li> <p>-1 if <code>string1</code> is <i>less</i> than <code>string2</code> .</p> </li> </ul> Returns <b><code>false</code></b> on failure. <p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/collator.compare.php
	 * @see collator_sort()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_compare(\Collator $object, string $string1, string $string2): int|false {}

	/**
	 * Create a collator
	 * <p>Object-oriented style</p><p>The strings will be compared using the options already specified.</p>
	 * @param string $locale <p>The locale containing the required collation rules. Special values for locales can be passed in - if an empty <code>string</code> is passed for the locale, the default locale collation rules will be used. If <code>"root"</code> is passed, &#xBB;&#xA0;UCA rules will be used.</p>
	 * @return ?Collator <p>Return new instance of <code>Collator</code> object, or <b><code>null</code></b> on error.</p>
	 * @link https://php.net/manual/en/collator.create.php
	 * @see Collator::__construct()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_create(string $locale): ?\Collator {}

	/**
	 * Get collation attribute value
	 * <p>Object-oriented style</p><p>Get a value of an integer collator attribute.</p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @param int $attribute <p>Attribute to get value for.</p>
	 * @return int|false <p>Attribute value, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/collator.getattribute.php
	 * @see collator_set_attribute(), collator_get_strength()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_get_attribute(\Collator $object, int $attribute): int|false {}

	/**
	 * Get collator's last error code
	 * <p>Object-oriented style</p><p></p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @return int|false <p>Error code returned by the last Collator API function call, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/collator.geterrorcode.php
	 * @see collator_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_get_error_code(\Collator $object): int|false {}

	/**
	 * Get text for collator's last error code
	 * <p>Object-oriented style</p><p>Retrieves the message for the last error.</p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @return string|false <p>Description of an error occurred in the last Collator API function call, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/collator.geterrormessage.php
	 * @see collator_get_error_code()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_get_error_message(\Collator $object): string|false {}

	/**
	 * Get the locale name of the collator
	 * <p>Object-oriented style</p><p>Get collector locale name.</p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @param int $type <p>You can choose between valid and actual locale ( <b><code>Locale::VALID_LOCALE</code></b> and <b><code>Locale::ACTUAL_LOCALE</code></b>, respectively).</p>
	 * @return string|false <p>Real locale name from which the collation data comes. If the collator was instantiated from rules or an error occurred, returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/collator.getlocale.php
	 * @see collator_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_get_locale(\Collator $object, int $type): string|false {}

	/**
	 * Get sorting key for a string
	 * <p>Object-oriented style</p><p>Return collation key for a string. Collation keys can be compared directly instead of strings, though are implementation specific and may change between ICU library versions. Sort keys are generally only useful in databases or other circumstances where function calls are extremely expensive.</p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @param string $string <p>The string to produce the key from.</p>
	 * @return string|false <p>Returns the collation key for the string, or <b><code>false</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/collator.getsortkey.php
	 * @see collator_sort(), collator_sort_with_sort_keys()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 1.0.3
	 */
	function collator_get_sort_key(\Collator $object, string $string): string|false {}

	/**
	 * Get current collation strength
	 * <p>Object-oriented style</p><p></p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @return int <p>Returns current collation strength, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/collator.getstrength.php
	 * @see collator_set_strength(), collator_get_attribute()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_get_strength(\Collator $object): int {}

	/**
	 * Set collation attribute
	 * <p>Object-oriented style</p><p></p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @param int $attribute <p>Attribute.</p>
	 * @param int $value <p>Attribute value.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/collator.setattribute.php
	 * @see collator_get_attribute(), collator_set_strength()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_set_attribute(\Collator $object, int $attribute, int $value): bool {}

	/**
	 * Set collation strength
	 * <p>Object-oriented style</p><p>The &#xBB;&#xA0;ICU Collation Service supports many levels of comparison (named "Levels", but also known as "Strengths"). Having these categories enables ICU to sort strings precisely according to local conventions. However, by allowing the levels to be selectively employed, searching for a string in text can be performed with various matching conditions.</p><p></p><p><i>Primary Level</i>: Typically, this is used to denote differences between base characters (for example, "a" &lt; "b"). It is the strongest difference. For example, dictionaries are divided into different sections by base character. This is also called the <code>level 1</code> strength.</p><p><i>Secondary Level</i>: Accents in the characters are considered secondary differences (for example, "as" &lt; "&#xE0;s" &lt; "at"). Other differences between letters can also be considered secondary differences, depending on the language. A secondary difference is ignored when there is a primary difference anywhere in the strings. This is also called the <code>level 2</code> strength.</p><p><b>Note</b>:</p><p>Note: In some languages (such as Danish), certain accented letters are considered to be separate base characters. In most languages, however, an accented letter only has a secondary difference from the unaccented version of that letter.</p><p><i>Tertiary Level</i>: Upper and lower case differences in characters are distinguished at the tertiary level (for example, "ao" &lt; "Ao" &lt; "a&#xF2;"). In addition, a variant of a letter differs from the base form on the tertiary level (such as "A" and " "). Another example is the difference between large and small Kana. A tertiary difference is ignored when there is a primary or secondary difference anywhere in the strings. This is also called the <code>level 3</code> strength.</p><p><i>Quaternary Level</i>: When punctuation is ignored (see Ignoring Punctuations ) at levels 1-3, an additional level can be used to distinguish words with and without punctuation (for example, "ab" &lt; "a-b" &lt; "aB"). This difference is ignored when there is a primary, secondary or tertiary difference. This is also known as the <code>level 4</code> strength. The quaternary level should only be used if ignoring punctuation is required or when processing Japanese text (see Hiragana processing).</p><p><i>Identical Level</i>: When all other levels are equal, the identical level is used as a tiebreaker. The Unicode code point values of the NFD form of each string are compared at this level, just in case there is no difference at levels 1-4. For example, Hebrew cantillation marks are only distinguished at this level. This level should be used sparingly, as only code point values differences between two strings is an extremely rare occurrence. Using this level substantially decreases the performance for both incremental comparison and sort key generation (as well as increasing the sort key length). It is also known as <code>level 5</code> strength.</p><p>For example, people may choose to ignore accents or ignore accents and case when searching for text. Almost all characters are distinguished by the first three levels, and in most locales the default value is thus Tertiary. However, if Alternate is set to be Shifted, then the Quaternary strength can be used to break ties among whitespace, punctuation, and symbols that would otherwise be ignored. If very fine distinctions among characters are required, then the Identical strength can be used (for example, Identical Strength distinguishes between the Mathematical Bold Small A and the Mathematical Italic Small A.). However, using levels higher than Tertiary the Identical strength result in significantly longer sort keys, and slower string comparison performance for equal strings.</p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @param int $strength <p>Strength to set.</p> <p>Possible values are:</p><ul> <li> <p><b><code>Collator::PRIMARY</code></b></p> </li> <li> <p><b><code>Collator::SECONDARY</code></b></p> </li> <li> <p><b><code>Collator::TERTIARY</code></b></p> </li> <li> <p><b><code>Collator::QUATERNARY</code></b></p> </li> <li> <p><b><code>Collator::IDENTICAL</code></b></p> </li> <li> <p><b><code>Collator::DEFAULT_STRENGTH</code></b></p> </li> </ul>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/collator.setstrength.php
	 * @see collator_get_strength()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_set_strength(\Collator $object, int $strength): bool {}

	/**
	 * Sort array using specified collator
	 * <p>Object-oriented style</p><p>This function sorts an array according to current locale rules.</p><p>Equivalent to standard PHP <code>sort()</code> .</p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @param array $array <p>Array of strings to sort.</p>
	 * @param int $flags <p>Optional sorting type, one of the following:</p> <p></p><ul> <li> <p><b><code>Collator::SORT_REGULAR</code></b> - compare items normally (don't change types)</p> </li> <li> <p><b><code>Collator::SORT_NUMERIC</code></b> - compare items numerically</p> </li> <li> <p><b><code>Collator::SORT_STRING</code></b> - compare items as strings</p> </li> </ul> Default sorting type is <b><code>Collator::SORT_REGULAR</code></b>. It is also used if an invalid <code>flags</code> value has been specified.
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/collator.sort.php
	 * @see collator_asort(), collator_sort_with_sort_keys()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_sort(\Collator $object, array &$array, int $flags = Collator::SORT_REGULAR): bool {}

	/**
	 * Sort array using specified collator and sort keys
	 * <p>Object-oriented style</p><p>Similar to <code>collator_sort()</code> but uses ICU sorting keys produced by ucol_getSortKey() to gain more speed on large arrays.</p>
	 * @param \Collator $object <p><code>Collator</code> object.</p>
	 * @param array $array <p>Array of strings to sort</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/collator.sortwithsortkeys.php
	 * @see collator_sort(), collator_asort()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function collator_sort_with_sort_keys(\Collator $object, array &$array): bool {}

	/**
	 * Create a date formatter
	 * <p>Object-oriented style</p><p>Object-oriented style (constructor)</p><p>Create a date formatter.</p>
	 * @param ?string $locale <p>Locale to use when formatting or parsing or <b><code>null</code></b> to use the value specified in the ini setting intl.default_locale.</p>
	 * @param int $dateType <p>Date type to use (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>). This is one of the IntlDateFormatter constants.</p>
	 * @param int $timeType <p>Time type to use (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>). This is one of the IntlDateFormatter constants.</p>
	 * @param \IntlTimeZone|\DateTimeZone|string|null $timezone <p>Time zone ID. The default (and the one used if <b><code>null</code></b> is given) is the one returned by <code>date_default_timezone_get()</code> or, if applicable, that of the <code>IntlCalendar</code> object passed for the <code>calendar</code> parameter. This ID must be a valid identifier on ICU&#x2BC;s database or an ID representing an explicit offset, such as <code>GMT-05:30</code>.</p> <p>This can also be an <code>IntlTimeZone</code> or a <code>DateTimeZone</code> object.</p>
	 * @param \IntlCalendar|int|null $calendar <p>Calendar to use for formatting or parsing. The default value is <b><code>null</code></b>, which corresponds to <b><code>IntlDateFormatter::GREGORIAN</code></b>. This can either be one of the IntlDateFormatter calendar constants or an <code>IntlCalendar</code>. Any <code>IntlCalendar</code> object passed will be clone; it will not be changed by the <code>IntlDateFormatter</code>. This will determine the calendar type used (gregorian, islamic, persian, etc.) and, if <b><code>null</code></b> is given for the <code>timezone</code> parameter, also the timezone used.</p>
	 * @param ?string $pattern <p>Optional pattern to use when formatting or parsing. Possible patterns are documented at &#xBB;&#xA0;https://unicode-org.github.io/icu/userguide/format_parse/datetime/.</p>
	 * @return ?IntlDateFormatter <p>The created <code>IntlDateFormatter</code> or <b><code>null</code></b> in case of failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.create.php
	 * @see datefmt_format(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, \IntlTimeZone|\DateTimeZone|string|null $timezone = null, \IntlCalendar|int|null $calendar = null, ?string $pattern = null): ?\IntlDateFormatter {}

	/**
	 * Format the date/time value as a string
	 * <p>Object-oriented style</p><p>Formats the time value as a string.</p>
	 * @param \IntlDateFormatter $formatter <p>The date formatter resource.</p>
	 * @param \IntlCalendar|\DateTimeInterface|array|string|int|float $datetime <p>Value to format. This may be a <code>DateTimeInterface</code> object, an <code>IntlCalendar</code> object, a numeric type representing a (possibly fractional) number of seconds since epoch or an <code>array</code> in the format output by <code>localtime()</code>.</p> <p>If a <code>DateTime</code> or an <code>IntlCalendar</code> object is passed, its timezone is not considered. The object will be formatted using the formater&#x2BC;s configured timezone. If one wants to use the timezone of the object to be formatted, <code>IntlDateFormatter::setTimeZone()</code> must be called before with the object&#x2BC;s timezone. Alternatively, the static function <code>IntlDateFormatter::formatObject()</code> may be used instead.</p>
	 * @return string|false <p>The formatted string or, if an error occurred, <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/intldateformatter.format.php
	 * @see datefmt_create(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message(), datefmt_format_object()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_format(\IntlDateFormatter $formatter, \IntlCalendar|\DateTimeInterface|array|string|int|float $datetime): string|false {}

	/**
	 * Formats an object
	 * <p>Object-oriented style</p><p>This function allows formatting an <code>IntlCalendar</code> or <code>DateTime</code> object without first explicitly creating a <code>IntlDateFormatter</code> object.</p><p>The temporary <code>IntlDateFormatter</code> that will be created will take the timezone from the passed in object. The timezone database bundled with PHP will not be used &#x2013; ICU's will be used instead. The timezone identifier used in <code>DateTime</code> objects must therefore also exist in ICU's database.</p>
	 * @param \IntlCalendar|\DateTimeInterface $datetime <p>An object of type <code>IntlCalendar</code> or <code>DateTime</code>. The timezone information in the object will be used.</p>
	 * @param array|int|string|null $format <p>How to format the date/time. This can either be an <code>array</code> with two elements (first the date style, then the time style, these being one of the constants <b><code>IntlDateFormatter::NONE</code></b>, <b><code>IntlDateFormatter::SHORT</code></b>, <b><code>IntlDateFormatter::MEDIUM</code></b>, <b><code>IntlDateFormatter::LONG</code></b>, <b><code>IntlDateFormatter::FULL</code></b>), an <code>int</code> with the value of one of these constants (in which case it will be used both for the time and the date) or a <code>string</code> with the format described in &#xBB;&#xA0;the ICU documentation. If <b><code>null</code></b>, the default style will be used.</p>
	 * @param ?string $locale <p>The locale to use, or <b><code>null</code></b> to use the default one.</p>
	 * @return string|false <p>A string with result or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.formatobject.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0
	 */
	function datefmt_format_object(\IntlCalendar|\DateTimeInterface $datetime, array|int|string|null $format = null, ?string $locale = null): string|false {}

	/**
	 * Get the calendar type used for the IntlDateFormatter
	 * <p>Object-oriented style</p><p></p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource</p>
	 * @return int|false <p>The calendar type being used by the formatter. Either <b><code>IntlDateFormatter::TRADITIONAL</code></b> or <b><code>IntlDateFormatter::GREGORIAN</code></b>. Returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.getcalendar.php
	 * @see datefmt_get_calendar_object(), datefmt_set_calendar(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_get_calendar(\IntlDateFormatter $formatter): int|false {}

	/**
	 * Get copy of formatterʼs calendar object
	 * <p>Object-oriented style</p><p>Obtain a copy of the calendar object used internally by this formatter. This calendar will have a type (as in gregorian, japanese, buddhist, roc, persian, islamic, etc.) and a timezone that match the type and timezone used by the formatter. The date/time of the object is unspecified.</p>
	 * @param \IntlDateFormatter $formatter
	 * @return IntlCalendar|false|null <p>A copy of the internal calendar object used by this formatter, or <b><code>null</code></b> if none has been set, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.getcalendarobject.php
	 * @see IntlDateFormatter::getCalendar(), IntlDateFormatter::setCalendar()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0
	 */
	function datefmt_get_calendar_object(\IntlDateFormatter $formatter): \IntlCalendar|false|null {}

	/**
	 * Get the datetype used for the IntlDateFormatter
	 * <p>Object-oriented style</p><p>Returns date type used by the formatter.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource.</p>
	 * @return int|false <p>The current date type value of the formatter, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.getdatetype.php
	 * @see datefmt_get_timetype(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_get_datetype(\IntlDateFormatter $formatter): int|false {}

	/**
	 * Get the error code from last operation
	 * <p>Object-oriented style</p><p>Get the error code from last operation. Returns error code from the last number formatting operation.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource.</p>
	 * @return int <p>The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.</p>
	 * @link https://php.net/manual/en/intldateformatter.geterrorcode.php
	 * @see datefmt_get_error_message(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_get_error_code(\IntlDateFormatter $formatter): int {}

	/**
	 * Get the error text from the last operation
	 * <p>Object-oriented style</p><p>Get the error text from the last operation.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource.</p>
	 * @return string <p>Description of the last error.</p>
	 * @link https://php.net/manual/en/intldateformatter.geterrormessage.php
	 * @see datefmt_get_error_code(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_get_error_message(\IntlDateFormatter $formatter): string {}

	/**
	 * Get the locale used by formatter
	 * <p>Object-oriented style</p><p>Get locale used by the formatter.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource</p>
	 * @param int $type <p>You can choose between valid and actual locale ( <b><code>Locale::VALID_LOCALE</code></b>, <b><code>Locale::ACTUAL_LOCALE</code></b>, respectively). The default is the actual locale.</p>
	 * @return string|false <p>The locale of this formatter, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.getlocale.php
	 * @see datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_get_locale(\IntlDateFormatter $formatter, int $type = ULOC_ACTUAL_LOCALE): string|false {}

	/**
	 * Get the pattern used for the IntlDateFormatter
	 * <p>Object-oriented style</p><p>Get pattern used by the formatter.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource.</p>
	 * @return string|false <p>The pattern string being used to format/parse, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.getpattern.php
	 * @see datefmt_set_pattern(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_get_pattern(\IntlDateFormatter $formatter): string|false {}

	/**
	 * Get the timetype used for the IntlDateFormatter
	 * <p>Object-oriented style</p><p>Return time type used by the formatter.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource.</p>
	 * @return int|false <p>The current date type value of the formatter, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.gettimetype.php
	 * @see datefmt_get_datetype(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_get_timetype(\IntlDateFormatter $formatter): int|false {}

	/**
	 * Get formatterʼs timezone
	 * <p>Object-oriented style</p><p>Returns an <code>IntlTimeZone</code> object representing the timezone that will be used by this object to format dates and times. When formatting <code>IntlCalendar</code> and <code>DateTime</code> objects with this <code>IntlDateFormatter</code>, the timezone used will be the one returned by this method, not the one associated with the objects being formatted.</p>
	 * @param \IntlDateFormatter $formatter
	 * @return IntlTimeZone|false <p>The associated <code>IntlTimeZone</code> object or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.gettimezone.php
	 * @see IntlDateFormatter::getTimeZoneId(), IntlDateFormatter::setTimeZone()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0
	 */
	function datefmt_get_timezone(\IntlDateFormatter $formatter): \IntlTimeZone|false {}

	/**
	 * Get the timezone-id used for the IntlDateFormatter
	 * <p>Object-oriented style</p><p>Get the timezone-id used for the IntlDateFormatter.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource.</p>
	 * @return string|false <p>ID string for the time zone used by this formatter, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.gettimezoneid.php
	 * @see datefmt_set_timezone(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_get_timezone_id(\IntlDateFormatter $formatter): string|false {}

	/**
	 * Get the lenient used for the IntlDateFormatter
	 * <p>Object-oriented style</p><p>Check if the parser is strict or lenient in interpreting inputs that do not match the pattern exactly.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource.</p>
	 * @return bool <p><b><code>true</code></b> if parser is lenient, <b><code>false</code></b> if parser is strict. By default the parser is lenient.</p>
	 * @link https://php.net/manual/en/intldateformatter.islenient.php
	 * @see datefmt_set_lenient(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_is_lenient(\IntlDateFormatter $formatter): bool {}

	/**
	 * Parse string to a field-based time value
	 * <p>Object-oriented style</p><p>Converts string $value to a field-based time value ( an array of various fields), starting at $parse_pos and consuming as much of the input value as possible.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource</p>
	 * @param string $string <p>string to convert to a time</p>
	 * @param int $offset <p>Position at which to start the parsing in $value (zero-based). If no error occurs before $value is consumed, $parse_pos will contain -1 otherwise it will contain the position at which parsing ended . If $parse_pos &gt; strlen($value), the parse fails immediately.</p>
	 * @return array|false <p>Localtime compatible array of integers : contains 24 hour clock value in tm_hour field, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.localtime.php
	 * @see datefmt_create(), datefmt_format(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_localtime(\IntlDateFormatter $formatter, string $string, int &$offset = null): array|false {}

	/**
	 * Parse string to a timestamp value
	 * <p>Object-oriented style</p><p>Converts <code>string</code> to an incremental time value, starting at <code>offset</code> and consuming as much of the input value as possible.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource</p>
	 * @param string $string <p>string to convert to a time</p>
	 * @param int $offset <p>Position at which to start the parsing in <code>string</code> (zero-based). If no error occurs before <code>string</code> is consumed, <code>offset</code> will contain -1 otherwise it will contain the position at which parsing ended (and the error occurred). This variable will contain the end position if the parse fails. If <code>offset</code> &gt; <code>strlen($string)</code>, the parse fails immediately.</p>
	 * @return int|float|false <p>Timestamp of parsed value, or <b><code>false</code></b> if value cannot be parsed.</p>
	 * @link https://php.net/manual/en/intldateformatter.parse.php
	 * @see datefmt_create(), datefmt_format(), datefmt_localtime(), datefmt_get_error_code(), datefmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_parse(\IntlDateFormatter $formatter, string $string, int &$offset = null): int|float|false {}

	/**
	 * Sets the calendar type used by the formatter
	 * <p>Object-oriented style</p><p>Sets the calendar or calendar type used by the formatter.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource.</p>
	 * @param \IntlCalendar|int|null $calendar <p>This can either be: the calendar type to use (default is <b><code>IntlDateFormatter::GREGORIAN</code></b>, which is also used if <b><code>null</code></b> is specified) or an <code>IntlCalendar</code> object.</p> <p>Any <code>IntlCalendar</code> object passed in will be cloned; no modifications will be made to the argument object.</p> <p>The timezone of the formatter will only be kept if an <code>IntlCalendar</code> object is not passed, otherwise the new timezone will be that of the passed object.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.setcalendar.php
	 * @see datefmt_get_calendar(), datefmt_get_calendar_object(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_set_calendar(\IntlDateFormatter $formatter, \IntlCalendar|int|null $calendar): bool {}

	/**
	 * Set the leniency of the parser
	 * <p>Object-oriented style</p><p>Define if the parser is strict or lenient in interpreting inputs that do not match the pattern exactly. Enabling lenient parsing allows the parser to accept otherwise flawed date or time patterns, parsing as much as possible to obtain a value. Extra space, unrecognized tokens, or invalid values ("February 30th") are not accepted.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource</p>
	 * @param bool $lenient <p>Sets whether the parser is lenient or not, default is <b><code>true</code></b> (lenient).</p>
	 * @return void <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.setlenient.php
	 * @see datefmt_is_lenient(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_set_lenient(\IntlDateFormatter $formatter, bool $lenient): void {}

	/**
	 * Set the pattern used for the IntlDateFormatter
	 * <p>Object-oriented style</p><p>Set the pattern used for the IntlDateFormatter.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource.</p>
	 * @param string $pattern <p>New pattern string to use. Possible patterns are documented at &#xBB;&#xA0;https://unicode-org.github.io/icu/userguide/format_parse/datetime/.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. Bad formatstrings are usually the cause of the failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.setpattern.php
	 * @see datefmt_get_pattern(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function datefmt_set_pattern(\IntlDateFormatter $formatter, string $pattern): bool {}

	/**
	 * Sets formatterʼs timezone
	 * <p>Object-oriented style</p><p>Sets the timezone used for the IntlDateFormatter. object.</p>
	 * @param \IntlDateFormatter $formatter <p>The formatter resource.</p>
	 * @param \IntlTimeZone|\DateTimeZone|string|null $timezone <p>The timezone to use for this formatter. This can be specified in the following forms:</p> <ul> <li> <p><b><code>null</code></b>, in which case the default timezone will be used, as specified in the ini setting date.timezone or through the function <code>date_default_timezone_set()</code> and as returned by <code>date_default_timezone_get()</code>.</p> </li> <li> <p>An <code>IntlTimeZone</code>, which will be used directly.</p> </li> <li> <p>A <code>DateTimeZone</code>. Its identifier will be extracted and an ICU timezone object will be created; the timezone will be backed by ICU&#x2BC;s database, not PHP&#x2BC;s.</p> </li> <li> <p>A <code>string</code>, which should be a valid ICU timezone identifier. See <code>IntlTimeZone::createTimeZoneIDEnumeration()</code>. Raw offsets such as <code>"GMT+08:30"</code> are also accepted.</p> </li> </ul>
	 * @return ?bool <p>Returns <b><code>null</code></b> on success and <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intldateformatter.settimezone.php
	 * @see IntlDateFormatter::getTimeZone()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0
	 */
	function datefmt_set_timezone(\IntlDateFormatter $formatter, \IntlTimeZone|\DateTimeZone|string|null $timezone): ?bool {}

	/**
	 * Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8
	 * <p>Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8.</p>
	 * @param string $haystack <p>String to search.</p>
	 * @param int $size <p>Maximum number items - based on the <code>type</code> - to return.</p>
	 * @param int $type <p>Defines the type of units referred to by the <code>size</code> parameter:</p> <p></p><ul> <li>GRAPHEME_EXTR_COUNT (default) -<code>size</code> is the number of default grapheme clusters to extract.</li> <li>GRAPHEME_EXTR_MAXBYTES -<code>size</code> is the maximum number of bytes returned.</li> <li>GRAPHEME_EXTR_MAXCHARS - <code>size</code> is the maximum number of UTF-8 characters returned.</li> </ul>
	 * @param int $offset <p>Starting position in <code>haystack</code> in bytes - if given, it must be zero or a positive value that is less than or equal to the length of <code>haystack</code> in bytes, or a negative value that counts from the end of <code>haystack</code>. If <code>offset</code> does not point to the first byte of a UTF-8 character, the start position is moved to the next character boundary.</p>
	 * @param int $next <p>Reference to a value that will be set to the next starting position. When the call returns, this may point to the first byte position past the end of the string.</p>
	 * @return string|false <p>A string starting at offset <code>offset</code> and ending on a default grapheme cluster boundary that conforms to the <code>size</code> and <code>type</code> specified, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.grapheme-extract.php
	 * @see grapheme_substr()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function grapheme_extract(string $haystack, int $size, int $type = GRAPHEME_EXTR_COUNT, int $offset = 0, int &$next = null): string|false {}

	/**
	 * Find position (in grapheme units) of first occurrence of a case-insensitive string
	 * <p>Find position (in grapheme units) of first occurrence of a case-insensitive string</p>
	 * @param string $haystack <p>The string to look in. Must be valid UTF-8.</p>
	 * @param string $needle <p>The string to look for. Must be valid UTF-8.</p>
	 * @param int $offset <p>The optional <code>offset</code> parameter allows you to specify where in <code>haystack</code> to start searching as an offset in grapheme units (not bytes or characters). If the offset is negative, it is treated relative to the end of the string. The position returned is still relative to the beginning of <code>haystack</code> regardless of the value of <code>offset</code>.</p>
	 * @return int|false <p>Returns the position as an integer. If <code>needle</code> is not found, <b>grapheme_stripos()</b> will return <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.grapheme-stripos.php
	 * @see grapheme_stristr(), grapheme_strpos(), grapheme_strripos(), grapheme_strrpos(), grapheme_strstr()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function grapheme_stripos(string $haystack, string $needle, int $offset = 0): int|false {}

	/**
	 * Returns part of haystack string from the first occurrence of case-insensitive needle to the end of haystack
	 * <p>Returns part of <code>haystack</code> string starting from and including the first occurrence of case-insensitive needle to the end of <code>haystack</code>.</p>
	 * @param string $haystack <p>The input string. Must be valid UTF-8.</p>
	 * @param string $needle <p>The string to look for. Must be valid UTF-8.</p>
	 * @param bool $beforeNeedle <p>If <b><code>true</code></b>, <code>grapheme_strstr()</code> returns the part of the <code>haystack</code> before the first occurrence of the needle (excluding <code>needle</code>).</p>
	 * @return string|false <p>Returns the portion of <code>haystack</code>, or <b><code>false</code></b> if <code>needle</code> is not found.</p>
	 * @link https://php.net/manual/en/function.grapheme-stristr.php
	 * @see grapheme_stripos(), grapheme_strpos(), grapheme_strripos(), grapheme_strrpos(), grapheme_strstr()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function grapheme_stristr(string $haystack, string $needle, bool $beforeNeedle = false): string|false {}

	/**
	 * Get string length in grapheme units
	 * <p>Get string length in grapheme units (not bytes or characters)</p>
	 * @param string $string <p>The string being measured for length. It must be a valid UTF-8 string.</p>
	 * @return int|false|null <p>The length of the string on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.grapheme-strlen.php
	 * @see iconv_strlen(), mb_strlen(), strlen()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function grapheme_strlen(string $string): int|false|null {}

	/**
	 * Find position (in grapheme units) of first occurrence of a string
	 * <p>Find position (in grapheme units) of first occurrence of a string</p>
	 * @param string $haystack <p>The string to look in. Must be valid UTF-8.</p>
	 * @param string $needle <p>The string to look for. Must be valid UTF-8.</p>
	 * @param int $offset <p>The optional <code>offset</code> parameter allows you to specify where in <code>haystack</code> to start searching as an offset in grapheme units (not bytes or characters). If the offset is negative, it is treated relative to the end of the string. The position returned is still relative to the beginning of <code>haystack</code> regardless of the value of <code>offset</code>.</p>
	 * @return int|false <p>Returns the position as an integer. If <code>needle</code> is not found, <b>grapheme_strpos()</b> will return <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.grapheme-strpos.php
	 * @see grapheme_stripos(), grapheme_stristr(), grapheme_strripos(), grapheme_strrpos(), grapheme_strstr()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function grapheme_strpos(string $haystack, string $needle, int $offset = 0): int|false {}

	/**
	 * Find position (in grapheme units) of last occurrence of a case-insensitive string
	 * <p>Find position (in grapheme units) of last occurrence of a case-insensitive string</p>
	 * @param string $haystack <p>The string to look in. Must be valid UTF-8.</p>
	 * @param string $needle <p>The string to look for. Must be valid UTF-8.</p>
	 * @param int $offset <p>The optional <code>offset</code> parameter allows you to specify where in <code>haystack</code> to start searching as an offset in grapheme units (not bytes or characters). The position returned is still relative to the beginning of <code>haystack</code> regardless of the value of <code>offset</code>.</p>
	 * @return int|false <p>Returns the position as an integer. If <code>needle</code> is not found, <b>grapheme_strripos()</b> will return <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.grapheme-strripos.php
	 * @see grapheme_stripos(), grapheme_stristr(), grapheme_strpos(), grapheme_strrpos(), grapheme_strstr()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function grapheme_strripos(string $haystack, string $needle, int $offset = 0): int|false {}

	/**
	 * Find position (in grapheme units) of last occurrence of a string
	 * <p>Find position (in grapheme units) of last occurrence of a string</p>
	 * @param string $haystack <p>The string to look in. Must be valid UTF-8.</p>
	 * @param string $needle <p>The string to look for. Must be valid UTF-8.</p>
	 * @param int $offset <p>The optional <code>offset</code> parameter allows you to specify where in <code>haystack</code> to start searching as an offset in grapheme units (not bytes or characters). The position returned is still relative to the beginning of <code>haystack</code> regardless of the value of <code>offset</code>.</p>
	 * @return int|false <p>Returns the position as an integer. If <code>needle</code> is not found, <b>grapheme_strrpos()</b> will return <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.grapheme-strrpos.php
	 * @see grapheme_stripos(), grapheme_stristr(), grapheme_strpos(), grapheme_strripos(), grapheme_strstr()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function grapheme_strrpos(string $haystack, string $needle, int $offset = 0): int|false {}

	/**
	 * Returns part of haystack string from the first occurrence of needle to the end of haystack
	 * <p>Returns part of haystack string from the first occurrence of needle to the end of haystack (including the needle).</p>
	 * @param string $haystack <p>The input string. Must be valid UTF-8.</p>
	 * @param string $needle <p>The string to look for. Must be valid UTF-8.</p>
	 * @param bool $beforeNeedle <p>If <b><code>true</code></b>, <b>grapheme_strstr()</b> returns the part of the <code>haystack</code> before the first occurrence of the <code>needle</code> (excluding the <code>needle</code>).</p>
	 * @return string|false <p>Returns the portion of <code>haystack</code>, or <b><code>false</code></b> if <code>needle</code> is not found.</p>
	 * @link https://php.net/manual/en/function.grapheme-strstr.php
	 * @see grapheme_stristr(), grapheme_stripos(), grapheme_strpos(), grapheme_strripos(), grapheme_strrpos()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function grapheme_strstr(string $haystack, string $needle, bool $beforeNeedle = false): string|false {}

	/**
	 * Return part of a string
	 * <p>Return part of a string</p>
	 * @param string $string <p>The input string. Must be valid UTF-8.</p>
	 * @param int $offset <p>Start position in default grapheme units. If <code>offset</code> is non-negative, the returned string will start at the <code>offset</code>'th position in <code>string</code>, counting from zero. If <code>offset</code> is negative, the returned string will start at the <code>offset</code>'th grapheme unit from the end of string.</p>
	 * @param ?int $length <p>Length in grapheme units. If <code>length</code> is given and is positive, the string returned will contain at most <code>length</code> grapheme units beginning from <code>offset</code> (depending on the length of string). If <code>length</code> is given and is negative, then that many grapheme units will be omitted from the end of string (after the start position has been calculated when <code>offset</code> is negative). If <code>offset</code> denotes a position beyond this truncation, an empty string will be returned.</p>
	 * @return string|false <p>Returns the extracted part of <code>string</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.grapheme-substr.php
	 * @see grapheme_extract()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function grapheme_substr(string $string, int $offset, ?int $length = null): string|false {}

	/**
	 * Convert domain name to IDNA ASCII form
	 * <p>This function converts a Unicode domain name to an IDNA ASCII-compatible format.</p>
	 * @param string $domain <p>The domain to convert, which must be UTF-8 encoded.</p>
	 * @param int $flags <p>Conversion options - combination of IDNA_&#42; constants (except IDNA_ERROR_&#42; constants).</p>
	 * @param int $variant <p>Either <b><code>INTL_IDNA_VARIANT_2003</code></b> (deprecated as of PHP 7.2.0) for IDNA 2003 or <b><code>INTL_IDNA_VARIANT_UTS46</code></b> (only available as of ICU 4.6) for UTS #46.</p>
	 * @param array $idna_info <p>This parameter can be used only if <b><code>INTL_IDNA_VARIANT_UTS46</code></b> was used for <code>variant</code>. In that case, it will be filled with an array with the keys <code>'result'</code>, the possibly illegal result of the transformation, <code>'isTransitionalDifferent'</code>, a boolean indicating whether the usage of the transitional mechanisms of UTS #46 either has or would have changed the result and <code>'errors'</code>, which is an <code>int</code> representing a bitset of the error constants IDNA_ERROR_&#42;.</p>
	 * @return string|false <p>The domain name encoded in ASCII-compatible form, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.idn-to-ascii.php
	 * @see idn_to_utf8()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.2, PECL idn >= 0.1
	 */
	function idn_to_ascii(string $domain, int $flags = IDNA_DEFAULT, int $variant = INTL_IDNA_VARIANT_UTS46, array &$idna_info = null): string|false {}

	/**
	 * Convert domain name from IDNA ASCII to Unicode
	 * <p>This function converts a Unicode domain name from an IDNA ASCII-compatible format to plain Unicode, encoded in UTF-8.</p>
	 * @param string $domain <p>Domain to convert in an IDNA ASCII-compatible format.</p>
	 * @param int $flags <p>Conversion options - combination of IDNA_&#42; constants (except IDNA_ERROR_&#42; constants).</p>
	 * @param int $variant <p>Either <b><code>INTL_IDNA_VARIANT_2003</code></b> (deprecated as of PHP 7.2.0) for IDNA 2003 or <b><code>INTL_IDNA_VARIANT_UTS46</code></b> (only available as of ICU 4.6) for UTS #46.</p>
	 * @param array $idna_info <p>This parameter can be used only if <b><code>INTL_IDNA_VARIANT_UTS46</code></b> was used for <code>variant</code>. In that case, it will be filled with an array with the keys <code>'result'</code>, the possibly illegal result of the transformation, <code>'isTransitionalDifferent'</code>, a boolean indicating whether the usage of the transitional mechanisms of UTS #46 either has or would have changed the result and <code>'errors'</code>, which is an <code>int</code> representing a bitset of the error constants IDNA_ERROR_&#42;.</p>
	 * @return string|false <p>The domain name in Unicode, encoded in UTF-8, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.idn-to-utf8.php
	 * @see idn_to_ascii()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.2, PECL idn >= 0.1
	 */
	function idn_to_utf8(string $domain, int $flags = IDNA_DEFAULT, int $variant = INTL_IDNA_VARIANT_UTS46, array &$idna_info = null): string|false {}

	/**
	 * Get symbolic name for a given error code
	 * <p>Return ICU error code name.</p>
	 * @param int $errorCode <p>ICU error code.</p>
	 * @return string <p>The returned string will be the same as the name of the error code constant.</p>
	 * @link https://php.net/manual/en/function.intl-error-name.php
	 * @see intl_is_failure(), intl_get_error_code(), intl_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function intl_error_name(int $errorCode): string {}

	/**
	 * Get last error code on the object
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return int
	 * @link https://php.net/manual/en/intlbreakiterator.geterrorcode.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function intl_get_error_code(): int {}

	/**
	 * Get last error message on the object
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return string
	 * @link https://php.net/manual/en/intlbreakiterator.geterrormessage.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function intl_get_error_message(): string {}

	/**
	 * Check whether the given error code indicates failure
	 * @param int $errorCode <p>is a value that returned by functions: <code>intl_get_error_code()</code>, <code>collator_get_error_code()</code> .</p>
	 * @return bool <p><b><code>true</code></b> if it the code indicates some failure, and <b><code>false</code></b> in case of success or a warning.</p>
	 * @link https://php.net/manual/en/function.intl-is-failure.php
	 * @see intl_get_error_code(), collator_get_error_code(), Collator-getErrorCode()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function intl_is_failure(int $errorCode): bool {}

	/**
	 * Get last error code on the object
	 * <p>Object-oriented style (method):</p><p>Returns the numeric ICU error code for the last call on this object (including cloning) or the <code>IntlCalendar</code> given for the <code>calendar</code> parameter (in the procedural&#x2012;style version). This may indicate only a warning (negative error code) or no error at all (<b><code>U_ZERO_ERROR</code></b>). The actual presence of an error can be tested with <code>intl_is_failure()</code>.</p><p>Invalid arguments detected on the PHP side (before invoking functions of the ICU library) are not recorded for the purposes of this function.</p><p>The last error that occurred in any call to a function of the intl extension, including early argument errors, can be obtained with <code>intl_get_error_code()</code>. This function resets the global error code, but not the object&#x2BC;s error code.</p>
	 * @param \IntlCalendar $calendar <p>The calendar object, on the procedural style interface.</p>
	 * @return int|false <p>An ICU error code indicating either success, failure or a warning. Returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intlcalendar.geterrorcode.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intlcal_get_error_code(\IntlCalendar $calendar): int|false {}

	/**
	 * Get last error message on the object
	 * <p>Object-oriented style (method):</p><p>Returns the error message (if any) associated with the error reported by <code>IntlCalendar::getErrorCode()</code> or <code>intlcal_get_error_code()</code>. If there is no associated error message, only the string representation of the name of the error constant will be returned. Otherwise, the message also includes a message set on the side of the PHP binding.</p>
	 * @param \IntlCalendar $calendar <p>The calendar object, on the procedural style interface.</p>
	 * @return string|false <p>The error message associated with last error that occurred in a function call on this object, or a string indicating the non-existence of an error. Returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intlcalendar.geterrormessage.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intlcal_get_error_message(\IntlCalendar $calendar): string|false {}

	/**
	 * Get the number of IDs in the equivalency group that includes the given ID
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $timezoneId
	 * @return int|false
	 * @link https://php.net/manual/en/intltimezone.countequivalentids.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_count_equivalent_ids(string $timezoneId): int|false {}

	/**
	 * Create a new copy of the default timezone for this host
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return IntlTimeZone
	 * @link https://php.net/manual/en/intltimezone.createdefault.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_create_default(): \IntlTimeZone {}

	/**
	 * Get an enumeration over time zone IDs associated with the given country or offset
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone|string|int|float|null $countryOrRawOffset
	 * @return IntlIterator|false
	 * @link https://php.net/manual/en/intltimezone.createenumeration.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_create_enumeration(\IntlTimeZone|string|int|float|null $countryOrRawOffset = null): \IntlIterator|false {}

	/**
	 * Create a timezone object for the given ID
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $timezoneId
	 * @return ?IntlTimeZone
	 * @link https://php.net/manual/en/intltimezone.createtimezone.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_create_time_zone(string $timezoneId): ?\IntlTimeZone {}

	/**
	 * Get an enumeration over system time zone IDs with the given filter conditions
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $type
	 * @param ?string $region
	 * @param ?int $rawOffset
	 * @return IntlIterator|false <p>Returns <code>IntlIterator</code> or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intltimezone.createtimezoneidenumeration.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function intltz_create_time_zone_id_enumeration(int $type, ?string $region = null, ?int $rawOffset = null): \IntlIterator|false {}

	/**
	 * Create a timezone object from DateTimeZone
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \DateTimeZone $timezone
	 * @return ?IntlTimeZone
	 * @link https://php.net/manual/en/intltimezone.fromdatetimezone.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_from_date_time_zone(\DateTimeZone $timezone): ?\IntlTimeZone {}

	/**
	 * Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $timezoneId
	 * @param bool $isSystemId
	 * @return string|false
	 * @link https://php.net/manual/en/intltimezone.getcanonicalid.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_canonical_id(string $timezoneId, bool &$isSystemId = null): string|false {}

	/**
	 * Get a name of this time zone suitable for presentation to the user
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone $timezone
	 * @param bool $dst
	 * @param int $style
	 * @param ?string $locale
	 * @return string|false
	 * @link https://php.net/manual/en/intltimezone.getdisplayname.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_display_name(\IntlTimeZone $timezone, bool $dst = false, int $style = IntlTimeZone::DISPLAY_LONG, ?string $locale = null): string|false {}

	/**
	 * Get the amount of time to be added to local standard time to get local wall clock time
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone $timezone
	 * @return int
	 * @link https://php.net/manual/en/intltimezone.getdstsavings.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_dst_savings(\IntlTimeZone $timezone): int {}

	/**
	 * Get an ID in the equivalency group that includes the given ID
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $timezoneId
	 * @param int $offset
	 * @return string|false
	 * @link https://php.net/manual/en/intltimezone.getequivalentid.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_equivalent_id(string $timezoneId, int $offset): string|false {}

	/**
	 * Get last error code on the object
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone $timezone
	 * @return int|false
	 * @link https://php.net/manual/en/intltimezone.geterrorcode.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_error_code(\IntlTimeZone $timezone): int|false {}

	/**
	 * Get last error message on the object
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone $timezone
	 * @return string|false
	 * @link https://php.net/manual/en/intltimezone.geterrormessage.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_error_message(\IntlTimeZone $timezone): string|false {}

	/**
	 * Create GMT (UTC) timezone
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return IntlTimeZone
	 * @link https://php.net/manual/en/intltimezone.getgmt.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_gmt(): \IntlTimeZone {}

	/**
	 * Get timezone ID
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone $timezone
	 * @return string|false
	 * @link https://php.net/manual/en/intltimezone.getid.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_id(\IntlTimeZone $timezone): string|false {}

	/**
	 * Translate a Windows timezone into a system timezone
	 * <p>Object-oriented style (method):</p><p>Translates a Windows timezone (e.g. "Pacific Standard Time") into a system timezone (e.g. "America/Los_Angeles").</p><p><b>Note</b>:  This function requires ICU version &#x2265; 52. </p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $timezoneId
	 * @param ?string $region
	 * @return string|false <p>Returns the system timezone or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intltimezone.getidforwindowsid.php
	 * @since PHP 7 >= 7.1.0, PHP 8
	 */
	function intltz_get_id_for_windows_id(string $timezoneId, ?string $region = null): string|false {}

	/**
	 * Get the time zone raw and GMT offset for the given moment in time
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone $timezone
	 * @param float $timestamp
	 * @param bool $local
	 * @param int $rawOffset
	 * @param int $dstOffset
	 * @return bool
	 * @link https://php.net/manual/en/intltimezone.getoffset.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_offset(\IntlTimeZone $timezone, float $timestamp, bool $local, int &$rawOffset, int &$dstOffset): bool {}

	/**
	 * Get the raw GMT offset (before taking daylight savings time into account
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone $timezone
	 * @return int
	 * @link https://php.net/manual/en/intltimezone.getrawoffset.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_raw_offset(\IntlTimeZone $timezone): int {}

	/**
	 * Get the region code associated with the given system time zone ID
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $timezoneId
	 * @return string|false <p>Return region or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intltimezone.getregion.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function intltz_get_region(string $timezoneId): string|false {}

	/**
	 * Get the timezone data version currently used by ICU
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return string|false
	 * @link https://php.net/manual/en/intltimezone.gettzdataversion.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_get_tz_data_version(): string|false {}

	/**
	 * Get the "unknown" time zone
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return IntlTimeZone <p>Returns <code>IntlTimeZone</code> or <b><code>null</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intltimezone.getunknown.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function intltz_get_unknown(): \IntlTimeZone {}

	/**
	 * Translate a system timezone into a Windows timezone
	 * <p>Object-oriented style (method):</p><p>Translates a system timezone (e.g. "America/Los_Angeles") into a Windows timezone (e.g. "Pacific Standard Time").</p><p><b>Note</b>:  This function requires ICU version &#x2265; 52. </p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $timezoneId
	 * @return string|false <p>Returns the Windows timezone or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/intltimezone.getwindowsid.php
	 * @since PHP 7 >= 7.1.0, PHP 8
	 */
	function intltz_get_windows_id(string $timezoneId): string|false {}

	/**
	 * Check if this zone has the same rules and offset as another zone
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone $timezone
	 * @param \IntlTimeZone $other
	 * @return bool
	 * @link https://php.net/manual/en/intltimezone.hassamerules.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_has_same_rules(\IntlTimeZone $timezone, \IntlTimeZone $other): bool {}

	/**
	 * Convert to DateTimeZone object
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone $timezone
	 * @return DateTimeZone|false
	 * @link https://php.net/manual/en/intltimezone.todatetimezone.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_to_date_time_zone(\IntlTimeZone $timezone): \DateTimeZone|false {}

	/**
	 * Check if this time zone uses daylight savings time
	 * <p>Object-oriented style (method):</p><p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \IntlTimeZone $timezone
	 * @return bool
	 * @link https://php.net/manual/en/intltimezone.usedaylighttime.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1
	 */
	function intltz_use_daylight_time(\IntlTimeZone $timezone): bool {}

	/**
	 * Tries to find out best available locale based on HTTP "Accept-Language" header
	 * <p>Object-oriented style</p><p>Tries to find locale that can satisfy the language list that is requested by the HTTP "Accept-Language" header.</p>
	 * @param string $header <p>The string containing the "Accept-Language" header according to format in RFC 2616.</p>
	 * @return string|false <p>The corresponding locale identifier.</p><p>Returns <b><code>false</code></b> when the length of <code>header</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
	 * @link https://php.net/manual/en/locale.acceptfromhttp.php
	 * @see locale_lookup()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_accept_from_http(string $header): string|false {}

	/**
	 * Canonicalize the locale string
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $locale
	 * @return ?string <p>Canonicalized locale string.</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
	 * @link https://php.net/manual/en/locale.canonicalize.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_canonicalize(string $locale): ?string {}

	/**
	 * Returns a correctly ordered and delimited locale ID
	 * <p>Object-oriented style</p><p>Returns a correctly ordered and delimited locale ID the keys identify the particular locale ID subtags, and the values are the associated subtag values.</p>
	 * @param array $subtags <p>An <code>array</code> containing a list of key-value pairs, where the keys identify the particular locale ID subtags, and the values are the associated subtag values.</p><p><b>Note</b>:</p><p>The <code>'variant'</code> and <code>'private'</code> subtags can take maximum 15 values whereas <code>'extlang'</code> can take maximum 3 values. For instance, variants are allowed with the suffix ranging from 0-14. Hence the keys for the input array can be <code>variant0</code>, <code>variant1</code>, &#x2026;,<code>variant14</code>. In the returned locale id, the subtag is ordered by suffix resulting in <code>variant0</code> followed by <code>variant1</code> followed by <code>variant2</code> and so on.</p> <p>Alternatively, the <code>'variant'</code>, <code>'private'</code> and <code>'extlang'</code> values can be specified as array under specific key (e.g. <code>'variant'</code>). In this case no limits on the number of recognized subtags apply.</p>
	 * @return string|false <p>The corresponding locale identifier, or <b><code>false</code></b> when <code>subtags</code> is empty.</p>
	 * @link https://php.net/manual/en/locale.composelocale.php
	 * @see locale_parse()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_compose(array $subtags): string|false {}

	/**
	 * Checks if a language tag filter matches with locale
	 * <p>Object-oriented style</p><p>Checks if a <code>languageTag</code> filter matches with <code>locale</code> according to RFC 4647's basic filtering algorithm</p>
	 * @param string $languageTag <p>The language tag to check</p>
	 * @param string $locale <p>The language range to check against</p>
	 * @param bool $canonicalize <p>If true, the arguments will be converted to canonical form before matching.</p>
	 * @return ?bool <p><b><code>true</code></b> if <code>locale</code> matches <code>languageTag</code> <b><code>false</code></b> otherwise.</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
	 * @link https://php.net/manual/en/locale.filtermatches.php
	 * @see locale_lookup()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_filter_matches(string $languageTag, string $locale, bool $canonicalize = false): ?bool {}

	/**
	 * Gets the variants for the input locale
	 * <p>Object-oriented style</p><p>Gets the variants for the input locale</p>
	 * @param string $locale <p>The locale to extract the variants from</p>
	 * @return ?array <p>The <code>array</code> containing the list of all variants subtag for the locale or <b><code>null</code></b> if not present</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
	 * @link https://php.net/manual/en/locale.getallvariants.php
	 * @see locale_get_primary_language(), locale_get_script(), locale_get_region()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_all_variants(string $locale): ?array {}

	/**
	 * Gets the default locale value from the INTL global 'default_locale'
	 * <p>Object-oriented style</p><p>Gets the default locale value. At the PHP initialization this value is set to 'intl.default_locale' value from php.ini if that value exists or from ICU's function uloc_getDefault().</p>
	 * @return string <p>The current runtime locale</p>
	 * @link https://php.net/manual/en/locale.getdefault.php
	 * @see locale_set_default()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_default(): string {}

	/**
	 * Returns an appropriately localized display name for language of the inputlocale
	 * <p>Object-oriented style</p><p>Returns an appropriately localized display name for language of the input locale. If is <b><code>null</code></b> then the default locale is used.</p>
	 * @param string $locale <p>The locale to return a display language for</p>
	 * @param ?string $displayLocale <p>Optional format locale to use to display the language name</p>
	 * @return string|false <p>Display name of the language for the <code>locale</code> in the format appropriate for <code>displayLocale</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/locale.getdisplaylanguage.php
	 * @see locale_get_display_name(), locale_get_display_script(), locale_get_display_region(), locale_get_display_variant()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_display_language(string $locale, ?string $displayLocale = null): string|false {}

	/**
	 * Returns an appropriately localized display name for the input locale
	 * <p>Object-oriented style</p><p>Returns an appropriately localized display name for the input locale. If <code>locale</code> is <b><code>null</code></b> then the default locale is used.</p>
	 * @param string $locale <p>The locale to return a display name for.</p>
	 * @param ?string $displayLocale <p>optional format locale</p>
	 * @return string|false <p>Display name of the locale in the format appropriate for <code>displayLocale</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/locale.getdisplayname.php
	 * @see locale_get_display_language(), locale_get_display_script(), locale_get_display_region(), locale_get_display_variant()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_display_name(string $locale, ?string $displayLocale = null): string|false {}

	/**
	 * Returns an appropriately localized display name for region of the input locale
	 * <p>Object-oriented style</p><p>Returns an appropriately localized display name for region of the input locale. If is <b><code>null</code></b> then the default locale is used.</p>
	 * @param string $locale <p>The locale to return a display region for.</p>
	 * @param ?string $displayLocale <p>Optional format locale to use to display the region name</p>
	 * @return string|false <p>Display name of the region for the <code>locale</code> in the format appropriate for <code>displayLocale</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/locale.getdisplayregion.php
	 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_script(), locale_get_display_variant()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_display_region(string $locale, ?string $displayLocale = null): string|false {}

	/**
	 * Returns an appropriately localized display name for script of the input locale
	 * <p>Object-oriented style</p><p>Returns an appropriately localized display name for script of the input locale. If is <b><code>null</code></b> then the default locale is used.</p>
	 * @param string $locale <p>The locale to return a display script for</p>
	 * @param ?string $displayLocale <p>Optional format locale to use to display the script name</p>
	 * @return string|false <p>Display name of the script for the <code>locale</code> in the format appropriate for <code>displayLocale</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/locale.getdisplayscript.php
	 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_region(), locale_get_display_variant()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_display_script(string $locale, ?string $displayLocale = null): string|false {}

	/**
	 * Returns an appropriately localized display name for variants of the input locale
	 * <p>Object-oriented style</p><p>Returns an appropriately localized display name for variants of the input locale. If is <b><code>null</code></b> then the default locale is used.</p>
	 * @param string $locale <p>The locale to return a display variant for</p>
	 * @param ?string $displayLocale <p>Optional format locale to use to display the variant name</p>
	 * @return string|false <p>Display name of the variant for the <code>locale</code> in the format appropriate for <code>displayLocale</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/locale.getdisplayvariant.php
	 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_script(), locale_get_display_region()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_display_variant(string $locale, ?string $displayLocale = null): string|false {}

	/**
	 * Gets the keywords for the input locale
	 * <p>Object-oriented style</p><p>Gets the keywords for the input locale.</p>
	 * @param string $locale <p>The locale to extract the keywords from</p>
	 * @return array|false|null <p>Associative <code>array</code> containing the keyword-value pairs for this locale</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
	 * @link https://php.net/manual/en/locale.getkeywords.php
	 * @see locale_get_all_variants()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_keywords(string $locale): array|false|null {}

	/**
	 * Gets the primary language for the input locale
	 * <p>Object-oriented style</p><p>Gets the primary language for the input locale</p>
	 * @param string $locale <p>The locale to extract the primary language code from</p>
	 * @return ?string <p>The language code associated with the language.</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
	 * @link https://php.net/manual/en/locale.getprimarylanguage.php
	 * @see locale_get_script(), locale_get_region(), locale_get_all_variants()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_primary_language(string $locale): ?string {}

	/**
	 * Gets the region for the input locale
	 * <p>Object-oriented style</p><p>Gets the region for the input locale.</p>
	 * @param string $locale <p>The locale to extract the region code from</p>
	 * @return ?string <p>The region subtag for the locale or <b><code>null</code></b> if not present</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
	 * @link https://php.net/manual/en/locale.getregion.php
	 * @see locale_get_primary_language(), locale_get_script(), locale_get_all_variants()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_region(string $locale): ?string {}

	/**
	 * Gets the script for the input locale
	 * <p>Object-oriented style</p><p>Gets the script for the input locale.</p>
	 * @param string $locale <p>The locale to extract the script code from</p>
	 * @return ?string <p>The script subtag for the locale or <b><code>null</code></b> if not present</p>
	 * @link https://php.net/manual/en/locale.getscript.php
	 * @see locale_get_primary_language(), locale_get_region(), locale_get_all_variants()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_get_script(string $locale): ?string {}

	/**
	 * Searches the language tag list for the best match to the language
	 * <p>Object-oriented style</p><p>Searches the items in <code>languageTag</code> for the best match to the language range specified in <code>locale</code> according to RFC 4647's lookup algorithm.</p>
	 * @param array $languageTag <p>An <code>array</code> containing a list of language tags to compare to <code>locale</code>. Maximum 100 items allowed.</p>
	 * @param string $locale <p>The locale to use as the language range when matching.</p>
	 * @param bool $canonicalize <p>If true, the arguments will be converted to canonical form before matching.</p>
	 * @param ?string $defaultLocale <p>The locale to use if no match is found.</p>
	 * @return ?string <p>The closest matching language tag or default value.</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
	 * @link https://php.net/manual/en/locale.lookup.php
	 * @see locale_filter_matches()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_lookup(array $languageTag, string $locale, bool $canonicalize = false, ?string $defaultLocale = null): ?string {}

	/**
	 * Returns a key-value array of locale ID subtag elements
	 * <p>Object-oriented style</p><p>Returns a key-value array of locale ID subtag elements.</p>
	 * @param string $locale <p>The locale to extract the subtag array from. Note: The 'variant' and 'private' subtags can take maximum 15 values whereas 'extlang' can take maximum 3 values.</p>
	 * @return ?array <p>Returns an array containing a list of key-value pairs, where the keys identify the particular locale ID subtags, and the values are the associated subtag values. The array will be ordered as the locale id subtags e.g. in the locale id if variants are '-varX-varY-varZ' then the returned array will have variant0=&gt;varX , variant1=&gt;varY , variant2=&gt;varZ</p><p>Returns <b><code>null</code></b> when the length of <code>locale</code> exceeds <b><code>INTL_MAX_LOCALE_LEN</code></b>.</p>
	 * @link https://php.net/manual/en/locale.parselocale.php
	 * @see locale_compose()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_parse(string $locale): ?array {}

	/**
	 * Sets the default runtime locale
	 * <p>Object-oriented style</p><p>Sets the default runtime locale to <code>locale</code>. This changes the value of INTL global 'default_locale' locale identifier. UAX #35 extensions are accepted.</p>
	 * @param string $locale <p>Is a BCP 47 compliant language tag.</p>
	 * @return bool <p>Returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/locale.setdefault.php
	 * @see locale_get_default()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function locale_set_default(string $locale): bool {}

	/**
	 * Constructs a new Message Formatter
	 * <p>Object-oriented style (method)</p><p>Object-oriented style (constructor):</p><p>Constructs a new Message Formatter</p>
	 * @param string $locale <p>The locale to use when formatting arguments</p>
	 * @param string $pattern <p>The pattern string to stick arguments into. The pattern uses an 'apostrophe-friendly' syntax; see &#xBB;&#xA0;Quoting/Escaping for details.</p>
	 * @return ?MessageFormatter <p>The formatter <code>object</code>, or <b><code>null</code></b> on failure.</p>
	 * @link https://php.net/manual/en/messageformatter.create.php
	 * @see msgfmt_format(), msgfmt_parse(), msgfmt_get_error_code(), msgfmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function msgfmt_create(string $locale, string $pattern): ?\MessageFormatter {}

	/**
	 * Format the message
	 * <p>Object-oriented style</p><p>Format the message by substituting the data into the format string according to the locale rules</p>
	 * @param \MessageFormatter $formatter <p>The message formatter</p>
	 * @param array $values <p>Arguments to insert into the format string</p>
	 * @return string|false <p>The formatted string, or <b><code>false</code></b> if an error occurred</p>
	 * @link https://php.net/manual/en/messageformatter.format.php
	 * @see msgfmt_create(), msgfmt_parse(), msgfmt_format_message(), msgfmt_get_error_code(), msgfmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function msgfmt_format(\MessageFormatter $formatter, array $values): string|false {}

	/**
	 * Quick format message
	 * <p>Object-oriented style</p><p>Quick formatting function that formats the string without having to explicitly create the formatter object. Use this function when the format operation is done only once and does not need any parameters or state to be kept or when wanting to customize the output by providing additional context to ICU directly.</p>
	 * @param string $locale <p>The locale to use for formatting locale-dependent parts</p>
	 * @param string $pattern <p>The pattern <code>string</code> to insert things into. The pattern uses an 'apostrophe-friendly' syntax; see &#xBB;&#xA0;Quoting/Escaping for details.</p>
	 * @param array $values <p>The <code>array</code> of values to insert into the format <code>string</code></p>
	 * @return string|false <p>The formatted pattern string or <b><code>false</code></b> if an error occurred</p>
	 * @link https://php.net/manual/en/messageformatter.formatmessage.php
	 * @see msgfmt_create(), msgfmt_parse(), msgfmt_get_error_code(), msgfmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function msgfmt_format_message(string $locale, string $pattern, array $values): string|false {}

	/**
	 * Get the error code from last operation
	 * <p>Object-oriented style</p><p>Get the error code from last operation.</p>
	 * @param \MessageFormatter $formatter <p>The message formatter</p>
	 * @return int <p>The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.</p>
	 * @link https://php.net/manual/en/messageformatter.geterrorcode.php
	 * @see msgfmt_get_error_message(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function msgfmt_get_error_code(\MessageFormatter $formatter): int {}

	/**
	 * Get the error text from the last operation
	 * <p>Object-oriented style</p><p>Get the error text from the last operation.</p>
	 * @param \MessageFormatter $formatter <p>The message formatter</p>
	 * @return string <p>Description of the last error.</p>
	 * @link https://php.net/manual/en/messageformatter.geterrormessage.php
	 * @see msgfmt_get_error_code(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function msgfmt_get_error_message(\MessageFormatter $formatter): string {}

	/**
	 * Get the locale for which the formatter was created
	 * <p>Object-oriented style</p><p>Get the locale for which the formatter was created.</p>
	 * @param \MessageFormatter $formatter <p>The formatter resource</p>
	 * @return string <p>The locale name</p>
	 * @link https://php.net/manual/en/messageformatter.getlocale.php
	 * @see msgfmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function msgfmt_get_locale(\MessageFormatter $formatter): string {}

	/**
	 * Get the pattern used by the formatter
	 * <p>Object-oriented style</p><p>Get the pattern used by the formatter</p>
	 * @param \MessageFormatter $formatter <p>The message formatter</p>
	 * @return string|false <p>The pattern <code>string</code> for this message formatter, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/messageformatter.getpattern.php
	 * @see msgfmt_create(), msgfmt_set_pattern()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function msgfmt_get_pattern(\MessageFormatter $formatter): string|false {}

	/**
	 * Parse input string according to pattern
	 * <p>Object-oriented style</p><p>Parses input <code>string</code> and return any extracted items as an <code>array</code>.</p>
	 * @param \MessageFormatter $formatter <p>The message formatter</p>
	 * @param string $string <p>The <code>string</code> to parse</p>
	 * @return array|false <p>An <code>array</code> containing the items extracted, or <b><code>false</code></b> on error</p>
	 * @link https://php.net/manual/en/messageformatter.parse.php
	 * @see msgfmt_create(), msgfmt_format(), msgfmt_parse_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function msgfmt_parse(\MessageFormatter $formatter, string $string): array|false {}

	/**
	 * Quick parse input string
	 * <p>Object-oriented style</p><p>Parses input string without explicitly creating the formatter object. Use this function when the format operation is done only once and does not need any parameters or state to be kept.</p>
	 * @param string $locale <p>The locale to use for parsing locale-dependent parts</p>
	 * @param string $pattern <p>The pattern with which to parse the <code>message</code>.</p>
	 * @param string $message <p>The <code>string</code> to parse, conforming to the <code>pattern</code>.</p>
	 * @return array|false <p>An <code>array</code> containing items extracted, or <b><code>false</code></b> on error</p>
	 * @link https://php.net/manual/en/messageformatter.parsemessage.php
	 * @see msgfmt_create(), msgfmt_format_message(), msgfmt_parse()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function msgfmt_parse_message(string $locale, string $pattern, string $message): array|false {}

	/**
	 * Set the pattern used by the formatter
	 * <p>Object-oriented style</p><p>Set the pattern used by the formatter</p>
	 * @param \MessageFormatter $formatter <p>The message formatter</p>
	 * @param string $pattern <p>The pattern <code>string</code> to use in this message formatter. The pattern uses an 'apostrophe-friendly' syntax; see &#xBB;&#xA0;Quoting/Escaping for details.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/messageformatter.setpattern.php
	 * @see msgfmt_create(), msgfmt_get_pattern()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function msgfmt_set_pattern(\MessageFormatter $formatter, string $pattern): bool {}

	/**
	 * Gets the Decomposition_Mapping property for the given UTF-8 encoded code point
	 * <p>Object-oriented style</p><p>Gets the Decomposition_Mapping property, as specified in the Unicode Character Database (UCD), for the given UTF-8 encoded code point.</p>
	 * @param string $string <p>The input string, which should be a single, UTF-8 encoded, code point.</p>
	 * @param int $form
	 * @return ?string <p>Returns a <code>string</code> containing the Decomposition_Mapping property, if present in the UCD.</p><p>Returns <b><code>null</code></b> if there is no Decomposition_Mapping property for the character.</p>
	 * @link https://php.net/manual/en/normalizer.getrawdecomposition.php
	 * @since PHP 7 >= 7.3, PHP 8
	 */
	function normalizer_get_raw_decomposition(string $string, int $form = Normalizer::FORM_C): ?string {}

	/**
	 * Checks if the provided string is already in the specified normalization form
	 * <p>Object-oriented style</p><p>Checks if the provided string is already in the specified normalization form.</p>
	 * @param string $string <p>The input string to normalize</p>
	 * @param int $form <p>One of the normalization forms.</p>
	 * @return bool <p><b><code>true</code></b> if normalized, <b><code>false</code></b> otherwise or if there an error</p>
	 * @link https://php.net/manual/en/normalizer.isnormalized.php
	 * @see normalizer_normalize()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function normalizer_is_normalized(string $string, int $form = Normalizer::FORM_C): bool {}

	/**
	 * Normalizes the input provided and returns the normalized string
	 * <p>Object-oriented style</p><p>Normalizes the input provided and returns the normalized string</p>
	 * @param string $string <p>The input string to normalize</p>
	 * @param int $form <p>One of the normalization forms.</p>
	 * @return string|false <p>The normalized string or <b><code>false</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/normalizer.normalize.php
	 * @see normalizer_is_normalized()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function normalizer_normalize(string $string, int $form = Normalizer::FORM_C): string|false {}

	/**
	 * Create a number formatter
	 * <p>Object-oriented style (method)</p><p>Object-oriented style (constructor):</p><p>Creates a number formatter.</p>
	 * @param string $locale <p>Locale in which the number would be formatted (locale name, e.g. en_CA).</p>
	 * @param int $style <p>Style of the formatting, one of the  format style constants. If <b><code>NumberFormatter::PATTERN_DECIMAL</code></b> or <b><code>NumberFormatter::PATTERN_RULEBASED</code></b> is passed then the number format is opened using the given pattern, which must conform to the syntax described in &#xBB;&#xA0;ICU DecimalFormat documentation or &#xBB;&#xA0;ICU RuleBasedNumberFormat documentation, respectively.</p>
	 * @param ?string $pattern <p>Pattern string if the chosen style requires a pattern.</p>
	 * @return ?NumberFormatter <p>Returns <code>NumberFormatter</code> object or <b><code>null</code></b> on error.</p>
	 * @link https://php.net/manual/en/numberformatter.create.php
	 * @see numfmt_format(), numfmt_parse()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_create(string $locale, int $style, ?string $pattern = null): ?\NumberFormatter {}

	/**
	 * Format a number
	 * <p>Object-oriented style</p><p>Format a numeric value according to the formatter rules.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param int|float $num <p>The value to format. Can be <code>int</code> or <code>float</code>, other values will be converted to a numeric value.</p>
	 * @param int $type <p>The  formatting type to use. Note that <b><code>NumberFormatter::TYPE_CURRENCY</code></b> is not supported; use <code>NumberFormatter::formatCurrency()</code> instead.</p>
	 * @return string|false <p>Returns the string containing formatted value, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/numberformatter.format.php
	 * @see numfmt_get_error_code(), numfmt_format_currency(), numfmt_parse(), msgfmt_format_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_format(\NumberFormatter $formatter, int|float $num, int $type = NumberFormatter::TYPE_DEFAULT): string|false {}

	/**
	 * Format a currency value
	 * <p>Object-oriented style</p><p>Format the currency value according to the formatter rules.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param float $amount <p>The numeric currency value.</p>
	 * @param string $currency <p>The 3-letter ISO 4217 currency code indicating the currency to use.</p>
	 * @return string|false <p>String representing the formatted currency value, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/numberformatter.formatcurrency.php
	 * @see numfmt_get_error_code(), numfmt_format(), numfmt_parse_currency(), msgfmt_format_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_format_currency(\NumberFormatter $formatter, float $amount, string $currency): string|false {}

	/**
	 * Get an attribute
	 * <p>Object-oriented style</p><p>Get a numeric attribute associated with the formatter. An example of a numeric attribute is the number of integer digits the formatter will produce.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param int $attribute <p>Attribute specifier - one of the  numeric attribute constants.</p>
	 * @return int|float|false <p>Return attribute value on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/numberformatter.getattribute.php
	 * @see numfmt_get_error_code(), numfmt_get_text_attribute(), numfmt_set_attribute()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_get_attribute(\NumberFormatter $formatter, int $attribute): int|float|false {}

	/**
	 * Get formatter's last error code
	 * <p>Object-oriented style</p><p>Get error code from the last function performed by the formatter.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @return int <p>Returns error code from last formatter call.</p>
	 * @link https://php.net/manual/en/numberformatter.geterrorcode.php
	 * @see numfmt_get_error_message(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_get_error_code(\NumberFormatter $formatter): int {}

	/**
	 * Get formatter's last error message
	 * <p>Object-oriented style</p><p>Get error message from the last function performed by the formatter.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @return string <p>Returns error message from last formatter call.</p>
	 * @link https://php.net/manual/en/numberformatter.geterrormessage.php
	 * @see numfmt_get_error_code(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_get_error_message(\NumberFormatter $formatter): string {}

	/**
	 * Get formatter locale
	 * <p>Object-oriented style</p><p>Get formatter locale name.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param int $type <p>You can choose between valid and actual locale ( <b><code>Locale::VALID_LOCALE</code></b>, <b><code>Locale::ACTUAL_LOCALE</code></b>, respectively). The default is the actual locale.</p>
	 * @return string|false <p>The locale name used to create the formatter, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/numberformatter.getlocale.php
	 * @see numfmt_create(), numfmt_get_error_code()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_get_locale(\NumberFormatter $formatter, int $type = ULOC_ACTUAL_LOCALE): string|false {}

	/**
	 * Get formatter pattern
	 * <p>Object-oriented style</p><p>Extract pattern used by the formatter.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @return string|false <p>Pattern <code>string</code> that is used by the formatter, or <b><code>false</code></b> if an error happens.</p>
	 * @link https://php.net/manual/en/numberformatter.getpattern.php
	 * @see numfmt_get_error_code(), numfmt_set_pattern(), numfmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_get_pattern(\NumberFormatter $formatter): string|false {}

	/**
	 * Get a symbol value
	 * <p>Object-oriented style</p><p>Get a symbol associated with the formatter. The formatter uses symbols to represent the special locale-dependent characters in a number, for example the percent sign. This API is not supported for rule-based formatters.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param int $symbol <p>Symbol specifier, one of the  format symbol constants.</p>
	 * @return string|false <p>The symbol string or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/numberformatter.getsymbol.php
	 * @see numfmt_get_error_code(), numfmt_set_symbol()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_get_symbol(\NumberFormatter $formatter, int $symbol): string|false {}

	/**
	 * Get a text attribute
	 * <p>Object-oriented style</p><p>Get a text attribute associated with the formatter. An example of a text attribute is the suffix for positive numbers. If the formatter does not understand the attribute, <b><code>U_UNSUPPORTED_ERROR</code></b> error is produced. Rule-based formatters only understand <b><code>NumberFormatter::DEFAULT_RULESET</code></b> and <b><code>NumberFormatter::PUBLIC_RULESETS</code></b>.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param int $attribute <p>Attribute specifier - one of the  text attribute constants.</p>
	 * @return string|false <p>Return attribute value on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/numberformatter.gettextattribute.php
	 * @see numfmt_get_error_code(), numfmt_get_attribute(), numfmt_set_text_attribute()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_get_text_attribute(\NumberFormatter $formatter, int $attribute): string|false {}

	/**
	 * Parse a number
	 * <p>Object-oriented style</p><p>Parse a string into a number using the current formatter rules.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param string $string <p>The string to parse for the number.</p>
	 * @param int $type <p>The  formatting type to use. By default, <b><code>NumberFormatter::TYPE_DOUBLE</code></b> is used. Note that <b><code>NumberFormatter::TYPE_CURRENCY</code></b> is not supported; use <code>NumberFormatter::parseCurrency()</code> instead.</p>
	 * @param int $offset <p>Offset in the string at which to begin parsing. On return, this value will hold the offset at which parsing ended.</p>
	 * @return int|float|false <p>The value of the parsed number or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/numberformatter.parse.php
	 * @see numfmt_get_error_code(), numfmt_format(), numfmt_parse_currency()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_parse(\NumberFormatter $formatter, string $string, int $type = NumberFormatter::TYPE_DOUBLE, int &$offset = null): int|float|false {}

	/**
	 * Parse a currency number
	 * <p>Object-oriented style</p><p>Parse a string into a float and a currency using the current formatter.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param string $string
	 * @param string $currency <p>Parameter to receive the currency name (3-letter ISO 4217 currency code).</p>
	 * @param int $offset <p>Offset in the string at which to begin parsing. On return, this value will hold the offset at which parsing ended.</p>
	 * @return float|false <p>The parsed numeric value or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/numberformatter.parsecurrency.php
	 * @see numfmt_get_error_code(), numfmt_parse(), numfmt_format_currency()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_parse_currency(\NumberFormatter $formatter, string $string, string &$currency, int &$offset = null): float|false {}

	/**
	 * Set an attribute
	 * <p>Object-oriented style</p><p>Set a numeric attribute associated with the formatter. An example of a numeric attribute is the number of integer digits the formatter will produce.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param int $attribute <p>Attribute specifier - one of the  numeric attribute constants.</p>
	 * @param int|float $value <p>The attribute value.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/numberformatter.setattribute.php
	 * @see numfmt_get_error_code(), numfmt_get_attribute(), numfmt_set_text_attribute()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_set_attribute(\NumberFormatter $formatter, int $attribute, int|float $value): bool {}

	/**
	 * Set formatter pattern
	 * <p>Object-oriented style</p><p>Set the pattern used by the formatter. Can not be used on a rule-based formatter.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param string $pattern <p>Pattern in syntax described in &#xBB;&#xA0;ICU DecimalFormat documentation.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/numberformatter.setpattern.php
	 * @see numfmt_get_error_code(), numfmt_create(), numfmt_get_pattern()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_set_pattern(\NumberFormatter $formatter, string $pattern): bool {}

	/**
	 * Set a symbol value
	 * <p>Object-oriented style</p><p>Set a symbol associated with the formatter. The formatter uses symbols to represent the special locale-dependent characters in a number, for example the percent sign. This API is not supported for rule-based formatters.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param int $symbol <p>Symbol specifier, one of the  format symbol constants.</p>
	 * @param string $value <p>Text for the symbol.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/numberformatter.setsymbol.php
	 * @see numfmt_get_error_code(), numfmt_get_symbol()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_set_symbol(\NumberFormatter $formatter, int $symbol, string $value): bool {}

	/**
	 * Set a text attribute
	 * <p>Object-oriented style</p><p>Set a text attribute associated with the formatter. An example of a text attribute is the suffix for positive numbers. If the formatter does not understand the attribute, <b><code>U_UNSUPPORTED_ERROR</code></b> error is produced. Rule-based formatters only understand <b><code>NumberFormatter::DEFAULT_RULESET</code></b> and <b><code>NumberFormatter::PUBLIC_RULESETS</code></b>.</p>
	 * @param \NumberFormatter $formatter <p><code>NumberFormatter</code> object.</p>
	 * @param int $attribute <p>Attribute specifier - one of the text attribute constants.</p>
	 * @param string $value <p>Text for the attribute value.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/numberformatter.settextattribute.php
	 * @see numfmt_get_error_code(), numfmt_get_text_attribute(), numfmt_set_attribute()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0
	 */
	function numfmt_set_text_attribute(\NumberFormatter $formatter, int $attribute, string $value): bool {}

	/**
	 * Get number of elements in the bundle
	 * <p>Object-oriented style</p><p>Get the number of elements in the bundle.</p>
	 * @param \ResourceBundle $bundle <p><code>ResourceBundle</code> object.</p>
	 * @return int <p>Returns number of elements in the bundle.</p>
	 * @link https://php.net/manual/en/resourcebundle.count.php
	 * @see resourcebundle_get()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function resourcebundle_count(\ResourceBundle $bundle): int {}

	/**
	 * Create a resource bundle
	 * <p>Object-oriented style (method)</p><p>Object-oriented style (constructor):</p><p>Creates a resource bundle.</p>
	 * @param ?string $locale <p>Locale for which the resources should be loaded (locale name, e.g. en_CA).</p>
	 * @param ?string $bundle <p>The directory where the data is stored or the name of the .dat file.</p>
	 * @param bool $fallback <p>Whether locale should match exactly or fallback to parent locale is allowed.</p>
	 * @return ?ResourceBundle <p>Returns <code>ResourceBundle</code> object or <b><code>null</code></b> on error.</p>
	 * @link https://php.net/manual/en/resourcebundle.create.php
	 * @see resourcebundle_get()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function resourcebundle_create(?string $locale, ?string $bundle, bool $fallback = true): ?\ResourceBundle {}

	/**
	 * Get data from the bundle
	 * <p>Object-oriented style</p><p>Get the data from the bundle by index or string key.</p>
	 * @param \ResourceBundle $bundle <p><code>ResourceBundle</code> object.</p>
	 * @param string|int $index <p>Data index, must be string or integer.</p>
	 * @param bool $fallback <p>Whether locale should match exactly or fallback to parent locale is allowed.</p>
	 * @return mixed <p>Returns the data located at the index or <b><code>null</code></b> on error. Strings, integers and binary data strings are returned as corresponding PHP types, integer array is returned as PHP array. Complex types are returned as <code>ResourceBundle</code> object.</p>
	 * @link https://php.net/manual/en/resourcebundle.get.php
	 * @see resourcebundle_count()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function resourcebundle_get(\ResourceBundle $bundle, string|int $index, bool $fallback = true): mixed {}

	/**
	 * Get bundle's last error code
	 * <p>Object-oriented style</p><p>Get error code from the last function performed by the bundle object.</p>
	 * @param \ResourceBundle $bundle <p><code>ResourceBundle</code> object.</p>
	 * @return int <p>Returns error code from last bundle object call.</p>
	 * @link https://php.net/manual/en/resourcebundle.geterrorcode.php
	 * @see resourcebundle_get_error_message(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function resourcebundle_get_error_code(\ResourceBundle $bundle): int {}

	/**
	 * Get bundle's last error message
	 * <p>Object-oriented style</p><p>Get error message from the last function performed by the bundle object.</p>
	 * @param \ResourceBundle $bundle <p><code>ResourceBundle</code> object.</p>
	 * @return string <p>Returns error message from last bundle object's call.</p>
	 * @link https://php.net/manual/en/resourcebundle.geterrormessage.php
	 * @see resourcebundle_get_error_code(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function resourcebundle_get_error_message(\ResourceBundle $bundle): string {}

	/**
	 * Get supported locales
	 * <p>Object-oriented style</p><p>Get available locales from ResourceBundle name.</p>
	 * @param string $bundle <p>Path of ResourceBundle for which to get available locales, or empty string for default locales list.</p>
	 * @return array|false <p>Returns the list of locales supported by the bundle, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/resourcebundle.locales.php
	 * @see resourcebundle_get()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function resourcebundle_locales(string $bundle): array|false {}

	/**
	 * Create a transliterator
	 * <p>Object-oriented style</p><p>Opens a Transliterator by ID.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $id <p>The ID. A list of all registered transliterator IDs can be retrieved by using <code>Transliterator::listIDs()</code>.</p>
	 * @param int $direction <p>The direction, defaults to Transliterator::FORWARD. May also be set to Transliterator::REVERSE.</p>
	 * @return ?Transliterator <p>Returns a <code>Transliterator</code> object on success, or <b><code>null</code></b> on failure.</p>
	 * @link https://php.net/manual/en/transliterator.create.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function transliterator_create(string $id, int $direction = Transliterator::FORWARD): ?\Transliterator {}

	/**
	 * Create transliterator from rules
	 * <p>Object-oriented style</p><p>Creates a Transliterator from rules.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $rules <p>The rules as defined in Transform Rules Syntax of UTS #35: Unicode LDML.</p>
	 * @param int $direction <p>The direction, defaults to Transliterator::FORWARD. May also be set to Transliterator::REVERSE.</p>
	 * @return ?Transliterator <p>Returns a <code>Transliterator</code> object on success, or <b><code>null</code></b> on failure.</p>
	 * @link https://php.net/manual/en/transliterator.createfromrules.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function transliterator_create_from_rules(string $rules, int $direction = Transliterator::FORWARD): ?\Transliterator {}

	/**
	 * Create an inverse transliterator
	 * <p>Object-oriented style</p><p>Opens the inverse transliterator.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \Transliterator $transliterator
	 * @return ?Transliterator <p>Returns a <code>Transliterator</code> object on success, or <b><code>null</code></b> on failure</p>
	 * @link https://php.net/manual/en/transliterator.createinverse.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function transliterator_create_inverse(\Transliterator $transliterator): ?\Transliterator {}

	/**
	 * Get last error code
	 * <p>Object-oriented style</p><p>Gets the last error code for this transliterator.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \Transliterator $transliterator
	 * @return int|false <p>The error code on success, or <b><code>false</code></b> if none exists, or on failure.</p>
	 * @link https://php.net/manual/en/transliterator.geterrorcode.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function transliterator_get_error_code(\Transliterator $transliterator): int|false {}

	/**
	 * Get last error message
	 * <p>Object-oriented style</p><p>Gets the last error message for this transliterator.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \Transliterator $transliterator
	 * @return string|false <p>The error message on success, or <b><code>false</code></b> if none exists, or on failure.</p>
	 * @link https://php.net/manual/en/transliterator.geterrormessage.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function transliterator_get_error_message(\Transliterator $transliterator): string|false {}

	/**
	 * Get transliterator IDs
	 * <p>Object-oriented style</p><p>Returns an array with the registered transliterator IDs.</p>
	 * @return array|false <p>An <code>array</code> of registered transliterator IDs on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/transliterator.listids.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function transliterator_list_ids(): array|false {}

	/**
	 * Transliterate a string
	 * <p>Object-oriented style</p><p>Transforms a string or part thereof using an ICU transliterator.</p>
	 * @param \Transliterator|string $transliterator <p>In the procedural version, either a <code>Transliterator</code> or a <code>string</code> from which a <code>Transliterator</code> can be built.</p>
	 * @param string $string <p>The string to be transformed.</p>
	 * @param int $start <p>The start index (in UTF-16 code units) from which the string will start to be transformed, inclusive. Indexing starts at 0. The text before will be left as is.</p>
	 * @param int $end <p>The end index (in UTF-16 code units) until which the string will be transformed, exclusive. Indexing starts at 0. The text after will be left as is.</p>
	 * @return string|false <p>The transformed string on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/transliterator.transliterate.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0
	 */
	function transliterator_transliterate(\Transliterator|string $transliterator, string $string, int $start = 0, int $end = -1): string|false {}

	/**
	 * Allow processing of unassigned codepoints in the input for IDN functions.
	 */
	define('IDNA_ALLOW_UNASSIGNED', 1);

	/**
	 * Check whether the input conforms to the BiDi rules. Ignored by the IDNA2003 implementation, which always performs this check.
	 */
	define('IDNA_CHECK_BIDI', 4);

	/**
	 * Check whether the input conforms to the CONTEXTJ rules. Ignored by the IDNA2003 implementation, as this check is new in IDNA2008.
	 */
	define('IDNA_CHECK_CONTEXTJ', 8);

	/**
	 * Prohibit processing of unassigned codepoints in the input for IDN functions and do not check if the input conforms to domain name ASCII rules.
	 */
	define('IDNA_DEFAULT', 0);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_BIDI', 2048);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_CONTEXTJ', 4096);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_DISALLOWED', 128);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_DOMAIN_NAME_TOO_LONG', 4);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_EMPTY_LABEL', 1);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_HYPHEN_3_4', 32);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_INVALID_ACE_LABEL', 1024);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_LABEL_HAS_DOT', 512);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_LABEL_TOO_LONG', 2);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_LEADING_COMBINING_MARK', 64);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_LEADING_HYPHEN', 8);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_PUNYCODE', 256);

	/**
	 * Errors reported in a bitset returned by the UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>.
	 */
	define('IDNA_ERROR_TRAILING_HYPHEN', 16);

	/**
	 * Option for nontransitional processing in <code>idn_to_ascii()</code>. Transitional processing is activated by default. This option is ignored by the IDNA2003 implementation.
	 */
	define('IDNA_NONTRANSITIONAL_TO_ASCII', 16);

	/**
	 * Option for nontransitional processing in <code>idn_to_utf8()</code>. Transitional processing is activated by default. This option is ignored by the IDNA2003 implementation.
	 */
	define('IDNA_NONTRANSITIONAL_TO_UNICODE', 32);

	/**
	 * Check if the input for IDN functions conforms to domain name ASCII rules.
	 */
	define('IDNA_USE_STD3_RULES', 2);

	/**
	 * The current ICU library version as a dotted-decimal string.
	 */
	define('INTL_ICU_VERSION', 70.1);

	/**
	 * Use IDNA 2003 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>. This is the default. This constant and using the default has been deprecated as of PHP 7.2.0.
	 */
	define('INTL_IDNA_VARIANT_2003', null);

	/**
	 * Use UTS #46 algorithm in <code>idn_to_utf8()</code> and <code>idn_to_ascii()</code>. Available as of ICU 4.6.
	 */
	define('INTL_IDNA_VARIANT_UTS46', 1);

	/**
	 * Limit on locale length, set to 80 in PHP code. Locale names longer than this limit will not be accepted.
	 */
	define('INTL_MAX_LOCALE_LEN', 156);

}
