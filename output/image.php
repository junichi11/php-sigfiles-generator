<?php



namespace {

	/**
	 * Retrieve information about the currently installed GD library
	 * <p>Gets information about the version and capabilities of the installed GD library.</p>
	 * @return array <p>Returns an associative array.</p> <b>Elements of array returned by <b>gd_info()</b></b>   Attribute Meaning     GD Version <code>string</code> value describing the installed <code>libgd</code> version.   FreeType Support <code>bool</code> value. <b><code>TRUE</code></b> if FreeType Support is installed.   FreeType Linkage <code>string</code> value describing the way in which FreeType was linked. Expected values are: 'with freetype', 'with TTF library', and 'with unknown library'. This element will only be defined if <code>FreeType Support</code> evaluated to <b><code>TRUE</code></b>.   GIF Read Support <code>bool</code> value. <b><code>TRUE</code></b> if support for <i>reading</i> <code>GIF</code> images is included.   GIF Create Support <code>bool</code> value. <b><code>TRUE</code></b> if support for <i>creating</i> <code>GIF</code> images is included.   JPEG Support <code>bool</code> value. <b><code>TRUE</code></b> if <code>JPEG</code> support is included.   PNG Support <code>bool</code> value. <b><code>TRUE</code></b> if <code>PNG</code> support is included.   WBMP Support <code>bool</code> value. <b><code>TRUE</code></b> if <code>WBMP</code> support is included.   XBM Support <code>bool</code> value. <b><code>TRUE</code></b> if <code>XBM</code> support is included.   WebP Support <code>bool</code> value. <b><code>TRUE</code></b> if <code>WebP</code> support is included.
	 * @link https://php.net/manual/en/function.gd-info.php
	 * @see imagepng(), imagejpeg(), imagegif(), imagewbmp(), imagewebp(), imagetypes()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function gd_info(): array {}

	/**
	 * Get the size of an image
	 * <p>The <b>getimagesize()</b> function will determine the size of any supported given image file and return the dimensions along with the file type and a <code>height/width</code> text string to be used inside a normal HTML <code>IMG</code> tag and the correspondent HTTP content type.</p><p><b>getimagesize()</b> can also return some more information in <code>imageinfo</code> parameter.</p><p>This function expects <code>filename</code> to be a valid image file. If a non-image file is supplied, it may be incorrectly detected as an image and the function will return successfully, but the array may contain nonsensical values.</p><p>Do not use <b>getimagesize()</b> to check that a given file is a valid image. Use a purpose-built solution such as the Fileinfo extension instead.</p><p><b>Note</b>:  Note that JPC and JP2 are capable of having components with different bit depths. In this case, the value for "bits" is the highest bit depth encountered. Also, JP2 files may contain <code>multiple JPEG 2000 codestreams</code>. In this case, <b>getimagesize()</b> returns the values for the first codestream it encounters in the root of the file. </p><p><b>Note</b>:  The information about icons are retrieved from the icon with the highest bitrate. </p><p><b>Note</b>:  GIF images consist of one or more frames, where each frame may only occupy part of the image. The size of the image which is reported by <b>getimagesize()</b> is the overall size (read from the logical screen descriptor). </p>
	 * @param string $filename <p>This parameter specifies the file you wish to retrieve information about. It can reference a local file or (configuration permitting) a remote file using one of the supported streams.</p>
	 * @param array $imageinfo <p>This optional parameter allows you to extract some extended information from the image file. Currently, this will return the different JPG APP markers as an associative array. Some programs use these APP markers to embed text information in images. A very common one is to embed IPTC information in the APP13 marker. You can use the <code>iptcparse()</code> function to parse the binary APP13 marker into something readable.</p> <p><b>Note</b>:</p><p>The <code>imageinfo</code> only supports JFIF files.</p>
	 * @return array <p>Returns an array with up to 7 elements. Not all image types will include the <code>channels</code> and <code>bits</code> elements.</p><p>Index 0 and 1 contains respectively the width and the height of the image.</p><p><b>Note</b>:</p><p>Some formats may contain no image or may contain multiple images. In these cases, <b>getimagesize()</b> might not be able to properly determine the image size. <b>getimagesize()</b> will return zero for width and height in these cases.</p> <p>Index 2 is one of the IMAGETYPE_XXX constants indicating the type of the image.</p><p>Index 3 is a text string with the correct <code>height="yyy" width="xxx"</code> string that can be used directly in an IMG tag.</p><p><code>mime</code> is the correspondant MIME type of the image. This information can be used to deliver images with the correct HTTP <code>Content-type</code> header:</p> <p><b>Example #1 <b>getimagesize()</b> and MIME types</b></p>  <code> &lt;&#63;php<br>$size&nbsp;=&nbsp;getimagesize($filename);<br>$fp&nbsp;=&nbsp;fopen($filename,&nbsp;"rb");<br>if&nbsp;($size&nbsp;&amp;&amp;&nbsp;$fp)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;header("Content-type:&nbsp;{$size['mime']}");<br>&nbsp;&nbsp;&nbsp;&nbsp;fpassthru($fp);<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;error<br>}<br>&#63;&gt;  </code>  <p><code>channels</code> will be 3 for RGB pictures and 4 for CMYK pictures.</p><p><code>bits</code> is the number of bits for each color.</p><p>For some image types, the presence of <code>channels</code> and <code>bits</code> values can be a bit confusing. As an example, GIF always uses 3 channels per pixel, but the number of bits per pixel cannot be calculated for an animated GIF with a global color table.</p><p>On failure, <b><code>FALSE</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.getimagesize.php
	 * @see image_type_to_mime_type(), exif_imagetype(), exif_read_data(), exif_thumbnail(), imagesx(), imagesy()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getimagesize(string $filename, array &$imageinfo = NULL): array {}

	/**
	 * Get the size of an image from a string
	 * <p>Identical to <code>getimagesize()</code> except that <b>getimagesizefromstring()</b> accepts a string instead of a file name as the first parameter.</p><p>See the <code>getimagesize()</code> documentation for details on how this function works.</p>
	 * @param string $imagedata <p>The image data, as a string.</p>
	 * @param array $imageinfo <p>See <code>getimagesize()</code>.</p>
	 * @return array <p>See <code>getimagesize()</code>.</p>
	 * @link https://php.net/manual/en/function.getimagesizefromstring.php
	 * @see getimagesize()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function getimagesizefromstring(string $imagedata, array &$imageinfo = NULL): array {}

	/**
	 * Output image to browser or file
	 * <p><b>image2wbmp()</b> outputs or save a WBMP version of the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param string $filename <p>Path to the saved file. If not given, the raw image stream will be output directly.</p>
	 * @param int $foreground <p>You can set the foreground color with this parameter by setting an identifier obtained from <code>imagecolorallocate()</code>. The default foreground color is black.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.image2wbmp.php
	 * @see imagewbmp()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function image2wbmp($image, string $filename = NULL, int $foreground = NULL): bool {}

	/**
	 * Get file extension for image type
	 * <p>Returns the extension for the given <code>IMAGETYPE_XXX</code> constant.</p>
	 * @param int $imagetype <p>One of the <code>IMAGETYPE_XXX</code> constant.</p>
	 * @param bool $include_dot <p>Whether to prepend a dot to the extension or not. Default to <b><code>TRUE</code></b>.</p>
	 * @return string <p>A string with the extension corresponding to the given image type.</p>
	 * @link https://php.net/manual/en/function.image-type-to-extension.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function image_type_to_extension(int $imagetype, bool $include_dot = TRUE): string {}

	/**
	 * Get Mime-Type for image-type returned by getimagesize, exif_read_data, exif_thumbnail, exif_imagetype
	 * <p>The <b>image_type_to_mime_type()</b> function will determine the Mime-Type for an IMAGETYPE constant.</p>
	 * @param int $imagetype <p>One of the <code>IMAGETYPE_XXX</code> constants.</p>
	 * @return string <p>The returned values are as follows</p> <b>Returned values Constants</b>   <code>imagetype</code> Returned value     <b><code>IMAGETYPE_GIF</code></b> <code>image/gif</code>   <b><code>IMAGETYPE_JPEG</code></b> <code>image/jpeg</code>   <b><code>IMAGETYPE_PNG</code></b> <code>image/png</code>   <b><code>IMAGETYPE_SWF</code></b> <code>application/x-shockwave-flash</code>   <b><code>IMAGETYPE_PSD</code></b> <code>image/psd</code>   <b><code>IMAGETYPE_BMP</code></b> <code>image/bmp</code>   <b><code>IMAGETYPE_TIFF_II</code></b> (intel byte order) <code>image/tiff</code>    <b><code>IMAGETYPE_TIFF_MM</code></b> (motorola byte order)  <code>image/tiff</code>   <b><code>IMAGETYPE_JPC</code></b> <code>application/octet-stream</code>   <b><code>IMAGETYPE_JP2</code></b> <code>image/jp2</code>   <b><code>IMAGETYPE_JPX</code></b> <code>application/octet-stream</code>   <b><code>IMAGETYPE_JB2</code></b> <code>application/octet-stream</code>   <b><code>IMAGETYPE_SWC</code></b> <code>application/x-shockwave-flash</code>   <b><code>IMAGETYPE_IFF</code></b> <code>image/iff</code>   <b><code>IMAGETYPE_WBMP</code></b> <code>image/vnd.wap.wbmp</code>   <b><code>IMAGETYPE_XBM</code></b> <code>image/xbm</code>   <b><code>IMAGETYPE_ICO</code></b> <code>image/vnd.microsoft.icon</code>   <b><code>IMAGETYPE_WEBP</code></b> <code>image/webp</code>
	 * @link https://php.net/manual/en/function.image-type-to-mime-type.php
	 * @see getimagesize(), exif_imagetype(), exif_read_data(), exif_thumbnail()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function image_type_to_mime_type(int $imagetype): string {}

	/**
	 * Return an image containing the affine transformed src image, using an optional clipping area
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param array $affine <p>Array with keys 0 to 5.</p>
	 * @param array $clip <p>Array with keys "x", "y", "width" and "height".</p>
	 * @return resource|false <p>Return affined image resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imageaffine.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function imageaffine($image, array $affine, array $clip = NULL) {}

	/**
	 * Concatenate two affine transformation matrices
	 * <p>Returns the concatenation of two affine transformation matrices, what is useful if multiple transformations should be applied to the same image in one go.</p>
	 * @param array $m1 <p>An affine transformation matrix (an array with keys <code>0</code> to <code>5</code> and float values).</p>
	 * @param array $m2 <p>An affine transformation matrix (an array with keys <code>0</code> to <code>5</code> and float values).</p>
	 * @return array|false <p>An affine transformation matrix (an array with keys <code>0</code> to <code>5</code> and float values) or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imageaffinematrixconcat.php
	 * @see imageaffine(), imageaffinematrixget()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function imageaffinematrixconcat(array $m1, array $m2): array|false {}

	/**
	 * Get an affine transformation matrix
	 * <p>Returns an affine transformation matrix.</p>
	 * @param int $type <p>One of the <b><code>IMG_AFFINE_&#42;</code></b> constants.</p>
	 * @param mixed $options <p>If <code>type</code> is <b><code>IMG_AFFINE_TRANSLATE</code></b> or <b><code>IMG_AFFINE_SCALE</code></b>, <code>options</code> has to be an <code>array</code> with keys <code>x</code> and <code>y</code>, both having <code>float</code> values.</p> <p>If <code>type</code> is <b><code>IMG_AFFINE_ROTATE</code></b>, <b><code>IMG_AFFINE_SHEAR_HORIZONTAL</code></b> or <b><code>IMG_AFFINE_SHEAR_VERTICAL</code></b>, <code>options</code> has to be a <code>float</code> specifying the angle.</p>
	 * @return array|false <p>An affine transformation matrix (an array with keys <code>0</code> to <code>5</code> and float values) or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imageaffinematrixget.php
	 * @see imageaffine(), imageaffinematrixconcat()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function imageaffinematrixget(int $type, mixed $options = NULL): array|false {}

	/**
	 * Set the blending mode for an image
	 * <p><b>imagealphablending()</b> allows for two different modes of drawing on truecolor images. In blending mode, the alpha channel component of the color supplied to all drawing function, such as <code>imagesetpixel()</code> determines how much of the underlying color should be allowed to shine through. As a result, gd automatically blends the existing color at that point with the drawing color, and stores the result in the image. The resulting pixel is opaque. In non-blending mode, the drawing color is copied literally with its alpha channel information, replacing the destination pixel. Blending mode is not available when drawing on palette images.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param bool $blendmode <p>Whether to enable the blending mode or not. On true color images the default value is <b><code>TRUE</code></b> otherwise the default value is <b><code>FALSE</code></b></p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagealphablending.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagealphablending($image, bool $blendmode): bool {}

	/**
	 * Should antialias functions be used or not
	 * <p>Activate the fast drawing antialiased methods for lines and wired polygons. It does not support alpha components. It works using a direct blend operation. It works only with truecolor images.</p><p>Thickness and styled are not supported.</p><p>Using antialiased primitives with transparent background color can end with some unexpected results. The blend method uses the background color as any other colors. The lack of alpha component support does not allow an alpha based antialiasing method.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param bool $enabled <p>Whether to enable antialiasing or not.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imageantialias.php
	 * @see imagecreatetruecolor()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function imageantialias($image, bool $enabled): bool {}

	/**
	 * Draws an arc
	 * <p><b>imagearc()</b> draws an arc of circle centered at the given coordinates.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $cx <p>x-coordinate of the center.</p>
	 * @param int $cy <p>y-coordinate of the center.</p>
	 * @param int $width <p>The arc width.</p>
	 * @param int $height <p>The arc height.</p>
	 * @param int $start <p>The arc start angle, in degrees.</p>
	 * @param int $end <p>The arc end angle, in degrees. 0&deg; is located at the three-o'clock position, and the arc is drawn clockwise.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagearc.php
	 * @see imagefilledarc(), imageellipse(), imagefilledellipse()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagearc($image, int $cx, int $cy, int $width, int $height, int $start, int $end, int $color): bool {}

	/**
	 * Output a BMP image to browser or file
	 * <p>Outputs or saves a BMP version of the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param mixed $to <p>The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <b><code>NULL</code></b>, the raw image stream will be outputted directly.</p> <p><b>Note</b>:</p><p><b><code>NULL</code></b> is invalid if the <code>compressed</code> arguments is not used.</p>
	 * @param bool $compressed <p>Whether the BMP should be compressed with run-length encoding (RLE), or not.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagebmp.php
	 * @since PHP 7 >= 7.2.0
	 */
	function imagebmp($image, mixed $to = NULL, bool $compressed = TRUE): bool {}

	/**
	 * Draw a character horizontally
	 * <p><b>imagechar()</b> draws the first character of <code>c</code> in the image identified by <code>image</code> with its upper-left at <code>x</code>,<code>y</code> (top left is 0, 0) with the color <code>color</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $font <p>Can be 1, 2, 3, 4, 5 for built-in fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your own font identifiers registered with <code>imageloadfont()</code>.</p>
	 * @param int $x <p>x-coordinate of the start.</p>
	 * @param int $y <p>y-coordinate of the start.</p>
	 * @param string $c <p>The character to draw.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagechar.php
	 * @see imagecharup(), imageloadfont()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagechar($image, int $font, int $x, int $y, string $c, int $color): bool {}

	/**
	 * Draw a character vertically
	 * <p>Draws the character <code>c</code> vertically at the specified coordinate on the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $font <p>Can be 1, 2, 3, 4, 5 for built-in fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your own font identifiers registered with <code>imageloadfont()</code>.</p>
	 * @param int $x <p>x-coordinate of the start.</p>
	 * @param int $y <p>y-coordinate of the start.</p>
	 * @param string $c <p>The character to draw.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagecharup.php
	 * @see imagechar(), imageloadfont()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecharup($image, int $font, int $x, int $y, string $c, int $color): bool {}

	/**
	 * Allocate a color for an image
	 * <p>Returns a color identifier representing the color composed of the given RGB components.</p><p><b>imagecolorallocate()</b> must be called to create each color that is to be used in the image represented by <code>image</code>.</p><p><b>Note</b>:</p><p>The first call to <b>imagecolorallocate()</b> fills the background color in palette-based images - images created using <code>imagecreate()</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $red <p>Value of red component.</p>
	 * @param int $green <p>Value of green component.</p>
	 * @param int $blue <p>Value of blue component.</p>
	 * @return int <p>A color identifier or <b><code>FALSE</code></b> if the allocation failed.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.imagecolorallocate.php
	 * @see imagecolorallocatealpha(), imagecolordeallocate()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecolorallocate($image, int $red, int $green, int $blue): int {}

	/**
	 * Allocate a color for an image
	 * <p><b>imagecolorallocatealpha()</b> behaves identically to <code>imagecolorallocate()</code> with the addition of the transparency parameter <code>alpha</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $red <p>Value of red component.</p>
	 * @param int $green <p>Value of green component.</p>
	 * @param int $blue <p>Value of blue component.</p>
	 * @param int $alpha <p>A value between <code>0</code> and <code>127</code>. <code>0</code> indicates completely opaque while <code>127</code> indicates completely transparent.</p>
	 * @return int <p>A color identifier or <b><code>FALSE</code></b> if the allocation failed.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.imagecolorallocatealpha.php
	 * @see imagecolorallocate(), imagecolordeallocate()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function imagecolorallocatealpha($image, int $red, int $green, int $blue, int $alpha): int {}

	/**
	 * Get the index of the color of a pixel
	 * <p>Returns the index of the color of the pixel at the specified location in the image specified by <code>image</code>.</p><p>If the image is a truecolor image, this function returns the RGB value of that pixel as integer. Use bitshifting and masking to access the distinct red, green and blue component values:</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $x <p>x-coordinate of the point.</p>
	 * @param int $y <p>y-coordinate of the point.</p>
	 * @return int|false <p>Returns the index of the color or <b><code>FALSE</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.imagecolorat.php
	 * @see imagecolorset(), imagecolorsforindex(), imagesetpixel()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecolorat($image, int $x, int $y): int|false {}

	/**
	 * Get the index of the closest color to the specified color
	 * <p>Returns the index of the color in the palette of the image which is "closest" to the specified RGB value.</p><p>The "distance" between the desired color and each color in the palette is calculated as if the RGB values represented points in three-dimensional space.</p><p>If you created the image from a file, only colors used in the image are resolved. Colors present only in the palette are not resolved.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $red <p>Value of red component.</p>
	 * @param int $green <p>Value of green component.</p>
	 * @param int $blue <p>Value of blue component.</p>
	 * @return int <p>Returns the index of the closest color, in the palette of the image, to the specified one</p>
	 * @link https://php.net/manual/en/function.imagecolorclosest.php
	 * @see imagecolorexact(), imagecolorclosestalpha(), imagecolorclosesthwb()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecolorclosest($image, int $red, int $green, int $blue): int {}

	/**
	 * Get the index of the closest color to the specified color + alpha
	 * <p>Returns the index of the color in the palette of the image which is "closest" to the specified RGB value and <code>alpha</code> level.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $red <p>Value of red component.</p>
	 * @param int $green <p>Value of green component.</p>
	 * @param int $blue <p>Value of blue component.</p>
	 * @param int $alpha <p>A value between <code>0</code> and <code>127</code>. <code>0</code> indicates completely opaque while <code>127</code> indicates completely transparent.</p>
	 * @return int <p>Returns the index of the closest color in the palette.</p>
	 * @link https://php.net/manual/en/function.imagecolorclosestalpha.php
	 * @see imagecolorexactalpha(), imagecolorclosest(), imagecolorclosesthwb()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagecolorclosestalpha($image, int $red, int $green, int $blue, int $alpha): int {}

	/**
	 * Get the index of the color which has the hue, white and blackness
	 * <p>Get the index of the color which has the hue, white and blackness nearest the given color.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $red <p>Value of red component.</p>
	 * @param int $green <p>Value of green component.</p>
	 * @param int $blue <p>Value of blue component.</p>
	 * @return int <p>Returns an integer with the index of the color which has the hue, white and blackness nearest the given color.</p>
	 * @link https://php.net/manual/en/function.imagecolorclosesthwb.php
	 * @see imagecolorclosest()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function imagecolorclosesthwb($image, int $red, int $green, int $blue): int {}

	/**
	 * De-allocate a color for an image
	 * <p>De-allocates a color previously allocated with <code>imagecolorallocate()</code> or <code>imagecolorallocatealpha()</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $color <p>The color identifier.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagecolordeallocate.php
	 * @see imagecolorallocate(), imagecolorallocatealpha()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecolordeallocate($image, int $color): bool {}

	/**
	 * Get the index of the specified color
	 * <p>Returns the index of the specified color in the palette of the image.</p><p>If you created the image from a file, only colors used in the image are resolved. Colors present only in the palette are not resolved.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $red <p>Value of red component.</p>
	 * @param int $green <p>Value of green component.</p>
	 * @param int $blue <p>Value of blue component.</p>
	 * @return int <p>Returns the index of the specified color in the palette, or -1 if the color does not exist.</p>
	 * @link https://php.net/manual/en/function.imagecolorexact.php
	 * @see imagecolorclosest()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecolorexact($image, int $red, int $green, int $blue): int {}

	/**
	 * Get the index of the specified color + alpha
	 * <p>Returns the index of the specified color+alpha in the palette of the image.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $red <p>Value of red component.</p>
	 * @param int $green <p>Value of green component.</p>
	 * @param int $blue <p>Value of blue component.</p>
	 * @param int $alpha <p>A value between <code>0</code> and <code>127</code>. <code>0</code> indicates completely opaque while <code>127</code> indicates completely transparent.</p>
	 * @return int <p>Returns the index of the specified color+alpha in the palette of the image, or -1 if the color does not exist in the image's palette.</p>
	 * @link https://php.net/manual/en/function.imagecolorexactalpha.php
	 * @see imagecolorclosestalpha()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagecolorexactalpha($image, int $red, int $green, int $blue, int $alpha): int {}

	/**
	 * Makes the colors of the palette version of an image more closely match the true color version
	 * <p>Makes the colors of the palette version of an image more closely match the true color version.</p>
	 * @param resource $image1 <p>A truecolor image resource.</p>
	 * @param resource $image2 <p>A palette image resource pointing to an image that has the same size as <code>image1</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagecolormatch.php
	 * @see imagecreatetruecolor()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function imagecolormatch($image1, $image2): bool {}

	/**
	 * Get the index of the specified color or its closest possible alternative
	 * <p>This function is guaranteed to return a color index for a requested color, either the exact color or the closest possible alternative.</p><p>If you created the image from a file, only colors used in the image are resolved. Colors present only in the palette are not resolved.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $red <p>Value of red component.</p>
	 * @param int $green <p>Value of green component.</p>
	 * @param int $blue <p>Value of blue component.</p>
	 * @return int <p>Returns a color index.</p>
	 * @link https://php.net/manual/en/function.imagecolorresolve.php
	 * @see imagecolorclosest()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecolorresolve($image, int $red, int $green, int $blue): int {}

	/**
	 * Get the index of the specified color + alpha or its closest possible alternative
	 * <p>This function is guaranteed to return a color index for a requested color, either the exact color or the closest possible alternative.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $red <p>Value of red component.</p>
	 * @param int $green <p>Value of green component.</p>
	 * @param int $blue <p>Value of blue component.</p>
	 * @param int $alpha <p>A value between <code>0</code> and <code>127</code>. <code>0</code> indicates completely opaque while <code>127</code> indicates completely transparent.</p>
	 * @return int <p>Returns a color index.</p>
	 * @link https://php.net/manual/en/function.imagecolorresolvealpha.php
	 * @see imagecolorclosestalpha()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagecolorresolvealpha($image, int $red, int $green, int $blue, int $alpha): int {}

	/**
	 * Set the color for the specified palette index
	 * <p>This sets the specified index in the palette to the specified color. This is useful for creating flood-fill-like effects in palleted images without the overhead of performing the actual flood-fill.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $index <p>An index in the palette.</p>
	 * @param int $red <p>Value of red component.</p>
	 * @param int $green <p>Value of green component.</p>
	 * @param int $blue <p>Value of blue component.</p>
	 * @param int $alpha <p>Value of alpha component.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.imagecolorset.php
	 * @see imagecolorat()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecolorset($image, int $index, int $red, int $green, int $blue, int $alpha = 0): void {}

	/**
	 * Get the colors for an index
	 * <p>Gets the color for a specified index.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $index <p>The color index.</p>
	 * @return array <p>Returns an associative array with red, green, blue and alpha keys that contain the appropriate values for the specified color index.</p>
	 * @link https://php.net/manual/en/function.imagecolorsforindex.php
	 * @see imagecolorat(), imagecolorexact()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecolorsforindex($image, int $index): array {}

	/**
	 * Find out the number of colors in an image's palette
	 * <p>Returns the number of colors in an image palette.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @return int <p>Returns the number of colors in the specified image's palette or 0 for truecolor images.</p>
	 * @link https://php.net/manual/en/function.imagecolorstotal.php
	 * @see imagecolorat(), imagecolorsforindex(), imageistruecolor()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecolorstotal($image): int {}

	/**
	 * Define a color as transparent
	 * <p>Gets or sets the transparent color in the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @return int <p>The identifier of the new (or current, if none is specified) transparent color is returned. If <code>color</code> is not specified, and the image has no transparent color, the returned identifier will be -1.</p>
	 * @link https://php.net/manual/en/function.imagecolortransparent.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecolortransparent($image): int {}

	/**
	 * Apply a 3x3 convolution matrix, using coefficient and offset
	 * <p>Applies a convolution matrix on the image, using the given coefficient and offset.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param array $matrix <p>A 3x3 matrix: an array of three arrays of three floats.</p>
	 * @param float $div <p>The divisor of the result of the convolution, used for normalization.</p>
	 * @param float $offset <p>Color offset.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imageconvolution.php
	 * @see imagefilter()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function imageconvolution($image, array $matrix, float $div, float $offset): bool {}

	/**
	 * Copy part of an image
	 * <p>Copy a part of <code>src_im</code> onto <code>dst_im</code> starting at the x,y coordinates <code>src_x</code>, <code>src_y </code> with a width of <code>src_w</code> and a height of <code>src_h</code>. The portion defined will be copied onto the x,y coordinates, <code>dst_x</code> and <code>dst_y</code>.</p>
	 * @param resource $dst_im <p>Destination image resource.</p>
	 * @param resource $src_im <p>Source image resource.</p>
	 * @param int $dst_x <p>x-coordinate of destination point.</p>
	 * @param int $dst_y <p>y-coordinate of destination point.</p>
	 * @param int $src_x <p>x-coordinate of source point.</p>
	 * @param int $src_y <p>y-coordinate of source point.</p>
	 * @param int $src_w <p>Source width.</p>
	 * @param int $src_h <p>Source height.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagecopy.php
	 * @see imagecrop()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecopy($dst_im, $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h): bool {}

	/**
	 * Copy and merge part of an image
	 * <p>Copy a part of <code>src_im</code> onto <code>dst_im</code> starting at the x,y coordinates <code>src_x</code>, <code>src_y </code> with a width of <code>src_w</code> and a height of <code>src_h</code>. The portion defined will be copied onto the x,y coordinates, <code>dst_x</code> and <code>dst_y</code>.</p>
	 * @param resource $dst_im <p>Destination image resource.</p>
	 * @param resource $src_im <p>Source image resource.</p>
	 * @param int $dst_x <p>x-coordinate of destination point.</p>
	 * @param int $dst_y <p>y-coordinate of destination point.</p>
	 * @param int $src_x <p>x-coordinate of source point.</p>
	 * @param int $src_y <p>y-coordinate of source point.</p>
	 * @param int $src_w <p>Source width.</p>
	 * @param int $src_h <p>Source height.</p>
	 * @param int $pct <p>The two images will be merged according to <code>pct</code> which can range from 0 to 100. When <code>pct</code> = 0, no action is taken, when 100 this function behaves identically to <code>imagecopy()</code> for pallete images, except for ignoring alpha components, while it implements alpha transparency for true colour images.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagecopymerge.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function imagecopymerge($dst_im, $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h, int $pct): bool {}

	/**
	 * Copy and merge part of an image with gray scale
	 * <p><b>imagecopymergegray()</b> copy a part of <code>src_im</code> onto <code>dst_im</code> starting at the x,y coordinates <code>src_x</code>, <code>src_y </code> with a width of <code>src_w</code> and a height of <code>src_h</code>. The portion defined will be copied onto the x,y coordinates, <code>dst_x</code> and <code>dst_y</code>.</p><p>This function is identical to <code>imagecopymerge()</code> except that when merging it preserves the hue of the source by converting the destination pixels to gray scale before the copy operation.</p>
	 * @param resource $dst_im <p>Destination image resource.</p>
	 * @param resource $src_im <p>Source image resource.</p>
	 * @param int $dst_x <p>x-coordinate of destination point.</p>
	 * @param int $dst_y <p>y-coordinate of destination point.</p>
	 * @param int $src_x <p>x-coordinate of source point.</p>
	 * @param int $src_y <p>y-coordinate of source point.</p>
	 * @param int $src_w <p>Source width.</p>
	 * @param int $src_h <p>Source height.</p>
	 * @param int $pct <p>The <code>src_im</code> will be changed to grayscale according to <code>pct</code> where 0 is fully grayscale and 100 is unchanged. When <code>pct</code> = 100 this function behaves identically to <code>imagecopy()</code> for pallete images, except for ignoring alpha components, while it implements alpha transparency for true colour images.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagecopymergegray.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagecopymergegray($dst_im, $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h, int $pct): bool {}

	/**
	 * Copy and resize part of an image with resampling
	 * <p><b>imagecopyresampled()</b> copies a rectangular portion of one image to another image, smoothly interpolating pixel values so that, in particular, reducing the size of an image still retains a great deal of clarity.</p><p>In other words, <b>imagecopyresampled()</b> will take a rectangular area from <code>src_image</code> of width <code>src_w</code> and height <code>src_h</code> at position (<code>src_x</code>,<code>src_y</code>) and place it in a rectangular area of <code>dst_image</code> of width <code>dst_w</code> and height <code>dst_h</code> at position (<code>dst_x</code>,<code>dst_y</code>).</p><p>If the source and destination coordinates and width and heights differ, appropriate stretching or shrinking of the image fragment will be performed. The coordinates refer to the upper left corner. This function can be used to copy regions within the same image (if <code>dst_image</code> is the same as <code>src_image</code>) but if the regions overlap the results will be unpredictable.</p>
	 * @param resource $dst_image <p>Destination image resource.</p>
	 * @param resource $src_image <p>Source image resource.</p>
	 * @param int $dst_x <p>x-coordinate of destination point.</p>
	 * @param int $dst_y <p>y-coordinate of destination point.</p>
	 * @param int $src_x <p>x-coordinate of source point.</p>
	 * @param int $src_y <p>y-coordinate of source point.</p>
	 * @param int $dst_w <p>Destination width.</p>
	 * @param int $dst_h <p>Destination height.</p>
	 * @param int $src_w <p>Source width.</p>
	 * @param int $src_h <p>Source height.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagecopyresampled.php
	 * @see imagecopyresized(), imagescale(), imagecrop()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagecopyresampled($dst_image, $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_w, int $dst_h, int $src_w, int $src_h): bool {}

	/**
	 * Copy and resize part of an image
	 * <p><b>imagecopyresized()</b> copies a rectangular portion of one image to another image. <code>dst_image</code> is the destination image, <code>src_image</code> is the source image identifier.</p><p>In other words, <b>imagecopyresized()</b> will take a rectangular area from <code>src_image</code> of width <code>src_w</code> and height <code>src_h</code> at position (<code>src_x</code>,<code>src_y</code>) and place it in a rectangular area of <code>dst_image</code> of width <code>dst_w</code> and height <code>dst_h</code> at position (<code>dst_x</code>,<code>dst_y</code>).</p><p>If the source and destination coordinates and width and heights differ, appropriate stretching or shrinking of the image fragment will be performed. The coordinates refer to the upper left corner. This function can be used to copy regions within the same image (if <code>dst_image</code> is the same as <code>src_image</code>) but if the regions overlap the results will be unpredictable.</p>
	 * @param resource $dst_image <p>Destination image resource.</p>
	 * @param resource $src_image <p>Source image resource.</p>
	 * @param int $dst_x <p>x-coordinate of destination point.</p>
	 * @param int $dst_y <p>y-coordinate of destination point.</p>
	 * @param int $src_x <p>x-coordinate of source point.</p>
	 * @param int $src_y <p>y-coordinate of source point.</p>
	 * @param int $dst_w <p>Destination width.</p>
	 * @param int $dst_h <p>Destination height.</p>
	 * @param int $src_w <p>Source width.</p>
	 * @param int $src_h <p>Source height.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagecopyresized.php
	 * @see imagecopyresampled(), imagescale(), imagecrop()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecopyresized($dst_image, $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_w, int $dst_h, int $src_w, int $src_h): bool {}

	/**
	 * Create a new palette based image
	 * <p><b>imagecreate()</b> returns an image identifier representing a blank image of specified size.</p><p>In general, we recommend the use of <code>imagecreatetruecolor()</code> instead of <b>imagecreate()</b> so that image processing occurs on the highest quality image possible. If you want to output a palette image, then <code>imagetruecolortopalette()</code> should be called immediately before saving the image with <code>imagepng()</code> or <code>imagegif()</code>.</p>
	 * @param int $width <p>The image width.</p>
	 * @param int $height <p>The image height.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreate.php
	 * @see imagedestroy(), imagecreatetruecolor()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecreate(int $width, int $height) {}

	/**
	 * Create a new image from file or URL
	 * <p><b>imagecreatefrombmp()</b> returns an image identifier representing the image obtained from the given filename.</p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the BMP image.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefrombmp.php
	 * @since PHP 7 >= 7.2.0
	 */
	function imagecreatefrombmp(string $filename) {}

	/**
	 * Create a new image from GD file or URL
	 * <p>Create a new image from GD file or URL.</p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the GD file.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefromgd.php
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function imagecreatefromgd(string $filename) {}

	/**
	 * Create a new image from GD2 file or URL
	 * <p>Create a new image from GD2 file or URL.</p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the GD2 image.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefromgd2.php
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function imagecreatefromgd2(string $filename) {}

	/**
	 * Create a new image from a given part of GD2 file or URL
	 * <p>Create a new image from a given part of GD2 file or URL.</p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the GD2 image.</p>
	 * @param int $srcX <p>x-coordinate of source point.</p>
	 * @param int $srcY <p>y-coordinate of source point.</p>
	 * @param int $width <p>Source width.</p>
	 * @param int $height <p>Source height.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefromgd2part.php
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function imagecreatefromgd2part(string $filename, int $srcX, int $srcY, int $width, int $height) {}

	/**
	 * Create a new image from file or URL
	 * <p><b>imagecreatefromgif()</b> returns an image identifier representing the image obtained from the given filename.</p><p>When reading GIF files into memory, only the first frame is returned in the image resource pointer. The size of the image is not necessarily what is reported by <code>getimagesize()</code>.</p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the GIF image.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefromgif.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecreatefromgif(string $filename) {}

	/**
	 * Create a new image from file or URL
	 * <p><b>imagecreatefromjpeg()</b> returns an image identifier representing the image obtained from the given filename.</p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the JPEG image.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefromjpeg.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecreatefromjpeg(string $filename) {}

	/**
	 * Create a new image from file or URL
	 * <p><b>imagecreatefrompng()</b> returns an image identifier representing the image obtained from the given filename.</p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the PNG image.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefrompng.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagecreatefrompng(string $filename) {}

	/**
	 * Create a new image from the image stream in the string
	 * <p><b>imagecreatefromstring()</b> returns an image identifier representing the image obtained from the given <code>image</code>. These types will be automatically detected if your build of PHP supports them: JPEG, PNG, GIF, BMP, WBMP, and GD2.</p>
	 * @param string $image <p>A string containing the image data.</p>
	 * @return resource <p>An image resource will be returned on success. <b><code>FALSE</code></b> is returned if the image type is unsupported, the data is not in a recognised format, or the image is corrupt and cannot be loaded.</p>
	 * @link https://php.net/manual/en/function.imagecreatefromstring.php
	 * @see imagecreatefromjpeg(), imagecreatefrompng(), imagecreatefromgif(), imagecreatetruecolor()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function imagecreatefromstring(string $image) {}

	/**
	 * Create a new image from file or URL
	 * <p><b>imagecreatefromwbmp()</b> returns an image identifier representing the image obtained from the given filename.</p><p><b>Note</b>:  WBMP images are Wireless Bitmaps, not Windows Bitmaps. The latter can be loaded with <code>imagecreatefrombmp()</code>. </p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the WBMP image.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefromwbmp.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function imagecreatefromwbmp(string $filename) {}

	/**
	 * Create a new image from file or URL
	 * <p><b>imagecreatefromwebp()</b> returns an image identifier representing the image obtained from the given filename.</p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the WebP image.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefromwebp.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function imagecreatefromwebp(string $filename) {}

	/**
	 * Create a new image from file or URL
	 * <p><b>imagecreatefromxbm()</b> returns an image identifier representing the image obtained from the given filename.</p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the XBM image.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefromxbm.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function imagecreatefromxbm(string $filename) {}

	/**
	 * Create a new image from file or URL
	 * <p><b>imagecreatefromxpm()</b> returns an image identifier representing the image obtained from the given filename.</p><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param string $filename <p>Path to the XPM image.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatefromxpm.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function imagecreatefromxpm(string $filename) {}

	/**
	 * Create a new true color image
	 * <p><b>imagecreatetruecolor()</b> returns an image identifier representing a black image of the specified size.</p>
	 * @param int $width <p>Image width.</p>
	 * @param int $height <p>Image height.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagecreatetruecolor.php
	 * @see imagedestroy(), imagecreate()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagecreatetruecolor(int $width, int $height) {}

	/**
	 * Crop an image to the given rectangle
	 * <p>Crops an image to the given rectangular area and returns the resulting image. The given <code>image</code> is not modified.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param array $rect <p>The cropping rectangle as <code>array</code> with keys <code>x</code>, <code>y</code>, <code>width</code> and <code>height</code>.</p>
	 * @return resource|false <p>Return cropped image resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagecrop.php
	 * @see imagecropauto()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function imagecrop($image, array $rect) {}

	/**
	 * Crop an image automatically using one of the available modes
	 * <p>Automatically crops an image according to the given <code>mode</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $mode <p>One of the following constants:</p>   <b><code>IMG_CROP_DEFAULT</code></b>   Same as <b><code>IMG_CROP_TRANSPARENT</code></b>. Before PHP 7.4.0, the bundled libgd fell back to <b><code>IMG_CROP_SIDES</code></b>, if the image had no transparent color.    <b><code>IMG_CROP_TRANSPARENT</code></b>   Crops out a transparent background.    <b><code>IMG_CROP_BLACK</code></b>   Crops out a black background.    <b><code>IMG_CROP_WHITE</code></b>   Crops out a white background.    <b><code>IMG_CROP_SIDES</code></b>   Uses the 4 corners of the image to attempt to detect the background to crop.    <b><code>IMG_CROP_THRESHOLD</code></b>   Crops an image using the given <code>threshold</code> and <code>color</code>.
	 * @param float $threshold <p>Specifies the tolerance in percent to be used while comparing the image color and the color to crop. The method used to calculate the color difference is based on the color distance in the RGB(a) cube.</p> <p>Used only in <b><code>IMG_CROP_THRESHOLD</code></b> mode.</p> <p><b>Note</b>:  Before PHP 7.4.0, the bundled libgd used a somewhat different algorithm, so the same <code>threshold</code> yielded different results for system and bundled libgd. </p>
	 * @param int $color <p>Either an RGB color value or a palette index.</p> <p>Used only in <b><code>IMG_CROP_THRESHOLD</code></b> mode.</p>
	 * @return resource|false <p>Returns a cropped image resource on success or <b><code>FALSE</code></b> on failure. If the complete image was cropped, <code>imagecrop()</code> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagecropauto.php
	 * @see imagecrop()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function imagecropauto($image, int $mode = IMG_CROP_DEFAULT, float $threshold = .5, int $color = -1) {}

	/**
	 * Draw a dashed line
	 * <p>This function is deprecated. Use combination of <code>imagesetstyle()</code> and <code>imageline()</code> instead.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $x1 <p>Upper left x coordinate.</p>
	 * @param int $y1 <p>Upper left y coordinate 0, 0 is the top left corner of the image.</p>
	 * @param int $x2 <p>Bottom right x coordinate.</p>
	 * @param int $y2 <p>Bottom right y coordinate.</p>
	 * @param int $color <p>The fill color. A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagedashedline.php
	 * @see imagesetstyle(), imageline()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagedashedline($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

	/**
	 * Destroy an image
	 * <p><b>imagedestroy()</b> frees any memory associated with image <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagedestroy.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagedestroy($image): bool {}

	/**
	 * Draw an ellipse
	 * <p>Draws an ellipse centered at the specified coordinates.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $cx <p>x-coordinate of the center.</p>
	 * @param int $cy <p>y-coordinate of the center.</p>
	 * @param int $width <p>The ellipse width.</p>
	 * @param int $height <p>The ellipse height.</p>
	 * @param int $color <p>The color of the ellipse. A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imageellipse.php
	 * @see imagefilledellipse(), imagearc()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imageellipse($image, int $cx, int $cy, int $width, int $height, int $color): bool {}

	/**
	 * Flood fill
	 * <p>Performs a flood fill starting at the given coordinate (top left is 0, 0) with the given <code>color</code> in the <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $x <p>x-coordinate of start point.</p>
	 * @param int $y <p>y-coordinate of start point.</p>
	 * @param int $color <p>The fill color. A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagefill.php
	 * @see imagecolorallocate()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagefill($image, int $x, int $y, int $color): bool {}

	/**
	 * Draw a partial arc and fill it
	 * <p>Draws a partial arc centered at the specified coordinate in the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $cx <p>x-coordinate of the center.</p>
	 * @param int $cy <p>y-coordinate of the center.</p>
	 * @param int $width <p>The arc width.</p>
	 * @param int $height <p>The arc height.</p>
	 * @param int $start <p>The arc start angle, in degrees.</p>
	 * @param int $end <p>The arc end angle, in degrees. 0&deg; is located at the three-o'clock position, and the arc is drawn clockwise.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @param int $style <p>A bitwise OR of the following possibilities:</p><ol> <li><b><code>IMG_ARC_PIE</code></b></li> <li><b><code>IMG_ARC_CHORD</code></b></li> <li><b><code>IMG_ARC_NOFILL</code></b></li> <li><b><code>IMG_ARC_EDGED</code></b></li> </ol> <b><code>IMG_ARC_PIE</code></b> and <b><code>IMG_ARC_CHORD</code></b> are mutually exclusive; <b><code>IMG_ARC_CHORD</code></b> just connects the starting and ending angles with a straight line, while <b><code>IMG_ARC_PIE</code></b> produces a rounded edge. <b><code>IMG_ARC_NOFILL</code></b> indicates that the arc or chord should be outlined, not filled. <b><code>IMG_ARC_EDGED</code></b>, used together with <b><code>IMG_ARC_NOFILL</code></b>, indicates that the beginning and ending angles should be connected to the center - this is a good way to outline (rather than fill) a 'pie slice'.
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagefilledarc.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagefilledarc($image, int $cx, int $cy, int $width, int $height, int $start, int $end, int $color, int $style): bool {}

	/**
	 * Draw a filled ellipse
	 * <p>Draws an ellipse centered at the specified coordinate on the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $cx <p>x-coordinate of the center.</p>
	 * @param int $cy <p>y-coordinate of the center.</p>
	 * @param int $width <p>The ellipse width.</p>
	 * @param int $height <p>The ellipse height.</p>
	 * @param int $color <p>The fill color. A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagefilledellipse.php
	 * @see imageellipse(), imagefilledarc()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagefilledellipse($image, int $cx, int $cy, int $width, int $height, int $color): bool {}

	/**
	 * Draw a filled polygon
	 * <p><b>imagefilledpolygon()</b> creates a filled polygon in the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param array $points <p>An array containing the <code>x</code> and <code>y</code> coordinates of the polygons vertices consecutively.</p>
	 * @param int $num_points <p>Total number of points (vertices), which must be at least 3.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagefilledpolygon.php
	 * @see imagepolygon()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagefilledpolygon($image, array $points, int $num_points, int $color): bool {}

	/**
	 * Draw a filled rectangle
	 * <p>Creates a rectangle filled with <code>color</code> in the given <code>image</code> starting at point 1 and ending at point 2. 0, 0 is the top left corner of the image.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $x1 <p>x-coordinate for point 1.</p>
	 * @param int $y1 <p>y-coordinate for point 1.</p>
	 * @param int $x2 <p>x-coordinate for point 2.</p>
	 * @param int $y2 <p>y-coordinate for point 2.</p>
	 * @param int $color <p>The fill color. A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagefilledrectangle.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagefilledrectangle($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

	/**
	 * Flood fill to specific color
	 * <p><b>imagefilltoborder()</b> performs a flood fill whose border color is defined by <code>border</code>. The starting point for the fill is <code>x</code>, <code>y</code> (top left is 0, 0) and the region is filled with color <code>color</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $x <p>x-coordinate of start.</p>
	 * @param int $y <p>y-coordinate of start.</p>
	 * @param int $border <p>The border color. A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @param int $color <p>The fill color. A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagefilltoborder.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagefilltoborder($image, int $x, int $y, int $border, int $color): bool {}

	/**
	 * Applies a filter to an image
	 * <p><b>imagefilter()</b> applies the given filter <code>filtertype</code> on the <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $filtertype <p><code>filtertype</code> can be one of the following:</p><ul> <li>  <b><code>IMG_FILTER_NEGATE</code></b>: Reverses all colors of the image.  </li> <li>  <b><code>IMG_FILTER_GRAYSCALE</code></b>: Converts the image into grayscale by changing the red, green and blue components to their weighted sum using the same coefficients as the REC.601 luma (Y') calculation. The alpha components are retained. For palette images the result may differ due to palette limitations.  </li> <li>  <b><code>IMG_FILTER_BRIGHTNESS</code></b>: Changes the brightness of the image. Use <code>arg1</code> to set the level of brightness. The range for the brightness is -255 to 255.  </li> <li>  <b><code>IMG_FILTER_CONTRAST</code></b>: Changes the contrast of the image. Use <code>arg1</code> to set the level of contrast.  </li> <li>  <b><code>IMG_FILTER_COLORIZE</code></b>: Like <b><code>IMG_FILTER_GRAYSCALE</code></b>, except you can specify the color. Use <code>arg1</code>, <code>arg2</code> and <code>arg3</code> in the form of <code>red</code>, <code>green</code>, <code>blue</code> and <code>arg4</code> for the <code>alpha</code> channel. The range for each color is 0 to 255.  </li> <li>  <b><code>IMG_FILTER_EDGEDETECT</code></b>: Uses edge detection to highlight the edges in the image.  </li> <li>  <b><code>IMG_FILTER_EMBOSS</code></b>: Embosses the image.  </li> <li>  <b><code>IMG_FILTER_GAUSSIAN_BLUR</code></b>: Blurs the image using the Gaussian method.  </li> <li>  <b><code>IMG_FILTER_SELECTIVE_BLUR</code></b>: Blurs the image.  </li> <li>  <b><code>IMG_FILTER_MEAN_REMOVAL</code></b>: Uses mean removal to achieve a "sketchy" effect.  </li> <li>  <b><code>IMG_FILTER_SMOOTH</code></b>: Makes the image smoother. Use <code>arg1</code> to set the level of smoothness.  </li> <li>  <b><code>IMG_FILTER_PIXELATE</code></b>: Applies pixelation effect to the image, use <code>arg1</code> to set the block size and <code>arg2</code> to set the pixelation effect mode.  </li> <li>  <b><code>IMG_FILTER_SCATTER</code></b>: Applies scatter effect to the image, use <code>arg1</code> and <code>arg2</code> to define the effect strength and additionally <code>arg3</code> to only apply the on select pixel colors.  </li> </ul>
	 * @param int $arg1 <p></p><ul> <li>  <b><code>IMG_FILTER_BRIGHTNESS</code></b>: Brightness level.  </li> <li>  <b><code>IMG_FILTER_CONTRAST</code></b>: Contrast level.  </li> <li>  <b><code>IMG_FILTER_COLORIZE</code></b>: Value of red component.  </li> <li>  <b><code>IMG_FILTER_SMOOTH</code></b>: Smoothness level.  </li> <li>  <b><code>IMG_FILTER_PIXELATE</code></b>: Block size in pixels.  </li> <li>  <b><code>IMG_FILTER_SCATTER</code></b>: Effect substraction level. This must not be higher or equal to the addition level set with <code>arg2</code>.  </li> </ul>
	 * @param int $arg2 <p></p><ul> <li>  <b><code>IMG_FILTER_COLORIZE</code></b>: Value of green component.  </li> <li>  <b><code>IMG_FILTER_PIXELATE</code></b>: Whether to use advanced pixelation effect or not (defaults to <b><code>FALSE</code></b>).  </li> <li>  <b><code>IMG_FILTER_SCATTER</code></b>: Effect addition level.  </li> </ul>
	 * @param int $arg3 <p></p><ul> <li>  <b><code>IMG_FILTER_COLORIZE</code></b>: Value of blue component.  </li> <li>  <b><code>IMG_FILTER_SCATTER</code></b>: Optional array indexed color values to apply effect at.  </li> </ul>
	 * @param int $arg4 <p></p><ul> <li>  <b><code>IMG_FILTER_COLORIZE</code></b>: Alpha channel, A value between 0 and 127. 0 indicates completely opaque while 127 indicates completely transparent.  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagefilter.php
	 * @see imageconvolution()
	 * @since PHP 5, PHP 7
	 */
	function imagefilter($image, int $filtertype, int $arg1 = NULL, int $arg2 = NULL, int $arg3 = NULL, int $arg4 = NULL): bool {}

	/**
	 * Flips an image using a given mode
	 * <p>Flips the <code>image</code> image using the given <code>mode</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $mode <p>Flip mode, this can be one of the <b><code>IMG_FLIP_&#42;</code></b> constants:</p> <p></p>   Constant Meaning     <b><code>IMG_FLIP_HORIZONTAL</code></b>  Flips the image horizontally.    <b><code>IMG_FLIP_VERTICAL</code></b>  Flips the image vertically.    <b><code>IMG_FLIP_BOTH</code></b>  Flips the image both horizontally and vertically.
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imageflip.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function imageflip($image, int $mode): bool {}

	/**
	 * Get font height
	 * <p>Returns the pixel height of a character in the specified font.</p>
	 * @param int $font <p>Can be 1, 2, 3, 4, 5 for built-in fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your own font identifiers registered with <code>imageloadfont()</code>.</p>
	 * @return int <p>Returns the pixel height of the font.</p>
	 * @link https://php.net/manual/en/function.imagefontheight.php
	 * @see imagefontwidth(), imageloadfont()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagefontheight(int $font): int {}

	/**
	 * Get font width
	 * <p>Returns the pixel width of a character in font.</p>
	 * @param int $font <p>Can be 1, 2, 3, 4, 5 for built-in fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your own font identifiers registered with <code>imageloadfont()</code>.</p>
	 * @return int <p>Returns the pixel width of the font.</p>
	 * @link https://php.net/manual/en/function.imagefontwidth.php
	 * @see imagefontheight(), imageloadfont()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagefontwidth(int $font): int {}

	/**
	 * Give the bounding box of a text using fonts via freetype2
	 * <p>This function calculates and returns the bounding box in pixels for a FreeType text.</p><p><b>Note</b>:</p><p><b>imageftbbox()</b> is an extended variant of <code>imagettfbbox()</code> which additionally supports the <code>extrainfo</code>.</p>
	 * @param float $size <p>The font size in points.</p>
	 * @param float $angle <p>Angle in degrees in which <code>text</code> will be measured.</p>
	 * @param string $fontfile <p>The name of the TrueType font file (can be a URL). Depending on which version of the GD library that PHP is using, it may attempt to search for files that do not begin with a leading '/' by appending '.ttf' to the filename and searching along a library-defined font path.</p>
	 * @param string $text <p>The string to be measured.</p>
	 * @param array $extrainfo <p></p> <b>Possible array indexes for <code>extrainfo</code></b>   Key Type Meaning     <code>linespacing</code> <code>float</code> Defines drawing linespacing
	 * @return array <p><b>imageftbbox()</b> returns an array with 8 elements representing four points making the bounding box of the text:</p>   0 lower left corner, X position   1 lower left corner, Y position   2 lower right corner, X position   3 lower right corner, Y position   4 upper right corner, X position   5 upper right corner, Y position   6 upper left corner, X position   7 upper left corner, Y position   <p>The points are relative to the <i>text</i> regardless of the <code>angle</code>, so "upper left" means in the top left-hand corner seeing the text horizontally.</p>
	 * @link https://php.net/manual/en/function.imageftbbox.php
	 * @see imagefttext(), imagettfbbox()
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function imageftbbox(float $size, float $angle, string $fontfile, string $text, array $extrainfo = NULL): array {}

	/**
	 * Write text to the image using fonts using FreeType 2
	 * <p><b>Note</b>:</p><p><b>imagefttext()</b> is an extended variant of <code>imagettftext()</code> which additionally supports the <code>extrainfo</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param float $size <p>The font size to use in points.</p>
	 * @param float $angle <p>The angle in degrees, with 0 degrees being left-to-right reading text. Higher values represent a counter-clockwise rotation. For example, a value of 90 would result in bottom-to-top reading text.</p>
	 * @param int $x <p>The coordinates given by <code>x</code> and <code>y</code> will define the basepoint of the first character (roughly the lower-left corner of the character). This is different from the <code>imagestring()</code>, where <code>x</code> and <code>y</code> define the upper-left corner of the first character. For example, "top left" is 0, 0.</p>
	 * @param int $y <p>The y-ordinate. This sets the position of the fonts baseline, not the very bottom of the character.</p>
	 * @param int $color <p>The index of the desired color for the text, see <code>imagecolorexact()</code>.</p>
	 * @param string $fontfile <p>The path to the TrueType font you wish to use.</p> <p>Depending on which version of the GD library PHP is using, <i>when <code>fontfile</code> does not begin with a leading <code>/</code> then <code>.ttf</code> will be appended</i> to the filename and the library will attempt to search for that filename along a library-defined font path.</p> <p>When using versions of the GD library lower than 2.0.18, a <code>space</code> character, rather than a semicolon, was used as the 'path separator' for different font files. Unintentional use of this feature will result in the warning message: <code>Warning: Could not find/open font</code>. For these affected versions, the only solution is moving the font to a path which does not contain spaces.</p> <p>In many cases where a font resides in the same directory as the script using it the following trick will alleviate any include problems.</p> <code> &lt;&#63;php<br>//&nbsp;Set&nbsp;the&nbsp;enviroment&nbsp;variable&nbsp;for&nbsp;GD<br>putenv('GDFONTPATH='&nbsp;.&nbsp;realpath('.'));<br><br>//&nbsp;Name&nbsp;the&nbsp;font&nbsp;to&nbsp;be&nbsp;used&nbsp;(note&nbsp;the&nbsp;lack&nbsp;of&nbsp;the&nbsp;.ttf&nbsp;extension)<br>$font&nbsp;=&nbsp;'SomeFont';<br>&#63;&gt;  </code>
	 * @param string $text <p>Text to be inserted into image.</p>
	 * @param array $extrainfo <p></p> <b>Possible array indexes for <code>extrainfo</code></b>   Key Type Meaning     <code>linespacing</code> <code>float</code> Defines drawing linespacing
	 * @return array <p>This function returns an array defining the four points of the box, starting in the lower left and moving counter-clockwise:</p>   0 lower left x-coordinate   1 lower left y-coordinate   2 lower right x-coordinate   3 lower right y-coordinate   4 upper right x-coordinate   5 upper right y-coordinate   6 upper left x-coordinate   7 upper left y-coordinate
	 * @link https://php.net/manual/en/function.imagefttext.php
	 * @see imageftbbox(), imagettftext()
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function imagefttext($image, float $size, float $angle, int $x, int $y, int $color, string $fontfile, string $text, array $extrainfo = NULL): array {}

	/**
	 * Apply a gamma correction to a GD image
	 * <p>Applies gamma correction to the given gd <code>image</code> given an input and an output gamma.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param float $inputgamma <p>The input gamma.</p>
	 * @param float $outputgamma <p>The output gamma.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagegammacorrect.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagegammacorrect($image, float $inputgamma, float $outputgamma): bool {}

	/**
	 * Output GD image to browser or file
	 * <p>Outputs a GD image to the given <code>to</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param mixed $to <p>The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <b><code>NULL</code></b>, the raw image stream will be outputted directly.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagegd.php
	 * @see imagegd2()
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function imagegd($image, mixed $to = NULL): bool {}

	/**
	 * Output GD2 image to browser or file
	 * <p>Outputs a GD2 image to the given <code>to</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param mixed $to <p>The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <b><code>NULL</code></b>, the raw image stream will be outputted directly.</p>
	 * @param int $chunk_size <p>Chunk size.</p>
	 * @param int $type <p>Either <b><code>IMG_GD2_RAW</code></b> or <b><code>IMG_GD2_COMPRESSED</code></b>. Default is <b><code>IMG_GD2_RAW</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagegd2.php
	 * @see imagegd()
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function imagegd2($image, mixed $to = NULL, int $chunk_size = 128, int $type = IMG_GD2_RAW): bool {}

	/**
	 * Get the clipping rectangle
	 * <p><b>imagegetclip()</b> retrieves the current clipping rectangle, i.e. the area beyond which no pixels will be drawn.</p>
	 * @param resource $im
	 * @return array <p>The function returns an indexed array with the coordinates of the clipping rectangle which has the following entries:</p><ul> <li> x-coordinate of the upper left corner </li> <li> y-coordinate of the upper left corner </li> <li> x-coordinate of the lower right corner </li> <li> y-coordinate of the lower right corner </li> </ul>
	 * @link https://php.net/manual/en/function.imagegetclip.php
	 * @see imagesetclip()
	 * @since PHP 7 >= 7.2.0
	 */
	function imagegetclip($im): array {}

	/**
	 * Get the interpolation method
	 * <p>Gets the currently set interpolation method of the <code>image</code>.</p>
	 * @param \GdImage $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @return int <p>Returns the interpolation method.</p>
	 * @link https://php.net/manual/en/function.imagegetinterpolation.php
	 * @see imagesetinterpolation()
	 * @since PHP 8
	 */
	function imagegetinterpolation(\GdImage $image): int {}

	/**
	 * Output image to browser or file
	 * <p><b>imagegif()</b> creates the GIF file in <code>to</code> from the image <code>image</code>. The <code>image</code> argument is the return from the <code>imagecreate()</code> or <code>imagecreatefrom&#42;</code> function.</p><p>The image format will be GIF87a unless the image has been made transparent with <code>imagecolortransparent()</code>, in which case the image format will be GIF89a.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param mixed $to <p>The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <b><code>NULL</code></b>, the raw image stream will be outputted directly.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagegif.php
	 * @see imagepng(), imagewbmp(), imagejpeg(), imagetypes()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagegif($image, mixed $to = NULL): bool {}

	/**
	 * Captures the whole screen
	 * <p>Grabs a screenshot of the whole screen.</p><p><b>Note</b>:</p><p>This function is only available on Windows.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagegrabscreen.php
	 * @see imagegrabwindow()
	 * @since PHP 5 >= 5.2.2, PHP 7
	 */
	function imagegrabscreen() {}

	/**
	 * Captures a window
	 * <p>Grabs a window or its client area using a windows handle (HWND property in COM instance)</p><p><b>Note</b>:</p><p>This function is only available on Windows.</p>
	 * @param int $window_handle <p>The HWND window ID.</p>
	 * @param int $client_area <p>Include the client area of the application window.</p>
	 * @return resource <p>Returns an image resource identifier on success, <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagegrabwindow.php
	 * @see imagegrabscreen()
	 * @since PHP 5 >= 5.2.2, PHP 7
	 */
	function imagegrabwindow(int $window_handle, int $client_area = 0) {}

	/**
	 * Enable or disable interlace
	 * <p><b>imageinterlace()</b> turns the interlace bit on or off.</p><p>If the interlace bit is set and the image is used as a JPEG image, the image is created as a progressive JPEG.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $interlace <p>If non-zero, the image will be interlaced, else the interlace bit is turned off.</p>
	 * @return int <p>Returns 1 if the interlace bit is set for the image, 0 otherwise.</p>
	 * @link https://php.net/manual/en/function.imageinterlace.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imageinterlace($image, int $interlace = 0): int {}

	/**
	 * Finds whether an image is a truecolor image
	 * <p><b>imageistruecolor()</b> finds whether the image <code>image</code> is a truecolor image.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the <code>image</code> is truecolor, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.imageistruecolor.php
	 * @see imagecreatetruecolor(), imagepalettetotruecolor()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function imageistruecolor($image): bool {}

	/**
	 * Output image to browser or file
	 * <p><b>imagejpeg()</b> creates a JPEG file from the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param mixed $to <p>The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <b><code>NULL</code></b>, the raw image stream will be outputted directly.</p>
	 * @param int $quality <p><code>quality</code> is optional, and ranges from 0 (worst quality, smaller file) to 100 (best quality, biggest file). The default (<code>-1</code>) uses the default IJG quality value (about 75).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagejpeg.php
	 * @see imagepng(), imagegif(), imagewbmp(), imageinterlace(), imagetypes()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagejpeg($image, mixed $to = NULL, int $quality = -1): bool {}

	/**
	 * Set the alpha blending flag to use layering effects
	 * <p>Set the alpha blending flag to use layering effects.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $effect <p>One of the following constants:</p>  <b><code>IMG_EFFECT_REPLACE</code></b>   Use pixel replacement (equivalent of passing <b><code>TRUE</code></b> to <code>imagealphablending()</code>)    <b><code>IMG_EFFECT_ALPHABLEND</code></b>   Use normal pixel blending (equivalent of passing <b><code>FALSE</code></b> to <code>imagealphablending()</code>)    <b><code>IMG_EFFECT_NORMAL</code></b>   Same as <b><code>IMG_EFFECT_ALPHABLEND</code></b>.    <b><code>IMG_EFFECT_OVERLAY</code></b>   Overlay has the effect that black background pixels will remain black, white background pixels will remain white, but grey background pixels will take the colour of the foreground pixel.    <b><code>IMG_EFFECT_MULTIPLY</code></b>   Overlays with a multiply effect.
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagelayereffect.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function imagelayereffect($image, int $effect): bool {}

	/**
	 * Draw a line
	 * <p>Draws a line between the two given points.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $x1 <p>x-coordinate for first point.</p>
	 * @param int $y1 <p>y-coordinate for first point.</p>
	 * @param int $x2 <p>x-coordinate for second point.</p>
	 * @param int $y2 <p>y-coordinate for second point.</p>
	 * @param int $color <p>The line color. A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imageline.php
	 * @see imagecreatetruecolor(), imagecolorallocate()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imageline($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

	/**
	 * Load a new font
	 * <p><b>imageloadfont()</b> loads a user-defined bitmap and returns its identifier.</p>
	 * @param string $file <p>The font file format is currently binary and architecture dependent. This means you should generate the font files on the same type of CPU as the machine you are running PHP on.</p> <p></p> <b>Font file format</b>   byte position C data type description     byte 0-3 int number of characters in the font   byte 4-7 int  value of first character in the font (often 32 for space)    byte 8-11 int pixel width of each character   byte 12-15 int pixel height of each character   byte 16- char  array with character data, one byte per pixel in each character, for a total of (nchars&#42;width&#42;height) bytes.
	 * @return int <p>The font identifier which is always bigger than 5 to avoid conflicts with built-in fonts or <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imageloadfont.php
	 * @see imagefontwidth(), imagefontheight()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imageloadfont(string $file): int {}

	/**
	 * Draws an open polygon
	 * <p><b>imageopenpolygon()</b> draws an open polygon on the given <code>image</code>. Contrary to <code>imagepolygon()</code>, no line is drawn between the last and the first point.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param array $points <p>An array containing the polygon's vertices, e.g.:</p>   points[0] = x0   points[1] = y0   points[2] = x1   points[3] = y1
	 * @param int $num_points <p>Total number of points (vertices), which must be at least 3.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imageopenpolygon.php
	 * @see imagepolygon()
	 * @since PHP 7 >= 7.2.0
	 */
	function imageopenpolygon($image, array $points, int $num_points, int $color): bool {}

	/**
	 * Copy the palette from one image to another
	 * <p><b>imagepalettecopy()</b> copies the palette from the <code>source</code> image to the <code>destination</code> image.</p>
	 * @param resource $destination <p>The destination image resource.</p>
	 * @param resource $source <p>The source image resource.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.imagepalettecopy.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function imagepalettecopy($destination, $source): void {}

	/**
	 * Converts a palette based image to true color
	 * <p>Converts a palette based image, created by functions like <code>imagecreate()</code> to a true color image, like <code>imagecreatetruecolor()</code>.</p>
	 * @param resource $src
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the convertion was complete, or if the source image already is a true color image, otherwise <b><code>FALSE</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.imagepalettetotruecolor.php
	 * @see imagecreatetruecolor(), imageistruecolor()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function imagepalettetotruecolor($src): bool {}

	/**
	 * Output a PNG image to either the browser or a file
	 * <p>Outputs or saves a PNG image from the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param mixed $to <p>The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <b><code>NULL</code></b>, the raw image stream will be outputted directly.</p> <p><b>Note</b>:</p><p><b><code>NULL</code></b> is invalid if the <code>quality</code> and <code>filters</code> arguments are not used.</p>
	 * @param int $quality <p>Compression level: from 0 (no compression) to 9. The default (<code>-1</code>) uses the zlib compression default. For more information see the zlib manual.</p>
	 * @param int $filters <p>Allows reducing the PNG file size. It is a bitmask field which may be set to any combination of the <code>PNG_FILTER_XXX</code> constants. <b><code>PNG_NO_FILTER</code></b> or <b><code>PNG_ALL_FILTERS</code></b> may also be used to respectively disable or activate all filters. The default value (<code>-1</code>) disables filtering.</p> <b>Caution</b> <p>The <code>filters</code> parameter is ignored by system libgd.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagepng.php
	 * @see imagegif(), imagewbmp(), imagejpeg(), imagetypes(), imagesavealpha()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagepng($image, mixed $to = NULL, int $quality = -1, int $filters = -1): bool {}

	/**
	 * Draws a polygon
	 * <p><b>imagepolygon()</b> creates a polygon in the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param array $points <p>An array containing the polygon's vertices, e.g.:</p>   points[0] = x0   points[1] = y0   points[2] = x1   points[3] = y1
	 * @param int $num_points <p>Total number of points (vertices), which must be at least 3.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagepolygon.php
	 * @see imagefilledpolygon(), imageopenpolygon(), imagecreate(), imagecreatetruecolor()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagepolygon($image, array $points, int $num_points, int $color): bool {}

	/**
	 * Draw a rectangle
	 * <p><b>imagerectangle()</b> creates a rectangle starting at the specified coordinates.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $x1 <p>Upper left x coordinate.</p>
	 * @param int $y1 <p>Upper left y coordinate 0, 0 is the top left corner of the image.</p>
	 * @param int $x2 <p>Bottom right x coordinate.</p>
	 * @param int $y2 <p>Bottom right y coordinate.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagerectangle.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagerectangle($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

	/**
	 * Get or set the resolution of the image
	 * <p><b>imageresolution()</b> allows to set and get the resolution of an image in DPI (dots per inch). If none of the optional parameters is given, the current resolution is returned as indexed array. If only <code>res_x</code> is given, the horizontal and vertical resolution are set to this value. If both optional parameters are given, the horizontal and vertical resolution are set to these values, respectively.</p><p>The resolution is only used as meta information when images are read from and written to formats supporting this kind of information (curently PNG and JPEG). It does not affect any drawing operations. The default resolution for new images is 96 DPI.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @return mixed <p>When used as getter (first signature), it returns an indexed array of the horizontal and vertical resolution on success, or <b><code>FALSE</code></b> on failure. When used as setter (second signature), it returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imageresolution.php
	 * @since PHP 7 >= 7.2.0
	 */
	function imageresolution($image): mixed {}

	/**
	 * Rotate an image with a given angle
	 * <p>Rotates the <code>image</code> image using the given <code>angle</code> in degrees.</p><p>The center of rotation is the center of the image, and the rotated image may have different dimensions than the original image.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param float $angle <p>Rotation angle, in degrees. The rotation angle is interpreted as the number of degrees to rotate the image anticlockwise.</p>
	 * @param int $bgd_color <p>Specifies the color of the uncovered zone after the rotation</p>
	 * @param int $dummy <p>This parameter is unused.</p>
	 * @return resource|false <p>Returns an image resource for the rotated image, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagerotate.php
	 * @see imagesetinterpolation()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function imagerotate($image, float $angle, int $bgd_color, int $dummy = 0) {}

	/**
	 * Whether to retain full alpha channel information when saving PNG images
	 * <p><b>imagesavealpha()</b> sets the flag which determines whether to retain full alpha channel information (as opposed to single-color transparency) when saving PNG images.</p><p>Alphablending has to be disabled (<code>imagealphablending($im, false)</code>) to retain the alpha-channel in the first place.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param bool $saveflag <p>Whether to save the alpha channel or not. Defaults to <b><code>FALSE</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagesavealpha.php
	 * @see imagealphablending()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function imagesavealpha($image, bool $saveflag): bool {}

	/**
	 * Scale an image using the given new width and height
	 * <p><b>imagescale()</b> scales an image using the given interpolation algorithm.</p><p><b>Note</b>:</p><p>Unlike many of other image functions, <b>imagescale()</b> does not modify the passed <code>image</code>; instead, a <i>new</i> image is returned.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $new_width <p>The width to scale the image to.</p>
	 * @param int $new_height <p>The height to scale the image to. If omitted or negative, the aspect ratio will be preserved.</p>
	 * @param int $mode <p>One of <b><code>IMG_NEAREST_NEIGHBOUR</code></b>, <b><code>IMG_BILINEAR_FIXED</code></b>, <b><code>IMG_BICUBIC</code></b>, <b><code>IMG_BICUBIC_FIXED</code></b> or anything else (will use two pass).</p><p><b>Note</b>:  <b><code>IMG_WEIGHTED4</code></b> is not yet supported. </p>
	 * @return resource|false <p>Return the scaled image resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagescale.php
	 * @see imagecopyresized(), imagecopyresampled()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function imagescale($image, int $new_width, int $new_height = -1, int $mode = IMG_BILINEAR_FIXED) {}

	/**
	 * Set the brush image for line drawing
	 * <p><b>imagesetbrush()</b> sets the brush image to be used by all line drawing functions (such as <code>imageline()</code> and <code>imagepolygon()</code>) when drawing with the special colors <b><code>IMG_COLOR_BRUSHED</code></b> or <b><code>IMG_COLOR_STYLEDBRUSHED</code></b>.</p><p>You need not take special action when you are finished with a brush, but if you destroy the brush image (or let PHP destroy it), you must not use the <b><code>IMG_COLOR_BRUSHED</code></b> or <b><code>IMG_COLOR_STYLEDBRUSHED</code></b> colors until you have set a new brush image!</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param resource $brush <p>An image resource.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagesetbrush.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagesetbrush($image, $brush): bool {}

	/**
	 * Set the clipping rectangle
	 * <p><b>imagesetclip()</b> sets the current clipping rectangle, i.e. the area beyond which no pixels will be drawn.</p>
	 * @param resource $im
	 * @param int $x1 <p>The x-coordinate of the upper left corner.</p>
	 * @param int $y1 <p>The y-coordinate of the upper left corner.</p>
	 * @param int $x2 <p>The x-coordinate of the lower right corner.</p>
	 * @param int $y2 <p>The y-coordinate of the lower right corner.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagesetclip.php
	 * @see imagegetclip()
	 * @since PHP 7 >= 7.2.0
	 */
	function imagesetclip($im, int $x1, int $y1, int $x2, int $y2): bool {}

	/**
	 * Set the interpolation method
	 * <p>Sets the interpolation method, setting an interpolation method affects the rendering of various functions in GD, such as the <code>imagerotate()</code> function.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $method <p>The interpolation method, which can be one of the following:</p><ul> <li>  <b><code>IMG_BELL</code></b>: Bell filter.  </li> <li>  <b><code>IMG_BESSEL</code></b>: Bessel filter.  </li> <li>  <b><code>IMG_BICUBIC</code></b>: Bicubic interpolation.  </li> <li>  <b><code>IMG_BICUBIC_FIXED</code></b>: Fixed point implementation of the bicubic interpolation.  </li> <li>  <b><code>IMG_BILINEAR_FIXED</code></b>: Fixed point implementation of the bilinear interpolation (<code>default (also on image creation)</code>).  </li> <li>  <b><code>IMG_BLACKMAN</code></b>: Blackman window function.  </li> <li>  <b><code>IMG_BOX</code></b>: Box blur filter.  </li> <li>  <b><code>IMG_BSPLINE</code></b>: Spline interpolation.  </li> <li>  <b><code>IMG_CATMULLROM</code></b>: Cubic Hermite spline interpolation.  </li> <li>  <b><code>IMG_GAUSSIAN</code></b>: Gaussian function.  </li> <li>  <b><code>IMG_GENERALIZED_CUBIC</code></b>: Generalized cubic spline fractal interpolation.  </li> <li>  <b><code>IMG_HERMITE</code></b>: Hermite interpolation.  </li> <li>  <b><code>IMG_HAMMING</code></b>: Hamming filter.  </li> <li>  <b><code>IMG_HANNING</code></b>: Hanning filter.  </li> <li>  <b><code>IMG_MITCHELL</code></b>: Mitchell filter.  </li> <li>  <b><code>IMG_POWER</code></b>: Power interpolation.  </li> <li>  <b><code>IMG_QUADRATIC</code></b>: Inverse quadratic interpolation.  </li> <li>  <b><code>IMG_SINC</code></b>: Sinc function.  </li> <li>  <b><code>IMG_NEAREST_NEIGHBOUR</code></b>: Nearest neighbour interpolation.  </li> <li>  <b><code>IMG_WEIGHTED4</code></b>: Weighting filter.  </li> <li>  <b><code>IMG_TRIANGLE</code></b>: Triangle interpolation.  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagesetinterpolation.php
	 * @see imagegetinterpolation()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function imagesetinterpolation($image, int $method = IMG_BILINEAR_FIXED): bool {}

	/**
	 * Set a single pixel
	 * <p><b>imagesetpixel()</b> draws a pixel at the specified coordinate.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $x <p>x-coordinate.</p>
	 * @param int $y <p>y-coordinate.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagesetpixel.php
	 * @see imagecreatetruecolor(), imagecolorallocate(), imagecolorat()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagesetpixel($image, int $x, int $y, int $color): bool {}

	/**
	 * Set the style for line drawing
	 * <p><b>imagesetstyle()</b> sets the style to be used by all line drawing functions (such as <code>imageline()</code> and <code>imagepolygon()</code>) when drawing with the special color <b><code>IMG_COLOR_STYLED</code></b> or lines of images with color <b><code>IMG_COLOR_STYLEDBRUSHED</code></b>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param array $style <p>An array of pixel colors. You can use the <b><code>IMG_COLOR_TRANSPARENT</code></b> constant to add a transparent pixel. Note that <code>style</code> must not be an empty <code>array</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagesetstyle.php
	 * @see imagesetbrush(), imageline()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagesetstyle($image, array $style): bool {}

	/**
	 * Set the thickness for line drawing
	 * <p><b>imagesetthickness()</b> sets the thickness of the lines drawn when drawing rectangles, polygons, arcs etc. to <code>thickness</code> pixels.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $thickness <p>Thickness, in pixels.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagesetthickness.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagesetthickness($image, int $thickness): bool {}

	/**
	 * Set the tile image for filling
	 * <p><b>imagesettile()</b> sets the tile image to be used by all region filling functions (such as <code>imagefill()</code> and <code>imagefilledpolygon()</code>) when filling with the special color <b><code>IMG_COLOR_TILED</code></b>.</p><p>A tile is an image used to fill an area with a repeated pattern. <i>Any</i> GD image can be used as a tile, and by setting the transparent color index of the tile image with <code>imagecolortransparent()</code>, a tile allows certain parts of the underlying area to shine through can be created.</p><p>You need not take special action when you are finished with a tile, but if you destroy the tile image (or let PHP destroy it), you must not use the <b><code>IMG_COLOR_TILED</code></b> color until you have set a new tile image!</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param resource $tile <p>The image resource to be used as a tile.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagesettile.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagesettile($image, $tile): bool {}

	/**
	 * Draw a string horizontally
	 * <p>Draws a <code>string</code> at the given coordinates.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $font <p>Can be 1, 2, 3, 4, 5 for built-in fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your own font identifiers registered with <code>imageloadfont()</code>.</p>
	 * @param int $x <p>x-coordinate of the upper left corner.</p>
	 * @param int $y <p>y-coordinate of the upper left corner.</p>
	 * @param string $string <p>The string to be written.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagestring.php
	 * @see imagestringup(), imageloadfont(), imagettftext()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagestring($image, int $font, int $x, int $y, string $string, int $color): bool {}

	/**
	 * Draw a string vertically
	 * <p>Draws a <code>string</code> vertically at the given coordinates.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param int $font <p>Can be 1, 2, 3, 4, 5 for built-in fonts in latin2 encoding (where higher numbers corresponding to larger fonts) or any of your own font identifiers registered with <code>imageloadfont()</code>.</p>
	 * @param int $x <p>x-coordinate of the bottom left corner.</p>
	 * @param int $y <p>y-coordinate of the bottom left corner.</p>
	 * @param string $string <p>The string to be written.</p>
	 * @param int $color <p>A color identifier created with <code>imagecolorallocate()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagestringup.php
	 * @see imagestring(), imageloadfont()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagestringup($image, int $font, int $x, int $y, string $string, int $color): bool {}

	/**
	 * Get image width
	 * <p>Returns the width of the given <code>image</code> resource.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @return int <p>Return the width of the <code>image</code> or <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagesx.php
	 * @see imagecreatetruecolor(), getimagesize(), imagesy()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagesx($image): int {}

	/**
	 * Get image height
	 * <p>Returns the height of the given <code>image</code> resource.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @return int <p>Return the height of the <code>image</code> or <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.imagesy.php
	 * @see imagecreatetruecolor(), getimagesize(), imagesx()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagesy($image): int {}

	/**
	 * Convert a true color image to a palette image
	 * <p><b>imagetruecolortopalette()</b> converts a truecolor image to a palette image. The code for this function was originally drawn from the Independent JPEG Group library code, which is excellent. The code has been modified to preserve as much alpha channel information as possible in the resulting palette, in addition to preserving colors as well as possible. This does not work as well as might be hoped. It is usually best to simply produce a truecolor output image instead, which guarantees the highest output quality.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param bool $dither <p>Indicates if the image should be dithered - if it is <b><code>TRUE</code></b> then dithering will be used which will result in a more speckled image but with better color approximation.</p>
	 * @param int $ncolors <p>Sets the maximum number of colors that should be retained in the palette.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.imagetruecolortopalette.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function imagetruecolortopalette($image, bool $dither, int $ncolors): bool {}

	/**
	 * Give the bounding box of a text using TrueType fonts
	 * <p>This function calculates and returns the bounding box in pixels for a TrueType text.</p><p><b>Note</b>:</p><p><code>imageftbbox()</code> is an extended variant of <b>imagettfbbox()</b> which additionally supports the <code>extrainfo</code>.</p>
	 * @param float $size <p>The font size in points.</p>
	 * @param float $angle <p>Angle in degrees in which <code>text</code> will be measured.</p>
	 * @param string $fontfile <p>The path to the TrueType font you wish to use.</p> <p>Depending on which version of the GD library PHP is using, <i>when <code>fontfile</code> does not begin with a leading <code>/</code> then <code>.ttf</code> will be appended</i> to the filename and the library will attempt to search for that filename along a library-defined font path.</p> <p>When using versions of the GD library lower than 2.0.18, a <code>space</code> character, rather than a semicolon, was used as the 'path separator' for different font files. Unintentional use of this feature will result in the warning message: <code>Warning: Could not find/open font</code>. For these affected versions, the only solution is moving the font to a path which does not contain spaces.</p> <p>In many cases where a font resides in the same directory as the script using it the following trick will alleviate any include problems.</p> <code> &lt;&#63;php<br>//&nbsp;Set&nbsp;the&nbsp;environment&nbsp;variable&nbsp;for&nbsp;GD<br>putenv('GDFONTPATH='&nbsp;.&nbsp;realpath('.'));<br><br>//&nbsp;Name&nbsp;the&nbsp;font&nbsp;to&nbsp;be&nbsp;used&nbsp;(note&nbsp;the&nbsp;lack&nbsp;of&nbsp;the&nbsp;.ttf&nbsp;extension)<br>$font&nbsp;=&nbsp;'SomeFont';<br>&#63;&gt;  </code>  <p><b>Note</b>:</p><p>Note that open_basedir does <i>not</i> apply to <code>fontfile</code>.</p>
	 * @param string $text <p>The string to be measured.</p>
	 * @return array <p><b>imagettfbbox()</b> returns an array with 8 elements representing four points making the bounding box of the text on success and <b><code>FALSE</code></b> on error.</p>   key contents     0 lower left corner, X position   1 lower left corner, Y position   2 lower right corner, X position   3 lower right corner, Y position   4 upper right corner, X position   5 upper right corner, Y position   6 upper left corner, X position   7 upper left corner, Y position   <p>The points are relative to the <i>text</i> regardless of the <code>angle</code>, so "upper left" means in the top left-hand corner seeing the text horizontally.</p>
	 * @link https://php.net/manual/en/function.imagettfbbox.php
	 * @see imagettftext(), imageftbbox()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagettfbbox(float $size, float $angle, string $fontfile, string $text): array {}

	/**
	 * Write text to the image using TrueType fonts
	 * <p>Writes the given <code>text</code> into the image using TrueType fonts.</p><p><b>Note</b>:</p><p><code>imagefttext()</code> is an extended variant of <b>imagettftext()</b> which additionally supports the <code>extrainfo</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param float $size <p>The font size in points.</p>
	 * @param float $angle <p>The angle in degrees, with 0 degrees being left-to-right reading text. Higher values represent a counter-clockwise rotation. For example, a value of 90 would result in bottom-to-top reading text.</p>
	 * @param int $x <p>The coordinates given by <code>x</code> and <code>y</code> will define the basepoint of the first character (roughly the lower-left corner of the character). This is different from the <code>imagestring()</code>, where <code>x</code> and <code>y</code> define the upper-left corner of the first character. For example, "top left" is 0, 0.</p>
	 * @param int $y <p>The y-ordinate. This sets the position of the fonts baseline, not the very bottom of the character.</p>
	 * @param int $color <p>The color index. Using the negative of a color index has the effect of turning off antialiasing. See <code>imagecolorallocate()</code>.</p>
	 * @param string $fontfile <p>The path to the TrueType font you wish to use.</p> <p>Depending on which version of the GD library PHP is using, <i>when <code>fontfile</code> does not begin with a leading <code>/</code> then <code>.ttf</code> will be appended</i> to the filename and the library will attempt to search for that filename along a library-defined font path.</p> <p>When using versions of the GD library lower than 2.0.18, a <code>space</code> character, rather than a semicolon, was used as the 'path separator' for different font files. Unintentional use of this feature will result in the warning message: <code>Warning: Could not find/open font</code>. For these affected versions, the only solution is moving the font to a path which does not contain spaces.</p> <p>In many cases where a font resides in the same directory as the script using it the following trick will alleviate any include problems.</p> <code> &lt;&#63;php<br>//&nbsp;Set&nbsp;the&nbsp;environment&nbsp;variable&nbsp;for&nbsp;GD<br>putenv('GDFONTPATH='&nbsp;.&nbsp;realpath('.'));<br><br>//&nbsp;Name&nbsp;the&nbsp;font&nbsp;to&nbsp;be&nbsp;used&nbsp;(note&nbsp;the&nbsp;lack&nbsp;of&nbsp;the&nbsp;.ttf&nbsp;extension)<br>$font&nbsp;=&nbsp;'SomeFont';<br>&#63;&gt;  </code>  <p><b>Note</b>:</p><p>Note that open_basedir does <i>not</i> apply to <code>fontfile</code>.</p>
	 * @param string $text <p>The text string in UTF-8 encoding.</p> <p>May include decimal numeric character references (of the form: &amp;#8364;) to access characters in a font beyond position 127. The hexadecimal format (like &amp;#xA9;) is supported. Strings in UTF-8 encoding can be passed directly.</p> <p>Named entities, such as &amp;copy;, are not supported. Consider using <code>html_entity_decode()</code> to decode these named entities into UTF-8 strings.</p> <p>If a character is used in the string which is not supported by the font, a hollow rectangle will replace the character.</p>
	 * @return array <p>Returns an array with 8 elements representing four points making the bounding box of the text. The order of the points is lower left, lower right, upper right, upper left. The points are relative to the text regardless of the angle, so "upper left" means in the top left-hand corner when you see the text horizontally. Returns <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.imagettftext.php
	 * @see imagettfbbox(), imagefttext()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imagettftext($image, float $size, float $angle, int $x, int $y, int $color, string $fontfile, string $text): array {}

	/**
	 * Return the image types supported by this PHP build
	 * <p>Returns the image types supported by the current PHP installation.</p>
	 * @return int <p>Returns a bit-field corresponding to the image formats supported by the version of GD linked into PHP. The following bits are returned, <b><code>IMG_BMP</code></b> | <b><code>IMG_GIF</code></b> | <b><code>IMG_JPG</code></b> | <b><code>IMG_PNG</code></b> | <b><code>IMG_WBMP</code></b> | <b><code>IMG_XPM</code></b> | <b><code>IMG_WEBP</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagetypes.php
	 * @see gd_info()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function imagetypes(): int {}

	/**
	 * Output image to browser or file
	 * <p><b>imagewbmp()</b> outputs or save a WBMP version of the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param mixed $to <p>The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <b><code>NULL</code></b>, the raw image stream will be outputted directly.</p>
	 * @param int $foreground <p>You can set the foreground color with this parameter by setting an identifier obtained from <code>imagecolorallocate()</code>. The default foreground color is black.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagewbmp.php
	 * @see image2wbmp(), imagepng(), imagegif(), imagejpeg(), imagetypes()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function imagewbmp($image, mixed $to = NULL, int $foreground = NULL): bool {}

	/**
	 * Output a WebP image to browser or file
	 * <p>Outputs or saves a WebP version of the given <code>image</code>.</p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param mixed $to <p>The path or an open stream resource (which is automatically being closed after this function returns) to save the file to. If not set or <b><code>NULL</code></b>, the raw image stream will be outputted directly.</p>
	 * @param int $quality <p><code>quality</code> ranges from 0 (worst quality, smaller file) to 100 (best quality, biggest file).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagewebp.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function imagewebp($image, mixed $to = NULL, int $quality = 80): bool {}

	/**
	 * Output an XBM image to browser or file
	 * <p>Outputs or save an XBM version of the given <code>image</code>.</p><p><b>Note</b>:  <b>imagexbm()</b> doesn't apply any padding, so the image width has to be a multiple of 8. This restriction does no longer apply as of PHP 7.0.9. </p>
	 * @param resource $image <p>An image resource, returned by one of the image creation functions, such as <code>imagecreatetruecolor()</code>.</p>
	 * @param mixed $filename <p>The path to save the file to, given as <code>string</code>. If <b><code>NULL</code></b>, the raw image stream will be output directly.</p> <p>The <code>filename</code> (without the .xbm extension) is also used for the C identifiers of the XBM, whereby non alphanumeric characters of the current locale are substituted by underscores. If <code>filename</code> is set to <b><code>NULL</code></b>, <code>image</code> is used to build the C identifiers.</p>
	 * @param int $foreground <p>You can set the foreground color with this parameter by setting an identifier obtained from <code>imagecolorallocate()</code>. The default foreground color is black. All other colors are treated as background.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.imagexbm.php
	 * @since PHP 5, PHP 7
	 */
	function imagexbm($image, mixed $filename, int $foreground = NULL): bool {}

	/**
	 * Embeds binary IPTC data into a JPEG image
	 * <p>Embeds binary IPTC data into a JPEG image.</p>
	 * @param string $iptcdata <p>The data to be written.</p>
	 * @param string $jpeg_file_name <p>Path to the JPEG image.</p>
	 * @param int $spool <p>Spool flag. If the spool flag is less than 2 then the JPEG will be returned as a string. Otherwise the JPEG will be printed to STDOUT.</p>
	 * @return mixed <p>If <code>spool</code> is less than 2, the JPEG will be returned, or <b><code>FALSE</code></b> on failure. Otherwise returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.iptcembed.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function iptcembed(string $iptcdata, string $jpeg_file_name, int $spool = 0): mixed {}

	/**
	 * Parse a binary IPTC block into single tags
	 * <p>Parses an IPTC block into its single tags.</p>
	 * @param string $iptcblock <p>A binary IPTC block.</p>
	 * @return array <p>Returns an array using the tagmarker as an index and the value as the value. It returns <b><code>FALSE</code></b> on error or if no IPTC data was found.</p>
	 * @link https://php.net/manual/en/function.iptcparse.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function iptcparse(string $iptcblock): array {}

	/**
	 * Convert JPEG image file to WBMP image file
	 * <p>Converts a JPEG file into a WBMP file.</p>
	 * @param string $jpegname <p>Path to JPEG file.</p>
	 * @param string $wbmpname <p>Path to destination WBMP file.</p>
	 * @param int $dest_height <p>Destination image height.</p>
	 * @param int $dest_width <p>Destination image width.</p>
	 * @param int $threshold <p>Threshold value, between 0 and 8 (inclusive).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.jpeg2wbmp.php
	 * @see png2wbmp()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function jpeg2wbmp(string $jpegname, string $wbmpname, int $dest_height, int $dest_width, int $threshold): bool {}

	/**
	 * Convert PNG image file to WBMP image file
	 * <p>Converts a PNG file into a WBMP file.</p>
	 * @param string $pngname <p>Path to PNG file.</p>
	 * @param string $wbmpname <p>Path to destination WBMP file.</p>
	 * @param int $dest_height <p>Destination image height.</p>
	 * @param int $dest_width <p>Destination image width.</p>
	 * @param int $threshold <p>Threshold value, between 0 and 8 (inclusive).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><b>Caution</b><p>However, if libgd fails to output the image, this function returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.png2wbmp.php
	 * @see jpeg2wbmp()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function png2wbmp(string $pngname, string $wbmpname, int $dest_height, int $dest_width, int $threshold): bool {}

	/**
	 * When the bundled version of GD is used this is 1 otherwise its set to 0.
	 */
	define('GD_BUNDLED', null);

	/**
	 * The GD "extra" version (beta/rc..) PHP was compiled against.
	 */
	define('GD_EXTRA_VERSION', null);

	/**
	 * The GD major version PHP was compiled against.
	 */
	define('GD_MAJOR_VERSION', null);

	/**
	 * The GD minor version PHP was compiled against.
	 */
	define('GD_MINOR_VERSION', null);

	/**
	 * The GD release version PHP was compiled against.
	 */
	define('GD_RELEASE_VERSION', null);

	/**
	 * The GD version PHP was compiled against.
	 */
	define('GD_VERSION', null);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_BMP', 6);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_GIF', 1);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_ICO', 17);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_IFF', 14);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_JB2', 12);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_JP2', 10);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_JPC', 9);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_JPEG', 2);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_JPEG2000', 9);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_JPX', 11);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_PNG', 3);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_PSD', 5);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_SWC', 13);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_SWF', 4);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_TIFF_II', 7);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_TIFF_MM', 8);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_WBMP', 15);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.   (Available as of PHP 7.1.0)
	 */
	define('IMAGETYPE_WEBP', 18);

	/**
	 * Image type constant used by the <code>image_type_to_mime_type()</code> and <code>image_type_to_extension()</code> functions.
	 */
	define('IMAGETYPE_XBM', 16);

	/**
	 * An affine transformation type constant used by the <code>imageaffinematrixget()</code> function.
	 */
	define('IMG_AFFINE_ROTATE', null);

	/**
	 * An affine transformation type constant used by the <code>imageaffinematrixget()</code> function.
	 */
	define('IMG_AFFINE_SCALE', null);

	/**
	 * An affine transformation type constant used by the <code>imageaffinematrixget()</code> function.
	 */
	define('IMG_AFFINE_SHEAR_HORIZONTAL', null);

	/**
	 * An affine transformation type constant used by the <code>imageaffinematrixget()</code> function.
	 */
	define('IMG_AFFINE_SHEAR_VERTICAL', null);

	/**
	 * An affine transformation type constant used by the <code>imageaffinematrixget()</code> function.
	 */
	define('IMG_AFFINE_TRANSLATE', null);

	/**
	 * A style constant used by the <code>imagefilledarc()</code> function.
	 */
	define('IMG_ARC_CHORD', null);

	/**
	 * A style constant used by the <code>imagefilledarc()</code> function.
	 */
	define('IMG_ARC_EDGED', null);

	/**
	 * A style constant used by the <code>imagefilledarc()</code> function.
	 */
	define('IMG_ARC_NOFILL', null);

	/**
	 * A style constant used by the <code>imagefilledarc()</code> function.
	 */
	define('IMG_ARC_PIE', null);

	/**
	 * A style constant used by the <code>imagefilledarc()</code> function.  <p><b>Note</b>:</p><p>This constant has the same value as <b><code>IMG_ARC_PIE</code></b></p>
	 */
	define('IMG_ARC_ROUNDED', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_BELL', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_BESSEL', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_BICUBIC', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_BICUBIC_FIXED', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_BILINEAR_FIXED', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_BLACKMAN', null);

	/**
	 * Used as a return value by <code>imagetypes()</code>
	 */
	define('IMG_BMP', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_BOX', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_BSPLINE', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_CATMULLROM', null);

	/**
	 * Special color option which can be used instead of a color allocated with <code>imagecolorallocate()</code> or <code>imagecolorallocatealpha()</code>.
	 */
	define('IMG_COLOR_BRUSHED', null);

	/**
	 * Special color option which can be used instead of a color allocated with <code>imagecolorallocate()</code> or <code>imagecolorallocatealpha()</code>.
	 */
	define('IMG_COLOR_STYLED', null);

	/**
	 * Special color option which can be used instead of a color allocated with <code>imagecolorallocate()</code> or <code>imagecolorallocatealpha()</code>.
	 */
	define('IMG_COLOR_STYLEDBRUSHED', null);

	/**
	 * Special color option which can be used instead of a color allocated with <code>imagecolorallocate()</code> or <code>imagecolorallocatealpha()</code>.
	 */
	define('IMG_COLOR_TILED', null);

	/**
	 * Special color option which can be used instead of a color allocated with <code>imagecolorallocate()</code> or <code>imagecolorallocatealpha()</code>.
	 */
	define('IMG_COLOR_TRANSPARENT', null);

	/**
	 * Alpha blending effect used by the <code>imagelayereffect()</code> function.
	 */
	define('IMG_EFFECT_ALPHABLEND', null);

	/**
	 * Alpha blending effect used by the <code>imagelayereffect()</code> function.
	 */
	define('IMG_EFFECT_MULTIPLY', null);

	/**
	 * Alpha blending effect used by the <code>imagelayereffect()</code> function.
	 */
	define('IMG_EFFECT_NORMAL', null);

	/**
	 * Alpha blending effect used by the <code>imagelayereffect()</code> function.
	 */
	define('IMG_EFFECT_OVERLAY', null);

	/**
	 * Alpha blending effect used by the <code>imagelayereffect()</code> function.
	 */
	define('IMG_EFFECT_REPLACE', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_BRIGHTNESS', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_COLORIZE', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_CONTRAST', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_EDGEDETECT', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_EMBOSS', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_GAUSSIAN_BLUR', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_GRAYSCALE', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_MEAN_REMOVAL', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_NEGATE', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_PIXELATE', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.   (Available as of PHP 7.4.0)
	 */
	define('IMG_FILTER_SCATTER', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_SELECTIVE_BLUR', null);

	/**
	 * Special GD filter used by the <code>imagefilter()</code> function.
	 */
	define('IMG_FILTER_SMOOTH', null);

	/**
	 * Used together with <code>imageflip()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_FLIP_BOTH', null);

	/**
	 * Used together with <code>imageflip()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_FLIP_HORIZONTAL', null);

	/**
	 * Used together with <code>imageflip()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_FLIP_VERTICAL', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_GAUSSIAN', null);

	/**
	 * A type constant used by the <code>imagegd2()</code> function.
	 */
	define('IMG_GD2_COMPRESSED', null);

	/**
	 * A type constant used by the <code>imagegd2()</code> function.
	 */
	define('IMG_GD2_RAW', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_GENERALIZED_CUBIC', null);

	/**
	 * Used as a return value by <code>imagetypes()</code>
	 */
	define('IMG_GIF', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_HAMMING', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_HANNING', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_HERMITE', null);

	/**
	 * Used as a return value by <code>imagetypes()</code>  <p><b>Note</b>:</p><p>This constant has the same value as <b><code>IMG_JPG</code></b></p>
	 */
	define('IMG_JPEG', null);

	/**
	 * Used as a return value by <code>imagetypes()</code>
	 */
	define('IMG_JPG', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_MITCHELL', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_NEAREST_NEIGHBOUR', null);

	/**
	 * Used as a return value by <code>imagetypes()</code>
	 */
	define('IMG_PNG', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_POWER', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_QUADRATIC', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_SINC', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_TRIANGLE', null);

	/**
	 * Used as a return value by <code>imagetypes()</code>
	 */
	define('IMG_WBMP', null);

	/**
	 * Used as a return value by <code>imagetypes()</code>   Available as of PHP 7.0.10.
	 */
	define('IMG_WEBP', null);

	/**
	 * Used together with <code>imagesetinterpolation()</code>, available as of PHP 5.5.0.
	 */
	define('IMG_WEIGHTED4', null);

	/**
	 * Used as a return value by <code>imagetypes()</code>
	 */
	define('IMG_XPM', null);

	/**
	 * A special PNG filter, used by the <code>imagepng()</code> function.
	 */
	define('PNG_ALL_FILTERS', null);

	/**
	 * A special PNG filter, used by the <code>imagepng()</code> function.
	 */
	define('PNG_FILTER_AVG', null);

	/**
	 * A special PNG filter, used by the <code>imagepng()</code> function.
	 */
	define('PNG_FILTER_NONE', null);

	/**
	 * A special PNG filter, used by the <code>imagepng()</code> function.
	 */
	define('PNG_FILTER_PAETH', null);

	/**
	 * A special PNG filter, used by the <code>imagepng()</code> function.
	 */
	define('PNG_FILTER_SUB', null);

	/**
	 * A special PNG filter, used by the <code>imagepng()</code> function.
	 */
	define('PNG_FILTER_UP', null);

	/**
	 * A special PNG filter, used by the <code>imagepng()</code> function.
	 */
	define('PNG_NO_FILTER', null);

}
