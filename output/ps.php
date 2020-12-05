<?php



namespace {

	/**
	 * Add bookmark to current page
	 * <p>Adds a bookmark for the current page. Bookmarks usually appear in PDF-Viewers left of the page in a hierarchical tree. Clicking on a bookmark will jump to the given page.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text used for displaying the bookmark.</p>
	 * @param int $parent <p>A bookmark previously created by this function which is used as the parent of the new bookmark.</p>
	 * @param int $open <p>If <code>open</code> is unequal to zero the bookmark will be shown open by the pdf viewer.</p>
	 * @return int <p>The returned value is a reference for the bookmark. It is only used if the bookmark shall be used as a parent. The value is greater zero if the function succeeds. In case of an error zero will be returned.</p>
	 * @link http://php.net/manual/en/function.ps-add-bookmark.php
	 * @see ps_add_launchlink(), ps_add_pdflink(), ps_add_weblink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_bookmark($psdoc, string $text, int $parent = 0, int $open = 0): int {}

	/**
	 * Adds link which launches file
	 * <p>Places a hyperlink at the given position pointing to a file program which is being started when clicked on. The hyperlink's source position is a rectangle with its lower left corner at (llx, lly) and its upper right corner at (urx, ury). The rectangle has by default a thin blue border.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $llx <p>The x-coordinate of the lower left corner.</p>
	 * @param float $lly <p>The y-coordinate of the lower left corner.</p>
	 * @param float $urx <p>The x-coordinate of the upper right corner.</p>
	 * @param float $ury <p>The y-coordinate of the upper right corner.</p>
	 * @param string $filename <p>The path of the program to be started, when the link is clicked on.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-add-launchlink.php
	 * @see ps_add_locallink(), ps_add_pdflink(), ps_add_weblink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_launchlink($psdoc, float $llx, float $lly, float $urx, float $ury, string $filename): bool {}

	/**
	 * Adds link to a page in the same document
	 * <p>Places a hyperlink at the given position pointing to a page in the same document. Clicking on the link will jump to the given page. The first page in a document has number 1.</p><p>The hyperlink's source position is a rectangle with its lower left corner at (<code>llx</code>, <code>lly</code>) and its upper right corner at (<code>urx</code>, <code>ury</code>). The rectangle has by default a thin blue border.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $llx <p>The x-coordinate of the lower left corner.</p>
	 * @param float $lly <p>The y-coordinate of the lower left corner.</p>
	 * @param float $urx <p>The x-coordinate of the upper right corner.</p>
	 * @param float $ury <p>The y-coordinate of the upper right corner.</p>
	 * @param int $page <p>The number of the page displayed when clicking on the link.</p>
	 * @param string $dest <p>The parameter <code>dest</code> determines how the document is being viewed. It can be <code>fitpage</code>, <code>fitwidth</code>, <code>fitheight</code>, or <code>fitbbox</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-add-locallink.php
	 * @see ps_add_launchlink(), ps_add_pdflink(), ps_add_weblink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_locallink($psdoc, float $llx, float $lly, float $urx, float $ury, int $page, string $dest): bool {}

	/**
	 * Adds note to current page
	 * <p>Adds a note at a certain position on the page. Notes are like little rectangular sheets with text on it, which can be placed anywhere on a page. They are shown either folded or unfolded. If folded, the specified icon is used as a placeholder.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $llx <p>The x-coordinate of the lower left corner.</p>
	 * @param float $lly <p>The y-coordinate of the lower left corner.</p>
	 * @param float $urx <p>The x-coordinate of the upper right corner.</p>
	 * @param float $ury <p>The y-coordinate of the upper right corner.</p>
	 * @param string $contents <p>The text of the note.</p>
	 * @param string $title <p>The title of the note as displayed in the header of the note.</p>
	 * @param string $icon <p>The icon shown if the note is folded. This parameter can be set to <code>comment</code>, <code>insert</code>, <code>note</code>, <code>paragraph</code>, <code>newparagraph</code>, <code>key</code>, or <code>help</code>.</p>
	 * @param int $open <p>If <code>open</code> is unequal to zero the note will be shown unfolded after opening the document with a pdf viewer.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-add-note.php
	 * @see ps_add_pdflink(), ps_add_launchlink(), ps_add_locallink(), ps_add_weblink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_note($psdoc, float $llx, float $lly, float $urx, float $ury, string $contents, string $title, string $icon, int $open): bool {}

	/**
	 * Adds link to a page in a second pdf document
	 * <p>Places a hyperlink at the given position pointing to a second pdf document. Clicking on the link will branch to the document at the given page. The first page in a document has number 1.</p><p>The hyperlink's source position is a rectangle with its lower left corner at (<code>llx</code>, <code>lly</code>) and its upper right corner at (<code>urx</code>, <code>ury</code>). The rectangle has by default a thin blue border.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $llx <p>The x-coordinate of the lower left corner.</p>
	 * @param float $lly <p>The y-coordinate of the lower left corner.</p>
	 * @param float $urx <p>The x-coordinate of the upper right corner.</p>
	 * @param float $ury <p>The y-coordinate of the upper right corner.</p>
	 * @param string $filename <p>The name of the pdf document to be opened when clicking on this link.</p>
	 * @param int $page <p>The page number of the destination pdf document</p>
	 * @param string $dest <p>The parameter <code>dest</code> determines how the document is being viewed. It can be <code>fitpage</code>, <code>fitwidth</code>, <code>fitheight</code>, or <code>fitbbox</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-add-pdflink.php
	 * @see ps_add_launchlink(), ps_add_locallink(), ps_add_weblink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_pdflink($psdoc, float $llx, float $lly, float $urx, float $ury, string $filename, int $page, string $dest): bool {}

	/**
	 * Adds link to a web location
	 * <p>Places a hyperlink at the given position pointing to a web page. The hyperlink's source position is a rectangle with its lower left corner at (<code>llx</code>, <code>lly</code>) and its upper right corner at (<code>urx</code>, <code>ury</code>). The rectangle has by default a thin blue border.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $llx <p>The x-coordinate of the lower left corner.</p>
	 * @param float $lly <p>The y-coordinate of the lower left corner.</p>
	 * @param float $urx <p>The x-coordinate of the upper right corner.</p>
	 * @param float $ury <p>The y-coordinate of the upper right corner.</p>
	 * @param string $url <p>The url of the hyperlink to be opened when clicking on this link, e.g. <code>http://www.php.net</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-add-weblink.php
	 * @see ps_add_launchlink(), ps_add_locallink(), ps_add_pdflink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_weblink($psdoc, float $llx, float $lly, float $urx, float $ury, string $url): bool {}

	/**
	 * Draws an arc counterclockwise
	 * <p>Draws a portion of a circle with at middle point at (<code>x</code>, <code>y</code>). The arc starts at an angle of <code>alpha</code> and ends at an angle of <code>beta</code>. It is drawn counterclockwise (use <code>ps_arcn()</code> to draw clockwise). The subpath added to the current path starts on the arc at angle <code>alpha</code> and ends on the arc at angle <code>beta</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>The x-coordinate of the circle's middle point.</p>
	 * @param float $y <p>The y-coordinate of the circle's middle point.</p>
	 * @param float $radius <p>The radius of the circle</p>
	 * @param float $alpha <p>The start angle given in degrees.</p>
	 * @param float $beta <p>The end angle given in degrees.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-arc.php
	 * @see ps_arcn()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_arc($psdoc, float $x, float $y, float $radius, float $alpha, float $beta): bool {}

	/**
	 * Draws an arc clockwise
	 * <p>Draws a portion of a circle with at middle point at (<code>x</code>, <code>y</code>). The arc starts at an angle of <code>alpha</code> and ends at an angle of <code>beta</code>. It is drawn clockwise (use <code>ps_arc()</code> to draw counterclockwise). The subpath added to the current path starts on the arc at angle <code>beta</code> and ends on the arc at angle <code>alpha</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>The x-coordinate of the circle's middle point.</p>
	 * @param float $y <p>The y-coordinate of the circle's middle point.</p>
	 * @param float $radius <p>The radius of the circle</p>
	 * @param float $alpha <p>The starting angle given in degrees.</p>
	 * @param float $beta <p>The end angle given in degrees.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-arcn.php
	 * @see ps_arc()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_arcn($psdoc, float $x, float $y, float $radius, float $alpha, float $beta): bool {}

	/**
	 * Start a new page
	 * <p>Starts a new page. Although the parameters <code>width</code> and <code>height</code> imply a different page size for each page, this is not possible in PostScript. The first call of <b>ps_begin_page()</b> will set the page size for the whole document. Consecutive calls will have no effect, except for creating a new page. The situation is different if you intent to convert the PostScript document into PDF. This function places pdfmarks into the document which can set the size for each page indiviually. The resulting PDF document will have different page sizes.</p><p>Though PostScript does not know different page sizes, pslib places a bounding box for each page into the document. This size is evaluated by some PostScript viewers and will have precedence over the BoundingBox in the Header of the document. This can lead to unexpected results when you set a BoundingBox whose lower left corner is not (0, 0), because the bounding box of the page will always have a lower left corner (0, 0) and overwrites the global setting.</p><p>Each page is encapsulated into save/restore. This means, that most of the settings made on one page will not be retained on the next page.</p><p>If there is up to the first call of <b>ps_begin_page()</b> no call of <code>ps_findfont()</code>, then the header of the PostScript document will be output and the bounding box will be set to the size of the first page. The lower left corner of the bounding box is set to (0, 0). If <code>ps_findfont()</code> was called before, then the header has been output already, and the document will not have a valid bounding box. In order to prevent this, one should call <code>ps_set_info()</code> to set the info field <code>BoundingBox</code> and possibly <code>Orientation</code> before any <code>ps_findfont()</code> or <b>ps_begin_page()</b> calls.</p><p><b>Note</b>:</p><p>Up to version 0.2.6 of pslib, this function will always overwrite the BoundingBox and Orientation, if it has been set before with <code>ps_set_info()</code> and <code>ps_findfont()</code> has not been called before.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $width <p>The width of the page in pixel, e.g. 596 for A4 format.</p>
	 * @param float $height <p>The height of the page in pixel, e.g. 842 for A4 format.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-begin-page.php
	 * @see ps_end_page(), ps_findfont(), ps_set_info()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_begin_page($psdoc, float $width, float $height): bool {}

	/**
	 * Start a new pattern
	 * <p>Starts a new pattern. A pattern is like a page containing e.g. a drawing which can be used for filling areas. It is used like a color by calling <code>ps_setcolor()</code> and setting the color space to <code>pattern</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $width <p>The width of the pattern in pixel.</p>
	 * @param float $height <p>The height of the pattern in pixel.</p>
	 * @param float $xstep
	 * @param float $ystep
	 * @param int $painttype <p>Must be 1 or 2.</p>
	 * @return int|false <p>The identifier of the pattern or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-begin-pattern.php
	 * @see ps_end_pattern(), ps_setcolor(), ps_shading_pattern()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_begin_pattern($psdoc, float $width, float $height, float $xstep, float $ystep, int $painttype) {}

	/**
	 * Start a new template
	 * <p>Starts a new template. A template is called a form in the postscript language. It is created similar to a pattern but used like an image. Templates are often used for drawings which are placed several times through out the document, e.g. like a company logo. All drawing functions may be used within a template. The template will not be drawn until it is placed by <code>ps_place_image()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $width <p>The width of the template in pixel.</p>
	 * @param float $height <p>The height of the template in pixel.</p>
	 * @return int <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-begin-template.php
	 * @see ps_end_template()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_begin_template($psdoc, float $width, float $height): int {}

	/**
	 * Draws a circle
	 * <p>Draws a circle with its middle point at (<code>x</code>, <code>y</code>). The circle starts and ends at position (<code>x</code>+<code>radius</code>, <code>y</code>). If this function is called outside a path it will start a new path. If it is called within a path it will add the circle as a subpath. If the last drawing operation does not end in point (<code>x</code>+<code>radius</code>, <code>y</code>) then there will be a gap in the path.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>The x-coordinate of the circle's middle point.</p>
	 * @param float $y <p>The y-coordinate of the circle's middle point.</p>
	 * @param float $radius <p>The radius of the circle</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-circle.php
	 * @see ps_arc(), ps_arcn()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_circle($psdoc, float $x, float $y, float $radius): bool {}

	/**
	 * Clips drawing to current path
	 * <p>Takes the current path and uses it to define the border of a clipping area. Everything drawn outside of that area will not be visible.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-clip.php
	 * @see ps_closepath()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_clip($psdoc): bool {}

	/**
	 * Closes a PostScript document
	 * <p>Closes the PostScript document.</p><p>This function writes the trailer of the PostScript document. It also writes the bookmark tree. <b>ps_close()</b> does not free any resources, which is done by <code>ps_delete()</code>.</p><p>This function is also called by <code>ps_delete()</code> if it has not been called before.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-close.php
	 * @see ps_open_file(), ps_delete()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_close($psdoc): bool {}

	/**
	 * Closes image and frees memory
	 * <p>Closes an image and frees its resources. Once an image is closed it cannot be used anymore.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $imageid <p>Resource identifier of the image as returned by <code>ps_open_image()</code> or <code>ps_open_image_file()</code>.</p>
	 * @return void|false <p>Returns <b><code>NULL</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-close-image.php
	 * @see ps_open_image(), ps_open_image_file()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_close_image($psdoc, int $imageid) {}

	/**
	 * Closes path
	 * <p>Connects the last point with the first point of a path. The resulting path can be used for stroking, filling, clipping, etc..</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-closepath.php
	 * @see ps_clip(), ps_closepath_stroke()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_closepath($psdoc): bool {}

	/**
	 * Closes and strokes path
	 * <p>Connects the last point with first point of a path and draws the resulting closed line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-closepath-stroke.php
	 * @see ps_closepath()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_closepath_stroke($psdoc): bool {}

	/**
	 * Continue text in next line
	 * <p>Output a text one line below the last line. The line spacing is taken from the value "leading" which must be set with <code>ps_set_value()</code>. The actual position of the text is determined by the values "textx" and "texty" which can be requested with <code>ps_get_value()</code></p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text to output.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-continue-text.php
	 * @see ps_show(), ps_show_xy(), ps_show_boxed()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_continue_text($psdoc, string $text): bool {}

	/**
	 * Draws a curve
	 * <p>Add a section of a cubic B&eacute;zier curve described by the three given control points to the current path.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x1 <p>x-coordinate of first control point.</p>
	 * @param float $y1 <p>y-coordinate of first control point.</p>
	 * @param float $x2 <p>x-coordinate of second control point.</p>
	 * @param float $y2 <p>y-coordinate of second control point.</p>
	 * @param float $x3 <p>x-coordinate of third control point.</p>
	 * @param float $y3 <p>y-coordinate of third control point.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-curveto.php
	 * @see ps_lineto()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_curveto($psdoc, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): bool {}

	/**
	 * Deletes all resources of a PostScript document
	 * <p>Mainly frees memory used by the document. Also closes a file, if it was not closed before with <code>ps_close()</code>. You should in any case close the file with <code>ps_close()</code> before, because <code>ps_close()</code> not just closes the file but also outputs a trailor containing PostScript comments like the number of pages in the document and adding the bookmark hierarchy.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-delete.php
	 * @see ps_close()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_delete($psdoc): bool {}

	/**
	 * End a page
	 * <p>Ends a page which was started with <code>ps_begin_page()</code>. Ending a page will leave the current drawing context, which e.g. requires to reload fonts if they were loading within the page, and to set many other drawing parameters like the line width, or color..</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-end-page.php
	 * @see ps_begin_page()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_end_page($psdoc): bool {}

	/**
	 * End a pattern
	 * <p>Ends a pattern which was started with <code>ps_begin_pattern()</code>. Once a pattern has been ended, it can be used like a color to fill areas.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-end-pattern.php
	 * @see ps_begin_pattern()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_end_pattern($psdoc): bool {}

	/**
	 * End a template
	 * <p>Ends a template which was started with <code>ps_begin_template()</code>. Once a template has been ended, it can be used like an image.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-end-template.php
	 * @see ps_begin_template()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_end_template($psdoc): bool {}

	/**
	 * Fills the current path
	 * <p>Fills the path constructed with previously called drawing functions like <code>ps_lineto()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-fill.php
	 * @see ps_fill_stroke(), ps_stroke()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_fill($psdoc): bool {}

	/**
	 * Fills and strokes the current path
	 * <p>Fills and draws the path constructed with previously called drawing functions like <code>ps_lineto()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-fill-stroke.php
	 * @see ps_fill(), ps_stroke()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_fill_stroke($psdoc): bool {}

	/**
	 * Loads a font
	 * <p>Loads a font for later use. Before text is output with a loaded font it must be set with <code>ps_setfont()</code>. This function needs the adobe font metric file in order to calculate the space used up by the characters. A font which is loaded within a page will only be available on that page. Fonts which are to be used in the complete document have to be loaded before the first call of <code>ps_begin_page()</code>. Calling <b>ps_findfont()</b> between pages will make that font available for all following pages.</p><p>The name of the afm file must be <code>fontname</code><code>.afm</code>. If the font shall be embedded the file <code>fontname</code><code>.pfb</code> containing the font outline must be present as well.</p><p>Calling <b>ps_findfont()</b> before the first page requires to output the postscript header which includes the BoundingBox for the whole document. Usually the BoundingBox is set with the first call of <code>ps_begin_page()</code> which now comes after <b>ps_findfont()</b>. Consequently the BoundingBox has not been set and a warning will be issued when <b>ps_findfont()</b> is called. In order to prevent this situation, one should call <code>ps_set_parameter()</code> to set the BoundingBox before <b>ps_findfont()</b> is called.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $fontname <p>The name of the font.</p>
	 * @param string $encoding <p><b>ps_findfont()</b> will try to load the file passed in the parameter <code>encoding</code>. Encoding files are of the same syntax as those used by <b>dvips(1)</b>. They contain a font encoding vector (which is currently not used but must be present) and a list of extra ligatures to extend the list of ligatures derived from the afm file.</p> <p><code>encoding</code> can be <b><code>NULL</code></b> or the empty string if the default encoding (TeXBase1) shall be used.</p> <p>If the encoding is set to <code>builtin</code> then there will be no reencoding and the font specific encoding will be used. This is very useful with symbol fonts.</p>
	 * @param bool $embed <p>If set to a value &gt;0 the font will be embedded into the document. This requires the font outline (.pfb file) to be present.</p>
	 * @return int <p>Returns the identifier of the font or zero in case of an error. The identifier is a positive number.</p>
	 * @link http://php.net/manual/en/function.ps-findfont.php
	 * @see ps_begin_page(), ps_setfont()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_findfont($psdoc, string $fontname, string $encoding, bool $embed = FALSE): int {}

	/**
	 * Fetches the full buffer containig the generated PS data
	 * <p>This function is not implemented yet. It will always return an empty string. The idea for a later implementation is to write the contents of the postscript file into an internal buffer if in memory creation is requested, and retrieve the buffer content with this function. Currently, documents created in memory are send to the browser without buffering.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.ps-get-buffer.php
	 * @see ps_open_file()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_get_buffer($psdoc): string {}

	/**
	 * Gets certain parameters
	 * <p>Gets several parameters which were directly set by <code>ps_set_parameter()</code> or indirectly by one of the other functions. Parameters are by definition string values. This function cannot be used to retrieve resources which were also set by <code>ps_set_parameter()</code>.</p><p>The parameter <code>name</code> can have the following values.</p><p></p><p>The name of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The encoding of the currently active font.</p><p>The version of the underlying pslib library in the format &lt;major&gt;.&lt;minor&gt;.&lt;subminor&gt;</p><p>The current drawing scope. Can be object, document, null, page, pattern, path, template, prolog, font, glyph.</p><p>The character which dissolves a ligature. If your are using a font which contains the ligature `ff' and `|' is the char to dissolve the ligature, then `f|f' will result in two `f' instead of the ligature `ff'.</p><p>The encoding used for encoding images. Can be either <code>hex</code> or <code>85</code>. hex encoding uses two bytes in the postscript file each byte in the image. 85 stand for Ascii85 encoding.</p><p>Set to <code>paragraph</code> if lines are numbered within a paragraph or <code>box</code> if they are numbered within the surrounding box.</p><p>Only used if text is output with <code>ps_show_boxed()</code>. If set to <b><code>TRUE</code></b> a carriage return will add a line break.</p><p>Only used if text is output with <code>ps_show_boxed()</code>. If set to <b><code>TRUE</code></b> a carriage return will start a new paragraph.</p><p>Only used if text is output with <code>ps_show_boxed()</code>. If set to <b><code>TRUE</code></b> the paragraph will be hyphenated if a hypen dictionary is set and exists.</p><p>Filename of the dictionary used for hyphenation pattern.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $name <p>Name of the parameter.</p>
	 * @param float $modifier <p>An identifier needed if a parameter of a resource is requested, e.g. the size of an image. In such a case the resource id is passed.</p>
	 * @return string|false <p>Returns the value of the parameter or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-get-parameter.php
	 * @see ps_set_parameter()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_get_parameter($psdoc, string $name, float $modifier = NULL) {}

	/**
	 * Gets certain values
	 * <p>Gets several values which were set by <code>ps_set_value()</code>. Values are by definition float values.</p><p>The parameter <code>name</code> can have the following values.</p><p></p><p>The size of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The currently active font itself.</p><p>The width of the image whose id is passed in the parameter <code>modifier</code>.</p><p>The height of the image whose id is passed in the parameter <code>modifier</code>.</p><p>The height of a capital M in the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The ascender of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The descender of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The italicangle of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The underlineposition of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The underlinethickness of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The current x-position for text output.</p><p>The current y-position for text output.</p><p>The current mode for text rendering.</p><p>The space by which text is risen above the base line.</p><p>The distance between text lines in points.</p><p>The space between words as a multiple of the width of a space char.</p><p>The space between chars. If charspacing is != 0.0 ligatures will always be dissolved.</p><p>Minimum number of chars hyphenated at the end of a word.</p><p>Indention of the first n line in a paragraph.</p><p>Number of line in a paragraph to indent if parindent != 0.0.</p><p>Distance between paragraphs.</p><p>Overall space in front of each line for the line number.</p><p>Space between the line and the line number.</p><p>The major version number of pslib.</p><p>The minor version number of pslib.</p><p>The subminor version number of pslib.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $name <p>Name of the value.</p>
	 * @param float $modifier <p>The parameter <code>modifier</code> specifies the resource for which the value is to be retrieved. This can be the id of a font or an image.</p>
	 * @return float <p>Returns the value of the parameter or <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ps-get-value.php
	 * @see ps_set_value()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_get_value($psdoc, string $name, float $modifier = NULL): float {}

	/**
	 * Hyphenates a word
	 * <p>Hyphenates the passed word. <b>ps_hyphenate()</b> evaluates the value hyphenminchars (set by <code>ps_set_value()</code>) and the parameter hyphendict (set by <code>ps_set_parameter()</code>). hyphendict must be set before calling this function.</p><p>This function requires the locale category LC_CTYPE to be set properly. This is done when the extension is initialized by using the environment variables. On Unix systems read the man page of locale for more information.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p><code>text</code> should not contain any non alpha characters. Possible positions for breaks are returned in an array of interger numbers. Each number is the position of the char in <code>text</code> after which a hyphenation can take place.</p>
	 * @return array|false <p>An array of integers indicating the position of possible breaks in the text or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-hyphenate.php
	 * @see ps_show_boxed()
	 * @since PECL ps >= 1.1.1
	 */
	function ps_hyphenate($psdoc, string $text) {}

	/**
	 * Reads an external file with raw PostScript code
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $file
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-include-file.php
	 * @since PECL ps >= 1.3.4
	 */
	function ps_include_file($psdoc, string $file): bool {}

	/**
	 * Draws a line
	 * <p>Adds a straight line from the current point to the given coordinates to the current path. Use <code>ps_moveto()</code> to set the starting point of the line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>x-coordinate of the end point of the line.</p>
	 * @param float $y <p>y-coordinate of the end point of the line.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-lineto.php
	 * @see ps_moveto()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_lineto($psdoc, float $x, float $y): bool {}

	/**
	 * Create spot color
	 * <p>Creates a spot color from the current fill color. The fill color must be defined in rgb, cmyk or gray colorspace. The spot color name can be an arbitrary name. A spot color can be set as any color with <code>ps_setcolor()</code>. When the document is not printed but displayed by an postscript viewer the given color in the specified color space is use.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $name <p>Name of the spot color, e.g. Pantone 5565.</p>
	 * @param int $reserved
	 * @return int <p>The id of the new spot color or 0 in case of an error.</p>
	 * @link http://php.net/manual/en/function.ps-makespotcolor.php
	 * @see ps_setcolor()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_makespotcolor($psdoc, string $name, int $reserved = 0): int {}

	/**
	 * Sets current point
	 * <p>Sets the current point to new coordinates. If this is the first call of <b>ps_moveto()</b> after a previous path has been ended then it will start a new path. If this function is called in the middle of a path it will just set the current point and start a subpath.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>x-coordinate of the point to move to.</p>
	 * @param float $y <p>y-coordinate of the point to move to.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-moveto.php
	 * @see ps_lineto()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_moveto($psdoc, float $x, float $y): bool {}

	/**
	 * Creates a new PostScript document object
	 * <p>Creates a new document instance. It does not create the file on disk or in memory, it just sets up everything. <b>ps_new()</b> is usually followed by a call of <code>ps_open_file()</code> to actually create the postscript document.</p>
	 * @return resource|false <p>Resource of PostScript document or <b><code>FALSE</code></b> on failure. The return value is passed to all other functions as the first argument.</p>
	 * @link http://php.net/manual/en/function.ps-new.php
	 * @see ps_delete()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_new() {}

	/**
	 * Opens a file for output
	 * <p>Creates a new file on disk and writes the PostScript document into it. The file will be closed when <code>ps_close()</code> is called.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $filename <p>The name of the postscript file. If <code>filename</code> is not passed the document will be created in memory and all output will go straight to the browser.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-open-file.php
	 * @see ps_close()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_open_file($psdoc, string $filename = NULL): bool {}

	/**
	 * Reads an image for later placement
	 * <p>Reads an image which is already available in memory. The parameter <code>source</code> is currently not evaluated and assumed to be <code>memory</code>. The image data is a sequence of pixels starting in th upper left corner and ending in the lower right corner. Each pixel consists of <code>components</code> color components, and each component has <code>bpc</code> bits.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $type <p>The type of the image. Possible values are <code>png</code>, <code>jpeg</code>, or <code>eps</code>.</p>
	 * @param string $source <p>Not used.</p>
	 * @param string $data <p>The image data.</p>
	 * @param int $lenght
	 * @param int $width <p>The width of the image.</p>
	 * @param int $height <p>The height of the image.</p>
	 * @param int $components <p>The number of components for each pixel. This can be 1 (gray scale images), 3 (rgb images), or 4 (cmyk, rgba images).</p>
	 * @param int $bpc <p>Number of bits per component (quite often 8).</p>
	 * @param string $params
	 * @return int <p>Returns identifier of image or zero in case of an error. The identifier is a positive number greater than 0.</p>
	 * @link http://php.net/manual/en/function.ps-open-image.php
	 * @see ps_open_image_file(), ps_place_image(), ps_close_image()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_open_image($psdoc, string $type, string $source, string $data, int $lenght, int $width, int $height, int $components, int $bpc, string $params): int {}

	/**
	 * Opens image from file
	 * <p>Loads an image for later use.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $type <p>The type of the image. Possible values are <code>png</code>, <code>jpeg</code>, or <code>eps</code>.</p>
	 * @param string $filename <p>The name of the file containing the image data.</p>
	 * @param string $stringparam <p>Not used.</p>
	 * @param int $intparam <p>Not used.</p>
	 * @return int <p>Returns identifier of image or zero in case of an error. The identifier is a positive number greater than 0.</p>
	 * @link http://php.net/manual/en/function.ps-open-image-file.php
	 * @see ps_open_image(), ps_place_image(), ps_close_image()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_open_image_file($psdoc, string $type, string $filename, string $stringparam = NULL, int $intparam = 0): int {}

	/**
	 * Takes an GD image and returns an image for placement in a PS document
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $gd
	 * @return int
	 * @link http://php.net/manual/en/function.ps-open-memory-image.php
	 * @since PECL ps >= 1.1.0
	 */
	function ps_open_memory_image($psdoc, int $gd): int {}

	/**
	 * Places image on the page
	 * <p>Places a formerly loaded image on the page. The image can be scaled. If the image shall be rotated as well, you will have to rotate the coordinate system before with <code>ps_rotate()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $imageid <p>The resource identifier of the image as returned by <code>ps_open_image()</code> or <code>ps_open_image_file()</code>.</p>
	 * @param float $x <p>x-coordinate of the lower left corner of the image.</p>
	 * @param float $y <p>y-coordinate of the lower left corner of the image.</p>
	 * @param float $scale <p>The scaling factor for the image. A scale of 1.0 will result in a resolution of 72 dpi, because each pixel is equivalent to 1 point.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-place-image.php
	 * @see ps_open_image(), ps_open_image_file()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_place_image($psdoc, int $imageid, float $x, float $y, float $scale): bool {}

	/**
	 * Draws a rectangle
	 * <p>Draws a rectangle with its lower left corner at (<code>x</code>, <code>y</code>). The rectangle starts and ends in its lower left corner. If this function is called outside a path it will start a new path. If it is called within a path it will add the rectangle as a subpath. If the last drawing operation does not end in the lower left corner then there will be a gap in the path.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>x-coordinate of the lower left corner of the rectangle.</p>
	 * @param float $y <p>y-coordinate of the lower left corner of the rectangle.</p>
	 * @param float $width <p>The width of the image.</p>
	 * @param float $height <p>The height of the image.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-rect.php
	 * @see ps_arc(), ps_lineto()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_rect($psdoc, float $x, float $y, float $width, float $height): bool {}

	/**
	 * Restore previously save context
	 * <p>Restores a previously saved graphics context. Any call of <code>ps_save()</code> must be accompanied by a call to <b>ps_restore()</b>. All coordinate transformations, line style settings, color settings, etc. are being restored to the state before the call of <code>ps_save()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-restore.php
	 * @see ps_save()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_restore($psdoc): bool {}

	/**
	 * Sets rotation factor
	 * <p>Sets the rotation of the coordinate system.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $rot <p>Angle of rotation in degree.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-rotate.php
	 * @see ps_scale(), ps_translate()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_rotate($psdoc, float $rot): bool {}

	/**
	 * Save current context
	 * <p>Saves the current graphics context, containing colors, translation and rotation settings and some more. A saved context can be restored with <code>ps_restore()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-save.php
	 * @see ps_restore()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_save($psdoc): bool {}

	/**
	 * Sets scaling factor
	 * <p>Sets horizontal and vertical scaling of the coordinate system.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>Scaling factor in horizontal direction.</p>
	 * @param float $y <p>Scaling factor in vertical direction.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-scale.php
	 * @see ps_rotate(), ps_translate()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_scale($psdoc, float $x, float $y): bool {}

	/**
	 * Sets color of border for annotations
	 * <p>Links added with one of the functions <code>ps_add_weblink()</code>, <code>ps_add_pdflink()</code>, etc. will be displayed with a surounded rectangle when the postscript document is converted to pdf and viewed in a pdf viewer. This rectangle is not visible in the postscript document. This function sets the color of the rectangle's border line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $red <p>The red component of the border color.</p>
	 * @param float $green <p>The green component of the border color.</p>
	 * @param float $blue <p>The blue component of the border color.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-border-color.php
	 * @see ps_set_border_dash(), ps_set_border_style()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_border_color($psdoc, float $red, float $green, float $blue): bool {}

	/**
	 * Sets length of dashes for border of annotations
	 * <p>Links added with one of the functions <code>ps_add_weblink()</code>, <code>ps_add_pdflink()</code>, etc. will be displayed with a surounded rectangle when the postscript document is converted to pdf and viewed in a pdf viewer. This rectangle is not visible in the postscript document. This function sets the length of the black and white portion of a dashed border line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $black <p>The length of the dash.</p>
	 * @param float $white <p>The length of the gap between dashes.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-border-dash.php
	 * @see ps_set_border_color(), ps_set_border_style()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_border_dash($psdoc, float $black, float $white): bool {}

	/**
	 * Sets border style of annotations
	 * <p>Links added with one of the functions <code>ps_add_weblink()</code>, <code>ps_add_pdflink()</code>, etc. will be displayed with a surounded rectangle when the postscript document is converted to pdf and viewed in a pdf viewer. This rectangle is not visible in the postscript document. This function sets the appearance and width of the border line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $style <p><code>style</code> can be <code>solid</code> or <code>dashed</code>.</p>
	 * @param float $width <p>The line width of the border.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-border-style.php
	 * @see ps_set_border_color(), ps_set_border_dash()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_border_style($psdoc, string $style, float $width): bool {}

	/**
	 * Sets information fields of document
	 * <p>Sets certain information fields of the document. This fields will be shown as a comment in the header of the PostScript file. If the document is converted to pdf this fields will also be used for the document information.</p><p>The <code>BoundingBox</code> is usually set to the value given to the first page. This only works if <code>ps_findfont()</code> has not been called before. In such cases the BoundingBox would be left unset unless you set it explicitly with this function.</p><p>This function will have no effect anymore when the header of the postscript file has been already written. It must be called before the first page or the first call of <code>ps_findfont()</code>.</p>
	 * @param resource $p
	 * @param string $key <p>The name of the information field to set. The values which can be set are <code>Keywords</code>, <code>Subject</code>, <code>Title</code>, <code>Creator</code>, <code>Author</code>, <code>BoundingBox</code>, and <code>Orientation</code>. Be aware that some of them has a meaning to PostScript viewers.</p>
	 * @param string $val
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-info.php
	 * @see ps_findfont(), ps_begin_page()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_info($p, string $key, string $val): bool {}

	/**
	 * Sets certain parameters
	 * <p>Sets several parameters which are used by many functions. Parameters are by definition string values.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $name <p>For a list of possible names see <code>ps_get_parameter()</code>.</p>
	 * @param string $value <p>The value of the parameter.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-parameter.php
	 * @see ps_set_value()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_parameter($psdoc, string $name, string $value): bool {}

	/**
	 * Sets position for text output
	 * <p>Set the position for the next text output. You may alternatively set the x and y value separately by calling <code>ps_set_value()</code> and choosing <code>textx</code> respectively <code>texty</code> as the value name.</p><p>If you want to output text at a certain position it is more convenient to use <code>ps_show_xy()</code> instead of setting the text position and calling <code>ps_show()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>x-coordinate of the new text position.</p>
	 * @param float $y <p>y-coordinate of the new text position.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-text-pos.php
	 * @see ps_set_value(), ps_show()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_text_pos($psdoc, float $x, float $y): bool {}

	/**
	 * Sets certain values
	 * <p>Sets several values which are used by many functions. Parameters are by definition float values.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $name <p>The <code>name</code> can be one of the following:</p>  textrendering  <p>The way how text is shown.</p>   textx  <p>The x coordinate for text output.</p>   texty  <p>The y coordinate for text output.</p>   wordspacing  <p>The distance between words relative to the width of a space.</p>   leading  <p>The distance between lines in pixels.</p>
	 * @param float $value <p>The value of the parameter.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-value.php
	 * @see ps_get_value(), ps_set_parameter()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_value($psdoc, string $name, float $value): bool {}

	/**
	 * Sets current color
	 * <p>Sets the color for drawing, filling, or both.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $type <p>The parameter <code>type</code> can be <code>both</code>, <code>fill</code>, or <code>fillstroke</code>.</p>
	 * @param string $colorspace <p>The colorspace should be one of <code>gray</code>, <code>rgb</code>, <code>cmyk</code>, <code>spot</code>, <code>pattern</code>. Depending on the colorspace either only the first, the first three or all parameters will be used.</p>
	 * @param float $c1 <p>Depending on the colorspace this is either the red component (rgb), the cyan component (cmyk), the gray value (gray), the identifier of the spot color or the identifier of the pattern.</p>
	 * @param float $c2 <p>Depending on the colorspace this is either the green component (rgb), the magenta component (cmyk).</p>
	 * @param float $c3 <p>Depending on the colorspace this is either the blue component (rgb), the yellow component (cmyk).</p>
	 * @param float $c4 <p>This must only be set in cmyk colorspace and specifies the black component.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setcolor.php
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setcolor($psdoc, string $type, string $colorspace, float $c1, float $c2, float $c3, float $c4): bool {}

	/**
	 * Sets appearance of a dashed line
	 * <p>Sets the length of the black and white portions of a dashed line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $on <p>The length of the dash.</p>
	 * @param float $off <p>The length of the gap between dashes.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setdash.php
	 * @see ps_setpolydash()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setdash($psdoc, float $on, float $off): bool {}

	/**
	 * Sets flatness
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $value <p>The <code>value</code> must be between 0.2 and 1.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setflat.php
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setflat($psdoc, float $value): bool {}

	/**
	 * Sets font to use for following output
	 * <p>Sets a font, which has to be loaded before with <code>ps_findfont()</code>. Outputting text without setting a font results in an error.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $fontid <p>The font identifier as returned by <code>ps_findfont()</code>.</p>
	 * @param float $size <p>The size of the font.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setfont.php
	 * @see ps_findfont(), ps_set_text_pos()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setfont($psdoc, int $fontid, float $size): bool {}

	/**
	 * Sets gray value
	 * <p>Sets the gray value for all following drawing operations.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $gray <p>The value must be between 0 (white) and 1 (black).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setgray.php
	 * @see ps_setcolor()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setgray($psdoc, float $gray): bool {}

	/**
	 * Sets appearance of line ends
	 * <p>Sets how line ends look like.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $type <p>The type of line ends. Possible values are <code>PS_LINECAP_BUTT</code>, <code>PS_LINECAP_ROUND</code>, or <code>PS_LINECAP_SQUARED</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setlinecap.php
	 * @see ps_setlinejoin(), ps_setlinewidth(), ps_setmiterlimit()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setlinecap($psdoc, int $type): bool {}

	/**
	 * Sets how contected lines are joined
	 * <p>Sets how lines are joined.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $type <p>The way lines are joined. Possible values are <code>PS_LINEJOIN_MITER</code>, <code>PS_LINEJOIN_ROUND</code>, or <code>PS_LINEJOIN_BEVEL</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setlinejoin.php
	 * @see ps_setlinecap(), ps_setlinewidth(), ps_setmiterlimit()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setlinejoin($psdoc, int $type): bool {}

	/**
	 * Sets width of a line
	 * <p>Sets the line width for all following drawing operations.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $width <p>The width of lines in points.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setlinewidth.php
	 * @see ps_setlinecap(), ps_setlinejoin(), ps_setmiterlimit()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setlinewidth($psdoc, float $width): bool {}

	/**
	 * Sets the miter limit
	 * <p>If two lines join in a small angle and the line join is set to <code>PS_LINEJOIN_MITER</code>, then the resulting spike will be very long. The miter limit is the maximum ratio of the miter length (the length of the spike) and the line width.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $value <p>The maximum ratio between the miter length and the line width. Larger values (&gt; 10) will result in very long spikes when two lines meet in a small angle. Keep the default unless you know what you are doing.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setmiterlimit.php
	 * @see ps_setlinecap(), ps_setlinejoin(), ps_setlinewidth()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setmiterlimit($psdoc, float $value): bool {}

	/**
	 * Sets overprint mode
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $mode
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setoverprintmode.php
	 * @since PECL ps >= 1.3.0
	 */
	function ps_setoverprintmode($psdoc, int $mode): bool {}

	/**
	 * Sets appearance of a dashed line
	 * <p>Sets the length of the black and white portions of a dashed line. <b>ps_setpolydash()</b> is used to set more complicated dash patterns.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $arr <p><code>arr</code> is a list of length elements alternately for the black and white portion.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setpolydash.php
	 * @see ps_setdash()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setpolydash($psdoc, float $arr): bool {}

	/**
	 * Creates a shading for later use
	 * <p>Creates a shading, which can be used by <code>ps_shfill()</code> or <code>ps_shading_pattern()</code>.</p><p>The color of the shading can be in any color space except for <code>pattern</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $type <p>The type of shading can be either <code>radial</code> or <code>axial</code>. Each shading starts with the current fill color and ends with the given color values passed in the parameters <code>c1</code> to <code>c4</code> (see <code>ps_setcolor()</code> for their meaning).</p>
	 * @param float $x0
	 * @param float $y0
	 * @param float $x1
	 * @param float $y1
	 * @param float $c1
	 * @param float $c2
	 * @param float $c3
	 * @param float $c4
	 * @param string $optlist <p>If the shading is of type <code>radial</code> the <code>optlist</code> must also contain the parameters <code>r0</code> and <code>r1</code> with the radius of the start and end circle.</p>
	 * @return int|false <p>Returns the identifier of the pattern or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-shading.php
	 * @see ps_shading_pattern(), ps_shfill()
	 * @since PECL ps >= 1.3.0
	 */
	function ps_shading($psdoc, string $type, float $x0, float $y0, float $x1, float $y1, float $c1, float $c2, float $c3, float $c4, string $optlist) {}

	/**
	 * Creates a pattern based on a shading
	 * <p>Creates a pattern based on a shading, which has to be created before with <code>ps_shading()</code>. Shading patterns can be used like regular patterns.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $shadingid <p>The identifier of a shading previously created with <code>ps_shading()</code>.</p>
	 * @param string $optlist <p>This argument is not currently used.</p>
	 * @return int|false <p>The identifier of the pattern or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-shading-pattern.php
	 * @see ps_shading(), ps_shfill()
	 * @since PECL ps >= 1.3.0
	 */
	function ps_shading_pattern($psdoc, int $shadingid, string $optlist) {}

	/**
	 * Fills an area with a shading
	 * <p>Fills an area with a shading, which has to be created before with <code>ps_shading()</code>. This is an alternative way to creating a pattern from a shading <code>ps_shading_pattern()</code> and using the pattern as the filling color.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $shadingid <p>The identifier of a shading previously created with <code>ps_shading()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-shfill.php
	 * @see ps_shading(), ps_shading_pattern()
	 * @since PECL ps >= 1.3.0
	 */
	function ps_shfill($psdoc, int $shadingid): bool {}

	/**
	 * Output text
	 * <p>Output a text at the current text position. The text position can be set by storing the x and y coordinates into the values <code>textx</code> and <code>texty</code> with the function <code>ps_set_value()</code>. The function will issue an error if a font was not set before with <code>ps_setfont()</code>.</p><p><b>ps_show()</b> evaluates the following parameters and values as set by <code>ps_set_parameter()</code> and <code>ps_set_value()</code>.</p><p>Distance between two consecutive glyphs. If this value is unequal to zero then all ligatures will be resolved. Values less than zero are allowed.</p><p>Setting this parameter to "false" will turn off kerning. Kerning is turned on by default.</p><p>Setting this parameter to "false" will turn off the use of ligatures. Ligatures are turned on by default.</p><p>Setting this parameter to "true" will turn on underlining. Underlining is turned off by default.</p><p>Setting this parameter to "true" will turn on overlining. Overlining is turned off by default.</p><p>Setting this parameter to "true" will turn on striking out. Striking out is turned off by default.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text to be output.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-show.php
	 * @see ps_continue_text(), ps_show_xy(), ps_setfont()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_show($psdoc, string $text): bool {}

	/**
	 * Output a text at current position
	 * <p>Output text at the current position. Do not print more than <code>len</code> characters.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text to be output.</p>
	 * @param int $len <p>The maximum number of characters to print.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-show2.php
	 * @since PECL ps >= 1.1.0
	 */
	function ps_show2($psdoc, string $text, int $len): bool {}

	/**
	 * Output text in a box
	 * <p>Outputs a text in a given box. The lower left corner of the box is at (<code>left</code>, <code>bottom</code>). Line breaks will be inserted where needed. Multiple spaces are treated as one. Tabulators are treated as spaces.</p><p>The text will be hyphenated if the parameter <code>hyphenation</code> is set to <b><code>TRUE</code></b> and the parameter <code>hyphendict</code> contains a valid filename for a hyphenation file. The line spacing is taken from the value <code>leading</code>. Paragraphs can be separated by an empty line just like in TeX. If the value <code>parindent</code> is set to value &gt; 0.0 then the first n lines will be indented. The number n of lines is set by the parameter <code>numindentlines</code>. In order to prevent indenting of the first m paragraphs set the value <code>parindentskip</code> to a positive number.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text to be output into the given box.</p>
	 * @param float $left <p>x-coordinate of the lower left corner of the box.</p>
	 * @param float $bottom <p>y-coordinate of the lower left corner of the box.</p>
	 * @param float $width <p>Width of the box.</p>
	 * @param float $height <p>Height of the box.</p>
	 * @param string $hmode <p>The parameter <code>hmode</code> can be "justify", "fulljustify", "right", "left", or "center". The difference of "justify" and "fulljustify" just affects the last line of the box. In fulljustify mode the last line will be left and right justified unless this is also the last line of paragraph. In justify mode it will always be left justified.</p>
	 * @param string $feature
	 * @return int <p>Number of characters that could not be written.</p>
	 * @link http://php.net/manual/en/function.ps-show-boxed.php
	 * @see ps_continue_text()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_show_boxed($psdoc, string $text, float $left, float $bottom, float $width, float $height, string $hmode, string $feature = NULL): int {}

	/**
	 * Output text at given position
	 * <p>Output a text at the given text position.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text to be output.</p>
	 * @param float $x <p>x-coordinate of the lower left corner of the box surrounding the text.</p>
	 * @param float $y <p>y-coordinate of the lower left corner of the box surrounding the text.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-show-xy.php
	 * @see ps_continue_text(), ps_show()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_show_xy($psdoc, string $text, float $x, float $y): bool {}

	/**
	 * Output text at position
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc
	 * @param string $text
	 * @param int $len
	 * @param float $xcoor
	 * @param float $ycoor
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-show-xy2.php
	 * @since PECL ps >= 1.1.0
	 */
	function ps_show_xy2($psdoc, string $text, int $len, float $xcoor, float $ycoor): bool {}

	/**
	 * Gets geometry of a string
	 * <p>This function is similar to <code>ps_stringwidth()</code> but returns an array of dimensions containing the width, ascender, and descender of the text.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text for which the geometry is to be calculated.</p>
	 * @param int $fontid <p>The identifier of the font to be used. If not font is specified the current font will be used.</p>
	 * @param float $size <p>The size of the font. If no size is specified the current size is used.</p>
	 * @return array <p>An array of the dimensions of a string. The element 'width' contains the width of the string as returned by <code>ps_stringwidth()</code>. The element 'descender' contains the maximum descender and 'ascender' the maximum ascender of the string.</p>
	 * @link http://php.net/manual/en/function.ps-string-geometry.php
	 * @see ps_continue_text(), ps_stringwidth()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_string_geometry($psdoc, string $text, int $fontid = 0, float $size = 0.0): array {}

	/**
	 * Gets width of a string
	 * <p>Calculates the width of a string in points if it was output in the given font and font size. This function needs an Adobe font metrics file to calculate the precise width. If kerning is turned on, it will be taken into account.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text for which the width is to be calculated.</p>
	 * @param int $fontid <p>The identifier of the font to be used. If not font is specified the current font will be used.</p>
	 * @param float $size <p>The size of the font. If no size is specified the current size is used.</p>
	 * @return float <p>Width of a string in points.</p>
	 * @link http://php.net/manual/en/function.ps-stringwidth.php
	 * @see ps_string_geometry()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_stringwidth($psdoc, string $text, int $fontid = 0, float $size = 0.0): float {}

	/**
	 * Draws the current path
	 * <p>Draws the path constructed with previously called drawing functions like <code>ps_lineto()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-stroke.php
	 * @see ps_closepath_stroke(), ps_fill(), ps_fill_stroke()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_stroke($psdoc): bool {}

	/**
	 * Output a glyph
	 * <p>Output the glyph at position <code>ord</code> in the font encoding vector of the current font. The font encoding for a font can be set when loading the font with <code>ps_findfont()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $ord <p>The position of the glyph in the font encoding vector.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-symbol.php
	 * @see ps_symbol_name(), ps_symbol_width()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_symbol($psdoc, int $ord): bool {}

	/**
	 * Gets name of a glyph
	 * <p>This function needs an Adobe font metrics file to know which glyphs are available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $ord <p>The parameter <code>ord</code> is the position of the glyph in the font encoding vector.</p>
	 * @param int $fontid <p>The identifier of the font to be used. If not font is specified the current font will be used.</p>
	 * @return string <p>The name of a glyph in the given font.</p>
	 * @link http://php.net/manual/en/function.ps-symbol-name.php
	 * @see ps_symbol(), ps_symbol_width()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_symbol_name($psdoc, int $ord, int $fontid = 0): string {}

	/**
	 * Gets width of a glyph
	 * <p>Calculates the width of a glyph in points if it was output in the given font and font size. This function needs an Adobe font metrics file to calculate the precise width.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $ord <p>The position of the glyph in the font encoding vector.</p>
	 * @param int $fontid <p>The identifier of the font to be used. If not font is specified the current font will be used.</p>
	 * @param float $size <p>The size of the font. If no size is specified the current size is used.</p>
	 * @return float <p>The width of a glyph in points.</p>
	 * @link http://php.net/manual/en/function.ps-symbol-width.php
	 * @see ps_symbol(), ps_symbol_name()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_symbol_width($psdoc, int $ord, int $fontid = 0, float $size = 0.0): float {}

	/**
	 * Sets translation
	 * <p>Sets a new initial point of the coordinate system.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>x-coordinate of the origin of the translated coordinate system.</p>
	 * @param float $y <p>y-coordinate of the origin of the translated coordinate system.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-translate.php
	 * @see ps_scale(), ps_rotate()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_translate($psdoc, float $x, float $y): bool {}

	/**
	 * ps_LINECAP_BUTT
	 */
	define('ps_LINECAP_BUTT', null);

	/**
	 * ps_LINECAP_ROUND
	 */
	define('ps_LINECAP_ROUND', null);

	/**
	 * ps_LINECAP_SQUARED
	 */
	define('ps_LINECAP_SQUARED', null);

	/**
	 * ps_LINEJOIN_BEVEL
	 */
	define('ps_LINEJOIN_BEVEL', null);

	/**
	 * ps_LINEJOIN_MITER
	 */
	define('ps_LINEJOIN_MITER', null);

	/**
	 * ps_LINEJOIN_ROUND
	 */
	define('ps_LINEJOIN_ROUND', null);

}
namespace {

	/**
	 * Add bookmark to current page
	 * <p>Adds a bookmark for the current page. Bookmarks usually appear in PDF-Viewers left of the page in a hierarchical tree. Clicking on a bookmark will jump to the given page.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text used for displaying the bookmark.</p>
	 * @param int $parent <p>A bookmark previously created by this function which is used as the parent of the new bookmark.</p>
	 * @param int $open <p>If <code>open</code> is unequal to zero the bookmark will be shown open by the pdf viewer.</p>
	 * @return int <p>The returned value is a reference for the bookmark. It is only used if the bookmark shall be used as a parent. The value is greater zero if the function succeeds. In case of an error zero will be returned.</p>
	 * @link http://php.net/manual/en/function.ps-add-bookmark.php
	 * @see ps_add_launchlink(), ps_add_pdflink(), ps_add_weblink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_bookmark($psdoc, string $text, int $parent = 0, int $open = 0): int {}

	/**
	 * Adds link which launches file
	 * <p>Places a hyperlink at the given position pointing to a file program which is being started when clicked on. The hyperlink's source position is a rectangle with its lower left corner at (llx, lly) and its upper right corner at (urx, ury). The rectangle has by default a thin blue border.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $llx <p>The x-coordinate of the lower left corner.</p>
	 * @param float $lly <p>The y-coordinate of the lower left corner.</p>
	 * @param float $urx <p>The x-coordinate of the upper right corner.</p>
	 * @param float $ury <p>The y-coordinate of the upper right corner.</p>
	 * @param string $filename <p>The path of the program to be started, when the link is clicked on.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-add-launchlink.php
	 * @see ps_add_locallink(), ps_add_pdflink(), ps_add_weblink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_launchlink($psdoc, float $llx, float $lly, float $urx, float $ury, string $filename): bool {}

	/**
	 * Adds link to a page in the same document
	 * <p>Places a hyperlink at the given position pointing to a page in the same document. Clicking on the link will jump to the given page. The first page in a document has number 1.</p><p>The hyperlink's source position is a rectangle with its lower left corner at (<code>llx</code>, <code>lly</code>) and its upper right corner at (<code>urx</code>, <code>ury</code>). The rectangle has by default a thin blue border.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $llx <p>The x-coordinate of the lower left corner.</p>
	 * @param float $lly <p>The y-coordinate of the lower left corner.</p>
	 * @param float $urx <p>The x-coordinate of the upper right corner.</p>
	 * @param float $ury <p>The y-coordinate of the upper right corner.</p>
	 * @param int $page <p>The number of the page displayed when clicking on the link.</p>
	 * @param string $dest <p>The parameter <code>dest</code> determines how the document is being viewed. It can be <code>fitpage</code>, <code>fitwidth</code>, <code>fitheight</code>, or <code>fitbbox</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-add-locallink.php
	 * @see ps_add_launchlink(), ps_add_pdflink(), ps_add_weblink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_locallink($psdoc, float $llx, float $lly, float $urx, float $ury, int $page, string $dest): bool {}

	/**
	 * Adds note to current page
	 * <p>Adds a note at a certain position on the page. Notes are like little rectangular sheets with text on it, which can be placed anywhere on a page. They are shown either folded or unfolded. If folded, the specified icon is used as a placeholder.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $llx <p>The x-coordinate of the lower left corner.</p>
	 * @param float $lly <p>The y-coordinate of the lower left corner.</p>
	 * @param float $urx <p>The x-coordinate of the upper right corner.</p>
	 * @param float $ury <p>The y-coordinate of the upper right corner.</p>
	 * @param string $contents <p>The text of the note.</p>
	 * @param string $title <p>The title of the note as displayed in the header of the note.</p>
	 * @param string $icon <p>The icon shown if the note is folded. This parameter can be set to <code>comment</code>, <code>insert</code>, <code>note</code>, <code>paragraph</code>, <code>newparagraph</code>, <code>key</code>, or <code>help</code>.</p>
	 * @param int $open <p>If <code>open</code> is unequal to zero the note will be shown unfolded after opening the document with a pdf viewer.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-add-note.php
	 * @see ps_add_pdflink(), ps_add_launchlink(), ps_add_locallink(), ps_add_weblink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_note($psdoc, float $llx, float $lly, float $urx, float $ury, string $contents, string $title, string $icon, int $open): bool {}

	/**
	 * Adds link to a page in a second pdf document
	 * <p>Places a hyperlink at the given position pointing to a second pdf document. Clicking on the link will branch to the document at the given page. The first page in a document has number 1.</p><p>The hyperlink's source position is a rectangle with its lower left corner at (<code>llx</code>, <code>lly</code>) and its upper right corner at (<code>urx</code>, <code>ury</code>). The rectangle has by default a thin blue border.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $llx <p>The x-coordinate of the lower left corner.</p>
	 * @param float $lly <p>The y-coordinate of the lower left corner.</p>
	 * @param float $urx <p>The x-coordinate of the upper right corner.</p>
	 * @param float $ury <p>The y-coordinate of the upper right corner.</p>
	 * @param string $filename <p>The name of the pdf document to be opened when clicking on this link.</p>
	 * @param int $page <p>The page number of the destination pdf document</p>
	 * @param string $dest <p>The parameter <code>dest</code> determines how the document is being viewed. It can be <code>fitpage</code>, <code>fitwidth</code>, <code>fitheight</code>, or <code>fitbbox</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-add-pdflink.php
	 * @see ps_add_launchlink(), ps_add_locallink(), ps_add_weblink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_pdflink($psdoc, float $llx, float $lly, float $urx, float $ury, string $filename, int $page, string $dest): bool {}

	/**
	 * Adds link to a web location
	 * <p>Places a hyperlink at the given position pointing to a web page. The hyperlink's source position is a rectangle with its lower left corner at (<code>llx</code>, <code>lly</code>) and its upper right corner at (<code>urx</code>, <code>ury</code>). The rectangle has by default a thin blue border.</p><p>The note will not be visible if the document is printed or viewed but it will show up if the document is converted to pdf by either Acrobat Distiller&trade; or Ghostview.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $llx <p>The x-coordinate of the lower left corner.</p>
	 * @param float $lly <p>The y-coordinate of the lower left corner.</p>
	 * @param float $urx <p>The x-coordinate of the upper right corner.</p>
	 * @param float $ury <p>The y-coordinate of the upper right corner.</p>
	 * @param string $url <p>The url of the hyperlink to be opened when clicking on this link, e.g. <code>http://www.php.net</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-add-weblink.php
	 * @see ps_add_launchlink(), ps_add_locallink(), ps_add_pdflink()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_add_weblink($psdoc, float $llx, float $lly, float $urx, float $ury, string $url): bool {}

	/**
	 * Draws an arc counterclockwise
	 * <p>Draws a portion of a circle with at middle point at (<code>x</code>, <code>y</code>). The arc starts at an angle of <code>alpha</code> and ends at an angle of <code>beta</code>. It is drawn counterclockwise (use <code>ps_arcn()</code> to draw clockwise). The subpath added to the current path starts on the arc at angle <code>alpha</code> and ends on the arc at angle <code>beta</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>The x-coordinate of the circle's middle point.</p>
	 * @param float $y <p>The y-coordinate of the circle's middle point.</p>
	 * @param float $radius <p>The radius of the circle</p>
	 * @param float $alpha <p>The start angle given in degrees.</p>
	 * @param float $beta <p>The end angle given in degrees.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-arc.php
	 * @see ps_arcn()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_arc($psdoc, float $x, float $y, float $radius, float $alpha, float $beta): bool {}

	/**
	 * Draws an arc clockwise
	 * <p>Draws a portion of a circle with at middle point at (<code>x</code>, <code>y</code>). The arc starts at an angle of <code>alpha</code> and ends at an angle of <code>beta</code>. It is drawn clockwise (use <code>ps_arc()</code> to draw counterclockwise). The subpath added to the current path starts on the arc at angle <code>beta</code> and ends on the arc at angle <code>alpha</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>The x-coordinate of the circle's middle point.</p>
	 * @param float $y <p>The y-coordinate of the circle's middle point.</p>
	 * @param float $radius <p>The radius of the circle</p>
	 * @param float $alpha <p>The starting angle given in degrees.</p>
	 * @param float $beta <p>The end angle given in degrees.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-arcn.php
	 * @see ps_arc()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_arcn($psdoc, float $x, float $y, float $radius, float $alpha, float $beta): bool {}

	/**
	 * Start a new page
	 * <p>Starts a new page. Although the parameters <code>width</code> and <code>height</code> imply a different page size for each page, this is not possible in PostScript. The first call of <b>ps_begin_page()</b> will set the page size for the whole document. Consecutive calls will have no effect, except for creating a new page. The situation is different if you intent to convert the PostScript document into PDF. This function places pdfmarks into the document which can set the size for each page indiviually. The resulting PDF document will have different page sizes.</p><p>Though PostScript does not know different page sizes, pslib places a bounding box for each page into the document. This size is evaluated by some PostScript viewers and will have precedence over the BoundingBox in the Header of the document. This can lead to unexpected results when you set a BoundingBox whose lower left corner is not (0, 0), because the bounding box of the page will always have a lower left corner (0, 0) and overwrites the global setting.</p><p>Each page is encapsulated into save/restore. This means, that most of the settings made on one page will not be retained on the next page.</p><p>If there is up to the first call of <b>ps_begin_page()</b> no call of <code>ps_findfont()</code>, then the header of the PostScript document will be output and the bounding box will be set to the size of the first page. The lower left corner of the bounding box is set to (0, 0). If <code>ps_findfont()</code> was called before, then the header has been output already, and the document will not have a valid bounding box. In order to prevent this, one should call <code>ps_set_info()</code> to set the info field <code>BoundingBox</code> and possibly <code>Orientation</code> before any <code>ps_findfont()</code> or <b>ps_begin_page()</b> calls.</p><p><b>Note</b>:</p><p>Up to version 0.2.6 of pslib, this function will always overwrite the BoundingBox and Orientation, if it has been set before with <code>ps_set_info()</code> and <code>ps_findfont()</code> has not been called before.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $width <p>The width of the page in pixel, e.g. 596 for A4 format.</p>
	 * @param float $height <p>The height of the page in pixel, e.g. 842 for A4 format.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-begin-page.php
	 * @see ps_end_page(), ps_findfont(), ps_set_info()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_begin_page($psdoc, float $width, float $height): bool {}

	/**
	 * Start a new pattern
	 * <p>Starts a new pattern. A pattern is like a page containing e.g. a drawing which can be used for filling areas. It is used like a color by calling <code>ps_setcolor()</code> and setting the color space to <code>pattern</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $width <p>The width of the pattern in pixel.</p>
	 * @param float $height <p>The height of the pattern in pixel.</p>
	 * @param float $xstep
	 * @param float $ystep
	 * @param int $painttype <p>Must be 1 or 2.</p>
	 * @return int|false <p>The identifier of the pattern or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-begin-pattern.php
	 * @see ps_end_pattern(), ps_setcolor(), ps_shading_pattern()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_begin_pattern($psdoc, float $width, float $height, float $xstep, float $ystep, int $painttype) {}

	/**
	 * Start a new template
	 * <p>Starts a new template. A template is called a form in the postscript language. It is created similar to a pattern but used like an image. Templates are often used for drawings which are placed several times through out the document, e.g. like a company logo. All drawing functions may be used within a template. The template will not be drawn until it is placed by <code>ps_place_image()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $width <p>The width of the template in pixel.</p>
	 * @param float $height <p>The height of the template in pixel.</p>
	 * @return int <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-begin-template.php
	 * @see ps_end_template()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_begin_template($psdoc, float $width, float $height): int {}

	/**
	 * Draws a circle
	 * <p>Draws a circle with its middle point at (<code>x</code>, <code>y</code>). The circle starts and ends at position (<code>x</code>+<code>radius</code>, <code>y</code>). If this function is called outside a path it will start a new path. If it is called within a path it will add the circle as a subpath. If the last drawing operation does not end in point (<code>x</code>+<code>radius</code>, <code>y</code>) then there will be a gap in the path.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>The x-coordinate of the circle's middle point.</p>
	 * @param float $y <p>The y-coordinate of the circle's middle point.</p>
	 * @param float $radius <p>The radius of the circle</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-circle.php
	 * @see ps_arc(), ps_arcn()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_circle($psdoc, float $x, float $y, float $radius): bool {}

	/**
	 * Clips drawing to current path
	 * <p>Takes the current path and uses it to define the border of a clipping area. Everything drawn outside of that area will not be visible.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-clip.php
	 * @see ps_closepath()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_clip($psdoc): bool {}

	/**
	 * Closes a PostScript document
	 * <p>Closes the PostScript document.</p><p>This function writes the trailer of the PostScript document. It also writes the bookmark tree. <b>ps_close()</b> does not free any resources, which is done by <code>ps_delete()</code>.</p><p>This function is also called by <code>ps_delete()</code> if it has not been called before.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-close.php
	 * @see ps_open_file(), ps_delete()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_close($psdoc): bool {}

	/**
	 * Closes image and frees memory
	 * <p>Closes an image and frees its resources. Once an image is closed it cannot be used anymore.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $imageid <p>Resource identifier of the image as returned by <code>ps_open_image()</code> or <code>ps_open_image_file()</code>.</p>
	 * @return void|false <p>Returns <b><code>NULL</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-close-image.php
	 * @see ps_open_image(), ps_open_image_file()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_close_image($psdoc, int $imageid) {}

	/**
	 * Closes path
	 * <p>Connects the last point with the first point of a path. The resulting path can be used for stroking, filling, clipping, etc..</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-closepath.php
	 * @see ps_clip(), ps_closepath_stroke()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_closepath($psdoc): bool {}

	/**
	 * Closes and strokes path
	 * <p>Connects the last point with first point of a path and draws the resulting closed line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-closepath-stroke.php
	 * @see ps_closepath()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_closepath_stroke($psdoc): bool {}

	/**
	 * Continue text in next line
	 * <p>Output a text one line below the last line. The line spacing is taken from the value "leading" which must be set with <code>ps_set_value()</code>. The actual position of the text is determined by the values "textx" and "texty" which can be requested with <code>ps_get_value()</code></p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text to output.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-continue-text.php
	 * @see ps_show(), ps_show_xy(), ps_show_boxed()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_continue_text($psdoc, string $text): bool {}

	/**
	 * Draws a curve
	 * <p>Add a section of a cubic B&eacute;zier curve described by the three given control points to the current path.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x1 <p>x-coordinate of first control point.</p>
	 * @param float $y1 <p>y-coordinate of first control point.</p>
	 * @param float $x2 <p>x-coordinate of second control point.</p>
	 * @param float $y2 <p>y-coordinate of second control point.</p>
	 * @param float $x3 <p>x-coordinate of third control point.</p>
	 * @param float $y3 <p>y-coordinate of third control point.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-curveto.php
	 * @see ps_lineto()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_curveto($psdoc, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): bool {}

	/**
	 * Deletes all resources of a PostScript document
	 * <p>Mainly frees memory used by the document. Also closes a file, if it was not closed before with <code>ps_close()</code>. You should in any case close the file with <code>ps_close()</code> before, because <code>ps_close()</code> not just closes the file but also outputs a trailor containing PostScript comments like the number of pages in the document and adding the bookmark hierarchy.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-delete.php
	 * @see ps_close()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_delete($psdoc): bool {}

	/**
	 * End a page
	 * <p>Ends a page which was started with <code>ps_begin_page()</code>. Ending a page will leave the current drawing context, which e.g. requires to reload fonts if they were loading within the page, and to set many other drawing parameters like the line width, or color..</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-end-page.php
	 * @see ps_begin_page()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_end_page($psdoc): bool {}

	/**
	 * End a pattern
	 * <p>Ends a pattern which was started with <code>ps_begin_pattern()</code>. Once a pattern has been ended, it can be used like a color to fill areas.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-end-pattern.php
	 * @see ps_begin_pattern()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_end_pattern($psdoc): bool {}

	/**
	 * End a template
	 * <p>Ends a template which was started with <code>ps_begin_template()</code>. Once a template has been ended, it can be used like an image.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-end-template.php
	 * @see ps_begin_template()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_end_template($psdoc): bool {}

	/**
	 * Fills the current path
	 * <p>Fills the path constructed with previously called drawing functions like <code>ps_lineto()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-fill.php
	 * @see ps_fill_stroke(), ps_stroke()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_fill($psdoc): bool {}

	/**
	 * Fills and strokes the current path
	 * <p>Fills and draws the path constructed with previously called drawing functions like <code>ps_lineto()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-fill-stroke.php
	 * @see ps_fill(), ps_stroke()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_fill_stroke($psdoc): bool {}

	/**
	 * Loads a font
	 * <p>Loads a font for later use. Before text is output with a loaded font it must be set with <code>ps_setfont()</code>. This function needs the adobe font metric file in order to calculate the space used up by the characters. A font which is loaded within a page will only be available on that page. Fonts which are to be used in the complete document have to be loaded before the first call of <code>ps_begin_page()</code>. Calling <b>ps_findfont()</b> between pages will make that font available for all following pages.</p><p>The name of the afm file must be <code>fontname</code><code>.afm</code>. If the font shall be embedded the file <code>fontname</code><code>.pfb</code> containing the font outline must be present as well.</p><p>Calling <b>ps_findfont()</b> before the first page requires to output the postscript header which includes the BoundingBox for the whole document. Usually the BoundingBox is set with the first call of <code>ps_begin_page()</code> which now comes after <b>ps_findfont()</b>. Consequently the BoundingBox has not been set and a warning will be issued when <b>ps_findfont()</b> is called. In order to prevent this situation, one should call <code>ps_set_parameter()</code> to set the BoundingBox before <b>ps_findfont()</b> is called.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $fontname <p>The name of the font.</p>
	 * @param string $encoding <p><b>ps_findfont()</b> will try to load the file passed in the parameter <code>encoding</code>. Encoding files are of the same syntax as those used by <b>dvips(1)</b>. They contain a font encoding vector (which is currently not used but must be present) and a list of extra ligatures to extend the list of ligatures derived from the afm file.</p> <p><code>encoding</code> can be <b><code>NULL</code></b> or the empty string if the default encoding (TeXBase1) shall be used.</p> <p>If the encoding is set to <code>builtin</code> then there will be no reencoding and the font specific encoding will be used. This is very useful with symbol fonts.</p>
	 * @param bool $embed <p>If set to a value &gt;0 the font will be embedded into the document. This requires the font outline (.pfb file) to be present.</p>
	 * @return int <p>Returns the identifier of the font or zero in case of an error. The identifier is a positive number.</p>
	 * @link http://php.net/manual/en/function.ps-findfont.php
	 * @see ps_begin_page(), ps_setfont()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_findfont($psdoc, string $fontname, string $encoding, bool $embed = FALSE): int {}

	/**
	 * Fetches the full buffer containig the generated PS data
	 * <p>This function is not implemented yet. It will always return an empty string. The idea for a later implementation is to write the contents of the postscript file into an internal buffer if in memory creation is requested, and retrieve the buffer content with this function. Currently, documents created in memory are send to the browser without buffering.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.ps-get-buffer.php
	 * @see ps_open_file()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_get_buffer($psdoc): string {}

	/**
	 * Gets certain parameters
	 * <p>Gets several parameters which were directly set by <code>ps_set_parameter()</code> or indirectly by one of the other functions. Parameters are by definition string values. This function cannot be used to retrieve resources which were also set by <code>ps_set_parameter()</code>.</p><p>The parameter <code>name</code> can have the following values.</p><p></p><p>The name of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The encoding of the currently active font.</p><p>The version of the underlying pslib library in the format &lt;major&gt;.&lt;minor&gt;.&lt;subminor&gt;</p><p>The current drawing scope. Can be object, document, null, page, pattern, path, template, prolog, font, glyph.</p><p>The character which dissolves a ligature. If your are using a font which contains the ligature `ff' and `|' is the char to dissolve the ligature, then `f|f' will result in two `f' instead of the ligature `ff'.</p><p>The encoding used for encoding images. Can be either <code>hex</code> or <code>85</code>. hex encoding uses two bytes in the postscript file each byte in the image. 85 stand for Ascii85 encoding.</p><p>Set to <code>paragraph</code> if lines are numbered within a paragraph or <code>box</code> if they are numbered within the surrounding box.</p><p>Only used if text is output with <code>ps_show_boxed()</code>. If set to <b><code>TRUE</code></b> a carriage return will add a line break.</p><p>Only used if text is output with <code>ps_show_boxed()</code>. If set to <b><code>TRUE</code></b> a carriage return will start a new paragraph.</p><p>Only used if text is output with <code>ps_show_boxed()</code>. If set to <b><code>TRUE</code></b> the paragraph will be hyphenated if a hypen dictionary is set and exists.</p><p>Filename of the dictionary used for hyphenation pattern.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $name <p>Name of the parameter.</p>
	 * @param float $modifier <p>An identifier needed if a parameter of a resource is requested, e.g. the size of an image. In such a case the resource id is passed.</p>
	 * @return string|false <p>Returns the value of the parameter or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-get-parameter.php
	 * @see ps_set_parameter()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_get_parameter($psdoc, string $name, float $modifier = NULL) {}

	/**
	 * Gets certain values
	 * <p>Gets several values which were set by <code>ps_set_value()</code>. Values are by definition float values.</p><p>The parameter <code>name</code> can have the following values.</p><p></p><p>The size of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The currently active font itself.</p><p>The width of the image whose id is passed in the parameter <code>modifier</code>.</p><p>The height of the image whose id is passed in the parameter <code>modifier</code>.</p><p>The height of a capital M in the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The ascender of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The descender of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The italicangle of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The underlineposition of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The underlinethickness of the currently active font or the font whose identifier is passed in parameter <code>modifier</code>.</p><p>The current x-position for text output.</p><p>The current y-position for text output.</p><p>The current mode for text rendering.</p><p>The space by which text is risen above the base line.</p><p>The distance between text lines in points.</p><p>The space between words as a multiple of the width of a space char.</p><p>The space between chars. If charspacing is != 0.0 ligatures will always be dissolved.</p><p>Minimum number of chars hyphenated at the end of a word.</p><p>Indention of the first n line in a paragraph.</p><p>Number of line in a paragraph to indent if parindent != 0.0.</p><p>Distance between paragraphs.</p><p>Overall space in front of each line for the line number.</p><p>Space between the line and the line number.</p><p>The major version number of pslib.</p><p>The minor version number of pslib.</p><p>The subminor version number of pslib.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $name <p>Name of the value.</p>
	 * @param float $modifier <p>The parameter <code>modifier</code> specifies the resource for which the value is to be retrieved. This can be the id of a font or an image.</p>
	 * @return float <p>Returns the value of the parameter or <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ps-get-value.php
	 * @see ps_set_value()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_get_value($psdoc, string $name, float $modifier = NULL): float {}

	/**
	 * Hyphenates a word
	 * <p>Hyphenates the passed word. <b>ps_hyphenate()</b> evaluates the value hyphenminchars (set by <code>ps_set_value()</code>) and the parameter hyphendict (set by <code>ps_set_parameter()</code>). hyphendict must be set before calling this function.</p><p>This function requires the locale category LC_CTYPE to be set properly. This is done when the extension is initialized by using the environment variables. On Unix systems read the man page of locale for more information.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p><code>text</code> should not contain any non alpha characters. Possible positions for breaks are returned in an array of interger numbers. Each number is the position of the char in <code>text</code> after which a hyphenation can take place.</p>
	 * @return array|false <p>An array of integers indicating the position of possible breaks in the text or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-hyphenate.php
	 * @see ps_show_boxed()
	 * @since PECL ps >= 1.1.1
	 */
	function ps_hyphenate($psdoc, string $text) {}

	/**
	 * Reads an external file with raw PostScript code
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $file
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-include-file.php
	 * @since PECL ps >= 1.3.4
	 */
	function ps_include_file($psdoc, string $file): bool {}

	/**
	 * Draws a line
	 * <p>Adds a straight line from the current point to the given coordinates to the current path. Use <code>ps_moveto()</code> to set the starting point of the line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>x-coordinate of the end point of the line.</p>
	 * @param float $y <p>y-coordinate of the end point of the line.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-lineto.php
	 * @see ps_moveto()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_lineto($psdoc, float $x, float $y): bool {}

	/**
	 * Create spot color
	 * <p>Creates a spot color from the current fill color. The fill color must be defined in rgb, cmyk or gray colorspace. The spot color name can be an arbitrary name. A spot color can be set as any color with <code>ps_setcolor()</code>. When the document is not printed but displayed by an postscript viewer the given color in the specified color space is use.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $name <p>Name of the spot color, e.g. Pantone 5565.</p>
	 * @param int $reserved
	 * @return int <p>The id of the new spot color or 0 in case of an error.</p>
	 * @link http://php.net/manual/en/function.ps-makespotcolor.php
	 * @see ps_setcolor()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_makespotcolor($psdoc, string $name, int $reserved = 0): int {}

	/**
	 * Sets current point
	 * <p>Sets the current point to new coordinates. If this is the first call of <b>ps_moveto()</b> after a previous path has been ended then it will start a new path. If this function is called in the middle of a path it will just set the current point and start a subpath.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>x-coordinate of the point to move to.</p>
	 * @param float $y <p>y-coordinate of the point to move to.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-moveto.php
	 * @see ps_lineto()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_moveto($psdoc, float $x, float $y): bool {}

	/**
	 * Creates a new PostScript document object
	 * <p>Creates a new document instance. It does not create the file on disk or in memory, it just sets up everything. <b>ps_new()</b> is usually followed by a call of <code>ps_open_file()</code> to actually create the postscript document.</p>
	 * @return resource|false <p>Resource of PostScript document or <b><code>FALSE</code></b> on failure. The return value is passed to all other functions as the first argument.</p>
	 * @link http://php.net/manual/en/function.ps-new.php
	 * @see ps_delete()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_new() {}

	/**
	 * Opens a file for output
	 * <p>Creates a new file on disk and writes the PostScript document into it. The file will be closed when <code>ps_close()</code> is called.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $filename <p>The name of the postscript file. If <code>filename</code> is not passed the document will be created in memory and all output will go straight to the browser.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-open-file.php
	 * @see ps_close()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_open_file($psdoc, string $filename = NULL): bool {}

	/**
	 * Reads an image for later placement
	 * <p>Reads an image which is already available in memory. The parameter <code>source</code> is currently not evaluated and assumed to be <code>memory</code>. The image data is a sequence of pixels starting in th upper left corner and ending in the lower right corner. Each pixel consists of <code>components</code> color components, and each component has <code>bpc</code> bits.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $type <p>The type of the image. Possible values are <code>png</code>, <code>jpeg</code>, or <code>eps</code>.</p>
	 * @param string $source <p>Not used.</p>
	 * @param string $data <p>The image data.</p>
	 * @param int $lenght
	 * @param int $width <p>The width of the image.</p>
	 * @param int $height <p>The height of the image.</p>
	 * @param int $components <p>The number of components for each pixel. This can be 1 (gray scale images), 3 (rgb images), or 4 (cmyk, rgba images).</p>
	 * @param int $bpc <p>Number of bits per component (quite often 8).</p>
	 * @param string $params
	 * @return int <p>Returns identifier of image or zero in case of an error. The identifier is a positive number greater than 0.</p>
	 * @link http://php.net/manual/en/function.ps-open-image.php
	 * @see ps_open_image_file(), ps_place_image(), ps_close_image()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_open_image($psdoc, string $type, string $source, string $data, int $lenght, int $width, int $height, int $components, int $bpc, string $params): int {}

	/**
	 * Opens image from file
	 * <p>Loads an image for later use.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $type <p>The type of the image. Possible values are <code>png</code>, <code>jpeg</code>, or <code>eps</code>.</p>
	 * @param string $filename <p>The name of the file containing the image data.</p>
	 * @param string $stringparam <p>Not used.</p>
	 * @param int $intparam <p>Not used.</p>
	 * @return int <p>Returns identifier of image or zero in case of an error. The identifier is a positive number greater than 0.</p>
	 * @link http://php.net/manual/en/function.ps-open-image-file.php
	 * @see ps_open_image(), ps_place_image(), ps_close_image()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_open_image_file($psdoc, string $type, string $filename, string $stringparam = NULL, int $intparam = 0): int {}

	/**
	 * Takes an GD image and returns an image for placement in a PS document
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $gd
	 * @return int
	 * @link http://php.net/manual/en/function.ps-open-memory-image.php
	 * @since PECL ps >= 1.1.0
	 */
	function ps_open_memory_image($psdoc, int $gd): int {}

	/**
	 * Places image on the page
	 * <p>Places a formerly loaded image on the page. The image can be scaled. If the image shall be rotated as well, you will have to rotate the coordinate system before with <code>ps_rotate()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $imageid <p>The resource identifier of the image as returned by <code>ps_open_image()</code> or <code>ps_open_image_file()</code>.</p>
	 * @param float $x <p>x-coordinate of the lower left corner of the image.</p>
	 * @param float $y <p>y-coordinate of the lower left corner of the image.</p>
	 * @param float $scale <p>The scaling factor for the image. A scale of 1.0 will result in a resolution of 72 dpi, because each pixel is equivalent to 1 point.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-place-image.php
	 * @see ps_open_image(), ps_open_image_file()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_place_image($psdoc, int $imageid, float $x, float $y, float $scale): bool {}

	/**
	 * Draws a rectangle
	 * <p>Draws a rectangle with its lower left corner at (<code>x</code>, <code>y</code>). The rectangle starts and ends in its lower left corner. If this function is called outside a path it will start a new path. If it is called within a path it will add the rectangle as a subpath. If the last drawing operation does not end in the lower left corner then there will be a gap in the path.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>x-coordinate of the lower left corner of the rectangle.</p>
	 * @param float $y <p>y-coordinate of the lower left corner of the rectangle.</p>
	 * @param float $width <p>The width of the image.</p>
	 * @param float $height <p>The height of the image.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-rect.php
	 * @see ps_arc(), ps_lineto()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_rect($psdoc, float $x, float $y, float $width, float $height): bool {}

	/**
	 * Restore previously save context
	 * <p>Restores a previously saved graphics context. Any call of <code>ps_save()</code> must be accompanied by a call to <b>ps_restore()</b>. All coordinate transformations, line style settings, color settings, etc. are being restored to the state before the call of <code>ps_save()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-restore.php
	 * @see ps_save()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_restore($psdoc): bool {}

	/**
	 * Sets rotation factor
	 * <p>Sets the rotation of the coordinate system.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $rot <p>Angle of rotation in degree.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-rotate.php
	 * @see ps_scale(), ps_translate()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_rotate($psdoc, float $rot): bool {}

	/**
	 * Save current context
	 * <p>Saves the current graphics context, containing colors, translation and rotation settings and some more. A saved context can be restored with <code>ps_restore()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-save.php
	 * @see ps_restore()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_save($psdoc): bool {}

	/**
	 * Sets scaling factor
	 * <p>Sets horizontal and vertical scaling of the coordinate system.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>Scaling factor in horizontal direction.</p>
	 * @param float $y <p>Scaling factor in vertical direction.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-scale.php
	 * @see ps_rotate(), ps_translate()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_scale($psdoc, float $x, float $y): bool {}

	/**
	 * Sets color of border for annotations
	 * <p>Links added with one of the functions <code>ps_add_weblink()</code>, <code>ps_add_pdflink()</code>, etc. will be displayed with a surounded rectangle when the postscript document is converted to pdf and viewed in a pdf viewer. This rectangle is not visible in the postscript document. This function sets the color of the rectangle's border line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $red <p>The red component of the border color.</p>
	 * @param float $green <p>The green component of the border color.</p>
	 * @param float $blue <p>The blue component of the border color.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-border-color.php
	 * @see ps_set_border_dash(), ps_set_border_style()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_border_color($psdoc, float $red, float $green, float $blue): bool {}

	/**
	 * Sets length of dashes for border of annotations
	 * <p>Links added with one of the functions <code>ps_add_weblink()</code>, <code>ps_add_pdflink()</code>, etc. will be displayed with a surounded rectangle when the postscript document is converted to pdf and viewed in a pdf viewer. This rectangle is not visible in the postscript document. This function sets the length of the black and white portion of a dashed border line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $black <p>The length of the dash.</p>
	 * @param float $white <p>The length of the gap between dashes.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-border-dash.php
	 * @see ps_set_border_color(), ps_set_border_style()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_border_dash($psdoc, float $black, float $white): bool {}

	/**
	 * Sets border style of annotations
	 * <p>Links added with one of the functions <code>ps_add_weblink()</code>, <code>ps_add_pdflink()</code>, etc. will be displayed with a surounded rectangle when the postscript document is converted to pdf and viewed in a pdf viewer. This rectangle is not visible in the postscript document. This function sets the appearance and width of the border line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $style <p><code>style</code> can be <code>solid</code> or <code>dashed</code>.</p>
	 * @param float $width <p>The line width of the border.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-border-style.php
	 * @see ps_set_border_color(), ps_set_border_dash()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_border_style($psdoc, string $style, float $width): bool {}

	/**
	 * Sets information fields of document
	 * <p>Sets certain information fields of the document. This fields will be shown as a comment in the header of the PostScript file. If the document is converted to pdf this fields will also be used for the document information.</p><p>The <code>BoundingBox</code> is usually set to the value given to the first page. This only works if <code>ps_findfont()</code> has not been called before. In such cases the BoundingBox would be left unset unless you set it explicitly with this function.</p><p>This function will have no effect anymore when the header of the postscript file has been already written. It must be called before the first page or the first call of <code>ps_findfont()</code>.</p>
	 * @param resource $p
	 * @param string $key <p>The name of the information field to set. The values which can be set are <code>Keywords</code>, <code>Subject</code>, <code>Title</code>, <code>Creator</code>, <code>Author</code>, <code>BoundingBox</code>, and <code>Orientation</code>. Be aware that some of them has a meaning to PostScript viewers.</p>
	 * @param string $val
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-info.php
	 * @see ps_findfont(), ps_begin_page()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_info($p, string $key, string $val): bool {}

	/**
	 * Sets certain parameters
	 * <p>Sets several parameters which are used by many functions. Parameters are by definition string values.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $name <p>For a list of possible names see <code>ps_get_parameter()</code>.</p>
	 * @param string $value <p>The value of the parameter.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-parameter.php
	 * @see ps_set_value()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_parameter($psdoc, string $name, string $value): bool {}

	/**
	 * Sets position for text output
	 * <p>Set the position for the next text output. You may alternatively set the x and y value separately by calling <code>ps_set_value()</code> and choosing <code>textx</code> respectively <code>texty</code> as the value name.</p><p>If you want to output text at a certain position it is more convenient to use <code>ps_show_xy()</code> instead of setting the text position and calling <code>ps_show()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>x-coordinate of the new text position.</p>
	 * @param float $y <p>y-coordinate of the new text position.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-text-pos.php
	 * @see ps_set_value(), ps_show()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_text_pos($psdoc, float $x, float $y): bool {}

	/**
	 * Sets certain values
	 * <p>Sets several values which are used by many functions. Parameters are by definition float values.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $name <p>The <code>name</code> can be one of the following:</p>  textrendering  <p>The way how text is shown.</p>   textx  <p>The x coordinate for text output.</p>   texty  <p>The y coordinate for text output.</p>   wordspacing  <p>The distance between words relative to the width of a space.</p>   leading  <p>The distance between lines in pixels.</p>
	 * @param float $value <p>The value of the parameter.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-set-value.php
	 * @see ps_get_value(), ps_set_parameter()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_set_value($psdoc, string $name, float $value): bool {}

	/**
	 * Sets current color
	 * <p>Sets the color for drawing, filling, or both.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $type <p>The parameter <code>type</code> can be <code>both</code>, <code>fill</code>, or <code>fillstroke</code>.</p>
	 * @param string $colorspace <p>The colorspace should be one of <code>gray</code>, <code>rgb</code>, <code>cmyk</code>, <code>spot</code>, <code>pattern</code>. Depending on the colorspace either only the first, the first three or all parameters will be used.</p>
	 * @param float $c1 <p>Depending on the colorspace this is either the red component (rgb), the cyan component (cmyk), the gray value (gray), the identifier of the spot color or the identifier of the pattern.</p>
	 * @param float $c2 <p>Depending on the colorspace this is either the green component (rgb), the magenta component (cmyk).</p>
	 * @param float $c3 <p>Depending on the colorspace this is either the blue component (rgb), the yellow component (cmyk).</p>
	 * @param float $c4 <p>This must only be set in cmyk colorspace and specifies the black component.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setcolor.php
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setcolor($psdoc, string $type, string $colorspace, float $c1, float $c2, float $c3, float $c4): bool {}

	/**
	 * Sets appearance of a dashed line
	 * <p>Sets the length of the black and white portions of a dashed line.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $on <p>The length of the dash.</p>
	 * @param float $off <p>The length of the gap between dashes.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setdash.php
	 * @see ps_setpolydash()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setdash($psdoc, float $on, float $off): bool {}

	/**
	 * Sets flatness
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $value <p>The <code>value</code> must be between 0.2 and 1.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setflat.php
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setflat($psdoc, float $value): bool {}

	/**
	 * Sets font to use for following output
	 * <p>Sets a font, which has to be loaded before with <code>ps_findfont()</code>. Outputting text without setting a font results in an error.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $fontid <p>The font identifier as returned by <code>ps_findfont()</code>.</p>
	 * @param float $size <p>The size of the font.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setfont.php
	 * @see ps_findfont(), ps_set_text_pos()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setfont($psdoc, int $fontid, float $size): bool {}

	/**
	 * Sets gray value
	 * <p>Sets the gray value for all following drawing operations.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $gray <p>The value must be between 0 (white) and 1 (black).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setgray.php
	 * @see ps_setcolor()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setgray($psdoc, float $gray): bool {}

	/**
	 * Sets appearance of line ends
	 * <p>Sets how line ends look like.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $type <p>The type of line ends. Possible values are <code>PS_LINECAP_BUTT</code>, <code>PS_LINECAP_ROUND</code>, or <code>PS_LINECAP_SQUARED</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setlinecap.php
	 * @see ps_setlinejoin(), ps_setlinewidth(), ps_setmiterlimit()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setlinecap($psdoc, int $type): bool {}

	/**
	 * Sets how contected lines are joined
	 * <p>Sets how lines are joined.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $type <p>The way lines are joined. Possible values are <code>PS_LINEJOIN_MITER</code>, <code>PS_LINEJOIN_ROUND</code>, or <code>PS_LINEJOIN_BEVEL</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setlinejoin.php
	 * @see ps_setlinecap(), ps_setlinewidth(), ps_setmiterlimit()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setlinejoin($psdoc, int $type): bool {}

	/**
	 * Sets width of a line
	 * <p>Sets the line width for all following drawing operations.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $width <p>The width of lines in points.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setlinewidth.php
	 * @see ps_setlinecap(), ps_setlinejoin(), ps_setmiterlimit()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setlinewidth($psdoc, float $width): bool {}

	/**
	 * Sets the miter limit
	 * <p>If two lines join in a small angle and the line join is set to <code>PS_LINEJOIN_MITER</code>, then the resulting spike will be very long. The miter limit is the maximum ratio of the miter length (the length of the spike) and the line width.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $value <p>The maximum ratio between the miter length and the line width. Larger values (&gt; 10) will result in very long spikes when two lines meet in a small angle. Keep the default unless you know what you are doing.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setmiterlimit.php
	 * @see ps_setlinecap(), ps_setlinejoin(), ps_setlinewidth()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setmiterlimit($psdoc, float $value): bool {}

	/**
	 * Sets overprint mode
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $mode
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setoverprintmode.php
	 * @since PECL ps >= 1.3.0
	 */
	function ps_setoverprintmode($psdoc, int $mode): bool {}

	/**
	 * Sets appearance of a dashed line
	 * <p>Sets the length of the black and white portions of a dashed line. <b>ps_setpolydash()</b> is used to set more complicated dash patterns.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $arr <p><code>arr</code> is a list of length elements alternately for the black and white portion.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-setpolydash.php
	 * @see ps_setdash()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_setpolydash($psdoc, float $arr): bool {}

	/**
	 * Creates a shading for later use
	 * <p>Creates a shading, which can be used by <code>ps_shfill()</code> or <code>ps_shading_pattern()</code>.</p><p>The color of the shading can be in any color space except for <code>pattern</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $type <p>The type of shading can be either <code>radial</code> or <code>axial</code>. Each shading starts with the current fill color and ends with the given color values passed in the parameters <code>c1</code> to <code>c4</code> (see <code>ps_setcolor()</code> for their meaning).</p>
	 * @param float $x0
	 * @param float $y0
	 * @param float $x1
	 * @param float $y1
	 * @param float $c1
	 * @param float $c2
	 * @param float $c3
	 * @param float $c4
	 * @param string $optlist <p>If the shading is of type <code>radial</code> the <code>optlist</code> must also contain the parameters <code>r0</code> and <code>r1</code> with the radius of the start and end circle.</p>
	 * @return int|false <p>Returns the identifier of the pattern or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-shading.php
	 * @see ps_shading_pattern(), ps_shfill()
	 * @since PECL ps >= 1.3.0
	 */
	function ps_shading($psdoc, string $type, float $x0, float $y0, float $x1, float $y1, float $c1, float $c2, float $c3, float $c4, string $optlist) {}

	/**
	 * Creates a pattern based on a shading
	 * <p>Creates a pattern based on a shading, which has to be created before with <code>ps_shading()</code>. Shading patterns can be used like regular patterns.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $shadingid <p>The identifier of a shading previously created with <code>ps_shading()</code>.</p>
	 * @param string $optlist <p>This argument is not currently used.</p>
	 * @return int|false <p>The identifier of the pattern or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-shading-pattern.php
	 * @see ps_shading(), ps_shfill()
	 * @since PECL ps >= 1.3.0
	 */
	function ps_shading_pattern($psdoc, int $shadingid, string $optlist) {}

	/**
	 * Fills an area with a shading
	 * <p>Fills an area with a shading, which has to be created before with <code>ps_shading()</code>. This is an alternative way to creating a pattern from a shading <code>ps_shading_pattern()</code> and using the pattern as the filling color.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $shadingid <p>The identifier of a shading previously created with <code>ps_shading()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-shfill.php
	 * @see ps_shading(), ps_shading_pattern()
	 * @since PECL ps >= 1.3.0
	 */
	function ps_shfill($psdoc, int $shadingid): bool {}

	/**
	 * Output text
	 * <p>Output a text at the current text position. The text position can be set by storing the x and y coordinates into the values <code>textx</code> and <code>texty</code> with the function <code>ps_set_value()</code>. The function will issue an error if a font was not set before with <code>ps_setfont()</code>.</p><p><b>ps_show()</b> evaluates the following parameters and values as set by <code>ps_set_parameter()</code> and <code>ps_set_value()</code>.</p><p>Distance between two consecutive glyphs. If this value is unequal to zero then all ligatures will be resolved. Values less than zero are allowed.</p><p>Setting this parameter to "false" will turn off kerning. Kerning is turned on by default.</p><p>Setting this parameter to "false" will turn off the use of ligatures. Ligatures are turned on by default.</p><p>Setting this parameter to "true" will turn on underlining. Underlining is turned off by default.</p><p>Setting this parameter to "true" will turn on overlining. Overlining is turned off by default.</p><p>Setting this parameter to "true" will turn on striking out. Striking out is turned off by default.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text to be output.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-show.php
	 * @see ps_continue_text(), ps_show_xy(), ps_setfont()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_show($psdoc, string $text): bool {}

	/**
	 * Output a text at current position
	 * <p>Output text at the current position. Do not print more than <code>len</code> characters.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text to be output.</p>
	 * @param int $len <p>The maximum number of characters to print.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-show2.php
	 * @since PECL ps >= 1.1.0
	 */
	function ps_show2($psdoc, string $text, int $len): bool {}

	/**
	 * Output text in a box
	 * <p>Outputs a text in a given box. The lower left corner of the box is at (<code>left</code>, <code>bottom</code>). Line breaks will be inserted where needed. Multiple spaces are treated as one. Tabulators are treated as spaces.</p><p>The text will be hyphenated if the parameter <code>hyphenation</code> is set to <b><code>TRUE</code></b> and the parameter <code>hyphendict</code> contains a valid filename for a hyphenation file. The line spacing is taken from the value <code>leading</code>. Paragraphs can be separated by an empty line just like in TeX. If the value <code>parindent</code> is set to value &gt; 0.0 then the first n lines will be indented. The number n of lines is set by the parameter <code>numindentlines</code>. In order to prevent indenting of the first m paragraphs set the value <code>parindentskip</code> to a positive number.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text to be output into the given box.</p>
	 * @param float $left <p>x-coordinate of the lower left corner of the box.</p>
	 * @param float $bottom <p>y-coordinate of the lower left corner of the box.</p>
	 * @param float $width <p>Width of the box.</p>
	 * @param float $height <p>Height of the box.</p>
	 * @param string $hmode <p>The parameter <code>hmode</code> can be "justify", "fulljustify", "right", "left", or "center". The difference of "justify" and "fulljustify" just affects the last line of the box. In fulljustify mode the last line will be left and right justified unless this is also the last line of paragraph. In justify mode it will always be left justified.</p>
	 * @param string $feature
	 * @return int <p>Number of characters that could not be written.</p>
	 * @link http://php.net/manual/en/function.ps-show-boxed.php
	 * @see ps_continue_text()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_show_boxed($psdoc, string $text, float $left, float $bottom, float $width, float $height, string $hmode, string $feature = NULL): int {}

	/**
	 * Output text at given position
	 * <p>Output a text at the given text position.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text to be output.</p>
	 * @param float $x <p>x-coordinate of the lower left corner of the box surrounding the text.</p>
	 * @param float $y <p>y-coordinate of the lower left corner of the box surrounding the text.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-show-xy.php
	 * @see ps_continue_text(), ps_show()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_show_xy($psdoc, string $text, float $x, float $y): bool {}

	/**
	 * Output text at position
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $psdoc
	 * @param string $text
	 * @param int $len
	 * @param float $xcoor
	 * @param float $ycoor
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-show-xy2.php
	 * @since PECL ps >= 1.1.0
	 */
	function ps_show_xy2($psdoc, string $text, int $len, float $xcoor, float $ycoor): bool {}

	/**
	 * Gets geometry of a string
	 * <p>This function is similar to <code>ps_stringwidth()</code> but returns an array of dimensions containing the width, ascender, and descender of the text.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text for which the geometry is to be calculated.</p>
	 * @param int $fontid <p>The identifier of the font to be used. If not font is specified the current font will be used.</p>
	 * @param float $size <p>The size of the font. If no size is specified the current size is used.</p>
	 * @return array <p>An array of the dimensions of a string. The element 'width' contains the width of the string as returned by <code>ps_stringwidth()</code>. The element 'descender' contains the maximum descender and 'ascender' the maximum ascender of the string.</p>
	 * @link http://php.net/manual/en/function.ps-string-geometry.php
	 * @see ps_continue_text(), ps_stringwidth()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_string_geometry($psdoc, string $text, int $fontid = 0, float $size = 0.0): array {}

	/**
	 * Gets width of a string
	 * <p>Calculates the width of a string in points if it was output in the given font and font size. This function needs an Adobe font metrics file to calculate the precise width. If kerning is turned on, it will be taken into account.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param string $text <p>The text for which the width is to be calculated.</p>
	 * @param int $fontid <p>The identifier of the font to be used. If not font is specified the current font will be used.</p>
	 * @param float $size <p>The size of the font. If no size is specified the current size is used.</p>
	 * @return float <p>Width of a string in points.</p>
	 * @link http://php.net/manual/en/function.ps-stringwidth.php
	 * @see ps_string_geometry()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_stringwidth($psdoc, string $text, int $fontid = 0, float $size = 0.0): float {}

	/**
	 * Draws the current path
	 * <p>Draws the path constructed with previously called drawing functions like <code>ps_lineto()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-stroke.php
	 * @see ps_closepath_stroke(), ps_fill(), ps_fill_stroke()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_stroke($psdoc): bool {}

	/**
	 * Output a glyph
	 * <p>Output the glyph at position <code>ord</code> in the font encoding vector of the current font. The font encoding for a font can be set when loading the font with <code>ps_findfont()</code>.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $ord <p>The position of the glyph in the font encoding vector.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-symbol.php
	 * @see ps_symbol_name(), ps_symbol_width()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_symbol($psdoc, int $ord): bool {}

	/**
	 * Gets name of a glyph
	 * <p>This function needs an Adobe font metrics file to know which glyphs are available.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $ord <p>The parameter <code>ord</code> is the position of the glyph in the font encoding vector.</p>
	 * @param int $fontid <p>The identifier of the font to be used. If not font is specified the current font will be used.</p>
	 * @return string <p>The name of a glyph in the given font.</p>
	 * @link http://php.net/manual/en/function.ps-symbol-name.php
	 * @see ps_symbol(), ps_symbol_width()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_symbol_name($psdoc, int $ord, int $fontid = 0): string {}

	/**
	 * Gets width of a glyph
	 * <p>Calculates the width of a glyph in points if it was output in the given font and font size. This function needs an Adobe font metrics file to calculate the precise width.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param int $ord <p>The position of the glyph in the font encoding vector.</p>
	 * @param int $fontid <p>The identifier of the font to be used. If not font is specified the current font will be used.</p>
	 * @param float $size <p>The size of the font. If no size is specified the current size is used.</p>
	 * @return float <p>The width of a glyph in points.</p>
	 * @link http://php.net/manual/en/function.ps-symbol-width.php
	 * @see ps_symbol(), ps_symbol_name()
	 * @since PECL ps >= 1.2.0
	 */
	function ps_symbol_width($psdoc, int $ord, int $fontid = 0, float $size = 0.0): float {}

	/**
	 * Sets translation
	 * <p>Sets a new initial point of the coordinate system.</p>
	 * @param resource $psdoc <p>Resource identifier of the postscript file as returned by <code>ps_new()</code>.</p>
	 * @param float $x <p>x-coordinate of the origin of the translated coordinate system.</p>
	 * @param float $y <p>y-coordinate of the origin of the translated coordinate system.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ps-translate.php
	 * @see ps_scale(), ps_rotate()
	 * @since PECL ps >= 1.1.0
	 */
	function ps_translate($psdoc, float $x, float $y): bool {}

	/**
	 * ps_LINECAP_BUTT
	 */
	define('ps_LINECAP_BUTT', null);

	/**
	 * ps_LINECAP_ROUND
	 */
	define('ps_LINECAP_ROUND', null);

	/**
	 * ps_LINECAP_SQUARED
	 */
	define('ps_LINECAP_SQUARED', null);

	/**
	 * ps_LINEJOIN_BEVEL
	 */
	define('ps_LINEJOIN_BEVEL', null);

	/**
	 * ps_LINEJOIN_MITER
	 */
	define('ps_LINEJOIN_MITER', null);

	/**
	 * ps_LINEJOIN_ROUND
	 */
	define('ps_LINEJOIN_ROUND', null);

}
