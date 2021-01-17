<?php



namespace {

	/**
	 * Determine the type of an image
	 * <p><b>exif_imagetype()</b> reads the first bytes of an image and checks its signature.</p><p><b>exif_imagetype()</b> can be used to avoid calls to other exif functions with unsupported file types or in conjunction with $_SERVER['HTTP_ACCEPT'] to check whether or not the viewer is able to see a specific image in the browser.</p>
	 * @param string $filename The image being checked.
	 * @return int|false <p>When a correct signature is found, the appropriate constant value will be returned otherwise the return value is <b><code>false</code></b>. The return value is the same value that <code>getimagesize()</code> returns in index 2 but <b>exif_imagetype()</b> is much faster.</p><p><b>Note</b>:</p><p><b>exif_imagetype()</b> will emit an <b><code>E_NOTICE</code></b> and return <b><code>false</code></b> if it is unable to read enough bytes from the file to determine the image type.</p>
	 * @link https://php.net/manual/en/function.exif-imagetype.php
	 * @see image_type_to_mime_type(), getimagesize()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function exif_imagetype(string $filename): int|false {}

	/**
	 * Reads the EXIF headers from an image file
	 * <p><b>exif_read_data()</b> reads the EXIF headers from an image file. This way you can read meta data generated by digital cameras.</p><p>EXIF headers tend to be present in JPEG/TIFF images generated by digital cameras, but unfortunately each digital camera maker has a different idea of how to actually tag their images, so you can't always rely on a specific Exif header being present.</p><p><code>Height</code> and <code>Width</code> are computed the same way <code>getimagesize()</code> does so their values must not be part of any header returned. Also, <code>html</code> is a height/width text string to be used inside normal HTML.</p><p>When an Exif header contains a Copyright note, this itself can contain two values. As the solution is inconsistent in the Exif 2.10 standard, the <code>COMPUTED</code> section will return both entries <code>Copyright.Photographer</code> and <code>Copyright.Editor</code> while the <code>IFD0</code> sections contains the byte array with the NULL character that splits both entries. Or just the first entry if the datatype was wrong (normal behaviour of Exif). The <code>COMPUTED</code> will also contain the entry <code>Copyright</code> which is either the original copyright string, or a comma separated list of the photo and editor copyright.</p><p>The tag <code>UserComment</code> has the same problem as the Copyright tag. It can store two values. First the encoding used, and second the value itself. If so the <code>IFD</code> section only contains the encoding or a byte array. The <code>COMPUTED</code> section will store both in the entries <code>UserCommentEncoding</code> and <code>UserComment</code>. The entry <code>UserComment</code> is available in both cases so it should be used in preference to the value in <code>IFD0</code> section.</p><p><b>exif_read_data()</b> also validates EXIF data tags according to the EXIF specification (http://exif.org/Exif2-2.PDF, page 20).</p><p><b>Note</b>:</p><p>Windows Me/XP can both wipe the Exif headers when connecting to a camera.</p>
	 * @param resource|string $file <p>The location of the image file. This can either be a path to the file (stream wrappers are also supported as usual) or a stream <code>resource</code>.</p>
	 * @param string|null $required_sections <p>Is a comma separated list of sections that need to be present in file to produce a result <code>array</code>. If none of the requested sections could be found the return value is <b><code>false</code></b>.</p>   FILE FileName, FileSize, FileDateTime, SectionsFound   COMPUTED  html, Width, Height, IsColor, and more if available. Height and Width are computed the same way <code>getimagesize()</code> does so their values must not be part of any header returned. Also, <code>html</code> is a height/width text string to be used inside normal HTML.    ANY_TAG Any information that has a Tag e.g. <code>IFD0</code>, <code>EXIF</code>, ...   IFD0  All tagged data of IFD0. In normal imagefiles this contains image size and so forth.    THUMBNAIL  A file is supposed to contain a thumbnail if it has a second <code>IFD</code>. All tagged information about the embedded thumbnail is stored in this section.    COMMENT Comment headers of JPEG images.   EXIF  The EXIF section is a sub section of <code>IFD0</code>. It contains more detailed information about an image. Most of these entries are digital camera related.
	 * @param bool $as_arrays <p>Specifies whether or not each section becomes an array. The <code>required_sections</code> <code>COMPUTED</code>, <code>THUMBNAIL</code>, and <code>COMMENT</code> always become arrays as they may contain values whose names conflict with other sections.</p>
	 * @param bool $read_thumbnail <p>When set to <b><code>true</code></b> the thumbnail itself is read. Otherwise, only the tagged data is read.</p>
	 * @return array|false <p>It returns an associative <code>array</code> where the array indexes are the header names and the array values are the values associated with those headers. If no data can be returned, <b>exif_read_data()</b> will return <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.exif-read-data.php
	 * @see exif_thumbnail(), getimagesize()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function exif_read_data($file, string|null $required_sections = null, bool $as_arrays = false, bool $read_thumbnail = false): array|false {}

	/**
	 * Get the header name for an index
	 * @param int $index <p>The Tag ID for which a Tag Name will be looked up.</p>
	 * @return string|false <p>Returns the header name, or <b><code>false</code></b> if <code>index</code> is not a defined EXIF tag id.</p>
	 * @link https://php.net/manual/en/function.exif-tagname.php
	 * @see exif_imagetype()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function exif_tagname(int $index): string|false {}

	/**
	 * Retrieve the embedded thumbnail of an image
	 * <p><b>exif_thumbnail()</b> reads the embedded thumbnail of an image.</p><p>If you want to deliver thumbnails through this function, you should send the mimetype information using the <code>header()</code> function.</p><p>It is possible that <b>exif_thumbnail()</b> cannot create an image but can determine its size. In this case, the return value is <b><code>false</code></b> but <code>width</code> and <code>height</code> are set.</p>
	 * @param resource|string $file <p>The location of the image file. This can either be a path to the file or a stream <code>resource</code>.</p>
	 * @param int $width <p>The return width of the returned thumbnail.</p>
	 * @param int $height <p>The returned height of the returned thumbnail.</p>
	 * @param int $image_type <p>The returned image type of the returned thumbnail. This is either TIFF or JPEG.</p>
	 * @return string|false <p>Returns the embedded thumbnail, or <b><code>false</code></b> if the image contains no thumbnail.</p>
	 * @link https://php.net/manual/en/function.exif-thumbnail.php
	 * @see exif_read_data(), image_type_to_mime_type()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function exif_thumbnail($file, int &$width = null, int &$height = null, int &$image_type = null): string|false {}

	/**
	 * Alias of exif_read_data()
	 * <p>This function is an alias of: <code>exif_read_data()</code>.</p>
	 * @param resource|string $file <p>The location of the image file. This can either be a path to the file (stream wrappers are also supported as usual) or a stream <code>resource</code>.</p>
	 * @param string|null $required_sections <p>Is a comma separated list of sections that need to be present in file to produce a result <code>array</code>. If none of the requested sections could be found the return value is <b><code>false</code></b>.</p>   FILE FileName, FileSize, FileDateTime, SectionsFound   COMPUTED  html, Width, Height, IsColor, and more if available. Height and Width are computed the same way <code>getimagesize()</code> does so their values must not be part of any header returned. Also, <code>html</code> is a height/width text string to be used inside normal HTML.    ANY_TAG Any information that has a Tag e.g. <code>IFD0</code>, <code>EXIF</code>, ...   IFD0  All tagged data of IFD0. In normal imagefiles this contains image size and so forth.    THUMBNAIL  A file is supposed to contain a thumbnail if it has a second <code>IFD</code>. All tagged information about the embedded thumbnail is stored in this section.    COMMENT Comment headers of JPEG images.   EXIF  The EXIF section is a sub section of <code>IFD0</code>. It contains more detailed information about an image. Most of these entries are digital camera related.
	 * @param bool $as_arrays <p>Specifies whether or not each section becomes an array. The <code>required_sections</code> <code>COMPUTED</code>, <code>THUMBNAIL</code>, and <code>COMMENT</code> always become arrays as they may contain values whose names conflict with other sections.</p>
	 * @param bool $read_thumbnail <p>When set to <b><code>true</code></b> the thumbnail itself is read. Otherwise, only the tagged data is read.</p>
	 * @return array|false
	 * @link https://php.net/manual/en/function.read-exif-data.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function read_exif_data($file, string|null $required_sections = null, bool $as_arrays = false, bool $read_thumbnail = false): array|false {}

	/**
	 * This constant has a value of <code>1</code> if the mbstring is enabled, otherwise it has a value of <code>0</code>.
	 */
	define('EXIF_USE_MBSTRING', 1);

}
