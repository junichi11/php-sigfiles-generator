<?php



namespace {

	/**
	 * <p>Objects of this class are created by the factory methods <code>FFI::cdef()</code>, <code>FFI::load()</code> or <code>FFI::scope()</code>. Defined C variables are made available as properties of the FFI instance, and defined C functions are made available as methods of the FFI instance. Declared C types can be used to create new C data structures using <code>FFI::new()</code> and <code>FFI::type()</code>.</p>
	 * <p>FFI definition parsing and shared library loading may take significant time. It is not useful to do it on each HTTP request in a Web environment. However, it is possible to preload FFI definitions and libraries at PHP startup, and to instantiate FFI objects when necessary. Header files may be extended with special <code>FFI_SCOPE</code> defines (e.g. <code>#define FFI_SCOPE "foo"&rdquo;"</code>; the default scope is "C") and then loaded by <code>FFI::load()</code> during preloading. This leads to the creation of a persistent binding, that will be available to all the following requests through <code>FFI::scope()</code>. Refer to the complete PHP/FFI/preloading example for details.</p>
	 * <p>It is possible to preload more than one C header file into the same scope.</p>
	 * @link http://php.net/manual/en/class.ffi.php
	 * @since PHP 7 >= 7.4.0
	 */
	class FFI {

		/**
		 * Creates an unmanaged pointer to C data
		 * <p>Creates an unmanaged pointer to the C data represented by the given FFI\CData. The source <code>ptr</code> must survive the resulting pointer. This function is mainly useful to pass arguments to C functions by pointer.</p>
		 * @param \FFI\CData $ptr <p>The handle of the pointer to a C data structure.</p>
		 * @return FFI\CData <p>Returns the freshly created FFI\CData object.</p>
		 * @link http://php.net/manual/en/ffi.addr.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function addr(\FFI\CData &$ptr): \FFI\CData {}

		/**
		 * Gets the alignment
		 * <p>Gets the alignment of the given FFI\CData or FFI\CType object.</p>
		 * @param mixed $ptr <p>The handle of the C data or type.</p>
		 * @return int <p>Returns the alignment of the given FFI\CData or FFI\CType object.</p>
		 * @link http://php.net/manual/en/ffi.alignof.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function alignof(&$ptr): int {}

		/**
		 * Dynamically constructs a new C array type
		 * <p>Dynamically constructs a new C array type with elements of type defined by <code>type</code>, and dimensions specified by <code>dims</code>. In the following example <code>$t1</code> and <code>$t2</code> are equivalent array types:</p>
		 * @param \FFI\CType $type <p>A valid C declaration as <code>string</code>, or an instance of FFI\CType which has already been created.</p>
		 * @param array $dims <p>The dimensions of the type as <code>array</code>.</p>
		 * @return FFI\CType <p>Returns the freshly created FFI\CType object.</p>
		 * @link http://php.net/manual/en/ffi.arraytype.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function arrayType(\FFI\CType $type, array $dims): \FFI\CType {}

		/**
		 * Performs a C type cast
		 * <p><b>FFI::cast()</b> creates a new FFI\CData object, that references the same C data structure, but is associated with a different type. The resulting object does not own the C data, and the source <code>ptr</code> must survive the result. The C type may be specified as a <code>string</code> with any valid C type declaration or as FFI\CType object, created before. If this method is called statically, it must only use predefined C type names (e.g. <code>int</code>, <code>char</code>, etc.); if the method is called as instance method, any type declared for the instance is allowed.</p>
		 * @param mixed $type <p>A valid C declaration as <code>string</code>, or an instance of FFI\CType which has already been created.</p>
		 * @param \FFI\CData $ptr <p>The handle of the pointer to a C data structure.</p>
		 * @return FFI\CData <p>Returns the freshly created FFI\CData object.</p>
		 * @link http://php.net/manual/en/ffi.cast.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function cast($type, \FFI\CData &$ptr): \FFI\CData {}

		/**
		 * Creates a new FFI object
		 * <p>Creates a new FFI object.</p>
		 * @param string $code <p>A string containing a sequence of declarations in regular C language (types, structures, functions, variables, etc). Actually, this string may be copy-pasted from C header files.</p> <p><b>Note</b>:</p><p>C preprocessor directives are not supported, i.e. <code>#include</code>, <code>#define</code> and CPP macros do not work.</p>
		 * @param string $lib <p>The name of a shared library file, to be loaded and linked with the definitions.</p> <p><b>Note</b>:</p><p>If <code>lib</code> is omitted, platforms supporting <code>RTLD_DEFAULT</code> attempt to lookup symbols declared in <code>code</code> in the normal global scope. Other systems will fail to resolve these symbols.</p>
		 * @return FFI <p>Returns the freshly created FFI object.</p>
		 * @link http://php.net/manual/en/ffi.cdef.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function cdef(string $code = "", string $lib = NULL): \FFI {}

		/**
		 * Releases an unmanaged data structure
		 * <p>Manually releases a previously created unmanaged data structure.</p>
		 * @param \FFI\CData $ptr <p>The handle of the unmanaged pointer to a C data structure.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ffi.free.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function free(\FFI\CData &$ptr): void {}

		/**
		 * Checks whether a FFI\CData is a null pointer
		 * <p>Checks whether a FFI\CData is a null pointer.</p>
		 * @param \FFI\CData $ptr <p>The handle of the pointer to a C data structure.</p>
		 * @return bool <p>Returns whether a FFI\CData is a null pointer.</p>
		 * @link http://php.net/manual/en/ffi.isnull.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function isNull(\FFI\CData &$ptr): bool {}

		/**
		 * Loads C declarations from a C header file
		 * <p>Loads C declarations from a C header file. It is possible to specify shared libraries that should be loaded, using special <code>FFI_LIB</code> defines in the loaded C header file.</p>
		 * @param string $filename <p>The name of a C header file.</p> <p>C preprocessor directives are not supported, i.e. <code>#include</code>, <code>#define</code> and CPP macros do not work, except for special cases listed below.</p> <p>The header file <i>should</i> contain a <code>#define</code> statement for the <code>FFI_SCOPE</code> variable, e.g.: <code>#define FFI_SCOPE "MYLIB"</code>. Refer to the class introduction for details.</p> <p>The header file <i>may</i> contain a <code>#define</code> statement for the <code>FFI_LIB</code> variable to specify the library it exposes. If it is a system library only the file name is required, e.g.: <code>#define FFI_LIB "libc.so.6"</code>. If it is a custom library, a relative path is required, e.g.: <code>#define FFI_LIB "./mylib.so"</code>.</p>
		 * @return FFI <p>Returns the freshly created FFI object.</p>
		 * @link http://php.net/manual/en/ffi.load.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function load(string $filename): \FFI {}

		/**
		 * Compares memory areas
		 * <p>Compares <code>size</code> bytes from the memory areas <code>ptr1</code> and <code>ptr2</code>. Both <code>ptr1</code> and <code>ptr2</code> can be any native data structures (FFI\CData) or PHP <code>string</code>s.</p>
		 * @param mixed $ptr1 <p>The start of one memory area.</p>
		 * @param mixed $ptr2 <p>The start of another memory area.</p>
		 * @param int $size <p>The number of bytes to compare.</p>
		 * @return int <p>Returns &lt; <code>0</code> if the contents of the memory area starting at <code>ptr1</code> are considered less than the contents of the memory area starting at <code>ptr2</code>, &gt; <code>0</code> if the contents of the first memory area are considered greater than the second, and <code>0</code> if they are equal.</p>
		 * @link http://php.net/manual/en/ffi.memcmp.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function memcmp(&$ptr1, &$ptr2, int $size): int {}

		/**
		 * Copies one memory area to another
		 * <p>Copies <code>size</code> bytes from the memory area <code>src</code> to the memory area <code>dst</code>. Both <code>src</code> and <code>dst</code> can be any native data structures (FFI\CData) or PHP <code>string</code>s.</p>
		 * @param \FFI\CData $dst <p>The start of the memory area to copy to.</p>
		 * @param mixed $src <p>The start of the memory area to copy from.</p>
		 * @param int $size <p>The number of bytes to copy.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ffi.memcpy.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function memcpy(\FFI\CData &$dst, &$src, int $size): void {}

		/**
		 * Fills a memory area
		 * <p>Fills <code>size</code> bytes of the memory area pointed to by <code>ptr</code> with the given byte <code>ch</code>.</p>
		 * @param \FFI\CData $ptr <p>The start of the memory area to fill.</p>
		 * @param int $ch <p>The byte to fill with.</p>
		 * @param int $size <p>The number of bytes to fill.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ffi.memset.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function memset(\FFI\CData &$ptr, int $ch, int $size): void {}

		/**
		 * Creates a C data structure
		 * <p>Creates a native data structure of the given C type. If this method is called statically, it must only use predefined C type names (e.g. <code>int</code>, <code>char</code>, etc.); if the method is called as instance method, any type declared for the instance is allowed.</p>
		 * @param mixed $type <p><code>type</code> is a valid C declaration as <code>string</code>, or an instance of FFI\CType which has already been created.</p>
		 * @param bool $owned <p>Whether to create owned (i.e. managed) or unmanaged data. Managed data lives together with the returned FFI\CData object, and is released when the last reference to that object is released by regular PHP reference counting or GC. Unmanaged data should be released by calling <code>FFI::free()</code>, when no longer needed.</p>
		 * @param bool $persistent <p>Whether to allocate the C data structure permanently on the system heap (using <b>malloc()</b>), or on the PHP request heap (using <b>emalloc()</b>).</p>
		 * @return FFI\CData <p>Returns the freshly created FFI\CData object.</p>
		 * @link http://php.net/manual/en/ffi.new.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function new($type, bool $owned = TRUE, bool $persistent = FALSE): \FFI\CData {}

		/**
		 * Instantiates an FFI object with C declarations parsed during preloading
		 * <p>Instantiates an FFI object with C declarations parsed during preloading.</p><p>The <b>FFI::scope()</b> method is safe to call multiple times for the same scope. Multiple references to the same scope may be loaded at the same time.</p>
		 * @param string $scope_name <p>The scope name defined by a special <code>FFI_SCOPE</code> define.</p>
		 * @return FFI <p>Returns the freshly created FFI object.</p>
		 * @link http://php.net/manual/en/ffi.scope.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function scope(string $scope_name): \FFI {}

		/**
		 * Gets the size of C data or types
		 * <p>Returns the size of the given FFI\CData or FFI\CType object.</p>
		 * @param mixed $ptr <p>The handle of the C data or type.</p>
		 * @return int <p>The size of the memory area pointed at by <code>ptr</code>.</p>
		 * @link http://php.net/manual/en/ffi.sizeof.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function sizeof(&$ptr): int {}

		/**
		 * Creates a PHP string from a memory area
		 * <p>Creates a PHP <code>string</code> from <code>size</code> bytes of the memory area pointed to by <code>ptr</code>.</p>
		 * @param \FFI\CData $ptr <p>The start of the memory area from which to create a <code>string</code>.</p>
		 * @param int $size <p>The number of bytes to copy to the <code>string</code>. If <code>size</code> is omitted, <code>ptr</code> must be a zero terminated array of C <code>chars</code>.</p>
		 * @return string <p>The freshly created PHP <code>string</code>.</p>
		 * @link http://php.net/manual/en/ffi.string.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function string(\FFI\CData &$ptr, int $size = NULL): string {}

		/**
		 * Creates an FFI\CType object from a C declaration
		 * <p>This function creates and returns a FFI\CType object for the given <code>string</code> containing a C type declaration. If this method is called statically, it must only use predefined C type names (e.g. <code>int</code>, <code>char</code>, etc.); if the method is called as instance method, any type declared for the instance is allowed.</p>
		 * @param mixed $type <p>A valid C declaration as <code>string</code>, or an instance of FFI\CType which has already been created.</p>
		 * @return FFI\CType <p>Returns the freshly created FFI\CType object.</p>
		 * @link http://php.net/manual/en/ffi.type.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function type($type): \FFI\CType {}

		/**
		 * Gets the FFI\CType of FFI\CData
		 * <p>Gets the FFI\CType object representing the type of the given FFI\CData object.</p>
		 * @param \FFI\CData $ptr <p>The handle of the pointer to a C data structure.</p>
		 * @return FFI\CType <p>Returns the FFI\CType object representing the type of the given FFI\CData object.</p>
		 * @link http://php.net/manual/en/ffi.typeof.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function typeof(\FFI\CData &$ptr): \FFI\CType {}
	}

}

namespace FFI {

	/**
	 * <p><b>FFI\CData</b> objects can be used in a number of ways as a regular PHP data:</p>
	 * <p><b>Note</b>:  Notable limitations are that <b>FFI\CData</b> instances do not support <code>isset()</code>, <code>empty()</code> and <code>unset()</code>, and that wrapped C structs and unions do not implement <code>Traversable</code>. </p>
	 * @link http://php.net/manual/en/class.ffi-cdata.php
	 * @since PHP 7 >= 7.4.0
	 */
	class CData {
	}

	/**
	 * @link http://php.net/manual/en/class.ffi-ctype.php
	 * @since PHP 7 >= 7.4.0
	 */
	class CType {
	}

	/**
	 * @link http://php.net/manual/en/class.ffi-exception.php
	 * @since PHP 7 >= 7.4.0
	 */
	class Exception extends \Error implements \Throwable {

		/**
		 * @var string <p>The error message</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The error code</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the error happened</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the error happened</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.line
		 */
		protected $line;

		/**
		 * Clone the error
		 * <p>Error can not be cloned, so this method results in fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/error.clone.php
		 * @since PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the error
		 * <p>Returns the <code>string</code> representation of the error.</p>
		 * @return string <p>Returns the <code>string</code> representation of the error.</p>
		 * @link http://php.net/manual/en/error.tostring.php
		 * @since PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the error code
		 * <p>Returns the error code.</p>
		 * @return mixed <p>Returns the error code as <code>int</code></p>
		 * @link http://php.net/manual/en/error.getcode.php
		 * @since PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the error occurred
		 * <p>Get the name of the file the error occurred.</p>
		 * @return string <p>Returns the filename in which the error occurred.</p>
		 * @link http://php.net/manual/en/error.getfile.php
		 * @since PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the error occurred
		 * <p>Get line number where the error occurred.</p>
		 * @return int <p>Returns the line number where the error occurred.</p>
		 * @link http://php.net/manual/en/error.getline.php
		 * @since PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the error message
		 * <p>Returns the error message.</p>
		 * @return string <p>Returns the error message as a string.</p>
		 * @link http://php.net/manual/en/error.getmessage.php
		 * @since PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous Throwable (the third parameter of <code>Error::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/error.getprevious.php
		 * @since PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the stack trace.</p>
		 * @return array <p>Returns the stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/error.gettrace.php
		 * @since PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the stack trace as a string.</p>
		 * @return string <p>Returns the stack trace as a string.</p>
		 * @link http://php.net/manual/en/error.gettraceasstring.php
		 * @since PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * @link http://php.net/manual/en/class.ffi-parserexception.php
	 * @since PHP 7 >= 7.4.0
	 */
	class ParserException extends \FFI\Exception implements \Throwable {

		/**
		 * @var string <p>The error message</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The error code</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the error happened</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the error happened</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.line
		 */
		protected $line;
	}

}