<?php



namespace wkhtmltox\Image {

	/**
	 * <p>Converts an HTML input into various image formats</p>
	 * @link https://php.net/manual/en/class.wkhtmltox-image-converter.php
	 * @since wkhtmltox >= 0.1.0
	 */
	class Converter {

		/**
		 * Create a new Image converter
		 * <p>Creates an Image converter, optionally taking an input buffer and configuration settings</p>
		 * @param string $buffer <p>HTML</p>
		 * @param array $settings <p></p>   Name Description Values Changelog     in URL or path of the input file, if "-" stdin is used /path/to/markup.html &gt;= 0.1.0   out path of output file, if "-" stdout is used, by default an internal buffer is used /path/to/output.png &gt;= 0.1.0   fmt output format to use     "" default   jpg output as JPEG   png output as PNG   bmp output as bitmap   svg output as SVG     &gt;= 0.1.0   transparent when outputting a PNG or SVG, make the white background transparent boolean &gt;= 0.1.0   screenWidth the with of the screen used to render in pixels 800 &gt;= 0.1.0   smartWidth when true, screenWidth is expanded to the content width boolean &gt;= 0.1.0   quality compression factor to use when outputting a JPEG image 94 &gt;= 0.1.0   crop.left left/x coordinate of the window to capture in pixels 200 &gt;= 0.1.0   crop.top top/y coordinate of the window to capture in pixels 200 &gt;= 0.1.0   crop.width width of the window to capture in pixels 200 &gt;= 0.1.0   crop.height height of the window to capture in pixels 200 &gt;= 0.1.0   load.cookieJar path of file used to load and store cookies /tmp/cookies.txt &gt;= 0.1.0   load.username user name to use when loging into a website bart &gt;= 0.1.0   load.password the password to used when logging into a website elbarto &gt;= 0.1.0   load.jsdelay the amount of time in milliseconds to wait after a page is loaded until it is captured 1200 &gt;= 0.1.0   load.zoomFactor how much zoom should be applied to the content 2.2 &gt;= 0.1.0   load.customHeaders custom headers to send when requesting the main web page &nbsp; &gt;= 0.1.0   load.repertCustomHeaders set true to send with all requests boolean &gt;= 0.1.0   load.cookies cookie string to send when requesting the main web page &nbsp; &gt;= 0.1.0   load.post post string to send when requesting the main web page &nbsp; &gt;= 0.1.0   load.blockLocalFileAccess disallow local and piped files to access other local files boolean &gt;= 0.1.0   load.stopSlowScript stop slow running javascript boolean &nbsp;   load.debugJavascript allow javascript to raise warnings boolean &gt;= 0.1.0   load.loadErrorHandling set error handling strategy     abort abort the convertion process   skip do not add the object to the final output   ignore try to add the object to the final output     &gt;= 0.1.0   load.proxy &nbsp; &nbsp; &gt;= 0.1.0   web.background include background image in output boolean &gt;= 0.1.0   web.loadImages include images in output boolean &gt;= 0.1.0   web.enableJavascript enable or disable javascript boolean &gt;= 0.1.0   web.enableIntelligentShrinking enable to attempt to fit more content on page, only applies to PDF output boolean &gt;= 0.1.0   web.minimumFontSize the minimum font size allowed 9 &gt;= 0.1.0   web.printMediaType print content using print media type instead of screen media type boolean &gt;= 0.1.0   web.defaultEncoding content to use where no encoding is specified utf-8 &gt;= 0.1.0   web.userStyleSheet URL or path to a user specified style sheet /path/to/style.css &gt;= 0.1.0   web.enablePlugins enable or disable NS plugins boolean &gt;= 0.1.0
		 * @return self
		 * @link https://php.net/manual/en/wkhtmltox-image-converter.construct.php
		 * @since wkhtmltox >= 0.1.0
		 */
		public function __construct(string $buffer = NULL, array $settings = NULL) {}

		/**
		 * Perform Image conversion
		 * <p>Performs conversion of the input buffer</p>
		 * @return string|null <p>Where the return value is used, it will be populated with the contents of the conversion buffer</p>
		 * @link https://php.net/manual/en/wkhtmltox-image-converter.convert.php
		 * @since wkhtmltox >= 0.1.0
		 */
		public function convert() {}

		/**
		 * Determine version of Converter
		 * <p>Determines the version of Converter as reported by libwkhtmltox</p>
		 * @return string <p>Returns a version string</p><p><b>Warning</b></p> <p>This is not yet implemented by libwkhtmltox</p>
		 * @link https://php.net/manual/en/wkhtmltox-image-converter.getversion.php
		 * @since wkhtmltox >= 0.3.2
		 */
		public function getVersion(): string {}
	}

}

namespace wkhtmltox\PDF {

	/**
	 * <p>Converts an HTML input, or set of HTML inputs, into PDF output</p>
	 * @link https://php.net/manual/en/class.wkhtmltox-pdf-converter.php
	 * @since wkhtmltox >= 0.1.0
	 */
	class Converter {

		/**
		 * Create a new PDF converter
		 * <p>Creates a PDF converter, using optional configuration settings</p>
		 * @param array $settings <p></p>   Name Description Values Changelog     size.pageSize paper size of output document A4 &gt;= 0.1.0   size.width with of the output document 210mm &gt;= 0.1.0   size.height height of the output document 297mm &gt;= 0.1.0   orientation orientation of the output document     Landscape   Portrait     &gt;= 0.1.0   colorMode color mode of the output document     Color   Greyscale     &gt;= 0.1.0   resolution resoluition of the output document most likely has no effect &gt;= 0.1.0   dpi dpi to use while printing 80 &gt;= 0.1.0   pageOffset integer added to page numbers generating headers, footers, and toc &nbsp; &gt;= 0.1.0   copies &nbsp; &nbsp; &gt;= 0.1.0   collate collate copies boolean &gt;= 0.1.0   outline generate PDF outline boolean &gt;= 0.1.0   outlineDepth maximum depth of outline &nbsp; &gt;= 0.1.0   dumpOutline path of file to dump outline XML &nbsp; &gt;= 0.1.0   out path of output file, if "-" stdout is used &nbsp; &gt;= 0.1.0   documentTitle title for the output document &nbsp; &gt;= 0.1.0   useCompression enable or disable lossless compression boolean &gt;= 0.1.0   margin.top size of the top margin 2cm &gt;= 0.1.0   margin.bottom size of the bottom margin 2cm &gt;= 0.1.0   margin.left size of the left margin 2cm &gt;= 0.1.0   margin.right size of the right margin 2cm &gt;= 0.1.0   imageDPI maximum DPI for images in the output document &nbsp; &gt;= 0.1.0   imageQuality the jpeg compression factor for images in the output document 94 &gt;= 0.1.0   load.cookieJar path of file used to load and store cookies /tmp/cookies.txt &gt;= 0.1.0
		 * @return self
		 * @link https://php.net/manual/en/wkhtmltox-pdf-converter.construct.php
		 * @since wkhtmltox >= 0.1.0
		 */
		public function __construct(array $settings = NULL) {}

		/**
		 * Add an object for conversion
		 * <p>Adds the given object to conversion</p>
		 * @param \wkhtmltox\PDF\Object $object <p>The object to add</p>
		 * @return void
		 * @link https://php.net/manual/en/wkhtmltox-pdf-converter.add.php
		 * @since wkhtmltox >= 0.1.0
		 */
		public function add(\wkhtmltox\PDF\Object $object): void {}

		/**
		 * Perform PDF conversion
		 * <p>Performs conversion of all previously added Objects</p>
		 * @return string|null <p>Where the return value is used, it will be populated with the contents of the conversion buffer</p>
		 * @link https://php.net/manual/en/wkhtmltox-pdf-converter.convert.php
		 * @since wkhtmltox >= 0.1.0
		 */
		public function convert() {}

		/**
		 * Determine version of Converter
		 * <p>Determines the version of Converter as reported by libwkhtmltox</p>
		 * @return string <p>Returns a version string</p>
		 * @link https://php.net/manual/en/wkhtmltox-pdf-converter.getversion.php
		 * @since wkhtmltox >= 0.3.2
		 */
		public function getVersion(): string {}
	}

	/**
	 * <p>Represents an HTML document, input to PDF converter</p>
	 * @link https://php.net/manual/en/class.wkhtmltox-pdf-object.php
	 * @since wkhtmltox >= 0.1.0
	 */
	class Object {

		/**
		 * Create a new PDF Object
		 * <p>Creates a new PDF Object from the given buffer and optional configuration settings</p>
		 * @param string $buffer <p>HTML</p>
		 * @param array $settings <p></p>   Name Description Values Changelog     page URL or path of the HTML to convert &nbsp; &gt;= 0.1.0   useExternalLinks set true to convert external links in the input into external PDF links in the output boolean &gt;= 0.1.0   useLocalLinks set true to convert internal links in the input into internal PDF links in the output boolean &gt;= 0.1.0   produceForms set true to turn HTML forms into PDF forms boolean &gt;= 0.1.0   replacements undocumented &nbsp; &gt;= 0.1.0   includeInOutline set true to include sections from this object in the outline and toc boolean &gt;= 0.1.0   pagesCount set true to make page count in toc inclusive of the number of pages in this object boolean &gt;= 0.1.0   tocXsl set to style sheet to convert this object into a toc object &nbsp; &gt;= 0.1.0   toc.useDottedLines set true to use dotted lines in toc boolean &gt;= 0.1.0   toc.captionText the caption text for toc &nbsp; &gt;= 0.1.0   toc.forwardLinks set true to create links from toc to content boolean &gt;= 0.1.0   toc.backLinks set true to create links from content to toc boolean &gt;= 0.1.0   toc.indentation indentation for toc 2em &gt;= 0.1.0   toc.fontScale the factor to scale down the font at every toc level 0.8 &gt;= 0.1.0   header.fontSize font size for use in header 13 &gt;= 0.1.0   header.fontName name of font for use in header times &gt;= 0.1.0   header.left text for left of header &nbsp; &gt;= 0.1.0   header.center text for center of header &nbsp; &gt;= 0.1.0   header.right text for right of header &nbsp; &gt;= 0.1.0   header.line enable or disable horizontal rule under header boolean &gt;= 0.1.0   header.spacing space between header and content 1.8 &gt;= 0.1.0   header.htmlUrl URL or path of HTML to use in header &nbsp; &gt;= 0.1.0   footer.fontSize font size for use in footer 13 &gt;= 0.1.0   footer.fontName name of font for use in footer times &gt;= 0.1.0   footer.left text for left of footer &nbsp; &gt;= 0.1.0   footer.center text for center of footer &nbsp; &gt;= 0.1.0   footer.right text for right of footer &nbsp; &gt;= 0.1.0   footer.line enable or disable horizontal rule under footer boolean &gt;= 0.1.0   footer.spacing space between footer and content 1.8 &gt;= 0.1.0   footer.htmlUrl URL or path of HTML to use in footer &nbsp; &gt;= 0.1.0   load.username user name to use when loging into a website bart &gt;= 0.1.0   load.password the password to used when logging into a website elbarto &gt;= 0.1.0   load.jsdelay the amount of time in milliseconds to wait after a page is loaded until it is captured 1200 &gt;= 0.1.0   load.zoomFactor how much zoom should be applied to the content 2.2 &gt;= 0.1.0   load.customHeaders custom headers to send when requesting the main web page &nbsp; &gt;= 0.1.0   load.repertCustomHeaders set true to send with all requests boolean &gt;= 0.1.0   load.cookies cookie string to send when requesting the main web page &nbsp; &gt;= 0.1.0   load.post post string to send when requesting the main web page &nbsp; &gt;= 0.1.0   load.blockLocalFileAccess disallow local and piped files to access other local files boolean &gt;= 0.1.0   load.stopSlowScript stop slow running javascript boolean &nbsp;   load.debugJavascript allow javascript to raise warnings boolean &gt;= 0.1.0   load.loadErrorHandling set error handling strategy     abort abort the convertion process   skip do not add the object to the final output   ignore try to add the object to the final output     &gt;= 0.1.0   load.proxy &nbsp; &nbsp; &gt;= 0.1.0   web.background include background image in output boolean &gt;= 0.1.0   web.loadImages include images in output boolean &gt;= 0.1.0   web.enableJavascript enable or disable javascript boolean &gt;= 0.1.0   web.enableIntelligentShrinking enable to attempt to fit more content on page, only applies to PDF output boolean &gt;= 0.1.0   web.minimumFontSize the minimum font size allowed 9 &gt;= 0.1.0   web.printMediaType print content using print media type instead of screen media type boolean &gt;= 0.1.0   web.defaultEncoding content to use where no encoding is specified utf-8 &gt;= 0.1.0   web.userStyleSheet URL or path to a user specified style sheet /path/to/style.css &gt;= 0.1.0   web.enablePlugins enable or disable NS plugins boolean &gt;= 0.1.0
		 * @return self
		 * @link https://php.net/manual/en/wkhtmltox-pdf-object.construct.php
		 * @since wkhtmltox >= 0.1.0
		 */
		public function __construct(string $buffer, array $settings = NULL) {}
	}

}
