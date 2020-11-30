<?php



namespace {

	/**
	 * <p>Haru PDF Annotation Class.</p>
	 * @link http://php.net/manual/en/class.haruannotation.php
	 * @since PECL haru >= 0.0.1
	 */
	class HaruAnnotation {

		/**
		 * Set the border style of the annotation
		 * <p>Defines the style of the border of the annotation. This function may be used with link annotations only.</p>
		 * @param float $width <p>The width of the border line.</p>
		 * @param int $dash_on <p>The dash style.</p>
		 * @param int $dash_off <p>The dash style.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/haruannotation.setborderstyle.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setBorderStyle(float $width, int $dash_on, int $dash_off): bool {}

		/**
		 * Set the highlighting mode of the annotation
		 * <p>Defines the appearance of the annotation when clicked. This function may be used with link annotations only.</p>
		 * @param int $mode <p>The highlighting mode of the annotation. Can take only these values:</p><ul> <li> <b><code>HaruAnnotation::NO_HIGHLIGHT</code></b> - no highlighting. </li> <li> <b><code>HaruAnnotation::INVERT_BOX</code></b> - invert the contents of the annotation. </li> <li> <b><code>HaruAnnotation::INVERT_BORDER</code></b> - invert the border of the annotation. </li> <li> <b><code>HaruAnnotation::DOWN_APPEARANCE</code></b> - dent the annotation. </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/haruannotation.sethighlightmode.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setHighlightMode(int $mode): bool {}

		/**
		 * Set the icon style of the annotation
		 * <p>Defines the style of the annotation icon. This function may be used with text annotations only.</p>
		 * @param int $icon <p>The style of the icon. Can take only these values:</p><ul> <li> <b><code>HaruAnnotation::ICON_COMMENT</code></b> </li> <li> <b><code>HaruAnnotation::ICON_KEY</code></b> </li> <li> <b><code>HaruAnnotation::ICON_NOTE</code></b> </li> <li> <b><code>HaruAnnotation::ICON_HELP</code></b> </li> <li> <b><code>HaruAnnotation::ICON_NEW_PARAGRAPH</code></b> </li> <li> <b><code>HaruAnnotation::ICON_PARAGRAPH</code></b> </li> <li> <b><code>HaruAnnotation::ICON_INSERT</code></b> </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/haruannotation.seticon.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setIcon(int $icon): bool {}

		/**
		 * Set the initial state of the annotation
		 * <p>Defines whether the annotation is initially displayed open. This function may be used with text annotations only.</p>
		 * @param bool $opened <p><b><code>TRUE</code></b> means the annotation is initially displayed open, <b><code>FALSE</code></b> - means it's closed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/haruannotation.setopened.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setOpened(bool $opened): bool {}
	}

	/**
	 * <p>Haru PDF Destination Class.</p>
	 * @link http://php.net/manual/en/class.harudestination.php
	 * @since PECL haru >= 0.0.1
	 */
	class HaruDestination {

		/**
		 * Set the appearance of the page to fit the window
		 * <p>Defines the appearance of the page to fit the window.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudestination.setfit.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setFit(): bool {}

		/**
		 * Set the appearance of the page to fit the bounding box of the page within the window
		 * <p>Defines the appearance of the page to fit the bounding box of the page within the window.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudestination.setfitb.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setFitB(): bool {}

		/**
		 * Set the appearance of the page to fit the width of the bounding box
		 * <p>Defines the appearance of the page to magnifying to fit the width of the bounding box and setting the top position of the page to the value of <code>top</code>.</p>
		 * @param float $top <p>The top coordinates of the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudestination.setfitbh.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setFitBH(float $top): bool {}

		/**
		 * Set the appearance of the page to fit the height of the boudning box
		 * <p>Defines the appearance of the page to magnifying to fit the height of the bounding box and setting the left position of the page to the value of <code>left</code>.</p>
		 * @param float $left <p>The left coordinates of the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudestination.setfitbv.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setFitBV(float $left): bool {}

		/**
		 * Set the appearance of the page to fit the window width
		 * <p>Defines the appearance of the page to fit the window width and sets the top position of the page to the value of <code>top</code>.</p>
		 * @param float $top <p>The top position of the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudestination.setfith.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setFitH(float $top): bool {}

		/**
		 * Set the appearance of the page to fit the specified rectangle
		 * <p>Defines the appearance of the page to fit the rectangle by the parameters.</p>
		 * @param float $left <p>The left coordinates of the page.</p>
		 * @param float $bottom <p>The bottom coordinates of the page.</p>
		 * @param float $right <p>The right coordinates of the page.</p>
		 * @param float $top <p>The top coordinates of the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudestination.setfitr.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setFitR(float $left, float $bottom, float $right, float $top): bool {}

		/**
		 * Set the appearance of the page to fit the window height
		 * <p>Defines the appearance of the page to fit the window height.</p>
		 * @param float $left <p>The left position of the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudestination.setfitv.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setFitV(float $left): bool {}

		/**
		 * Set the appearance of the page
		 * <p>Defines the appearance of the page using three parameters: <code>left</code>, <code>top</code> and <code>zoom</code>.</p>
		 * @param float $left <p>The left position of the page.</p>
		 * @param float $top <p>The top position of the page.</p>
		 * @param float $zoom <p>The magnification factor. The value must be between 0.08 (8%) and 32 (3200%).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudestination.setxyz.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setXYZ(float $left, float $top, float $zoom): bool {}
	}

	/**
	 * <p>Haru PDF Document Class.</p>
	 * @link http://php.net/manual/en/class.harudoc.php
	 * @since PECL haru >= 0.0.1
	 */
	class HaruDoc {

		/**
		 * Construct new HaruDoc instance
		 * <p>Constructs new HaruDoc instance.</p>
		 * @return self <p>No value is returned.</p>
		 * @link http://php.net/manual/en/harudoc.construct.php
		 * @since PECL haru >= 0.0.1
		 */
		public function __construct() {}

		/**
		 * Add new page to the document
		 * <p>Adds a new page to the document.</p>
		 * @return object <p>Returns a new HaruPage instance.</p>
		 * @link http://php.net/manual/en/harudoc.addpage.php
		 * @since PECL haru >= 0.0.1
		 */
		public function addPage(): object {}

		/**
		 * Set the numbering style for the specified range of pages
		 * <p>Set the numbering style for the specified range of pages.</p>
		 * @param int $first_page <p>The first page included into the labeling range.</p>
		 * @param int $style <p>The numbering style. The following values are allowed:</p><ul> <li> <b><code>HaruPage::NUM_STYLE_DECIMAL</code></b> - page label is displayed using decimal numerals. </li> <li> <b><code>HaruPage::NUM_STYLE_UPPER_ROMAN</code></b> - page label is displayed using uppercase Roman numerals. </li> <li> <b><code>HaruPage::NUM_STYLE_LOWER_ROMAN</code></b> - page label is displayed using lowercase Roman numerals. </li> <li> <b><code>HaruPage::NUM_STYLE_UPPER_LETTER</code></b> - page label is displayed using uppercase letters (from A to Z). </li> <li> <b><code>HaruPage::NUM_STYLE_LOWER_LETTERS</code></b> - page label is displayed using lowercase letters (from a to z). </li> </ul>
		 * @param int $first_num <p>The first page number in this range.</p>
		 * @param string $prefix <p>The prefix for the page label.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.addpagelabel.php
		 * @since PECL haru >= 0.0.1
		 */
		public function addPageLabel(int $first_page, int $style, int $first_num, string $prefix = ""): bool {}

		/**
		 * Create a HaruOutline instance
		 * <p>Create a HaruOutline instance.</p>
		 * @param string $title <p>The caption of new outline object.</p>
		 * @param object $parent_outline <p>A valid HaruOutline instance or <b><code>NULL</code></b>.</p>
		 * @param object $encoder <p>A valid HaruEncoder instance or <b><code>NULL</code></b>.</p>
		 * @return object <p>Returns a new HaruOutline instance.</p>
		 * @link http://php.net/manual/en/harudoc.createoutline.php
		 * @since PECL haru >= 0.0.1
		 */
		public function createOutline(string $title, object $parent_outline = NULL, object $encoder = NULL): object {}

		/**
		 * Get HaruEncoder currently used in the document
		 * <p>Get the HaruEncoder currently used in the document.</p>
		 * @return object <p>Returns HaruEncoder currently used in the document or <b><code>FALSE</code></b> if encoder is not set.</p>
		 * @link http://php.net/manual/en/harudoc.getcurrentencoder.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getCurrentEncoder(): object {}

		/**
		 * Return current page of the document
		 * <p>Get current page of the document.</p>
		 * @return object <p>Returns HaruPage instance on success or <b><code>FALSE</code></b> if there is no current page at the moment.</p>
		 * @link http://php.net/manual/en/harudoc.getcurrentpage.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getCurrentPage(): object {}

		/**
		 * Get HaruEncoder instance for the specified encoding
		 * <p>Get the HaruEncoder instance for the specified encoding.</p>
		 * @param string $encoding <p>The encoding name. See Builtin Encodings for the list of allowed values.</p>
		 * @return object <p>Returns a HaruEncoder instance for the specified encoding.</p>
		 * @link http://php.net/manual/en/harudoc.getencoder.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getEncoder(string $encoding): object {}

		/**
		 * Get HaruFont instance
		 * <p>Get a HaruFont instance.</p>
		 * @param string $fontname <p>The name of the font. See Builtin Fonts for the list of builtin fonts. You can also use the name of a font loaded via <code>HaruDoc::loadTTF()</code>, <code>HaruDoc::loadTTC()</code> and <code>HaruDoc::loadType1()</code>.</p>
		 * @param string $encoding <p>The encoding to use. See Builtin Encodings for the list of supported encodings.</p>
		 * @return object <p>Returns a HaruFont instance with the specified <code>fontname</code> and <code>encoding</code>.</p>
		 * @link http://php.net/manual/en/harudoc.getfont.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getFont(string $fontname, string $encoding = NULL): object {}

		/**
		 * Get current value of the specified document attribute
		 * <p>Get the current value of the specified document attribute.</p>
		 * @param int $type <p>The type of the attribute. The following values are available:</p><ul> <li> <b><code>HaruDoc::INFO_AUTHOR</code></b> </li> <li> <b><code>HaruDoc::INFO_CREATOR</code></b> </li> <li> <b><code>HaruDoc::INFO_TITLE</code></b> </li> <li> <b><code>HaruDoc::INFO_SUBJECT</code></b> </li> <li> <b><code>HaruDoc::INFO_KEYWORDS</code></b> </li> <li> <b><code>HaruDoc::INFO_CREATION_DATE</code></b> </li> <li> <b><code>HaruDoc::INFO_MOD_DATE</code></b> </li> </ul>
		 * @return string <p>Returns the <code>string</code> value of the specified document attribute.</p>
		 * @link http://php.net/manual/en/harudoc.getinfoattr.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getInfoAttr(int $type): string {}

		/**
		 * Get current page layout
		 * <p>Get the current page layout. See <code>HaruDoc::setPageLayout()</code> for the list of possible values.</p>
		 * @return int <p>Returns the page layout currently set in the document or <b><code>FALSE</code></b> if page layout was not set. See <code>HaruDoc::setPageLayout()</code> for the list of possible values.</p>
		 * @link http://php.net/manual/en/harudoc.getpagelayout.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getPageLayout(): int {}

		/**
		 * Get current page mode
		 * <p>Get the current page mode. See <code>HaruDoc::setPageMode()</code> for the list of possible values.</p>
		 * @return int <p>Returns the page mode currently set in the document. See <code>HaruDoc::setPageMode()</code> for the list of possible values.</p>
		 * @link http://php.net/manual/en/harudoc.getpagemode.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getPageMode(): int {}

		/**
		 * Get the size of the temporary stream
		 * <p>Get the size of the temporary stream.</p>
		 * @return int <p>Returns the size of the data in the temporary stream of the document. The size is zero if the document was not saved to the temporary stream.</p>
		 * @link http://php.net/manual/en/harudoc.getstreamsize.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getStreamSize(): int {}

		/**
		 * Insert new page just before the specified page
		 * <p>Creates a new page and inserts just before the specified page.</p>
		 * @param object $page <p>A valid HaruPage instance.</p>
		 * @return object <p>Returns a new HaruPage instance.</p>
		 * @link http://php.net/manual/en/harudoc.insertpage.php
		 * @since PECL haru >= 0.0.1
		 */
		public function insertPage(object $page): object {}

		/**
		 * Load a JPEG image
		 * <p>Loads the specified JPEG image.</p>
		 * @param string $filename <p>A valid JPEG image file.</p>
		 * @return object <p>Returns a new HaruImage instance.</p>
		 * @link http://php.net/manual/en/harudoc.loadjpeg.php
		 * @since PECL haru >= 0.0.1
		 */
		public function loadJPEG(string $filename): object {}

		/**
		 * Load PNG image and return HaruImage instance
		 * <p>Loads a PNG image.</p><p>Libharu might be built without libpng support, in this case each call to this function would result in exception.</p>
		 * @param string $filename <p>The name of a PNG image file.</p>
		 * @param bool $deferred <p>Do not load data immediately. You can set <code>deferred</code> parameter to <b><code>TRUE</code></b> for deferred data loading, in this case only size and color are loaded immediately.</p>
		 * @return object <p>Returns a HaruImage instance.</p>
		 * @link http://php.net/manual/en/harudoc.loadpng.php
		 * @since PECL haru >= 0.0.1
		 */
		public function loadPNG(string $filename, bool $deferred = FALSE): object {}

		/**
		 * Load a RAW image
		 * <p>Loads a RAW image.</p>
		 * @param string $filename <p>The name of a RAW image file.</p>
		 * @param int $width <p>The width of the image.</p>
		 * @param int $height <p>The height of the image.</p>
		 * @param int $color_space <p>The color space of the image. Can be one of the following values:</p><ul> <li> <b><code>HaruDoc::CS_DEVICE_GRAY</code></b> </li> <li> <b><code>HaruDoc::CS_DEVICE_RGB</code></b> </li> <li> <b><code>HaruDoc::CS_DEVICE_CMYK</code></b> </li> </ul>
		 * @return object <p>Returns a HaruImage instance.</p>
		 * @link http://php.net/manual/en/harudoc.loadraw.php
		 * @since PECL haru >= 0.0.1
		 */
		public function loadRaw(string $filename, int $width, int $height, int $color_space): object {}

		/**
		 * Load the font with the specified index from TTC file
		 * <p>Loads the TrueType font with the specified index from a TrueType collection file.</p>
		 * @param string $fontfile <p>The TrueType collection file.</p>
		 * @param int $index <p>The index of the font in the collection file.</p>
		 * @param bool $embed <p>When set to <b><code>TRUE</code></b>, the glyph data of the font is embedded into the PDF file, otherwise only the matrix data is included.</p>
		 * @return string <p>Returns the name of the loaded font on success.</p>
		 * @link http://php.net/manual/en/harudoc.loadttc.php
		 * @since PECL haru >= 0.0.1
		 */
		public function loadTTC(string $fontfile, int $index, bool $embed = FALSE): string {}

		/**
		 * Load TTF font file
		 * <p>Loads the given TTF file and (optionally) embed its data into the document.</p>
		 * @param string $fontfile <p>The TTF file to load.</p>
		 * @param bool $embed <p>When set to <b><code>TRUE</code></b>, the glyph data of the font is embedded into the PDF file, otherwise only the matrix data is included.</p>
		 * @return string <p>Returns the name of the loaded font on success.</p>
		 * @link http://php.net/manual/en/harudoc.loadttf.php
		 * @since PECL haru >= 0.0.1
		 */
		public function loadTTF(string $fontfile, bool $embed = FALSE): string {}

		/**
		 * Load Type1 font
		 * <p>Loads Type1 font from the given file and registers it in the PDF document.</p>
		 * @param string $afmfile <p>Path to an AFM file.</p>
		 * @param string $pfmfile <p>Path to a PFA/PFB file, optional. If it's not set only the glyph data of the font is embedded into the PDF document.</p>
		 * @return string <p>Returns the name of the loaded font on success.</p>
		 * @link http://php.net/manual/en/harudoc.loadtype1.php
		 * @since PECL haru >= 0.0.1
		 */
		public function loadType1(string $afmfile, string $pfmfile = NULL): string {}

		/**
		 * Write the document data to the output buffer
		 * <p>Writes the document data into standard output.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.output.php
		 * @since PECL haru >= 0.0.1
		 */
		public function output(): bool {}

		/**
		 * Read data from the temporary stream
		 * <p>Read data from the temporary stream.</p>
		 * @param int $bytes <p>The <code>bytes</code> parameter specifies how many bytes to read, though the stream may contain less bytes than requested.</p>
		 * @return string <p>Returns data from the temporary stream.</p>
		 * @link http://php.net/manual/en/harudoc.readfromstream.php
		 * @since PECL haru >= 0.0.1
		 */
		public function readFromStream(int $bytes): string {}

		/**
		 * Reset error state of the document handle
		 * <p>Once an error code is set, most of the operations, including I/O processing functions cannot be performed. In case if you want to continue after the cause of the error has been fixed, you have to invoke this function in order to reset the document error state.</p>
		 * @return bool <p>Always succeeds and returns <b><code>TRUE</code></b>.</p>
		 * @link http://php.net/manual/en/harudoc.reseterror.php
		 * @since PECL haru >= 0.0.1
		 */
		public function resetError(): bool {}

		/**
		 * Rewind the temporary stream
		 * <p>Rewinds the temporary stream of the document.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.resetstream.php
		 * @since PECL haru >= 0.0.1
		 */
		public function resetStream(): bool {}

		/**
		 * Save the document into the specified file
		 * <p>Saves the document into the specified file.</p>
		 * @param string $file <p>The file to save the document to.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.save.php
		 * @since PECL haru >= 0.0.1
		 */
		public function save(string $file): bool {}

		/**
		 * Save the document into a temporary stream
		 * <p>Saves the document data into a temporary stream.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.savetostream.php
		 * @since PECL haru >= 0.0.1
		 */
		public function saveToStream(): bool {}

		/**
		 * Set compression mode for the document
		 * <p>Defines compression mode for the document. In case when libharu was compiled without Zlib support this function will always throw HaruException.</p>
		 * @param int $mode <p>The compression mode to use. The value is a combination of the following flags:</p><ul> <li> <b><code>HaruDoc::COMP_NONE</code></b> - all contents is not compressed. </li> <li> <b><code>HaruDoc::COMP_TEXT</code></b> - compress the text data. </li> <li> <b><code>HaruDoc::COMP_IMAGE</code></b> - compress the image data. </li> <li> <b><code>HaruDoc::COMP_METADATA</code></b> - compress other data (fonts, cmaps). </li> <li> <b><code>HaruDoc::COMP_ALL</code></b> - compress all data. </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setcompressionmode.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setCompressionMode(int $mode): bool {}

		/**
		 * Set the current encoder for the document
		 * <p>Defines the encoder currently used in the document.</p>
		 * @param string $encoding <p>The name of the encoding to use. See Builtin Encodings for the list of allowed values.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setcurrentencoder.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setCurrentEncoder(string $encoding): bool {}

		/**
		 * Set encryption mode for the document
		 * <p>Defines encryption mode for the document. The encryption mode cannot be set before setting the password.</p>
		 * @param int $mode <p>The encryption mode to use. Can be one of the following:</p><ul> <li> <b><code>HaruDoc::ENCRYPT_R2</code></b> - use "revision2" algorithm. </li> <li> <b><code>HaruDoc::ENCRYPT_R3</code></b> - use "revision3" algorithm. Using this value bumps the version of PDF to 1.4. </li> </ul>
		 * @param int $key_len <p>The encryption key length in bytes. This parameter is optional and used only when mode is <b><code>HaruDoc::ENCRYPT_R3</code></b>. The default value is 5 (40bit).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setencryptionmode.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setEncryptionMode(int $mode, int $key_len = 5): bool {}

		/**
		 * Set the info attribute of the document
		 * <p>Defines an info attribute. Uses the current encoding of the document.</p>
		 * @param int $type <p>The type of the attribute. Can be one of the following:</p><ul> <li> <b><code>HaruDoc::INFO_AUTHOR</code></b> </li> <li> <b><code>HaruDoc::INFO_CREATOR</code></b> </li> <li> <b><code>HaruDoc::INFO_TITLE</code></b> </li> <li> <b><code>HaruDoc::INFO_SUBJECT</code></b> </li> <li> <b><code>HaruDoc::INFO_KEYWORDS</code></b> </li> </ul>
		 * @param string $info <p>The value of the attribute.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setinfoattr.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setInfoAttr(int $type, string $info): bool {}

		/**
		 * Set the datetime info attributes of the document
		 * <p>Sets the datetime info attributes of the document.</p>
		 * @param int $type <p>The type of the attribute. Can be one of the following:</p><ul> <li> <b><code>HaruDoc::INFO_CREATION_DATE</code></b> </li> <li> <b><code>HaruDoc::INFO_MOD_DATE</code></b> </li> </ul>
		 * @param int $year
		 * @param int $month <p>Between 1 and 12.</p>
		 * @param int $day <p>Between 1 and 31, 30, 29 or 28 (different for each month).</p>
		 * @param int $hour <p>Between 0 and 23.</p>
		 * @param int $min <p>Between 0 and 59.</p>
		 * @param int $sec <p>Between 0 and 59.</p>
		 * @param string $ind <p>The timezone relation to UTC, can be "", " ", "+", "-" and "Z".</p>
		 * @param int $off_hour <p>If <code>ind</code> is not " " or "", values between 0 and 23 are valid. Otherwise, this parameter is ignored.</p>
		 * @param int $off_min <p>If <code>ind</code> is not " " or "", values between 0 and 59 are valid. Otherwise, this parameter is ignored.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setinfodateattr.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setInfoDateAttr(int $type, int $year, int $month, int $day, int $hour, int $min, int $sec, string $ind, int $off_hour, int $off_min): bool {}

		/**
		 * Define which page is shown when the document is opened
		 * <p>Defines which page should be shown when the document is opened.</p>
		 * @param object $destination <p>A valid HaruDestination instance.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setopenaction.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setOpenAction(object $destination): bool {}

		/**
		 * Set how pages should be displayed
		 * <p>Defines how pages should be displayed.</p>
		 * @param int $layout <p>The following values are accepted:</p><ul> <li> <b><code>HaruDoc::PAGE_LAYOUT_SINGLE</code></b> - only one page is displayed. </li> <li> <b><code>HaruDoc::PAGE_LAYOUT_ONE_COLUMN</code></b> - display the pages in one column. </li> <li> <b><code>HaruDoc::PAGE_LAYOUT_TWO_COLUMN_LEFT</code></b> - display pages in two columns, first page left. </li> <li> <b><code>HaruDoc::PAGE_LAYOUT_TWO_COLUMN_RIGHT</code></b> - display pages in two columns, first page right. </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setpagelayout.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setPageLayout(int $layout): bool {}

		/**
		 * Set how the document should be displayed
		 * <p>Defines how the document should be displayed.</p>
		 * @param int $mode <p>The following values are accepted:</p><ul> <li> <b><code>HaruDoc::PAGE_MODE_USE_NONE</code></b> - display the document with neither outline nor thumbnail. </li> <li> <b><code>HaruDoc::PAGE_MODE_USE_OUTLINE</code></b> - display the document with outline pane. </li> <li> <b><code>HaruDoc::PAGE_MODE_USE_THUMBS</code></b> - display the document with thumbnail pane. </li> <li> <b><code>HaruDoc::PAGE_MODE_FULL_SCREEN</code></b> - display the document with full screen mode. </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setpagemode.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setPageMode(int $mode): bool {}

		/**
		 * Set the number of pages per set of pages
		 * <p>By default the document has one pages object as a root for all pages. All page objects are create as branches of this object. One pages object can contain only 8191, therefore the maximum number of pages per document is 8191. But you can change that fact by setting <code>page_per_pages</code> parameter, so that the root pages object contains 8191 more pages (not page) objects, which in turn contain 8191 pages each. So the maximum number of pages in the document becomes 8191&#42;<code>page_per_pages</code>.</p>
		 * @param int $page_per_pages <p>The numbers of pages that a pages object can contain.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setpagesconfiguration.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setPagesConfiguration(int $page_per_pages): bool {}

		/**
		 * Set owner and user passwords for the document
		 * <p>Defines owner and user passwords for the document. Setting the passwords makes the document contents encrypted.</p>
		 * @param string $owner_password <p>The password of the owner, which can change permissions of the document. Empty password is not accepted. Owner's password cannot be the same as the user's password.</p>
		 * @param string $user_password <p>The password of the user. Can be empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setpassword.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setPassword(string $owner_password, string $user_password): bool {}

		/**
		 * Set permissions for the document
		 * <p>Defines permissions for the document.</p>
		 * @param int $permission <p>The values is a combination of these flags:</p><ul> <li> <b><code>HaruDoc::ENABLE_READ</code></b> - user can read the document. </li> <li> <b><code>HaruDoc::ENABLE_PRINT</code></b> - user can print the document. </li> <li> <b><code>HaruDoc::ENABLE_EDIT_ALL</code></b> - user can edit the contents of the document other than annotations and form fields. </li> <li> <b><code>HaruDoc::ENABLE_COPY</code></b> - user can copy the text and the graphics of the document. </li> <li> <b><code>HaruDoc::ENABLE_EDIT</code></b> - user can add or modify the annotations and form fields of the document. </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.setpermission.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setPermission(int $permission): bool {}

		/**
		 * Enable Chinese simplified encodings
		 * <p>Enables Chinese simplified encodings.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.usecnsencodings.php
		 * @since PECL haru >= 0.0.1
		 */
		public function useCNSEncodings(): bool {}

		/**
		 * Enable builtin Chinese simplified fonts
		 * <p>Enables builtin Chinese simplified fonts.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.usecnsfonts.php
		 * @since PECL haru >= 0.0.1
		 */
		public function useCNSFonts(): bool {}

		/**
		 * Enable Chinese traditional encodings
		 * <p>Enables Chinese traditional encodings.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.usecntencodings.php
		 * @since PECL haru >= 0.0.1
		 */
		public function useCNTEncodings(): bool {}

		/**
		 * Enable builtin Chinese traditional fonts
		 * <p>Enables builtin Chinese traditional fonts.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.usecntfonts.php
		 * @since PECL haru >= 0.0.1
		 */
		public function useCNTFonts(): bool {}

		/**
		 * Enable Japanese encodings
		 * <p>Enables Japanese encodings.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.usejpencodings.php
		 * @since PECL haru >= 0.0.1
		 */
		public function useJPEncodings(): bool {}

		/**
		 * Enable builtin Japanese fonts
		 * <p>Enables builtin Japanese fonts.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.usejpfonts.php
		 * @since PECL haru >= 0.0.1
		 */
		public function useJPFonts(): bool {}

		/**
		 * Enable Korean encodings
		 * <p>Enables Korean encodings.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.usekrencodings.php
		 * @since PECL haru >= 0.0.1
		 */
		public function useKREncodings(): bool {}

		/**
		 * Enable builtin Korean fonts
		 * <p>Enables builtin Korean fonts.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harudoc.usekrfonts.php
		 * @since PECL haru >= 0.0.1
		 */
		public function useKRFonts(): bool {}
	}

	/**
	 * <p>Haru PDF Encoder Class.</p>
	 * @link http://php.net/manual/en/class.haruencoder.php
	 * @since PECL haru >= 0.0.1
	 */
	class HaruEncoder {

		/**
		 * Get the type of the byte in the text
		 * <p>Get the type of the byte in the text.</p>
		 * @param string $text <p>The text.</p>
		 * @param int $index <p>The position in the text.</p>
		 * @return int <p>Returns the type of the byte in the text on the specified position. The result is one of the following values:</p><ul> <li> <b><code>HaruEncoder::BYTE_TYPE_SINGLE</code></b> - single byte character. </li> <li> <b><code>HaruEncoder::BYTE_TYPE_LEAD</code></b> - lead byte of a double-byte character. </li> <li> <b><code>HaruEncoder::BYTE_TYPE_TRAIL</code></b> - trailing byte of a double-byte character. </li> <li> <b><code>HaruEncoder::BYTE_TYPE_UNKNOWN</code></b> - invalid encoder or cannot detect the byte type. </li> </ul>
		 * @link http://php.net/manual/en/haruencoder.getbytetype.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getByteType(string $text, int $index): int {}

		/**
		 * Get the type of the encoder
		 * <p>Get the type of the encoder.</p>
		 * @return int <p>Returns the type of the encoder. The result is one of the following values:</p><ul> <li> <b><code>HaruEncoder::TYPE_SINGLE_BYTE</code></b> - the encoder is for single byte characters. </li> <li> <b><code>HaruEncoder::TYPE_DOUBLE_BYTE</code></b> - the encoder is for multibyte characters. </li> <li> <b><code>HaruEncoder::TYPE_UNINITIALIZED</code></b> - the encoder is not initialized. </li> <li> <b><code>HaruEncoder::UNKNOWN</code></b> - the encoder is invalid. </li> </ul>
		 * @link http://php.net/manual/en/haruencoder.gettype.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getType(): int {}

		/**
		 * Convert the specified character to unicode
		 * <p>Converts the specified character to unicode.</p>
		 * @param int $character <p>The character code to convert.</p>
		 * @return int
		 * @link http://php.net/manual/en/haruencoder.getunicode.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getUnicode(int $character): int {}

		/**
		 * Get the writing mode of the encoder
		 * <p>Get the writing mode of the encoder.</p>
		 * @return int <p>Returns the writing mode of the encoder. The result value is on of the following:</p><ul> <li> <b><code>HaruEncoder::WMODE_HORIZONTAL</code></b> - horizontal writing mode. </li> <li> <b><code>HaruEncoder::WMODE_VERTICAL</code></b> - vertical writing mode. </li> </ul>
		 * @link http://php.net/manual/en/haruencoder.getwritingmode.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getWritingMode(): int {}
	}

	/**
	 * <p>Haru PDF Exception Class.</p>
	 * @link http://php.net/manual/en/class.haruexception.php
	 * @since PECL haru >= 0.0.1
	 */
	class HaruException extends \Exception {

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Haru PDF Font Class.</p>
	 * @link http://php.net/manual/en/class.harufont.php
	 * @since PECL haru >= 0.0.1
	 */
	class HaruFont {

		/**
		 * Get the vertical ascent of the font
		 * <p>Get the vertical ascent of the font.</p>
		 * @return int <p>Returns the vertical ascent of the font.</p>
		 * @link http://php.net/manual/en/harufont.getascent.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getAscent(): int {}

		/**
		 * Get the distance from the baseline of uppercase letters
		 * <p>Get the distance from the baseline of uppercase letters.</p>
		 * @return int <p>Returns the distance from the baseline of uppercase letters.</p>
		 * @link http://php.net/manual/en/harufont.getcapheight.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getCapHeight(): int {}

		/**
		 * Get the vertical descent of the font
		 * <p>Get the vertical descent of the font.</p>
		 * @return int <p>Return the vertical descent of the font.</p>
		 * @link http://php.net/manual/en/harufont.getdescent.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getDescent(): int {}

		/**
		 * Get the name of the encoding
		 * <p>Get the name of the font encoding.</p>
		 * @return string <p>Returns the name of the font encoding.</p>
		 * @link http://php.net/manual/en/harufont.getencodingname.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getEncodingName(): string {}

		/**
		 * Get the name of the font
		 * <p>Get the name of the font.</p>
		 * @return string <p>Returns the name of the font.</p>
		 * @link http://php.net/manual/en/harufont.getfontname.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getFontName(): string {}

		/**
		 * Get the total width of the text, number of characters, number of words and number of spaces
		 * <p>Get the total width of the text, number of characters, number of words and number of spaces.</p>
		 * @param string $text <p>The text to measure.</p>
		 * @return array <p>Returns the total width of the text, number of characters, number of words and number of spaces in the given text.</p>
		 * @link http://php.net/manual/en/harufont.gettextwidth.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getTextWidth(string $text): array {}

		/**
		 * Get the width of the character in the font
		 * <p>Get the width of the character in the font.</p>
		 * @param int $character <p>The code of the character.</p>
		 * @return int <p>Returns the width of the character in the font.</p>
		 * @link http://php.net/manual/en/harufont.getunicodewidth.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getUnicodeWidth(int $character): int {}

		/**
		 * Get the distance from the baseline of lowercase letters
		 * <p>Gets the distance from the baseline of lowercase letters.</p>
		 * @return int <p>Returns the distance from the baseline of lowercase letters.</p>
		 * @link http://php.net/manual/en/harufont.getxheight.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getXHeight(): int {}

		/**
		 * Calculate the number of characters which can be included within the specified width
		 * <p>Calculate the number of characters which can be included within the specified width.</p>
		 * @param string $text <p>The text to fit the width.</p>
		 * @param float $width <p>The width of the area to put the text to.</p>
		 * @param float $font_size <p>The size of the font.</p>
		 * @param float $char_space <p>The character spacing.</p>
		 * @param float $word_space <p>The word spacing.</p>
		 * @param bool $word_wrap <p>When this parameter is set to <b><code>TRUE</code></b> the function "emulates" word wrapping and doesn't include the part of the current word if reached the end of the area.</p>
		 * @return int <p>Returns the number of characters which can be included within the specified width.</p>
		 * @link http://php.net/manual/en/harufont.measuretext.php
		 * @since PECL haru >= 0.0.1
		 */
		public function measureText(string $text, float $width, float $font_size, float $char_space, float $word_space, bool $word_wrap = FALSE): int {}
	}

	/**
	 * <p>Haru PDF Image Class.</p>
	 * @link http://php.net/manual/en/class.haruimage.php
	 * @since PECL haru >= 0.0.1
	 */
	class HaruImage {

		/**
		 * Get the number of bits used to describe each color component of the image
		 * <p>Gets the number of bits used to describe each color component of the image.</p>
		 * @return int <p>Returns the number of bits used to describe each color component of the image.</p>
		 * @link http://php.net/manual/en/haruimage.getbitspercomponent.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getBitsPerComponent(): int {}

		/**
		 * Get the name of the color space
		 * <p>Get the name of the color space.</p>
		 * @return string <p>Returns the name of the color space of the image. The name is one of the following values:</p><ul> <li> "DeviceGray" </li> <li> "DeviceRGB" </li> <li> "DeviceCMYK" </li> <li> "Indexed" </li> </ul>
		 * @link http://php.net/manual/en/haruimage.getcolorspace.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getColorSpace(): string {}

		/**
		 * Get the height of the image
		 * <p>Get the height of the image.</p>
		 * @return int <p>Returns the height of the image.</p>
		 * @link http://php.net/manual/en/haruimage.getheight.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getHeight(): int {}

		/**
		 * Get size of the image
		 * <p>Get the size of the image.</p>
		 * @return array <p>Returns an array with two elements: width and height, which contain appropriate dimensions of the image.</p>
		 * @link http://php.net/manual/en/haruimage.getsize.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getSize(): array {}

		/**
		 * Get the width of the image
		 * <p>Get the width of the image.</p>
		 * @return int <p>Returns the width of the image.</p>
		 * @link http://php.net/manual/en/haruimage.getwidth.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getWidth(): int {}

		/**
		 * Set the color mask of the image
		 * <p>Defines the transparent color of the image using the RGB range values. The color within the range is displayed as a transparent color. The color space of the image must be RGB.</p>
		 * @param int $rmin <p>The lower limit of red. Must be between 0 and 255.</p>
		 * @param int $rmax <p>The upper limit of red. Must be between 0 and 255.</p>
		 * @param int $gmin <p>The lower limit of green. Must be between 0 and 255.</p>
		 * @param int $gmax <p>The upper limit of green. Must be between 0 and 255.</p>
		 * @param int $bmin <p>The lower limit of blue. Must be between 0 and 255.</p>
		 * @param int $bmax <p>The upper limit of blue. Must be between 0 and 255.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/haruimage.setcolormask.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setColorMask(int $rmin, int $rmax, int $gmin, int $gmax, int $bmin, int $bmax): bool {}

		/**
		 * Set the image mask
		 * <p>Sets the image used as image-mask. It must be 1bit gray-scale color image.</p>
		 * @param object $mask_image <p>A valid HaruImage instance.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/haruimage.setmaskimage.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setMaskImage(object $mask_image): bool {}
	}

	/**
	 * <p>Haru PDF Outline Class.</p>
	 * @link http://php.net/manual/en/class.haruoutline.php
	 * @since PECL haru >= 0.0.1
	 */
	class HaruOutline {

		/**
		 * Set the destination for the outline
		 * <p>Sets a destination object which becomes a target to jump to when the outline is clicked.</p>
		 * @param object $destination <p>A valid HaruDestination instance.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/haruoutline.setdestination.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setDestination(object $destination): bool {}

		/**
		 * Set the initial state of the outline
		 * <p>Defines whether this node is opened or not when the outline is displayed for the first time.</p>
		 * @param bool $opened <p><b><code>TRUE</code></b> means open, <b><code>FALSE</code></b> - closed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/haruoutline.setopened.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setOpened(bool $opened): bool {}
	}

	/**
	 * <p>Haru PDF Page Class.</p>
	 * @link http://php.net/manual/en/class.harupage.php
	 * @since PECL haru >= 0.0.1
	 */
	class HaruPage {

		/**
		 * Append an arc to the current path
		 * <p>Appends an arc to the current path.</p>
		 * @param float $x <p>Horizontal coordinate of the center.</p>
		 * @param float $y <p>Vertical coordinate of the center.</p>
		 * @param float $ray <p>The ray of the arc.</p>
		 * @param float $ang1 <p>The angle of the beginning.</p>
		 * @param float $ang2 <p>The angle of the end. Must be greater than <code>ang1</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.arc.php
		 * @since PECL haru >= 0.0.1
		 */
		public function arc(float $x, float $y, float $ray, float $ang1, float $ang2): bool {}

		/**
		 * Begin a text object and set the current text position to (0,0)
		 * <p>Begins new text object and sets the current text position to (0,0).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.begintext.php
		 * @since PECL haru >= 0.0.1
		 */
		public function beginText(): bool {}

		/**
		 * Append a circle to the current path
		 * <p>Appends a circle to the current path.</p>
		 * @param float $x <p>Horizontal coordinate of the center point.</p>
		 * @param float $y <p>Vertical coordinate of the center point.</p>
		 * @param float $ray <p>The ray of the circle.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.circle.php
		 * @since PECL haru >= 0.0.1
		 */
		public function circle(float $x, float $y, float $ray): bool {}

		/**
		 * Append a straight line from the current point to the start point of the path
		 * <p>Appends a straight line from the current point to the start point of the path.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.closepath.php
		 * @since PECL haru >= 0.0.1
		 */
		public function closePath(): bool {}

		/**
		 * Concatenate current transformation matrix of the page and the specified matrix
		 * <p>Concatenates current transformation matrix of the page and the specified matrix.</p>
		 * @param float $a
		 * @param float $b
		 * @param float $c
		 * @param float $d
		 * @param float $x
		 * @param float $y
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.concat.php
		 * @since PECL haru >= 0.0.1
		 */
		public function concat(float $a, float $b, float $c, float $d, float $x, float $y): bool {}

		/**
		 * Create new HaruDestination instance
		 * <p>Create a new HaruDestination instance.</p>
		 * @return object <p>Returns a new HaruDestination instance.</p>
		 * @link http://php.net/manual/en/harupage.createdestination.php
		 * @since PECL haru >= 0.0.1
		 */
		public function createDestination(): object {}

		/**
		 * Create new HaruAnnotation instance
		 * <p>Creates a new HaruAnnotation instance.</p>
		 * @param array $rectangle <p>An array with 4 coordinates of the clickable area.</p>
		 * @param object $destination <p>Valid HaruDestination instance.</p>
		 * @return object <p>Returns a new HaruAnnotation instance.</p>
		 * @link http://php.net/manual/en/harupage.createlinkannotation.php
		 * @since PECL haru >= 0.0.1
		 */
		public function createLinkAnnotation(array $rectangle, object $destination): object {}

		/**
		 * Create new HaruAnnotation instance
		 * <p>Creates a new HaruAnnotation instance.</p>
		 * @param array $rectangle <p>An array with 4 coordinates of the annotation area.</p>
		 * @param string $text <p>The text to be displayed.</p>
		 * @param object $encoder <p>Optional HaruEncoder instance.</p>
		 * @return object <p>Returns a new HaruAnnotation instance.</p>
		 * @link http://php.net/manual/en/harupage.createtextannotation.php
		 * @since PECL haru >= 0.0.1
		 */
		public function createTextAnnotation(array $rectangle, string $text, object $encoder = NULL): object {}

		/**
		 * Create and return new HaruAnnotation instance
		 * <p>Creates a new HaruAnnotation instance.</p>
		 * @param array $rectangle <p>An array with 4 coordinates of the clickable area.</p>
		 * @param string $url <p>The URL to open.</p>
		 * @return object <p>Returns a new HaruAnnotation instance.</p>
		 * @link http://php.net/manual/en/harupage.createurlannotation.php
		 * @since PECL haru >= 0.0.1
		 */
		public function createURLAnnotation(array $rectangle, string $url): object {}

		/**
		 * Append a Bezier curve to the current path
		 * <p>Append a Bezier curve to the current path. The point (x1, y1) and the point (x2, y2) are used as the control points for a Bezier curve and current point is moved to the point (x3, y3).</p>
		 * @param float $x1 <p>A Bezier curve control point.</p>
		 * @param float $y1 <p>A Bezier curve control point.</p>
		 * @param float $x2 <p>A Bezier curve control point.</p>
		 * @param float $y2 <p>A Bezier curve control point.</p>
		 * @param float $x3 <p>The current point moves here.</p>
		 * @param float $y3
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.curveto.php
		 * @since PECL haru >= 0.0.1
		 */
		public function curveTo(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): bool {}

		/**
		 * Append a Bezier curve to the current path
		 * <p>Appends a Bezier curve to the current path. The current point and the point (x2, y2) are used as the control points for the Bezier curve and current point is moved to the point (x3, y3).</p>
		 * @param float $x2 <p>A Bezier curve control point.</p>
		 * @param float $y2 <p>A Bezier curve control point.</p>
		 * @param float $x3 <p>The current point moves here.</p>
		 * @param float $y3
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.curveto2.php
		 * @since PECL haru >= 0.0.1
		 */
		public function curveTo2(float $x2, float $y2, float $x3, float $y3): bool {}

		/**
		 * Append a Bezier curve to the current path
		 * <p>Appends a Bezier curve to the current path. The point (x1, y1) and the point (x3, y3) are used as the control points for a Bezier curve and current point is moved to the point (x3, y3).</p>
		 * @param float $x1 <p>A Bezier curve control point.</p>
		 * @param float $y1 <p>A Bezier curve control point.</p>
		 * @param float $x3 <p>The current point moves here.</p>
		 * @param float $y3
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.curveto3.php
		 * @since PECL haru >= 0.0.1
		 */
		public function curveTo3(float $x1, float $y1, float $x3, float $y3): bool {}

		/**
		 * Show image at the page
		 * <p>Show image at the page.</p>
		 * @param object $image <p>Valid HaruImage instance.</p>
		 * @param float $x <p>The left border of the area where the image is displayed.</p>
		 * @param float $y <p>The lower border of the area where the image is displayed.</p>
		 * @param float $width <p>The width of the image area.</p>
		 * @param float $height <p>The height of the image area.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.drawimage.php
		 * @since PECL haru >= 0.0.1
		 */
		public function drawImage(object $image, float $x, float $y, float $width, float $height): bool {}

		/**
		 * Append an ellipse to the current path
		 * <p>Appends an ellipse to the current path.</p>
		 * @param float $x <p>Horizontal coordinate of the center.</p>
		 * @param float $y <p>Vertical coordinate of the center.</p>
		 * @param float $xray <p>The ray of the ellipse in the x direction.</p>
		 * @param float $yray <p>The ray of the ellipse in the y direction.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.ellipse.php
		 * @since PECL haru >= 0.0.1
		 */
		public function ellipse(float $x, float $y, float $xray, float $yray): bool {}

		/**
		 * End current path object without filling and painting operations
		 * <p>Ends current path object without performing filling and painting operations.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.endpath.php
		 * @since PECL haru >= 0.0.1
		 */
		public function endPath(): bool {}

		/**
		 * End current text object
		 * <p>Finalizes current text object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.endtext.php
		 * @since PECL haru >= 0.0.1
		 */
		public function endText(): bool {}

		/**
		 * Fill current path using even-odd rule, then paint the path
		 * <p>Fills current path using even-odd rule, then paints the path.</p>
		 * @param bool $close_path <p>Optional parameter. When set to <b><code>TRUE</code></b>, the function closes the current path. Default to <b><code>FALSE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.eofillstroke.php
		 * @since PECL haru >= 0.0.1
		 */
		public function eoFillStroke(bool $close_path = FALSE): bool {}

		/**
		 * Fill current path using even-odd rule
		 * <p>Fills current path using even-odd rule.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.eofill.php
		 * @since PECL haru >= 0.0.1
		 */
		public function eofill(): bool {}

		/**
		 * Fill current path using nonzero winding number rule
		 * <p>Fills current path using nonzero winding number rule.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.fill.php
		 * @since PECL haru >= 0.0.1
		 */
		public function fill(): bool {}

		/**
		 * Fill current path using nonzero winding number rule, then paint the path
		 * <p>Fills current path using nonzero winding number rule, then paints the path.</p>
		 * @param bool $close_path <p>Optional parameter. When set to <b><code>TRUE</code></b>, the function closes the current path. Default to <b><code>FALSE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.fillstroke.php
		 * @since PECL haru >= 0.0.1
		 */
		public function fillStroke(bool $close_path = FALSE): bool {}

		/**
		 * Get the current filling color
		 * <p>Returns the current filling color.</p>
		 * @return array <p>Returns the current filling color as an array with 4 elements ("c", "m", "y" and "k").</p>
		 * @link http://php.net/manual/en/harupage.getcmykfill.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getCMYKFill(): array {}

		/**
		 * Get the current stroking color
		 * <p>Get the current stroking color.</p>
		 * @return array <p>Returns the current stroking color as an array with 4 elements ("c", "m", "y" and "k").</p>
		 * @link http://php.net/manual/en/harupage.getcmykstroke.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getCMYKStroke(): array {}

		/**
		 * Get the current value of character spacing
		 * <p>Get the current value of character spacing.</p>
		 * @return float <p>Returns the current value of character spacing.</p>
		 * @link http://php.net/manual/en/harupage.getcharspace.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getCharSpace(): float {}

		/**
		 * Get the currently used font
		 * <p>Get the currently used font.</p>
		 * @return object <p>Returns the currently used font as an instance of HaruFont.</p>
		 * @link http://php.net/manual/en/harupage.getcurrentfont.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getCurrentFont(): object {}

		/**
		 * Get the current font size
		 * <p>Get the current font size.</p>
		 * @return float <p>Returns the current font size.</p>
		 * @link http://php.net/manual/en/harupage.getcurrentfontsize.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getCurrentFontSize(): float {}

		/**
		 * Get the current position for path painting
		 * <p>Get the current position for path painting.</p>
		 * @return array <p>Returns the current position for path painting as an array of with two elements - "x" and "y".</p>
		 * @link http://php.net/manual/en/harupage.getcurrentpos.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getCurrentPos(): array {}

		/**
		 * Get the current position for text printing
		 * <p>Get the current position for text printing.</p>
		 * @return array <p>Returns the current position for text printing as an array with 2 elements - "x" and "y".</p>
		 * @link http://php.net/manual/en/harupage.getcurrenttextpos.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getCurrentTextPos(): array {}

		/**
		 * Get the current dash pattern
		 * <p>Get the current dash pattern. See <code>HaruPage::setDash()</code> for more information on dash patterns.</p>
		 * @return array <p>Returns the current dash pattern as an array of two elements - "pattern" and "phase" or <b><code>FALSE</code></b> if dash pattern was not set.</p>
		 * @link http://php.net/manual/en/harupage.getdash.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getDash(): array {}

		/**
		 * Get the current filling color space
		 * <p>Get the current filling color space.</p>
		 * @return int <p>Returns the current filling color space. The result value is one of the following:</p><ul> <li> <b><code>HaruDoc::CS_DEVICE_GRAY</code></b> </li> <li> <b><code>HaruDoc::CS_DEVICE_RGB</code></b> </li> <li> <b><code>HaruDoc::CS_DEVICE_CMYK</code></b> </li> <li> <b><code>HaruDoc::CS_CAL_GRAY</code></b> </li> <li> <b><code>HaruDoc::CS_CAL_RGB</code></b> </li> <li> <b><code>HaruDoc::CS_LAB</code></b> </li> <li> <b><code>HaruDoc::CS_ICC_BASED</code></b> </li> <li> <b><code>HaruDoc::CS_SEPARATION</code></b> </li> <li> <b><code>HaruDoc::CS_DEVICE_N</code></b> </li> <li> <b><code>HaruDoc::CS_INDEXED</code></b> </li> <li> <b><code>HaruDoc::CS_PATTERN</code></b> </li> </ul>
		 * @link http://php.net/manual/en/harupage.getfillingcolorspace.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getFillingColorSpace(): int {}

		/**
		 * Get the flatness of the page
		 * <p>Get the flatness of the page.</p>
		 * @return float <p>Returns the flatness of the page.</p>
		 * @link http://php.net/manual/en/harupage.getflatness.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getFlatness(): float {}

		/**
		 * Get the current graphics mode
		 * <p>Get the current graphics mode.</p>
		 * @return int <p>Returns the current graphics mode. The result value is one of the following:</p><ul> <li> <b><code>HaruPage::GMODE_PAGE_DESCRIPTION</code></b> </li> <li> <b><code>HaruPage::GMODE_TEXT_OBJECT</code></b> </li> <li> <b><code>HaruPage::GMODE_PATH_OBJECT</code></b> </li> <li> <b><code>HaruPage::GMODE_CLIPPING_PATH</code></b> </li> <li> <b><code>HaruPage::GMODE_SHADING</code></b> </li> <li> <b><code>HaruPage::GMODE_INLINE_IMAGE</code></b> </li> <li> <b><code>HaruPage::GMODE_EXTERNAL_OBJECT</code></b> </li> </ul>
		 * @link http://php.net/manual/en/harupage.getgmode.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getGMode(): int {}

		/**
		 * Get the current filling color
		 * <p>Get the current filling color.</p>
		 * @return float <p>Returns the current filling color.</p>
		 * @link http://php.net/manual/en/harupage.getgrayfill.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getGrayFill(): float {}

		/**
		 * Get the current stroking color
		 * <p>Get the current stroking color.</p>
		 * @return float <p>Returns the current stroking color.</p>
		 * @link http://php.net/manual/en/harupage.getgraystroke.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getGrayStroke(): float {}

		/**
		 * Get the height of the page
		 * <p>Get the height of the page.</p>
		 * @return float <p>Returns the height of the page.</p>
		 * @link http://php.net/manual/en/harupage.getheight.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getHeight(): float {}

		/**
		 * Get the current value of horizontal scaling
		 * <p>Get the current value of the horizontal scaling.</p>
		 * @return float <p>Returns the current value of horizontal scaling.</p>
		 * @link http://php.net/manual/en/harupage.gethorizontalscaling.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getHorizontalScaling(): float {}

		/**
		 * Get the current line cap style
		 * <p>Get the current line cap style.</p>
		 * @return int <p>Returns the current line cap style. The result value is one of the following:</p><ul> <li> <b><code>HaruPage::BUTT_END</code></b> - the line is squared off at the endpoint of the path. </li> <li> <b><code>HaruPage::ROUND_END</code></b> - the end of the line becomes a semicircle with center in the end point of the path. </li> <li> <b><code>HaruPage::PROJECTING_SCUARE_END</code></b> - the line continues to the point that exceeds half of the stroke width the end point. </li> </ul>
		 * @link http://php.net/manual/en/harupage.getlinecap.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getLineCap(): int {}

		/**
		 * Get the current line join style
		 * <p>Get the current line join style.</p>
		 * @return int <p>Returns the current line join style. The result value is one of the following:</p><ul> <li> <b><code>HaruPage::MITER_JOIN</code></b> </li> <li> <b><code>HaruPage::ROUND_JOIN</code></b> </li> <li> <b><code>HaruPage::BEVEL_JOIN</code></b> </li> </ul>
		 * @link http://php.net/manual/en/harupage.getlinejoin.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getLineJoin(): int {}

		/**
		 * Get the current line width
		 * <p>Get the current line width.</p>
		 * @return float <p>Returns the current line width.</p>
		 * @link http://php.net/manual/en/harupage.getlinewidth.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getLineWidth(): float {}

		/**
		 * Get the value of miter limit
		 * <p>Get the value of the miter limit.</p>
		 * @return float <p>Returns the value of the miter limit.</p>
		 * @link http://php.net/manual/en/harupage.getmiterlimit.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getMiterLimit(): float {}

		/**
		 * Get the current filling color
		 * <p>Get the current filling color.</p>
		 * @return array <p>Returns the current filling color as an array with 3 elements: "r", "g" and "b".</p>
		 * @link http://php.net/manual/en/harupage.getrgbfill.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getRGBFill(): array {}

		/**
		 * Get the current stroking color
		 * <p>Get the current stroking color.</p>
		 * @return array <p>Returns the current stroking color.</p>
		 * @link http://php.net/manual/en/harupage.getrgbstroke.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getRGBStroke(): array {}

		/**
		 * Get the current stroking color space
		 * <p>Get the current stroking color space.</p>
		 * @return int <p>Returns the current stroking color space. The list of return values is the same as for <code>HaruPage::getFillingColorSpace()</code></p>
		 * @link http://php.net/manual/en/harupage.getstrokingcolorspace.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getStrokingColorSpace(): int {}

		/**
		 * Get the current value of line spacing
		 * <p>Get the current value of line spacing.</p>
		 * @return float <p>Returns the current value of line spacing.</p>
		 * @link http://php.net/manual/en/harupage.gettextleading.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getTextLeading(): float {}

		/**
		 * Get the current text transformation matrix of the page
		 * <p>Get the current text transformation matrix of the page.</p>
		 * @return array <p>Returns the current text transformation matrix of the page as an array of 6 elements: "a", "b", "c", "d", "x" and "y".</p>
		 * @link http://php.net/manual/en/harupage.gettextmatrix.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getTextMatrix(): array {}

		/**
		 * Get the current text rendering mode
		 * <p>Get the current text rendering mode.</p>
		 * @return int <p>Returns the current text rendering mode. The result value is one of the following:</p><ul> <li> <b><code>HaruPage::FILL</code></b> </li> <li> <b><code>HaruPage::STROKE</code></b> </li> <li> <b><code>HaruPage::FILL_THEN_STROKE</code></b> </li> <li> <b><code>HaruPage::INVISIBLE</code></b> </li> <li> <b><code>HaruPage::FILL_CLIPPING</code></b> </li> <li> <b><code>HaruPage::STROKE_CLIPPING</code></b> </li> <li> <b><code>HaruPage::FILL_STROKE_CLIPPING</code></b> </li> <li> <b><code>HaruPage::CLIPPING</code></b> </li> </ul>
		 * @link http://php.net/manual/en/harupage.gettextrenderingmode.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getTextRenderingMode(): int {}

		/**
		 * Get the current value of text rising
		 * <p>Get the current value of text rising.</p>
		 * @return float <p>Returns the current value of text rising.</p>
		 * @link http://php.net/manual/en/harupage.gettextrise.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getTextRise(): float {}

		/**
		 * Get the width of the text using current fontsize, character spacing and word spacing
		 * <p>Get the width of the text using current fontsize, character spacing and word spacing</p>
		 * @param string $text <p>The text to measure.</p>
		 * @return float <p>Returns the width of the text using current fontsize, character spacing and word spacing.</p>
		 * @link http://php.net/manual/en/harupage.gettextwidth.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getTextWidth(string $text): float {}

		/**
		 * Get the current transformation matrix of the page
		 * <p>Get the current transformation matrix of the page.</p>
		 * @return array <p>Returns the current transformation matrix of the page as an array of 6 elements: "a", "b", "c", "d", "x" and "y".</p>
		 * @link http://php.net/manual/en/harupage.gettransmatrix.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getTransMatrix(): array {}

		/**
		 * Get the width of the page
		 * <p>Get the width of the page.</p>
		 * @return float <p>Returns the width of the page.</p>
		 * @link http://php.net/manual/en/harupage.getwidth.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getWidth(): float {}

		/**
		 * Get the current value of word spacing
		 * <p>Get the current value of word spacing.</p>
		 * @return float <p>Returns the current value of word spacing.</p>
		 * @link http://php.net/manual/en/harupage.getwordspace.php
		 * @since PECL haru >= 0.0.1
		 */
		public function getWordSpace(): float {}

		/**
		 * Draw a line from the current point to the specified point
		 * <p>Draws a line from the current point to the specified point.</p>
		 * @param float $x
		 * @param float $y
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.lineto.php
		 * @since PECL haru >= 0.0.1
		 */
		public function lineTo(float $x, float $y): bool {}

		/**
		 * Calculate the byte length of characters which can be included on one line of the specified width
		 * <p>Get the byte length of characters which can be included on one line of the specified width.</p>
		 * @param string $text <p>The text to measure.</p>
		 * @param float $width <p>The width of the line.</p>
		 * @param bool $wordwrap <p>When this parameter is set to <b><code>TRUE</code></b> the function "emulates" word wrapping by stopping after the last full word (delimited by whitespace) that can fit on the line.</p>
		 * @return int <p>Returns the byte length of characters which can be included within the specified width. For single-byte encodings, this is equal to the number of characters. For multi-byte encodings, this is not necessarily the case.</p>
		 * @link http://php.net/manual/en/harupage.measuretext.php
		 * @since PECL haru >= 0.0.1
		 */
		public function measureText(string $text, float $width, bool $wordwrap = FALSE): int {}

		/**
		 * Move text position to the specified offset
		 * <p>Moves text position to the specified offset. If the start position of the current line is (x1, y1), the start of the next line is (x1 + <code>x</code>, y1 + <code>y</code>).</p>
		 * @param float $x <p>The specified text position offset.</p>
		 * @param float $y <p>The specified text position offset.</p>
		 * @param bool $set_leading <p>If set to <b><code>TRUE</code></b>, the function sets the text leading to -<code>y</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.movetextpos.php
		 * @since PECL haru >= 0.0.1
		 */
		public function moveTextPos(float $x, float $y, bool $set_leading = FALSE): bool {}

		/**
		 * Set starting point for new drawing path
		 * <p>Defines starting point for new drawing path.</p>
		 * @param float $x <p>A new starting point coordinate.</p>
		 * @param float $y <p>A new starting point coordinate.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.moveto.php
		 * @since PECL haru >= 0.0.1
		 */
		public function moveTo(float $x, float $y): bool {}

		/**
		 * Move text position to the start of the next line
		 * <p>Moves text position to the start of the next line.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.movetonextline.php
		 * @since PECL haru >= 0.0.1
		 */
		public function moveToNextLine(): bool {}

		/**
		 * Append a rectangle to the current path
		 * <p>Appends a rectangle to the current drawing path.</p>
		 * @param float $x <p>The left border of the rectangle.</p>
		 * @param float $y <p>The lower border of the rectangle.</p>
		 * @param float $width <p>The width of the rectangle.</p>
		 * @param float $height <p>The height of the rectangle.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.rectangle.php
		 * @since PECL haru >= 0.0.1
		 */
		public function rectangle(float $x, float $y, float $width, float $height): bool {}

		/**
		 * Set filling color for the page
		 * <p>Defines filling color for the page.</p>
		 * @param float $c
		 * @param float $m
		 * @param float $y
		 * @param float $k
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setcmykfill.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setCMYKFill(float $c, float $m, float $y, float $k): bool {}

		/**
		 * Set stroking color for the page
		 * <p>Defines stroking color for the page.</p>
		 * @param float $c
		 * @param float $m
		 * @param float $y
		 * @param float $k
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setcmykstroke.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setCMYKStroke(float $c, float $m, float $y, float $k): bool {}

		/**
		 * Set character spacing for the page
		 * <p>Defines character spacing for the page.</p>
		 * @param float $char_space <p>The new character spacing for the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setcharspace.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setCharSpace(float $char_space): bool {}

		/**
		 * Set the dash pattern for the page
		 * <p>Defines the dash pattern for the page.</p>
		 * @param array $pattern <p>An array (8 elements max) which contains a pattern of dashes and gaps used for lines on the page.</p>
		 * @param int $phase <p>The phase on which the pattern begins.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setdash.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setDash(array $pattern, int $phase): bool {}

		/**
		 * Set flatness for the page
		 * <p>Defines flatness for the page.</p>
		 * @param float $flatness <p>The defined flatness for the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setflatness.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setFlatness(float $flatness): bool {}

		/**
		 * Set font and fontsize for the page
		 * <p>Defines current font and its size for the page.</p>
		 * @param object $font <p>A valid HaruFont instance.</p>
		 * @param float $size <p>The size of the font.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setfontandsize.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setFontAndSize(object $font, float $size): bool {}

		/**
		 * Set filling color for the page
		 * <p>Defines filling color for the page.</p>
		 * @param float $value <p>The value of gray level between 0 and 1.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setgrayfill.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setGrayFill(float $value): bool {}

		/**
		 * Sets stroking color for the page
		 * <p>Defines stroking color for the page.</p>
		 * @param float $value <p>The value of gray level between 0 and 1.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setgraystroke.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setGrayStroke(float $value): bool {}

		/**
		 * Set height of the page
		 * <p>Defines height of the page.</p>
		 * @param float $height <p>The defined height for the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setheight.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setHeight(float $height): bool {}

		/**
		 * Set horizontal scaling for the page
		 * <p>Set the horizontal scaling for the page.</p>
		 * @param float $scaling <p>The horizontal scaling for text showing on the page. The initial value is 100.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.sethorizontalscaling.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setHorizontalScaling(float $scaling): bool {}

		/**
		 * Set the shape to be used at the ends of lines
		 * <p>Defines the shape to be used at the ends of lines.</p>
		 * @param int $cap <p>Must be one of the following values:</p><ul> <li> <b><code>HaruPage::BUTT_END</code></b> - the line is squared off at the endpoint of the path. </li> <li> <b><code>HaruPage::ROUND_END</code></b> - the end of the line becomes a semicircle with center in the end point of the path. </li> <li> <b><code>HaruPage::PROJECTING_SCUARE_END</code></b> - the line continues to the point that exceeds half of the stroke width the end point. </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setlinecap.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setLineCap(int $cap): bool {}

		/**
		 * Set line join style for the page
		 * <p>Defines line join style for the page.</p>
		 * @param int $join <p>Must be one of the following values:</p><ul> <li> <b><code>HaruPage::MITER_JOIN</code></b> </li> <li> <b><code>HaruPage::ROUND_JOIN</code></b> </li> <li> <b><code>HaruPage::BEVEL_JOIN</code></b> </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setlinejoin.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setLineJoin(int $join): bool {}

		/**
		 * Set line width for the page
		 * <p>Defines line width for the page.</p>
		 * @param float $width <p>The defined line width for the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setlinewidth.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setLineWidth(float $width): bool {}

		/**
		 * Set the current value of the miter limit of the page
		 * <p>Set the current value of the miter limit of the page.</p>
		 * @param float $limit <p>Defines the current value of the miter limit of the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setmiterlimit.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setMiterLimit(float $limit): bool {}

		/**
		 * Set filling color for the page
		 * <p>Defines filling color for the page. All values must be between 0 and 1.</p>
		 * @param float $r
		 * @param float $g
		 * @param float $b
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setrgbfill.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setRGBFill(float $r, float $g, float $b): bool {}

		/**
		 * Set stroking color for the page
		 * <p>Defines stroking color for the page. All values must be between 0 and 1.</p>
		 * @param float $r
		 * @param float $g
		 * @param float $b
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setrgbstroke.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setRGBStroke(float $r, float $g, float $b): bool {}

		/**
		 * Set rotation angle of the page
		 * <p>Defines rotation angle of the page.</p>
		 * @param int $angle <p>Must be a multiple of 90 degrees.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setrotate.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setRotate(int $angle): bool {}

		/**
		 * Set size and direction of the page
		 * <p>Changes size and direction of the page to a predefined format.</p>
		 * @param int $size <p>Must be one of the following values:</p><ul> <li> <b><code>HaruPage::SIZE_LETTER</code></b> </li> <li> <b><code>HaruPage::SIZE_LEGAL</code></b> </li> <li> <b><code>HaruPage::SIZE_A3</code></b> </li> <li> <b><code>HaruPage::SIZE_A4</code></b> </li> <li> <b><code>HaruPage::SIZE_A5</code></b> </li> <li> <b><code>HaruPage::SIZE_B4</code></b> </li> <li> <b><code>HaruPage::SIZE_B5</code></b> </li> <li> <b><code>HaruPage::SIZE_EXECUTIVE</code></b> </li> <li> <b><code>HaruPage::SIZE_US4x6</code></b> </li> <li> <b><code>HaruPage::SIZE_US4x8</code></b> </li> <li> <b><code>HaruPage::SIZE_US5x7</code></b> </li> <li> <b><code>HaruPage::SIZE_COMM10</code></b> </li> </ul>
		 * @param int $direction <p>Must be one of the following values:</p><ul> <li> <b><code>HaruPage::PORTRAIT</code></b> </li> <li> <b><code>HaruPage::LANDSCAPE</code></b> </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setsize.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setSize(int $size, int $direction): bool {}

		/**
		 * Set transition style for the page
		 * <p>Defines transition style for the page.</p>
		 * @param int $type <p>Must be one of the following values:</p><ul> <li> <b><code>HaruPage::TS_WIPE_RIGHT</code></b> </li> <li> <b><code>HaruPage::TS_WIPE_LEFT</code></b> </li> <li> <b><code>HaruPage::TS_WIPE_UP</code></b> </li> <li> <b><code>HaruPage::TS_WIPE_DOWN</code></b> </li> <li> <b><code>HaruPage::TS_BARN_DOORS_HORIZONTAL_OUT</code></b> </li> <li> <b><code>HaruPage::TS_BARN_DOORS_HORIZONTAL_IN</code></b> </li> <li> <b><code>HaruPage::TS_BARN_DOORS_VERTICAL_OUT</code></b> </li> <li> <b><code>HaruPage::TS_BARN_DOORS_VERTICAL_IN</code></b> </li> <li> <b><code>HaruPage::TS_BOX_OUT</code></b> </li> <li> <b><code>HaruPage::TS_BOX_IN</code></b> </li> <li> <b><code>HaruPage::TS_BLINDS_HORIZONTAL</code></b> </li> <li> <b><code>HaruPage::TS_BLINDS_VERTICAL</code></b> </li> <li> <b><code>HaruPage::TS_DISSOLVE</code></b> </li> <li> <b><code>HaruPage::TS_GLITTER_RIGHT</code></b> </li> <li> <b><code>HaruPage::TS_GLITTER_DOWN</code></b> </li> <li> <b><code>HaruPage::TS_GLITTER_TOP_LEFT_TO_BOTTOM_RIGHT</code></b> </li> <li> <b><code>HaruPage::TS_REPLACE</code></b> </li> </ul>
		 * @param float $disp_time <p>The display duration of the page in seconds.</p>
		 * @param float $trans_time <p>The duration of the transition effect in seconds.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setslideshow.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setSlideShow(int $type, float $disp_time, float $trans_time): bool {}

		/**
		 * Set text leading (line spacing) for the page
		 * <p>Set the text leading (line spacing) for the page.</p>
		 * @param float $text_leading <p>Defines line spacing for the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.settextleading.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setTextLeading(float $text_leading): bool {}

		/**
		 * Set the current text transformation matrix of the page
		 * <p>Defines the text transformation matrix of the page.</p>
		 * @param float $a <p>Width multiplier.</p>
		 * @param float $b <p>Vertical skew in radians.</p>
		 * @param float $c <p>Horizontal skew in radians.</p>
		 * @param float $d <p>Height multiplier.</p>
		 * @param float $x <p>Horizontal position for text.</p>
		 * @param float $y <p>Vertical position for text.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.settextmatrix.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setTextMatrix(float $a, float $b, float $c, float $d, float $x, float $y): bool {}

		/**
		 * Set text rendering mode for the page
		 * <p>Defines text rendering mode for the page.</p>
		 * @param int $mode <p>Must be one of the following values:</p><ul> <li> <b><code>HaruPage::FILL</code></b> </li> <li> <b><code>HaruPage::STROKE</code></b> </li> <li> <b><code>HaruPage::FILL_THEN_STROKE</code></b> </li> <li> <b><code>HaruPage::INVISIBLE</code></b> </li> <li> <b><code>HaruPage::FILL_CLIPPING</code></b> </li> <li> <b><code>HaruPage::STROKE_CLIPPING</code></b> </li> <li> <b><code>HaruPage::FILL_STROKE_CLIPPING</code></b> </li> <li> <b><code>HaruPage::CLIPPING</code></b> </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.settextrenderingmode.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setTextRenderingMode(int $mode): bool {}

		/**
		 * Set the current value of text rising
		 * <p>Set the current value of text rising.</p>
		 * @param float $rise <p>Defines the current value of text rising.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.settextrise.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setTextRise(float $rise): bool {}

		/**
		 * Set width of the page
		 * <p>Set the width of the page.</p>
		 * @param float $width <p>Defines width of the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setwidth.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setWidth(float $width): bool {}

		/**
		 * Set word spacing for the page
		 * <p>Set the word spacing for the page.</p>
		 * @param float $word_space <p>Defines word spacing for the page.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.setwordspace.php
		 * @since PECL haru >= 0.0.1
		 */
		public function setWordSpace(float $word_space): bool {}

		/**
		 * Print text at the current position of the page
		 * <p>Prints out the text at the current position of the page.</p>
		 * @param string $text <p>The text to show.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.showtext.php
		 * @since PECL haru >= 0.0.1
		 */
		public function showText(string $text): bool {}

		/**
		 * Move the current position to the start of the next line and print the text
		 * <p>Moves the current position to the start of the next line and print out the text.</p>
		 * @param string $text <p>The text to show.</p>
		 * @param float $word_space <p>The word spacing.</p>
		 * @param float $char_space <p>The character spacing.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.showtextnextline.php
		 * @since PECL haru >= 0.0.1
		 */
		public function showTextNextLine(string $text, float $word_space = 0, float $char_space = 0): bool {}

		/**
		 * Paint current path
		 * <p>Paints the current path.</p>
		 * @param bool $close_path <p>Closes the current path if set to <b><code>TRUE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.stroke.php
		 * @since PECL haru >= 0.0.1
		 */
		public function stroke(bool $close_path = FALSE): bool {}

		/**
		 * Print the text on the specified position
		 * <p>Prints the text on the specified position.</p>
		 * @param float $x
		 * @param float $y
		 * @param string $text
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.textout.php
		 * @since PECL haru >= 0.0.1
		 */
		public function textOut(float $x, float $y, string $text): bool {}

		/**
		 * Print the text inside the specified region
		 * <p>Prints the text inside the specified region.</p>
		 * @param float $left <p>Left border of the text area.</p>
		 * @param float $top <p>Top border of the text area.</p>
		 * @param float $right <p>Right border of the text area.</p>
		 * @param float $bottom <p>Lower border of the text area.</p>
		 * @param string $text <p>The text to print.</p>
		 * @param int $align <p>Text alignment. Must be one of the following values:</p><ul> <li> <b><code>HaruPage::TALIGN_LEFT</code></b> </li> <li> <b><code>HaruPage::TALIGN_RIGHT</code></b> </li> <li> <b><code>HaruPage::TALIGN_CENTER</code></b> </li> <li> <b><code>HaruPage::TALIGN_JUSTIFY</code></b> </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/harupage.textrect.php
		 * @since PECL haru >= 0.0.1
		 */
		public function textRect(float $left, float $top, float $right, float $bottom, string $text, int $align = HaruPage::TALIGN_LEFT): bool {}
	}

}
