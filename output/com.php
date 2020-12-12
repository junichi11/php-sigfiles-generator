<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.com-exception.php
	 * @since PHP 5, PHP 7
	 */
	class com_exception extends \Exception implements \Throwable {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

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
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): mixed {}

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
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

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
	 * <p><b>COMPersistHelper</b> improves the interoperability of COM and PHP with regard to the php.ini directive open_basedir, and stream resources.</p>
	 * @link https://php.net/manual/en/class.compersisthelper.php
	 * @since PHP 5, PHP 7
	 */
	final class COMPersistHelper {

		/**
		 * Get current filename
		 * <p>Retrieves the current name of the file associated with the object.</p>
		 * @return string|false <p>Returns the current name of the file associated with the object.</p>
		 * @link https://php.net/manual/en/compersisthelper.getcurfilename.php
		 * @since PHP 5, PHP 7
		 */
		public function GetCurFileName(): string|false {}

		/**
		 * Get maximum stream size
		 * <p>Retrieves the size of the stream (in bytes) needed to save the object.</p>
		 * @return int <p>Returns the size of the stream (in bytes) needed to save the object.</p>
		 * @link https://php.net/manual/en/compersisthelper.getmaxstreamsize.php
		 * @since PHP 5, PHP 7
		 */
		public function GetMaxStreamSize(): int {}

		/**
		 * Initialize object to default state
		 * <p>Initializes an object to a default state.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/compersisthelper.initnew.php
		 * @since PHP 5, PHP 7
		 */
		public function InitNew(): bool {}

		/**
		 * Load object from file
		 * <p>Opens the specified file and initializes an object from the file contents.</p>
		 * @param string $filename The name of the file from which to load the object.
		 * @param int $flags The access mode to be used when opening the file. Possible values are taken from the STGM enumeration. The method can treat this value as a suggestion, adding more restrictive permissions if necessary. If <code>flags</code> is <code>0</code>, the implementation is supposed to open the file using whatever default permissions are used when a user opens the file.
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/compersisthelper.loadfromfile.php
		 * @since PHP 5, PHP 7
		 */
		public function LoadFromFile(string $filename, int $flags = 0): bool {}

		/**
		 * Load object from stream
		 * <p>Initializes an object from the stream where it was saved previously.</p>
		 * @param resource $stream The stream resource from which to load the object.
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/compersisthelper.loadfromstream.php
		 * @since PHP 5, PHP 7
		 */
		public function LoadFromStream($stream): bool {}

		/**
		 * Save object to file
		 * <p>Saves a copy of the object to the specified file.</p>
		 * @param string|null $filename The name of the file to which to save the object.
		 * @param bool $remember Indicates whether the <code>filename</code> parameter is to be used as the current working file. If <b><code>TRUE</code></b>, <code>filename</code> becomes the current file and the object is supposed to clear its dirty flag after the save. If <b><code>FALSE</code></b>, this save operation is a "Save A Copy As ..." operation. In this case, the current file is unchanged and the object is not supposed to clear its dirty flag.
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/compersisthelper.savetofile.php
		 * @since PHP 5, PHP 7
		 */
		public function SaveToFile(string|null $filename, bool $remember = TRUE): bool {}

		/**
		 * Save object to stream
		 * <p>Saves an object to the specified stream.</p>
		 * @param resource $stream The stream resource to which to save the object.
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/compersisthelper.savetostream.php
		 * @since PHP 5, PHP 7
		 */
		public function SaveToStream($stream): bool {}

		/**
		 * Construct a COMPersistHelper object
		 * <p>Constructs a persistence helper object, usually associated with a <code>variant</code>.</p>
		 * @param \variant|null $variant A COM object which implements <b>IDispatch</b>. To be able to successfully call any of COMPersistHelper's methods, the object has to implement <b>IPersistFile</b>, <b>IPersistStream</b> and/or <b>IPersistStreamInit</b>.   Passing <b><code>NULL</code></b> as <code>variant</code> is only useful if the object is to be loaded from a stream by calling <code>COMPersistHelper::LoadFromStream()</code>.
		 * @return self
		 * @link https://php.net/manual/en/compersisthelper.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(\variant|null $variant = NULL) {}
	}

	/**
	 * Generate a globally unique identifier (GUID)
	 * <p>Generates a Globally Unique Identifier (GUID).</p><p>A GUID is generated in the same way as DCE UUID's, except that the Microsoft convention is to enclose a GUID in curly braces.</p>
	 * @return string|false <p>Returns the GUID as a string, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.com-create-guid.php
	 * @since PHP 5, PHP 7
	 */
	function com_create_guid(): string|false {}

	/**
	 * Connect events from a COM object to a PHP object
	 * <p>Instructs COM to sink events generated by <code>variant</code> into the PHP object <code>sink_object</code>.</p><p>Be careful how you use this feature; if you are doing something similar to the example below, then it doesn't really make sense to run it in a web server context.</p>
	 * @param \variant $variant
	 * @param object $sink_object <p><code>sink_object</code> should be an instance of a class with methods named after those of the desired dispinterface; you may use <code>com_print_typeinfo()</code> to help generate a template class for this purpose.</p>
	 * @param array|string|null $sink_interface <p>PHP will attempt to use the default dispinterface type specified by the typelibrary associated with <code>variant</code>, but you may override this choice by setting <code>sink_interface</code> to the name of the dispinterface that you want to use.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.com-event-sink.php
	 * @see com_print_typeinfo(), com_message_pump()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function com_event_sink(\variant $variant, object $sink_object, array|string|null $sink_interface = NULL): bool {}

	/**
	 * Returns a handle to an already running instance of a COM object
	 * <p><b>com_get_active_object()</b> is similar to creating a new instance of a com object, except that it will only return an object to your script if the object is already running. OLE applications use something known as the "<code>Running Object Table</code>" to allow well-known applications to be launched only once; this function exposes the COM library function GetActiveObject() to get a handle on a running instance.</p>
	 * @param string $prog_id <p><code>prog_id</code> must be either the ProgID or CLSID for the object that you want to access (for example <code>Word.Application</code>).</p>
	 * @param int|null $codepage <p>Acts in precisely the same way that it does for the com class.</p>
	 * @return variant <p>If the requested object is running, it will be returned to your script just like any other COM object.</p>
	 * @link https://php.net/manual/en/function.com-get-active-object.php
	 * @since PHP 5, PHP 7
	 */
	function com_get_active_object(string $prog_id, int|null $codepage = NULL): \variant {}

	/**
	 * Loads a Typelib
	 * <p>Loads a type-library and registers its constants in the engine, as though they were defined using <code>define()</code>.</p><p>Note that it is much more efficient to use the  configuration setting to pre-load and register the constants, although not so flexible.</p><p>If you have turned on , then PHP will attempt to automatically register the constants associated with a COM object when you instantiate it. This depends on the interfaces provided by the COM object itself, and may not always be possible.</p>
	 * @param string $typelib <p><code>typelib</code> can be one of the following:</p><ul> <li> <p>The filename of a <code>.tlb</code> file or the executable module that contains the type library.</p> </li> <li> <p>The type library GUID, followed by its version number, for example <code>{00000200-0000-0010-8000-00AA006D2EA4},2,0</code>.</p> </li> <li> <p>The type library name, e.g. <code>Microsoft OLE DB ActiveX Data Objects 1.0 Library</code>.</p> </li> </ul> PHP will attempt to resolve the type library in this order, as the process gets more and more expensive as you progress down the list; searching for the type library by name is handled by physically enumerating the registry until we find a match.
	 * @param bool $case_insensitive <p>The <code>case_insensitive</code> behaves inversely to the parameter <code>$case_insensitive</code> in the <code>define()</code> function.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.com-load-typelib.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function com_load_typelib(string $typelib, bool $case_insensitive = TRUE): bool {}

	/**
	 * Process COM messages, sleeping for up to timeoutms milliseconds
	 * <p>This function will sleep for up to <code>timeout_milliseconds</code> milliseconds, or until a message arrives in the queue.</p><p>The purpose of this function is to route COM calls between apartments and handle various synchronization issues. This allows your script to wait efficiently for events to be triggered, while still handling other events or running other code in the background. You should use it in a loop, as demonstrated by the example in the <code>com_event_sink()</code> function, until you are finished using event bound COM objects.</p>
	 * @param int $timeout_milliseconds <p>The timeout, in milliseconds.</p> <p>If you do not specify a value for <code>timeout_milliseconds</code>, then 0 will be assumed. A 0 value means that no waiting will be performed; if there are messages pending they will be dispatched as before; if there are no messages pending, the function will return <b><code>FALSE</code></b> immediately without sleeping.</p>
	 * @return bool <p>If a message or messages arrives before the timeout, they will be dispatched, and the function will return <b><code>TRUE</code></b>. If the timeout occurs and no messages were processed, the return value will be <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.com-message-pump.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function com_message_pump(int $timeout_milliseconds = 0): bool {}

	/**
	 * Print out a PHP class definition for a dispatchable interface
	 * <p>The purpose of this function is to help generate a skeleton class for use as an event sink. You may also use it to generate a dump of any COM object, provided that it supports enough of the introspection interfaces, and that you know the name of the interface you want to display.</p>
	 * @param \variant|string $variant <p><code>variant</code> should be either an instance of a COM object, or be the name of a typelibrary (which will be resolved according to the rules set out in <code>com_load_typelib()</code>).</p>
	 * @param string|null $dispatch_interface <p>The name of an <code>IDispatch</code> descendant interface that you want to display.</p>
	 * @param bool $display_sink <p>If set to <b><code>TRUE</code></b>, the corresponding sink interface will be displayed instead.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.com-print-typeinfo.php
	 * @see com_event_sink(), com_load_typelib()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function com_print_typeinfo(\variant|string $variant, string|null $dispatch_interface = NULL, bool $display_sink = FALSE): bool {}

	/**
	 * Returns the absolute value of a variant
	 * <p>Returns the absolute value of a variant.</p>
	 * @param mixed $value <p>The variant.</p>
	 * @return variant <p>Returns the absolute value of <code>value</code>.</p>
	 * @link https://php.net/manual/en/function.variant-abs.php
	 * @see abs()
	 * @since PHP 5, PHP 7
	 */
	function variant_abs(mixed $value): \variant {}

	/**
	 * "Adds" two variant values together and returns the result
	 * <p>Adds <code>left</code> to <code>right</code> using the following rules (taken from the MSDN library), which correspond to those of Visual Basic:</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <p>Returns the result.</p>
	 * @link https://php.net/manual/en/function.variant-add.php
	 * @see variant_sub()
	 * @since PHP 5, PHP 7
	 */
	function variant_add(mixed $left, mixed $right): \variant {}

	/**
	 * Performs a bitwise AND operation between two variants
	 * <p>Performs a bitwise AND operation. Note that this is slightly different from a regular AND operation.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <b>Variant AND Rules</b>   If <code>left</code> is If <code>right</code> is then the result is    <b><code>TRUE</code></b><b><code>TRUE</code></b><b><code>TRUE</code></b> <b><code>TRUE</code></b><b><code>FALSE</code></b><b><code>FALSE</code></b> <b><code>TRUE</code></b><b><code>NULL</code></b><b><code>NULL</code></b> <b><code>FALSE</code></b><b><code>TRUE</code></b><b><code>FALSE</code></b> <b><code>FALSE</code></b><b><code>FALSE</code></b><b><code>FALSE</code></b> <b><code>FALSE</code></b><b><code>NULL</code></b><b><code>FALSE</code></b> <b><code>NULL</code></b><b><code>TRUE</code></b><b><code>NULL</code></b> <b><code>NULL</code></b><b><code>FALSE</code></b><b><code>FALSE</code></b> <b><code>NULL</code></b><b><code>NULL</code></b><b><code>NULL</code></b>
	 * @link https://php.net/manual/en/function.variant-and.php
	 * @see variant_or()
	 * @since PHP 5, PHP 7
	 */
	function variant_and(mixed $left, mixed $right): \variant {}

	/**
	 * Convert a variant into a new variant object of another type
	 * <p>This function makes a copy of <code>variant</code> and then performs a variant cast operation to force the copy to have the type given by <code>type</code>.</p><p>This function wraps VariantChangeType() in the COM library; consult MSDN for more information.</p>
	 * @param \variant $variant <p>The variant.</p>
	 * @param int $type <p><code>type</code> should be one of the <b><code>VT_XXX</code></b> constants.</p>
	 * @return variant <p>Returns a variant of given <code>type</code>.</p>
	 * @link https://php.net/manual/en/function.variant-cast.php
	 * @see variant_set_type()
	 * @since PHP 5, PHP 7
	 */
	function variant_cast(\variant $variant, int $type): \variant {}

	/**
	 * Concatenates two variant values together and returns the result
	 * <p>Concatenates <code>left</code> with <code>right</code> and returns the result.</p><p>This function is notionally equivalent to <code>$left</code> <code>.</code> <code>$right</code>.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <p>Returns the result of the concatenation.</p>
	 * @link https://php.net/manual/en/function.variant-cat.php
	 * @since PHP 5, PHP 7
	 */
	function variant_cat(mixed $left, mixed $right): \variant {}

	/**
	 * Compares two variants
	 * <p>Compares <code>left</code> with <code>right</code>.</p><p>This function will only compare scalar values, not arrays or variant records.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @param int $locale_id <p>A valid Locale Identifier to use when comparing strings (this affects string collation).</p>
	 * @param int $flags <p><code>flags</code> can be one or more of the following values OR'd together, and affects string comparisons:</p> <b>Variant Comparision Flags</b>   value meaning     <b><code>NORM_IGNORECASE</code></b> Compare case insensitively   <b><code>NORM_IGNORENONSPACE</code></b> Ignore nonspacing characters   <b><code>NORM_IGNORESYMBOLS</code></b> Ignore symbols   <b><code>NORM_IGNOREWIDTH</code></b> Ignore string width   <b><code>NORM_IGNOREKANATYPE</code></b> Ignore Kana type   <b><code>NORM_IGNOREKASHIDA</code></b> Ignore Arabic kashida characters
	 * @return int <p>Returns one of the following:</p> <b>Variant Comparision Results</b>   value meaning     <b><code>VARCMP_LT</code></b> <code>left</code> is less than <code>right</code>    <b><code>VARCMP_EQ</code></b> <code>left</code> is equal to <code>right</code>    <b><code>VARCMP_GT</code></b> <code>left</code> is greater than <code>right</code>    <b><code>VARCMP_NULL</code></b> Either <code>left</code>, <code>right</code> or both are <b><code>NULL</code></b>
	 * @link https://php.net/manual/en/function.variant-cmp.php
	 * @since PHP 5, PHP 7
	 */
	function variant_cmp(mixed $left, mixed $right, int $locale_id = LOCALE_SYSTEM_DEFAULT, int $flags = 0): int {}

	/**
	 * Returns a variant date representation of a Unix timestamp
	 * <p>Converts <code>timestamp</code> from a unix timestamp value into a variant of type <b><code>VT_DATE</code></b>. This allows easier interopability between the unix-ish parts of PHP and COM.</p>
	 * @param int $timestamp <p>A unix timestamp.</p>
	 * @return variant <p>Returns a <b><code>VT_DATE</code></b> variant.</p>
	 * @link https://php.net/manual/en/function.variant-date-from-timestamp.php
	 * @see variant_date_to_timestamp(), mktime(), time()
	 * @since PHP 5, PHP 7
	 */
	function variant_date_from_timestamp(int $timestamp): \variant {}

	/**
	 * Converts a variant date/time value to Unix timestamp
	 * <p>Converts <code>variant</code> from a <b><code>VT_DATE</code></b> (or similar) value into a Unix timestamp. This allows easier interopability between the Unix-ish parts of PHP and COM.</p>
	 * @param \variant $variant <p>The variant.</p>
	 * @return int|null <p>Returns a unix timestamp, or <b><code>NULL</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.variant-date-to-timestamp.php
	 * @see variant_date_from_timestamp(), date(), strftime()
	 * @since PHP 5, PHP 7
	 */
	function variant_date_to_timestamp(\variant $variant): int|null {}

	/**
	 * Returns the result from dividing two variants
	 * <p>Divides <code>left</code> by <code>right</code> and returns the result.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <b>Variant Division Rules</b>   If Then     Both expressions are of the string, date, character, boolean type Double is returned   One expression is a string type and the other a character Division and a double is returned   One expression is numeric and the other is a string Division and a double is returned.   Both expressions are numeric Division and a double is returned   Either expression is NULL NULL is returned   <code>right</code> is empty and <code>left</code> is anything but empty A com_exception with code <b><code>DISP_E_DIVBYZERO</code></b> is thrown   <code>left</code> is empty and <code>right</code> is anything but empty. 0 as type double is returned   Both expressions are empty A com_exception with code <b><code>DISP_E_OVERFLOW</code></b> is thrown
	 * @link https://php.net/manual/en/function.variant-div.php
	 * @see variant_idiv()
	 * @since PHP 5, PHP 7
	 */
	function variant_div(mixed $left, mixed $right): \variant {}

	/**
	 * Performs a bitwise equivalence on two variants
	 * <p>Performs a bitwise equivalence on two variants.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <p>If each bit in <code>left</code> is equal to the corresponding bit in <code>right</code> then <b><code>TRUE</code></b> is returned, otherwise <b><code>FALSE</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.variant-eqv.php
	 * @since PHP 5, PHP 7
	 */
	function variant_eqv(mixed $left, mixed $right): \variant {}

	/**
	 * Returns the integer portion of a variant
	 * <p>Gets the integer portion of a variant.</p>
	 * @param mixed $value <p>The variant.</p>
	 * @return variant <p>If <code>value</code> is negative, then the first negative integer greater than or equal to the variant is returned, otherwise returns the integer portion of the value of <code>value</code>.</p>
	 * @link https://php.net/manual/en/function.variant-fix.php
	 * @see variant_int(), variant_round(), floor(), ceil(), round()
	 * @since PHP 5, PHP 7
	 */
	function variant_fix(mixed $value): \variant {}

	/**
	 * Returns the type of a variant object
	 * <p>Returns the type of a variant object.</p>
	 * @param \variant $variant <p>The variant object.</p>
	 * @return int <p>This function returns an integer value that indicates the type of <code>variant</code>, which can be an instance of com, dotnet or variant classes. The return value can be compared to one of the <b><code>VT_XXX</code></b> constants.</p><p>The return value for COM and DOTNET objects will usually be <b><code>VT_DISPATCH</code></b>; the only reason this function works for those classes is because COM and DOTNET are descendants of VARIANT.</p>
	 * @link https://php.net/manual/en/function.variant-get-type.php
	 * @see variant_set_type()
	 * @since PHP 5, PHP 7
	 */
	function variant_get_type(\variant $variant): int {}

	/**
	 * Converts variants to integers and then returns the result from dividing them
	 * <p>Converts <code>left</code> and <code>right</code> to integer values, and then performs integer division.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <b>Variant Integer Division Rules</b>   If Then     Both expressions are of the string, date, character, boolean type Division and integer is returned   One expression is a string type and the other a character Division   One expression is numeric and the other is a string Division   Both expressions are numeric Division   Either expression is NULL NULL is returned   Both expressions are empty A com_exception with code <b><code>DISP_E_DIVBYZERO</code></b> is thrown
	 * @link https://php.net/manual/en/function.variant-idiv.php
	 * @see variant_div()
	 * @since PHP 5, PHP 7
	 */
	function variant_idiv(mixed $left, mixed $right): \variant {}

	/**
	 * Performs a bitwise implication on two variants
	 * <p>Performs a bitwise implication operation.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <b>Variant Implication Table</b>   If <code>left</code> is If <code>right</code> is then the result is    <b><code>TRUE</code></b><b><code>TRUE</code></b><b><code>TRUE</code></b> <b><code>TRUE</code></b><b><code>FALSE</code></b><b><code>FALSE</code></b> <b><code>TRUE</code></b><b><code>NULL</code></b><b><code>TRUE</code></b> <b><code>FALSE</code></b><b><code>TRUE</code></b><b><code>TRUE</code></b> <b><code>FALSE</code></b><b><code>FALSE</code></b><b><code>TRUE</code></b> <b><code>FALSE</code></b><b><code>NULL</code></b><b><code>TRUE</code></b> <b><code>NULL</code></b><b><code>TRUE</code></b><b><code>TRUE</code></b> <b><code>NULL</code></b><b><code>FALSE</code></b><b><code>NULL</code></b> <b><code>NULL</code></b><b><code>NULL</code></b><b><code>NULL</code></b>
	 * @link https://php.net/manual/en/function.variant-imp.php
	 * @since PHP 5, PHP 7
	 */
	function variant_imp(mixed $left, mixed $right): \variant {}

	/**
	 * Returns the integer portion of a variant
	 * <p>Gets the integer portion of a variant.</p>
	 * @param mixed $value <p>The variant.</p>
	 * @return variant <p>If <code>value</code> is negative, then the first negative integer greater than or equal to the variant is returned, otherwise returns the integer portion of the value of <code>value</code>.</p>
	 * @link https://php.net/manual/en/function.variant-int.php
	 * @see variant_fix(), variant_round(), floor(), ceil(), round()
	 * @since PHP 5, PHP 7
	 */
	function variant_int(mixed $value): \variant {}

	/**
	 * Divides two variants and returns only the remainder
	 * <p>Divides <code>left</code> by <code>right</code> and returns the remainder.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <p>Returns the remainder of the division.</p>
	 * @link https://php.net/manual/en/function.variant-mod.php
	 * @see variant_div(), variant_idiv()
	 * @since PHP 5, PHP 7
	 */
	function variant_mod(mixed $left, mixed $right): \variant {}

	/**
	 * Multiplies the values of the two variants
	 * <p>Multiplies <code>left</code> by <code>right</code>.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <b>Variant Multiplication Rules</b>   If Then     Both expressions are of the string, date, character, boolean type Multiplication   One expression is a string type and the other a character Multiplication   One expression is numeric and the other is a string Multiplication   Both expressions are numeric Multiplication   Either expression is NULL NULL is returned   Both expressions are empty Empty string is returned
	 * @link https://php.net/manual/en/function.variant-mul.php
	 * @see variant_div(), variant_idiv()
	 * @since PHP 5, PHP 7
	 */
	function variant_mul(mixed $left, mixed $right): \variant {}

	/**
	 * Performs logical negation on a variant
	 * <p>Performs logical negation of <code>value</code>.</p>
	 * @param mixed $value <p>The variant.</p>
	 * @return variant <p>Returns the result of the logical negation.</p>
	 * @link https://php.net/manual/en/function.variant-neg.php
	 * @since PHP 5, PHP 7
	 */
	function variant_neg(mixed $value): \variant {}

	/**
	 * Performs bitwise not negation on a variant
	 * <p>Performs bitwise not negation on <code>value</code> and returns the result.</p>
	 * @param mixed $value <p>The variant.</p>
	 * @return variant <p>Returns the bitwise not negation. If <code>value</code> is <b><code>NULL</code></b>, the result will also be <b><code>NULL</code></b>.</p>
	 * @link https://php.net/manual/en/function.variant-not.php
	 * @since PHP 5, PHP 7
	 */
	function variant_not(mixed $value): \variant {}

	/**
	 * Performs a logical disjunction on two variants
	 * <p>Performs a bitwise OR operation. Note that this is slightly different from a regular OR operation.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <b>Variant OR Rules</b>   If <code>left</code> is If <code>right</code> is then the result is    <b><code>TRUE</code></b><b><code>TRUE</code></b><b><code>TRUE</code></b> <b><code>TRUE</code></b><b><code>FALSE</code></b><b><code>TRUE</code></b> <b><code>TRUE</code></b><b><code>NULL</code></b><b><code>TRUE</code></b> <b><code>FALSE</code></b><b><code>TRUE</code></b><b><code>TRUE</code></b> <b><code>FALSE</code></b><b><code>FALSE</code></b><b><code>FALSE</code></b> <b><code>FALSE</code></b><b><code>NULL</code></b><b><code>NULL</code></b> <b><code>NULL</code></b><b><code>TRUE</code></b><b><code>TRUE</code></b> <b><code>NULL</code></b><b><code>FALSE</code></b><b><code>NULL</code></b> <b><code>NULL</code></b><b><code>NULL</code></b><b><code>NULL</code></b>
	 * @link https://php.net/manual/en/function.variant-or.php
	 * @see variant_and(), variant_xor()
	 * @since PHP 5, PHP 7
	 */
	function variant_or(mixed $left, mixed $right): \variant {}

	/**
	 * Returns the result of performing the power function with two variants
	 * <p>Returns the result of <code>left</code> to the power of <code>right</code>.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <p>Returns the result of <code>left</code> to the power of <code>right</code>.</p>
	 * @link https://php.net/manual/en/function.variant-pow.php
	 * @see pow()
	 * @since PHP 5, PHP 7
	 */
	function variant_pow(mixed $left, mixed $right): \variant {}

	/**
	 * Rounds a variant to the specified number of decimal places
	 * <p>Returns the value of <code>value</code> rounded to <code>decimals</code> decimal places.</p>
	 * @param mixed $value <p>The variant.</p>
	 * @param int $decimals <p>Number of decimal places.</p>
	 * @return variant|null <p>Returns the rounded value, or <b><code>NULL</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.variant-round.php
	 * @see round()
	 * @since PHP 5, PHP 7
	 */
	function variant_round(mixed $value, int $decimals): \variant|null {}

	/**
	 * Assigns a new value for a variant object
	 * <p>Converts <code>value</code> to a variant and assigns it to the <code>variant</code> object; no new variant object is created, and the old value of <code>variant</code> is freed/released.</p>
	 * @param \variant $variant <p>The variant.</p>
	 * @param mixed $value
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.variant-set.php
	 * @since PHP 5, PHP 7
	 */
	function variant_set(\variant $variant, mixed $value): void {}

	/**
	 * Convert a variant into another type "in-place"
	 * <p>This function is similar to <code>variant_cast()</code> except that the variant is modified "in-place"; no new variant is created. The parameters for this function have identical meaning to those of <code>variant_cast()</code>.</p>
	 * @param \variant $variant <p>The variant.</p>
	 * @param int $type
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.variant-set-type.php
	 * @see variant_cast(), variant_get_type()
	 * @since PHP 5, PHP 7
	 */
	function variant_set_type(\variant $variant, int $type): void {}

	/**
	 * Subtracts the value of the right variant from the left variant value
	 * <p>Subtracts <code>right</code> from <code>left</code>.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <b>Variant Subtraction Rules</b>   If Then     Both expressions are of the string type Subtraction   One expression is a string type and the other a character Subtraction   One expression is numeric and the other is a string Subtraction.   Both expressions are numeric Subtraction   Either expression is NULL NULL is returned   Both expressions are empty Empty string is returned
	 * @link https://php.net/manual/en/function.variant-sub.php
	 * @see variant_add()
	 * @since PHP 5, PHP 7
	 */
	function variant_sub(mixed $left, mixed $right): \variant {}

	/**
	 * Performs a logical exclusion on two variants
	 * <p>Performs a logical exclusion.</p>
	 * @param mixed $left <p>The left operand.</p>
	 * @param mixed $right <p>The right operand.</p>
	 * @return variant <b>Variant XOR Rules</b>   If <code>left</code> is If <code>right</code> is then the result is    <b><code>TRUE</code></b><b><code>TRUE</code></b><b><code>FALSE</code></b> <b><code>TRUE</code></b><b><code>FALSE</code></b><b><code>TRUE</code></b> <b><code>FALSE</code></b><b><code>TRUE</code></b><b><code>TRUE</code></b> <b><code>FALSE</code></b><b><code>FALSE</code></b><b><code>FALSE</code></b> <b><code>NULL</code></b><b><code>NULL</code></b><b><code>NULL</code></b>
	 * @link https://php.net/manual/en/function.variant-xor.php
	 * @see variant_or(), variant_and()
	 * @since PHP 5, PHP 7
	 */
	function variant_xor(mixed $left, mixed $right): \variant {}

	/**
	 * Indicates all class contexts. This definition ORs <b><code>CLSCTX_INPROC_HANDLER</code></b> and <b><code>CLSCTX_SERVER</code></b>.
	 */
	define('CLSCTX_ALL', null);

	/**
	 * The code that manages objects of this class is an in-process handler. This is a DLL that runs in the client process and implements client-side structures of this class when instances of the class are accessed remotely.
	 */
	define('CLSCTX_INPROC_HANDLER', null);

	/**
	 * The code that creates and manages objects of this class is a DLL that runs in the same process as the caller of the function specifying the class context.
	 */
	define('CLSCTX_INPROC_SERVER', null);

	/**
	 * The EXE code that creates and manages objects of this class runs on same machine but is loaded in a separate process space.
	 */
	define('CLSCTX_LOCAL_SERVER', null);

	/**
	 * A remote context. The code that creates and manages objects of this class is run on a different computer.
	 */
	define('CLSCTX_REMOTE_SERVER', null);

	/**
	 * Indicates server code, whether in-process, local, or remote. This definition ORs <b><code>CLSCTX_INPROC_SERVER</code></b>, <b><code>CLSCTX_LOCAL_SERVER</code></b>, and <b><code>CLSCTX_REMOTE_SERVER</code></b>.
	 */
	define('CLSCTX_SERVER', null);

	/**
	 * Default to ANSI code page.
	 */
	define('CP_ACP', null);

	/**
	 * Macintosh code page.
	 */
	define('CP_MACCP', null);

	/**
	 * Default to OEM code page.
	 */
	define('CP_OEMCP', null);

	/**
	 * <code>SYMBOL</code> translations.
	 */
	define('CP_SYMBOL', null);

	/**
	 * Current thread's ANSI code page
	 */
	define('CP_THREAD_ACP', null);

	/**
	 * Unicode (UTF-7).
	 */
	define('CP_UTF7', null);

	/**
	 * Unicode (UTF-8).
	 */
	define('CP_UTF8', null);

	/**
	 * As of PHP 7.0.0, the value is <code>2147614731</code> on x64.
	 */
	define('DISP_E_BADINDEX', null);

	/**
	 * As of PHP 7.0.0, the value is <code>2147614738</code> on x64.
	 */
	define('DISP_E_DIVBYZERO', null);

	/**
	 * As of PHP 7.0.0, the value is <code>2147614730</code> on x64.
	 */
	define('DISP_E_OVERFLOW', null);

	/**
	 * As of PHP 7.0.0, the value is <code>2147746275</code> on x64.
	 */
	define('MK_E_UNAVAILABLE', null);

	/**
	 * Ignore case sensitivity.
	 */
	define('NORM_IGNORECASE', null);

	/**
	 * Ignore Kana type.
	 */
	define('NORM_IGNOREKANATYPE', null);

	/**
	 * Availability is dependent upon under lying library.
	 */
	define('NORM_IGNOREKASHIDA', null);

	/**
	 * Ignore nonspacing characters.
	 */
	define('NORM_IGNORENONSPACE', null);

	/**
	 * Ignore symbols.
	 */
	define('NORM_IGNORESYMBOLS', null);

	/**
	 * Ignore string width.
	 */
	define('NORM_IGNOREWIDTH', null);

	/**
	 * The two parameters are equal.
	 */
	define('VARCMP_EQ', null);

	/**
	 * The left <code>bstr</code> is greater than right <code>bstr</code>.
	 */
	define('VARCMP_GT', null);

	/**
	 * The left <code>bstr</code> is less than right <code>bstr</code>.
	 */
	define('VARCMP_LT', null);

	/**
	 * Either expression is NULL.
	 */
	define('VARCMP_NULL', null);

	/**
	 * If the type indicator is combined with <b><code>VT_ARRAY</code></b> by an OR operator, the value is a pointer to a <code>SAFEARRAY</code>. <b><code>VT_ARRAY</code></b> can use the OR with the following data types: <b><code>VT_I1</code></b>, <b><code>VT_UI1</code></b>, <b><code>VT_I2</code></b>, <b><code>VT_UI2</code></b>, <b><code>VT_I4</code></b>, <b><code>VT_UI4</code></b>, <b><code>VT_INT</code></b>, <b><code>VT_UINT</code></b>, <b><code>VT_R4</code></b>, <b><code>VT_R8</code></b>, <b><code>VT_BOOL</code></b>, <b><code>VT_DECIMAL</code></b>, <b><code>VT_ERROR</code></b>, <b><code>VT_CY</code></b>, <b><code>VT_DATE</code></b>, <b><code>VT_BSTR</code></b>, <b><code>VT_DISPATCH</code></b>, <b><code>VT_UNKNOWN</code></b> and <b><code>VT_VARIANT</code></b>.
	 */
	define('VT_ARRAY', null);

	/**
	 * Boolean value.
	 */
	define('VT_BOOL', null);

	/**
	 * Pointer to a null-terminated Unicode string.
	 */
	define('VT_BSTR', null);

	/**
	 * If the type indicator is combined with <b><code>VT_BYREF</code></b> by an OR operator, the value is a reference. Reference types are interpreted as a reference to data, similar to the reference type in C++.
	 */
	define('VT_BYREF', null);

	/**
	 * 8-byte two's complement integer (scaled by 10,000).
	 */
	define('VT_CY', null);

	/**
	 * A 64-bit floating point number representing the number of days (not seconds) since December 31, 1899. For example, <code>January 1, 1900</code>, is 2.0, <code>January 2, 1900</code>, is 3.0, and so on). This is stored in the same representation as <b><code>VT_R8</code></b>.
	 */
	define('VT_DATE', null);

	/**
	 * A decimal structure.
	 */
	define('VT_DECIMAL', null);

	/**
	 * A pointer to a pointer to an object was specified.
	 */
	define('VT_DISPATCH', null);

	/**
	 * A property with a type indicator of <b><code>VT_EMPTY</code></b> has no data associated with it; that is, the size of the value is zero.
	 */
	define('VT_EMPTY', null);

	/**
	 * Error code; containing the status code associated with the error.
	 */
	define('VT_ERROR', null);

	/**
	 * 1-byte signed integer.
	 */
	define('VT_I1', null);

	/**
	 * Two bytes representing a 2-byte signed integer value.
	 */
	define('VT_I2', null);

	/**
	 * 4-byte signed integer value.
	 */
	define('VT_I4', null);

	/**
	 * Available as of PHP 7.0.0 (x64 only).
	 */
	define('VT_I8', null);

	/**
	 * 4-byte signed integer value (equivalent to <b><code>VT_I4</code></b>).
	 */
	define('VT_INT', null);

	/**
	 * NULL pointer reference.
	 */
	define('VT_NULL', null);

	/**
	 * 32-bit IEEE floating point value.
	 */
	define('VT_R4', null);

	/**
	 * 64-bit IEEE floating point value.
	 */
	define('VT_R8', null);

	/**
	 * 1-byte unsigned integer.
	 */
	define('VT_UI1', null);

	/**
	 * 2-byte unsigned integer.
	 */
	define('VT_UI2', null);

	/**
	 * 4-byte unsigned integer.
	 */
	define('VT_UI4', null);

	/**
	 * Available as of PHP 7.0.0 (x64 only).
	 */
	define('VT_UI8', null);

	/**
	 * 4-byte unsigned integer (equivalent to <b><code>VT_UI4</code></b>).
	 */
	define('VT_UINT', null);

	/**
	 * A pointer to an object that implements the IUnknown interface.
	 */
	define('VT_UNKNOWN', null);

	/**
	 * A type indicator followed by the corresponding value. <b><code>VT_VARIANT</code></b> can be used only with <b><code>VT_BYREF</code></b>.
	 */
	define('VT_VARIANT', null);

}
