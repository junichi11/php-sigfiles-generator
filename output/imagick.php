<?php



namespace {

	/**
	 * @link http://php.net/manual/en/class.imagick.php
	 * @since PECL imagick 2.0.0
	 */
	class Imagick implements \Iterator {

		/**
		 * @var int Black color
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLOR_BLACK = 11;

		/**
		 * @var int Blue color
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLOR_BLUE = 12;

		/**
		 * @var int Cyan color
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLOR_CYAN = 13;

		/**
		 * @var int Green color
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLOR_GREEN = 14;

		/**
		 * @var int Red color
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLOR_RED = 15;

		/**
		 * @var int Yellow color
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLOR_YELLOW = 16;

		/**
		 * @var int Magenta color
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLOR_MAGENTA = 17;

		/**
		 * @var int Color's opacity
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLOR_OPACITY = 18;

		/**
		 * @var int Color's alpha
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLOR_ALPHA = 19;

		/**
		 * @var int Color's fuzz
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLOR_FUZZ = 20;

		/**
		 * @var int Unrecognized dispose type
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISPOSE_UNRECOGNIZED = 0;

		/**
		 * @var int Undefined dispose type
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISPOSE_UNDEFINED = 0;

		/**
		 * @var int No dispose type defined
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISPOSE_NONE = 1;

		/**
		 * @var int Dispose background
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISPOSE_BACKGROUND = 2;

		/**
		 * @var int Dispose previous
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISPOSE_PREVIOUS = 3;

		/**
		 * @var int The default composite operator
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_DEFAULT = 40;

		/**
		 * @var int Undefined composite operator
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_UNDEFINED = 0;

		/**
		 * @var int No composite operator defined
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_NO = 1;

		/**
		 * @var int The result of image + image
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_ADD = 2;

		/**
		 * @var int The result is the same shape as image, with composite image obscuring image where the image shapes overlap
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_ATOP = 3;

		/**
		 * @var int Blends the image
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_BLEND = 4;

		/**
		 * @var int The same as COMPOSITE_MULTIPLY, except the source is converted to grayscale first.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_BUMPMAP = 5;

		/**
		 * @var int Makes the target image transparent
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_CLEAR = 7;

		/**
		 * @var int Darkens the destination image to reflect the source image
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COLORBURN = 8;

		/**
		 * @var int Brightens the destination image to reflect the source image
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COLORDODGE = 9;

		/**
		 * @var int Colorizes the target image using the composite image
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COLORIZE = 10;

		/**
		 * @var int Copies black from the source to target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COPYBLACK = 11;

		/**
		 * @var int Copies blue from the source to target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COPYBLUE = 12;

		/**
		 * @var int Copies the source image on the target image
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COPY = 13;

		/**
		 * @var int Copies cyan from the source to target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COPYCYAN = 14;

		/**
		 * @var int Copies green from the source to target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COPYGREEN = 15;

		/**
		 * @var int Copies magenta from the source to target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COPYMAGENTA = 16;

		/**
		 * @var int Copies opacity from the source to target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COPYOPACITY = 17;

		/**
		 * @var int Copies red from the source to target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COPYRED = 18;

		/**
		 * @var int Copies yellow from the source to target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_COPYYELLOW = 19;

		/**
		 * @var int Darkens the target image
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_DARKEN = 20;

		/**
		 * @var int The part of the destination lying inside of the source is composited over the source and replaces the destination
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_DSTATOP = 21;

		/**
		 * @var int The target is left untouched
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_DST = 22;

		/**
		 * @var int The parts inside the source replace the target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_DSTIN = 23;

		/**
		 * @var int The parts outside the source replace the target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_DSTOUT = 24;

		/**
		 * @var int Target replaces the source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_DSTOVER = 25;

		/**
		 * @var int Subtracts the darker of the two constituent colors from the lighter
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_DIFFERENCE = 26;

		/**
		 * @var int Shifts target image pixels as defined by the source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_DISPLACE = 27;

		/**
		 * @var int Dissolves the source in to the target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_DISSOLVE = 28;

		/**
		 * @var int Produces an effect similar to that of imagick::COMPOSITE_DIFFERENCE, but appears as lower contrast
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_EXCLUSION = 29;

		/**
		 * @var int Multiplies or screens the colors, dependent on the source color value
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_HARDLIGHT = 30;

		/**
		 * @var int Modifies the hue of the target as defined by source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_HUE = 31;

		/**
		 * @var int Composites source into the target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_IN = 32;

		/**
		 * @var int Lightens the target as defined by source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_LIGHTEN = 33;

		/**
		 * @var int Luminizes the target as defined by source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_LUMINIZE = 35;

		/**
		 * @var int Subtracts the source from the target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_MINUS = 36;

		/**
		 * @var int Modulates the target brightness, saturation and hue as defined by source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_MODULATE = 37;

		/**
		 * @var int Multiplies the target to the source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_MULTIPLY = 38;

		/**
		 * @var int Composites outer parts of the source on the target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_OUT = 39;

		/**
		 * @var int Composites source over the target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_OVER = 40;

		/**
		 * @var int Overlays the source on the target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_OVERLAY = 41;

		/**
		 * @var int Adds the source to the target
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_PLUS = 42;

		/**
		 * @var int Replaces the target with the source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_REPLACE = 43;

		/**
		 * @var int Saturates the target as defined by the source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_SATURATE = 44;

		/**
		 * @var int The source and destination are complemented and then multiplied and then replace the destination
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_SCREEN = 45;

		/**
		 * @var int Darkens or lightens the colors, dependent on the source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_SOFTLIGHT = 46;

		/**
		 * @var int The part of the source lying inside of the destination is composited onto the destination
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_SRCATOP = 47;

		/**
		 * @var int The source is copied to the destination
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_SRC = 48;

		/**
		 * @var int The part of the source lying inside of the destination replaces the destination
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_SRCIN = 49;

		/**
		 * @var int The part of the source lying outside of the destination replaces the destination
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_SRCOUT = 50;

		/**
		 * @var int The source replaces the destination
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_SRCOVER = 51;

		/**
		 * @var int Subtract the colors in the source image from the destination image
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_SUBTRACT = 52;

		/**
		 * @var int The source is composited on the target as defined by source threshold
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_THRESHOLD = 53;

		/**
		 * @var int The part of the source that lies outside of the destination is combined with the part of the destination that lies outside of the source
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPOSITE_XOR = 54;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const MONTAGEMODE_FRAME = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const MONTAGEMODE_UNFRAME = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const MONTAGEMODE_CONCATENATE = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STYLE_NORMAL = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STYLE_ITALIC = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STYLE_OBLIQUE = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STYLE_ANY = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_POINT = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_BOX = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_TRIANGLE = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_HERMITE = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_HANNING = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_HAMMING = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_BLACKMAN = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_GAUSSIAN = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_QUADRATIC = 9;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_CUBIC = 10;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_CATROM = 11;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_MITCHELL = 12;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_LANCZOS = 22;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_BESSEL = 13;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILTER_SINC = 14;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_BILEVEL = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_GRAYSCALE = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_GRAYSCALEMATTE = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_PALETTE = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_PALETTEMATTE = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_TRUECOLOR = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_TRUECOLORMATTE = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_COLORSEPARATION = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_COLORSEPARATIONMATTE = 9;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const IMGTYPE_OPTIMIZE = 10;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RESOLUTION_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RESOLUTION_PIXELSPERINCH = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RESOLUTION_PIXELSPERCENTIMETER = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_NO = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_BZIP = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_FAX = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_GROUP4 = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_JPEG = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_JPEG2000 = 9;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_LOSSLESSJPEG = 10;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_LZW = 11;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_RLE = 12;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_ZIP = 13;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_DXT1 = 3;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_DXT3 = 4;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COMPRESSION_DXT5 = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PAINT_POINT = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PAINT_REPLACE = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PAINT_FLOODFILL = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PAINT_FILLTOBORDER = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PAINT_RESET = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const GRAVITY_NORTHWEST = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const GRAVITY_NORTH = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const GRAVITY_NORTHEAST = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const GRAVITY_WEST = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const GRAVITY_CENTER = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const GRAVITY_EAST = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const GRAVITY_SOUTHWEST = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const GRAVITY_SOUTH = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const GRAVITY_SOUTHEAST = 9;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STRETCH_NORMAL = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STRETCH_ULTRACONDENSED = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STRETCH_CONDENSED = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STRETCH_SEMICONDENSED = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STRETCH_SEMIEXPANDED = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STRETCH_EXPANDED = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STRETCH_EXTRAEXPANDED = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STRETCH_ULTRAEXPANDED = 9;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const STRETCH_ANY = 10;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALIGN_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALIGN_LEFT = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALIGN_CENTER = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALIGN_RIGHT = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DECORATION_NO = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DECORATION_UNDERLINE = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DECORATION_OVERLINE = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DECORATION_LINETROUGH = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const NOISE_UNIFORM = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const NOISE_GAUSSIAN = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const NOISE_MULTIPLICATIVEGAUSSIAN = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const NOISE_IMPULSE = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const NOISE_LAPLACIAN = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const NOISE_POISSON = 6;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const NOISE_RANDOM = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_RED = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_GRAY = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_CYAN = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_GREEN = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_MAGENTA = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_BLUE = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_YELLOW = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_ALPHA = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_OPACITY = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_MATTE = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_BLACK = 32;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_INDEX = 32;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_ALL = 134217727;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const CHANNEL_DEFAULT = 134217719;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const METRIC_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const METRIC_MEANABSOLUTEERROR = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const METRIC_MEANSQUAREERROR = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const METRIC_PEAKABSOLUTEERROR = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const METRIC_PEAKSIGNALTONOISERATIO = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const METRIC_ROOTMEANSQUAREDERROR = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PIXEL_CHAR = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PIXEL_DOUBLE = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PIXEL_FLOAT = 3;

		/**
		 * @var int Only available for ImageMagick &lt; 7.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PIXEL_INTEGER = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PIXEL_LONG = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PIXEL_QUANTUM = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PIXEL_SHORT = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_ADD = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_AND = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_DIVIDE = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_LEFTSHIFT = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_MAX = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_MIN = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_MULTIPLY = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_OR = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_RIGHTSHIFT = 9;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_SET = 10;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_SUBTRACT = 11;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_XOR = 12;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_POW = 13;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_LOG = 14;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_THRESHOLD = 15;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_THRESHOLDBLACK = 16;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_THRESHOLDWHITE = 17;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_GAUSSIANNOISE = 18;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_IMPULSENOISE = 19;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_LAPLACIANNOISE = 20;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_MULTIPLICATIVENOISE = 21;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_POISSONNOISE = 22;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_UNIFORMNOISE = 23;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_COSINE = 24;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_SINE = 25;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const EVALUATE_ADDMODULUS = 26;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_RGB = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_GRAY = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_TRANSPARENT = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_OHTA = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_LAB = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_XYZ = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_YCBCR = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_YCC = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_YIQ = 9;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_YPBPR = 10;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_YUV = 11;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_CMYK = 12;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_SRGB = 13;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_HSB = 14;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_HSL = 15;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_HWB = 16;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_REC601LUMA = 17;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_REC709LUMA = 19;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_LOG = 21;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const COLORSPACE_CMY = 22;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_BACKGROUND = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_CONSTANT = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_EDGE = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_MIRROR = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_TILE = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_TRANSPARENT = 8;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_MASK = 9;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_BLACK = 10;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_GRAY = 11;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_WHITE = 12;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.3 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_HORIZONTALTILE = 13;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.3 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_VERTICALTILE = 14;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_ROTATE = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_SHEAR = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_ROLL = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_HUE = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_SATURATION = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_BRIGHTNESS = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_GAMMA = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_SPIFF = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_DULL = 9;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_GRAYSCALE = 10;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_QUANTIZE = 11;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_DESPECKLE = 12;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_REDUCENOISE = 13;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_ADDNOISE = 14;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_SHARPEN = 15;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_BLUR = 16;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_THRESHOLD = 17;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_EDGEDETECT = 18;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_SPREAD = 19;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_SOLARIZE = 20;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_SHADE = 21;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_RAISE = 22;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_SEGMENT = 23;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_SWIRL = 24;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_IMPLODE = 25;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_WAVE = 26;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_OILPAINT = 27;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_CHARCOALDRAWING = 28;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PREVIEW_JPEG = 29;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RENDERINGINTENT_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RENDERINGINTENT_SATURATION = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RENDERINGINTENT_PERCEPTUAL = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RENDERINGINTENT_ABSOLUTE = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RENDERINGINTENT_RELATIVE = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERLACE_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERLACE_NO = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERLACE_LINE = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERLACE_PLANE = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERLACE_PARTITION = 4;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERLACE_GIF = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERLACE_JPEG = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERLACE_PNG = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILLRULE_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILLRULE_EVENODD = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FILLRULE_NONZERO = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PATHUNITS_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PATHUNITS_USERSPACE = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PATHUNITS_USERSPACEONUSE = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const PATHUNITS_OBJECTBOUNDINGBOX = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LINECAP_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LINECAP_BUTT = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LINECAP_ROUND = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LINECAP_SQUARE = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LINEJOIN_UNDEFINED = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LINEJOIN_MITER = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LINEJOIN_ROUND = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LINEJOIN_BEVEL = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RESOURCETYPE_UNDEFINED = 0;

		/**
		 * @var int Set the maximum width &#42; height of an image that can reside in the pixel cache memory.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RESOURCETYPE_AREA = 1;

		/**
		 * @var int Set maximum amount of disk space in bytes permitted for use by the pixel cache.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RESOURCETYPE_DISK = 2;

		/**
		 * @var int Set maximum number of open pixel cache files.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RESOURCETYPE_FILE = 3;

		/**
		 * @var int Set maximum amount of memory map in bytes to allocate for the pixel cache.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RESOURCETYPE_MAP = 4;

		/**
		 * @var int Set maximum amount of memory in bytes to allocate for the pixel cache from the heap.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RESOURCETYPE_MEMORY = 5;

		/**
		 * @var int Set maximum parallel threads. This constant is available if Imagick has been compiled against ImageMagick version 6.7.8 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const RESOURCETYPE_THREAD = 6;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_UNDEFINED = 0;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_COALESCE = 1;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_COMPAREANY = 2;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_COMPARECLEAR = 3;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_COMPAREOVERLAY = 4;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_DISPOSE = 5;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_OPTIMIZE = 6;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_OPTIMIZEPLUS = 8;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_OPTIMIZEIMAGE = 7;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_OPTIMIZETRANS = 9;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_REMOVEDUPS = 10;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_REMOVEZERO = 11;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_COMPOSITE = 12;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.7 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_MERGE = 13;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.7 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_FLATTEN = 14;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.7 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const LAYERMETHOD_MOSAIC = 15;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ORIENTATION_UNDEFINED = 0;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ORIENTATION_TOPLEFT = 1;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ORIENTATION_TOPRIGHT = 2;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ORIENTATION_BOTTOMRIGHT = 3;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ORIENTATION_BOTTOMLEFT = 4;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ORIENTATION_LEFTTOP = 5;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ORIENTATION_RIGHTTOP = 6;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ORIENTATION_RIGHTBOTTOM = 7;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ORIENTATION_LEFTBOTTOM = 8;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_UNDEFINED = 0;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_AFFINE = 1;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_AFFINEPROJECTION = 2;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_ARC = 9;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_BILINEAR = 6;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_PERSPECTIVE = 4;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_PERSPECTIVEPROJECTION = 5;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_SCALEROTATETRANSLATE = 3;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_POLYNOMIAL = 8;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_POLAR = 10;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_DEPOLAR = 11;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_BARREL = 14;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_BARRELINVERSE = 15;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_SHEPARDS = 16;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DISTORTION_SENTINEL = 18;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALPHACHANNEL_ACTIVATE = 1;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALPHACHANNEL_DEACTIVATE = 4;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALPHACHANNEL_RESET = 7;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALPHACHANNEL_SET = 8;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALPHACHANNEL_UNDEFINED = 0;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALPHACHANNEL_COPY = 3;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALPHACHANNEL_EXTRACT = 5;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALPHACHANNEL_OPAQUE = 6;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALPHACHANNEL_SHAPE = 9;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const ALPHACHANNEL_TRANSPARENT = 10;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_UNDEFINED = 0;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_BARYCENTRIC = 1;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_BILINEAR = 7;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_POLYNOMIAL = 8;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_SPEPARDS = 16;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const SPARSECOLORMETHOD_VORONOI = 18;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FUNCTION_UNDEFINED = 0;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FUNCTION_POLYNOMIAL = 1;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.9 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const FUNCTION_SINUSOID = 2;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERPOLATE_UNDEFINED = 0;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERPOLATE_AVERAGE = 1;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERPOLATE_BICUBIC = 2;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERPOLATE_BILINEAR = 3;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERPOLATE_FILTER = 4;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERPOLATE_INTEGER = 5;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERPOLATE_MESH = 6;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERPOLATE_NEARESTNEIGHBOR = 7;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.3.4 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const INTERPOLATE_SPLINE = 8;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DITHERMETHOD_UNDEFINED = 0;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DITHERMETHOD_NO = 1;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DITHERMETHOD_RIEMERSMA = 2;

		/**
		 * @var int This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
		 * @link http://php.net/manual/en/imagick.constants.php
		 */
		const DITHERMETHOD_FLOYDSTEINBERG = 3;

		/**
		 * The Imagick constructor
		 * <p>Creates an Imagick instance for a specified image or set of images.</p>
		 * @param mixed $files <p>The path to an image to load or an array of paths. Paths can include wildcards for file names, or can be URLs.</p>
		 * @return self <p>Returns a new Imagick object on success.</p>
		 * @link http://php.net/manual/en/imagick.construct.php
		 * @since PECL imagick 2.0.0
		 */
		public function __construct($files = NULL) {}

		/**
		 * Returns the image as a string
		 * <p>Returns the current image as string. This will only return a single image; it should not be used for Imagick objects that contain multiple images e.g. an animated GIF or PDF with multiple pages.</p>
		 * @return string <p>Returns the string content on success or an empty string on failure.</p>
		 * @link http://php.net/manual/en/imagick.tostring.php
		 * @since No version information available, might only be in Git
		 */
		public function __toString(): string {}

		/**
		 * Adds adaptive blur filter to image
		 * <p>Adds an adaptive blur filter to image. The intensity of an adaptive blur depends is dramatically decreased at edge of the image, whereas a standard blur is uniform across the image. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param float $radius <p>The radius of the Gaussian, in pixels, not counting the center pixel. Provide a value of 0 and the radius will be chosen automagically.</p>
		 * @param float $sigma <p>The standard deviation of the Gaussian, in pixels.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.adaptiveblurimage.php
		 * @see Imagick::blurImage(), Imagick::motionBlurImage(), Imagick::radialBlurImage()
		 * @since PECL imagick 2.0.0
		 */
		public function adaptiveBlurImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Adaptively resize image with data dependent triangulation
		 * <p>Adaptively resize image with data-dependent triangulation. Avoids blurring across sharp color changes. Most useful when used to shrink images slightly to a slightly smaller "web size"; may not look good when a full-sized image is adaptively resized to a thumbnail. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p><p><b>Note</b>:  The behavior of the parameter <code>bestfit</code> changed in Imagick 3.0.0. Before this version given dimensions 400x400 an image of dimensions 200x150 would be left untouched. In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as this is the "best fit" for the given dimensions. If <code>bestfit</code> parameter is used both width and height must be given. </p>
		 * @param int $columns <p>The number of columns in the scaled image.</p>
		 * @param int $rows <p>The number of rows in the scaled image.</p>
		 * @param bool $bestfit <p>Whether to fit the image inside a bounding box.</p>
		 * @param bool $legacy
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.adaptiveresizeimage.php
		 * @see Imagick::chopImage(), Imagick::cropImage(), Imagick::magnifyImage(), Imagick::minifyImage(), Imagick::resizeImage(), Imagick::scaleImage(), Imagick::shaveImage(), Imagick::thumbnailImage(), Imagick::trimImage()
		 * @since PECL imagick 2.0.0
		 */
		public function adaptiveResizeImage(int $columns, int $rows, bool $bestfit = FALSE, bool $legacy = FALSE): bool {}

		/**
		 * Adaptively sharpen the image
		 * <p>Adaptively sharpen the image by sharpening more intensely near image edges and less intensely far from edges. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param float $radius <p>The radius of the Gaussian, in pixels, not counting the center pixel. Use 0 for auto-select.</p>
		 * @param float $sigma <p>The standard deviation of the Gaussian, in pixels.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.adaptivesharpenimage.php
		 * @see Imagick::sharpenImage()
		 * @since PECL imagick 2.0.0
		 */
		public function adaptiveSharpenImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Selects a threshold for each pixel based on a range of intensity
		 * <p>Selects an individual threshold for each pixel based on the range of intensity values in its local neighborhood. This allows for thresholding of an image whose global intensity histogram doesn't contain distinctive peaks.</p>
		 * @param int $width <p>Width of the local neighborhood.</p>
		 * @param int $height <p>Height of the local neighborhood.</p>
		 * @param int $offset <p>The mean offset</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.adaptivethresholdimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function adaptiveThresholdImage(int $width, int $height, int $offset): bool {}

		/**
		 * Adds new image to Imagick object image list
		 * <p>Adds new image to Imagick object from the current position of the source object. After the operation iterator position is moved at the end of the list.</p>
		 * @param \Imagick $source <p>The source Imagick object</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.addimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function addImage(\Imagick $source): bool {}

		/**
		 * Adds random noise to the image
		 * <p>Adds random noise to the image.</p>
		 * @param int $noise_type <p>The type of the noise. Refer to this list of noise constants.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.addnoiseimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function addNoiseImage(int $noise_type, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Transforms an image
		 * <p>Transforms an image as dictated by the affine matrix.</p>
		 * @param \ImagickDraw $matrix <p>The affine matrix</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.affinetransformimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function affineTransformImage(\ImagickDraw $matrix): bool {}

		/**
		 * Animates an image or images
		 * <p>This method animates the image onto a local or remote X server. This method is not available on Windows. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @param string $x_server <p>X server address</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.animateimages.php
		 * @see Imagick::displayImage()
		 * @since No version information available, might only be in Git
		 */
		public function animateImages(string $x_server): bool {}

		/**
		 * Annotates an image with text
		 * <p>Annotates an image with text.</p>
		 * @param \ImagickDraw $draw_settings <p>The ImagickDraw object that contains settings for drawing the text</p>
		 * @param float $x <p>Horizontal offset in pixels to the left of text</p>
		 * @param float $y <p>Vertical offset in pixels to the baseline of text</p>
		 * @param float $angle <p>The angle at which to write the text</p>
		 * @param string $text <p>The string to draw</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.annotateimage.php
		 * @see ImagickDraw::annotation(), ImagickDraw::setFont()
		 * @since PECL imagick 2.0.0
		 */
		public function annotateImage(\ImagickDraw $draw_settings, float $x, float $y, float $angle, string $text): bool {}

		/**
		 * Append a set of images
		 * <p>Append a set of images into one larger image.</p>
		 * @param bool $stack <p>Whether to stack the images vertically. By default (or if <b><code>FALSE</code></b> is specified) images are stacked left-to-right. If <code>stack</code> is <b><code>TRUE</code></b>, images are stacked top-to-bottom.</p>
		 * @return Imagick <p>Returns Imagick instance on success.</p>
		 * @link http://php.net/manual/en/imagick.appendimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function appendImages(bool $stack): \Imagick {}

		/**
		 * Description
		 * <p>Adjusts the levels of a particular image channel by scaling the minimum and maximum values to the full quantum range.</p>
		 * @param int $channel <p>Which channel should the auto-levelling should be done on.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.autolevelimage.php
		 * @since No version information available, might only be in Git
		 */
		public function autoLevelImage(int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Average a set of images
		 * <p>Average a set of images.</p>
		 * @return Imagick <p>Returns a new Imagick object on success.</p>
		 * @link http://php.net/manual/en/imagick.averageimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function averageImages(): \Imagick {}

		/**
		 * Forces all pixels below the threshold into black
		 * <p>Is like Imagick::thresholdImage() but forces all pixels below the threshold into black while leaving all pixels above the threshold unchanged.</p>
		 * @param mixed $threshold <p>The threshold below which everything turns black</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.blackthresholdimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function blackThresholdImage($threshold): bool {}

		/**
		 * Description
		 * <p>Mutes the colors of the image to simulate a scene at nighttime in the moonlight.</p>
		 * @param float $factor
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.blueshiftimage.php
		 * @since No version information available, might only be in Git
		 */
		public function blueShiftImage(float $factor = 1.5): bool {}

		/**
		 * Adds blur filter to image
		 * <p>Adds blur filter to image. Optional third parameter to blur a specific channel.</p>
		 * @param float $radius <p>Blur radius</p>
		 * @param float $sigma <p>Standard deviation</p>
		 * @param int $channel <p>The Channeltype constant. When not supplied, all channels are blurred.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.blurimage.php
		 * @see Imagick::adaptiveBlurImage(), Imagick::motionBlurImage(), Imagick::radialBlurImage()
		 * @since PECL imagick 2.0.0
		 */
		public function blurImage(float $radius, float $sigma, int $channel = NULL): bool {}

		/**
		 * Surrounds the image with a border
		 * <p>Surrounds the image with a border of the color defined by the bordercolor ImagickPixel object.</p>
		 * @param mixed $bordercolor <p>ImagickPixel object or a string containing the border color</p>
		 * @param int $width <p>Border width</p>
		 * @param int $height <p>Border height</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.borderimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function borderImage($bordercolor, int $width, int $height): bool {}

		/**
		 * Description
		 * <p>Change the brightness and/or contrast of an image. It converts the brightness and contrast parameters into slope and intercept and calls a polynomical function to apply to the image.</p>
		 * @param float $brightness
		 * @param float $contrast
		 * @param int $channel
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.brightnesscontrastimage.php
		 * @since No version information available, might only be in Git
		 */
		public function brightnessContrastImage(float $brightness, float $contrast, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Simulates a charcoal drawing
		 * <p>Simulates a charcoal drawing.</p>
		 * @param float $radius <p>The radius of the Gaussian, in pixels, not counting the center pixel</p>
		 * @param float $sigma <p>The standard deviation of the Gaussian, in pixels</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.charcoalimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function charcoalImage(float $radius, float $sigma): bool {}

		/**
		 * Removes a region of an image and trims
		 * <p>Removes a region of an image and collapses the image to occupy the removed portion.</p>
		 * @param int $width <p>Width of the chopped area</p>
		 * @param int $height <p>Height of the chopped area</p>
		 * @param int $x <p>X origo of the chopped area</p>
		 * @param int $y <p>Y origo of the chopped area</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.chopimage.php
		 * @see Imagick::cropImage()
		 * @since PECL imagick 2.0.0
		 */
		public function chopImage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * Description
		 * <p>Restricts the color range from 0 to the quantum depth.</p>
		 * @param int $channel
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/imagick.clampimage.php
		 * @since No version information available, might only be in Git
		 */
		public function clampImage(int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Clears all resources associated to Imagick object
		 * <p>Clears all resources associated to Imagick object</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.clear.php
		 * @since PECL imagick 2.0.0
		 */
		public function clear(): bool {}

		/**
		 * Clips along the first path from the 8BIM profile
		 * <p>Clips along the first path from the 8BIM profile, if present.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.clipimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function clipImage(): bool {}

		/**
		 * Description
		 * <p>Clips along the named paths from the 8BIM profile, if present. Later operations take effect inside the path. Id may be a number if preceded with #, to work on a numbered path, e.g., "#1" to use the first path.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $pathname
		 * @param string $inside
		 * @return void
		 * @link http://php.net/manual/en/imagick.clipimagepath.php
		 * @since No version information available, might only be in Git
		 */
		public function clipImagePath(string $pathname, string $inside): void {}

		/**
		 * Clips along the named paths from the 8BIM profile
		 * <p>Clips along the named paths from the 8BIM profile, if present. Later operations take effect inside the path. It may be a number if preceded with #, to work on a numbered path, e.g., "#1" to use the first path.</p>
		 * @param string $pathname <p>The name of the path</p>
		 * @param bool $inside <p>If <b><code>TRUE</code></b> later operations take effect inside clipping path. Otherwise later operations take effect outside clipping path.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.clippathimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function clipPathImage(string $pathname, bool $inside): bool {}

		/**
		 * Makes an exact copy of the Imagick object
		 * <p>Makes an exact copy of the Imagick object.</p><p>This function has been <i>DEPRECATED</i> as of imagick 3.1.0 in favour of using the clone keyword.</p>
		 * @return Imagick <p>A copy of the Imagick object is returned.</p>
		 * @link http://php.net/manual/en/imagick.clone.php
		 * @since PECL imagick 2.0.0
		 */
		public function clone(): \Imagick {}

		/**
		 * Replaces colors in the image
		 * <p>Replaces colors in the image from a color lookup table. Optional second parameter to replace colors in a specific channel. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @param \Imagick $lookup_table <p>Imagick object containing the color lookup table</p>
		 * @param int $channel <p>The Channeltype constant. When not supplied, default channels are replaced.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.clutimage.php
		 * @see Imagick::adaptiveBlurImage(), Imagick::motionBlurImage(), Imagick::radialBlurImage()
		 * @since PECL imagick 2.0.0
		 */
		public function clutImage(\Imagick $lookup_table, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Composites a set of images
		 * <p>Composites a set of images while respecting any page offsets and disposal methods. GIF, MIFF, and MNG animation sequences typically start with an image background and each subsequent image varies in size and offset. Returns a new Imagick object where each image in the sequence is the same size as the first and composited with the next image in the sequence.</p>
		 * @return Imagick <p>Returns a new Imagick object on success.</p>
		 * @link http://php.net/manual/en/imagick.coalesceimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function coalesceImages(): \Imagick {}

		/**
		 * Changes the color value of any pixel that matches target
		 * <p>Changes the color value of any pixel that matches target and is an immediate neighbor.</p>
		 * @param mixed $fill <p>ImagickPixel object containing the fill color</p>
		 * @param float $fuzz <p>The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill.</p>
		 * @param mixed $bordercolor <p>ImagickPixel object containing the border color</p>
		 * @param int $x <p>X start position of the floodfill</p>
		 * @param int $y <p>Y start position of the floodfill</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.colorfloodfillimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function colorFloodfillImage($fill, float $fuzz, $bordercolor, int $x, int $y): bool {}

		/**
		 * Description
		 * <p>Apply color transformation to an image. The method permits saturation changes, hue rotation, luminance to alpha, and various other effects. Although variable-sized transformation matrices can be used, typically one uses a 5x5 matrix for an RGBA image and a 6x6 for CMYKA (or RGBA with offsets). The matrix is similar to those used by Adobe Flash except offsets are in column 6 rather than 5 (in support of CMYKA images) and offsets are normalized (divide Flash offset by 255)</p>
		 * @param array $color_matrix
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.colormatriximage.php
		 * @since No version information available, might only be in Git
		 */
		public function colorMatrixImage(array $color_matrix = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Blends the fill color with the image
		 * <p>Blends the fill color with each pixel in the image.</p>
		 * @param mixed $colorize <p>ImagickPixel object or a string containing the colorize color</p>
		 * @param mixed $opacity <p>ImagickPixel object or an float containing the opacity value. 1.0 is fully opaque and 0.0 is fully transparent.</p>
		 * @param bool $legacy
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.colorizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function colorizeImage($colorize, $opacity, bool $legacy = FALSE): bool {}

		/**
		 * Combines one or more images into a single image
		 * <p>Combines one or more images into a single image. The grayscale value of the pixels of each image in the sequence is assigned in order to the specified channels of the combined image. The typical ordering would be image 1 =&gt; Red, 2 =&gt; Green, 3 =&gt; Blue, etc.</p>
		 * @param int $channelType <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return Imagick <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.combineimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function combineImages(int $channelType): \Imagick {}

		/**
		 * Adds a comment to your image
		 * <p>Adds a comment to your image.</p>
		 * @param string $comment <p>The comment to add</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.commentimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function commentImage(string $comment): bool {}

		/**
		 * Returns the difference in one or more images
		 * <p>Compares one or more images and returns the difference image.</p>
		 * @param \Imagick $image <p>Imagick object containing the image to compare.</p>
		 * @param int $channelType <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @param int $metricType <p>One of the metric type constants.</p>
		 * @return array <p>Array consisting of <code>new_wand</code> and <code>distortion</code>.</p>
		 * @link http://php.net/manual/en/imagick.compareimagechannels.php
		 * @since PECL imagick 2.0.0
		 */
		public function compareImageChannels(\Imagick $image, int $channelType, int $metricType): array {}

		/**
		 * Returns the maximum bounding region between images
		 * <p>Compares each image with the next in a sequence and returns the maximum bounding region of any pixel differences it discovers. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param int $method <p>One of the layer method constants.</p>
		 * @return Imagick <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.compareimagelayers.php
		 * @see Imagick::optimizeImageLayers(), Imagick::writeImages(), Imagick::writeImage()
		 * @since PECL imagick 2.0.0
		 */
		public function compareImageLayers(int $method): \Imagick {}

		/**
		 * Compares an image to a reconstructed image
		 * <p>Returns an array containing a reconstructed image and the difference between images.</p>
		 * @param \Imagick $compare <p>An image to compare to.</p>
		 * @param int $metric <p>Provide a valid metric type constant. Refer to this list of metric constants.</p>
		 * @return array <p>Returns an array containing a reconstructed image and the difference between images.</p>
		 * @link http://php.net/manual/en/imagick.compareimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function compareImages(\Imagick $compare, int $metric): array {}

		/**
		 * Composite one image onto another
		 * <p>Composite one image onto another at the specified offset. Any extra arguments needed for the compose algorithm should passed to setImageArtifact with 'compose:args' as the first parameter and the data as the second parameter.</p>
		 * @param \Imagick $composite_object <p>Imagick object which holds the composite image</p>
		 * @param int $composite
		 * @param int $x <p>The column offset of the composited image</p>
		 * @param int $y <p>The row offset of the composited image</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.compositeimage.php
		 * @see Imagick::setImageArtifact()
		 * @since PECL imagick 2.0.0
		 */
		public function compositeImage(\Imagick $composite_object, int $composite, int $x, int $y, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Change the contrast of the image
		 * <p>Enhances the intensity differences between the lighter and darker elements of the image. Set sharpen to a value other than 0 to increase the image contrast otherwise the contrast is reduced.</p>
		 * @param bool $sharpen <p>The sharpen value</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.contrastimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function contrastImage(bool $sharpen): bool {}

		/**
		 * Enhances the contrast of a color image
		 * <p>Enhances the contrast of a color image by adjusting the pixels color to span the entire range of colors available. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param float $black_point <p>The black point.</p>
		 * @param float $white_point <p>The white point.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. <b><code>Imagick::CHANNEL_ALL</code></b>. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.contraststretchimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function contrastStretchImage(float $black_point, float $white_point, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Applies a custom convolution kernel to the image
		 * <p>Applies a custom convolution kernel to the image.</p>
		 * @param array $kernel <p>The convolution kernel</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.convolveimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function convolveImage(array $kernel, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Get the number of images
		 * <p>Returns the number of images.</p>
		 * @param int $mode <p>An unused argument. Currently there is a non-particularly well defined feature in PHP where calling count() on a countable object might (or might not) require this method to accept a parameter. This parameter is here to be conformant with the interface of countable, even though the param is not used.</p>
		 * @return int <p>Returns the number of images.</p>
		 * @link http://php.net/manual/en/imagick.count.php
		 * @since No version information available, might only be in Git
		 */
		public function count(int $mode = 0): int {}

		/**
		 * Extracts a region of the image
		 * <p>Extracts a region of the image.</p>
		 * @param int $width <p>The width of the crop</p>
		 * @param int $height <p>The height of the crop</p>
		 * @param int $x <p>The X coordinate of the cropped region's top left corner</p>
		 * @param int $y <p>The Y coordinate of the cropped region's top left corner</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.cropimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function cropImage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * Creates a crop thumbnail
		 * <p>Creates a fixed size thumbnail by first scaling the image up or down and cropping a specified area from the center.</p>
		 * @param int $width <p>The width of the thumbnail</p>
		 * @param int $height <p>The Height of the thumbnail</p>
		 * @param bool $legacy
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.cropthumbnailimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function cropThumbnailImage(int $width, int $height, bool $legacy = FALSE): bool {}

		/**
		 * Returns a reference to the current Imagick object
		 * <p>Returns reference to the current imagick object with image pointer at the correct sequence.</p>
		 * @return Imagick <p>Returns self on success.</p>
		 * @link http://php.net/manual/en/imagick.current.php
		 * @since PECL imagick 2.0.0
		 */
		public function current(): \Imagick {}

		/**
		 * Displaces an image's colormap
		 * <p>Displaces an image's colormap by a given number of positions. If you cycle the colormap a number of times you can produce a psychedelic effect.</p>
		 * @param int $displace <p>The amount to displace the colormap.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.cyclecolormapimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function cycleColormapImage(int $displace): bool {}

		/**
		 * Deciphers an image
		 * <p>Deciphers image that has been enciphered before. The image must be enciphered using <code>Imagick::encipherImage()</code>. This method is available if Imagick has been compiled against ImageMagick version 6.3.9 or newer.</p>
		 * @param string $passphrase <p>The passphrase</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.decipherimage.php
		 * @see Imagick::encipherImage()
		 * @since No version information available, might only be in Git
		 */
		public function decipherImage(string $passphrase): bool {}

		/**
		 * Returns certain pixel differences between images
		 * <p>Compares each image with the next in a sequence and returns the maximum bounding region of any pixel differences it discovers.</p>
		 * @return Imagick <p>Returns a new Imagick object on success.</p>
		 * @link http://php.net/manual/en/imagick.deconstructimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function deconstructImages(): \Imagick {}

		/**
		 * Delete image artifact
		 * <p>Deletes an artifact associated with the image. The difference between image properties and image artifacts is that properties are public and artifacts are private. This method is available if Imagick has been compiled against ImageMagick version 6.5.7 or newer.</p>
		 * @param string $artifact <p>The name of the artifact to delete</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.deleteimageartifact.php
		 * @see Imagick::setImageArtifact(), Imagick::getImageArtifact()
		 * @since No version information available, might only be in Git
		 */
		public function deleteImageArtifact(string $artifact): bool {}

		/**
		 * Description
		 * <p>Deletes an image property.</p>
		 * @param string $name <p>The name of the property to delete.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.deleteimageproperty.php
		 * @since No version information available, might only be in Git
		 */
		public function deleteImageProperty(string $name): bool {}

		/**
		 * Removes skew from the image
		 * <p>This method can be used to remove skew from for example scanned images where the paper was not properly placed on the scanning surface. This method is available if Imagick has been compiled against ImageMagick version 6.4.5 or newer.</p>
		 * @param float $threshold <p>Deskew threshold</p>
		 * @return bool
		 * @link http://php.net/manual/en/imagick.deskewimage.php
		 * @since No version information available, might only be in Git
		 */
		public function deskewImage(float $threshold): bool {}

		/**
		 * Reduces the speckle noise in an image
		 * <p>Reduces the speckle noise in an image while preserving the edges of the original image.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.despeckleimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function despeckleImage(): bool {}

		/**
		 * Destroys the Imagick object
		 * <p>Destroys the Imagick object and frees all resources associated with it. This method is deprecated in favour of Imagick::clear.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.destroy.php
		 * @since PECL imagick 2.0.0
		 */
		public function destroy(): bool {}

		/**
		 * Displays an image
		 * <p>This method displays an image on a X server.</p>
		 * @param string $servername <p>The X server name</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.displayimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function displayImage(string $servername): bool {}

		/**
		 * Displays an image or image sequence
		 * <p>Displays an image or image sequence on a X server.</p>
		 * @param string $servername <p>The X server name</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.displayimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function displayImages(string $servername): bool {}

		/**
		 * Distorts an image using various distortion methods
		 * <p>Distorts an image using various distortion methods, by mapping color lookups of the source image to a new destination image usually of the same size as the source image, unless 'bestfit' is set to <b><code>TRUE</code></b>.</p><p>If 'bestfit' is enabled, and distortion allows it, the destination image is adjusted to ensure the whole source 'image' will just fit within the final destination image, which will be sized and offset accordingly. Also in many cases the virtual offset of the source image will be taken into account in the mapping.</p><p>This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @param int $method <p>The method of image distortion. See distortion constants</p>
		 * @param array $arguments <p>The arguments for this distortion method</p>
		 * @param bool $bestfit <p>Attempt to resize destination to fit distorted source</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.distortimage.php
		 * @see Imagick::blurImage(), Imagick::motionBlurImage(), Imagick::radialBlurImage()
		 * @since PECL imagick 2.0.1
		 */
		public function distortImage(int $method, array $arguments, bool $bestfit): bool {}

		/**
		 * Renders the ImagickDraw object on the current image
		 * <p>Renders the ImagickDraw object on the current image.</p>
		 * @param \ImagickDraw $draw <p>The drawing operations to render on the image.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.drawimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function drawImage(\ImagickDraw $draw): bool {}

		/**
		 * Enhance edges within the image
		 * <p>Enhance edges within the image with a convolution filter of the given radius. Use radius 0 and it will be auto-selected.</p>
		 * @param float $radius <p>The radius of the operation.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.edgeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function edgeImage(float $radius): bool {}

		/**
		 * Returns a grayscale image with a three-dimensional effect
		 * <p>Returns a grayscale image with a three-dimensional effect. We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, radius should be larger than sigma. Use a radius of 0 and it will choose a suitable radius for you.</p>
		 * @param float $radius <p>The radius of the effect</p>
		 * @param float $sigma <p>The sigma of the effect</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.embossimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function embossImage(float $radius, float $sigma): bool {}

		/**
		 * Enciphers an image
		 * <p>Converts plain pixels to enciphered pixels. The image is not readable until it has been deciphered using <code>Imagick::decipherImage()</code> This method is available if Imagick has been compiled against ImageMagick version 6.3.9 or newer.</p>
		 * @param string $passphrase <p>The passphrase</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.encipherimage.php
		 * @see Imagick::decipherImage()
		 * @since No version information available, might only be in Git
		 */
		public function encipherImage(string $passphrase): bool {}

		/**
		 * Improves the quality of a noisy image
		 * <p>Applies a digital filter that improves the quality of a noisy image.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.enhanceimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function enhanceImage(): bool {}

		/**
		 * Equalizes the image histogram
		 * <p>Equalizes the image histogram.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.equalizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function equalizeImage(): bool {}

		/**
		 * Applies an expression to an image
		 * <p>Applys an arithmetic, relational, or logical expression to an image. Use these operators to lighten or darken an image, to increase or decrease contrast in an image, or to produce the "negative" of an image.</p>
		 * @param int $op <p>The evaluation operator</p>
		 * @param float $constant <p>The value of the operator</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.evaluateimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function evaluateImage(int $op, float $constant, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Exports raw image pixels
		 * <p>Exports image pixels into an array. The map defines the ordering of the exported pixels. The size of the returned array is <code>width &#42; height &#42; strlen(map)</code>. This method is available if Imagick has been compiled against ImageMagick version 6.4.7 or newer.</p>
		 * @param int $x <p>X-coordinate of the exported area</p>
		 * @param int $y <p>Y-coordinate of the exported area</p>
		 * @param int $width <p>Width of the exported aread</p>
		 * @param int $height <p>Height of the exported area</p>
		 * @param string $map <p>Ordering of the exported pixels. For example <code>"RGB"</code>. Valid characters for the map are R, G, B, A, O, C, Y, M, K, I and P.</p>
		 * @param int $STORAGE <p>Refer to this list of pixel type constants</p>
		 * @return array <p>Returns an array containing the pixels values.</p>
		 * @link http://php.net/manual/en/imagick.exportimagepixels.php
		 * @since No version information available, might only be in Git
		 */
		public function exportImagePixels(int $x, int $y, int $width, int $height, string $map, int $STORAGE): array {}

		/**
		 * Set image size
		 * <p>Comfortability method for setting image size. The method sets the image size and allows setting x,y coordinates where the new area begins. This method is available if Imagick has been compiled against ImageMagick version 6.3.1 or newer.</p><p>Prior to ImageMagick 6.5.7-8 (1623), $x was positive when shifting to the left and negative when shifting to the right, and $y was positive when shifting an image up and negative when shifting an image down. Somewhere betwen ImageMagick 6.3.7 (1591) and ImageMagick 6.5.7-8 (1623), the axes of $x and $y were flipped, so that $x was negative when shifting to the left and positive when shifting to the right, and $y was negative when shifting an image up and positive when shifting an image down. Somewhere between ImageMagick 6.5.7-8 (1623) and ImageMagick 6.6.9-7 (1641), the axes of $x and $y were flipped back to pre-ImageMagick 6.5.7-8 (1623) functionality.</p>
		 * @param int $width <p>The new width</p>
		 * @param int $height <p>The new height</p>
		 * @param int $x <p>X position for the new size</p>
		 * @param int $y <p>Y position for the new size</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.extentimage.php
		 * @see Imagick::resizeImage(), Imagick::thumbnailImage(), Imagick::cropImage()
		 * @since No version information available, might only be in Git
		 */
		public function extentImage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * Description
		 * <p>Applies a custom convolution kernel to the image.</p>
		 * @param \ImagickKernel $ImagickKernel <p>An instance of ImagickKernel that represents either a single kernel or a linked series of kernels.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.filter.php
		 * @since No version information available, might only be in Git
		 */
		public function filter(\ImagickKernel $ImagickKernel, int $channel = Imagick::CHANNEL_UNDEFINED): bool {}

		/**
		 * Merges a sequence of images
		 * <p>Merges a sequence of images. This is useful for combining Photoshop layers into a single image.</p>
		 * @return Imagick <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.flattenimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function flattenImages(): \Imagick {}

		/**
		 * Creates a vertical mirror image
		 * <p>Creates a vertical mirror image by reflecting the pixels around the central x-axis.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.flipimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function flipImage(): bool {}

		/**
		 * Changes the color value of any pixel that matches target
		 * <p>Changes the color value of any pixel that matches target and is an immediate neighbor. This method is a replacement for deprecated <code>Imagick::paintFloodFillImage()</code>. This method is available if Imagick has been compiled against ImageMagick version 6.3.8 or newer.</p>
		 * @param mixed $fill <p>ImagickPixel object or a string containing the fill color</p>
		 * @param float $fuzz <p>The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.</p>
		 * @param mixed $target <p>ImagickPixel object or a string containing the target color to paint</p>
		 * @param int $x <p>X start position of the floodfill</p>
		 * @param int $y <p>Y start position of the floodfill</p>
		 * @param bool $invert <p>If <b><code>TRUE</code></b> paints any pixel that does not match the target color.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.floodfillpaintimage.php
		 * @since No version information available, might only be in Git
		 */
		public function floodFillPaintImage($fill, float $fuzz, $target, int $x, int $y, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Creates a vertical mirror image
		 * <p>Creates a vertical mirror image by reflecting the pixels around the central y-axis.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.flopimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function flopImage(): bool {}

		/**
		 * Description
		 * <p>Implements the discrete Fourier transform (DFT) of the image either as a magnitude / phase or real / imaginary image pair.</p>
		 * @param bool $magnitude <p>If true, return as magnitude / phase pair otherwise a real / imaginary image pair.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.forwardfouriertransformimage.php
		 * @since No version information available, might only be in Git
		 */
		public function forwardFourierTransformImage(bool $magnitude): bool {}

		/**
		 * Adds a simulated three-dimensional border
		 * <p>Adds a simulated three-dimensional border around the image. The width and height specify the border width of the vertical and horizontal sides of the frame. The inner and outer bevels indicate the width of the inner and outer shadows of the frame.</p>
		 * @param mixed $matte_color <p>ImagickPixel object or a string representing the matte color</p>
		 * @param int $width <p>The width of the border</p>
		 * @param int $height <p>The height of the border</p>
		 * @param int $inner_bevel <p>The inner bevel width</p>
		 * @param int $outer_bevel <p>The outer bevel width</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.frameimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function frameImage($matte_color, int $width, int $height, int $inner_bevel, int $outer_bevel): bool {}

		/**
		 * Applies a function on the image
		 * <p>Applies an arithmetic, relational, or logical expression to a pseudo image.</p><p>See also ImageMagick v6 Examples - Image Transformations &mdash; Function, Multi-Argument Evaluate</p><p>This method is available if Imagick has been compiled against ImageMagick version 6.4.9 or newer.</p>
		 * @param int $function <p>Refer to this list of function constants</p>
		 * @param array $arguments <p>Array of arguments to pass to this function.</p>
		 * @param int $channel
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.functionimage.php
		 * @since No version information available, might only be in Git
		 */
		public function functionImage(int $function, array $arguments, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Evaluate expression for each pixel in the image
		 * <p>Evaluate expression for each pixel in the image. Consult The Fx Special Effects Image Operator for more information.</p>
		 * @param string $expression <p>The expression.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return Imagick <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.fximage.php
		 * @since PECL imagick 2.0.0
		 */
		public function fxImage(string $expression, int $channel = Imagick::CHANNEL_DEFAULT): \Imagick {}

		/**
		 * Gamma-corrects an image
		 * <p>Gamma-corrects an image. The same image viewed on different devices will have perceptual differences in the way the image's intensities are represented on the screen. Specify individual gamma levels for the red, green, and blue channels, or adjust all three with the gamma parameter. Values typically range from 0.8 to 2.3.</p>
		 * @param float $gamma <p>The amount of gamma-correction.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.gammaimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function gammaImage(float $gamma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Blurs an image
		 * <p>Blurs an image. We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, the radius should be larger than sigma. Use a radius of 0 and selects a suitable radius for you.</p>
		 * @param float $radius <p>The radius of the Gaussian, in pixels, not counting the center pixel.</p>
		 * @param float $sigma <p>The standard deviation of the Gaussian, in pixels.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.gaussianblurimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function gaussianBlurImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Gets the colorspace
		 * <p>Gets the global colorspace value. This method is available if Imagick has been compiled against ImageMagick version 6.5.7 or newer.</p>
		 * @return int <p>Returns an integer which can be compared against COLORSPACE constants.</p>
		 * @link http://php.net/manual/en/imagick.getcolorspace.php
		 * @since PECL imagick 0.9.10-0.9.9
		 */
		public function getColorspace(): int {}

		/**
		 * Gets the object compression type
		 * <p>Gets the object compression type.</p>
		 * @return int <p>Returns the compression constant</p>
		 * @link http://php.net/manual/en/imagick.getcompression.php
		 * @since PECL imagick 2.0.0
		 */
		public function getCompression(): int {}

		/**
		 * Gets the object compression quality
		 * <p>Gets the object compression quality.</p>
		 * @return int <p>Returns integer describing the compression quality</p>
		 * @link http://php.net/manual/en/imagick.getcompressionquality.php
		 * @since PECL imagick 2.0.0
		 */
		public function getCompressionQuality(): int {}

		/**
		 * Returns the ImageMagick API copyright as a string
		 * <p>Returns the ImageMagick API copyright as a string.</p>
		 * @return string <p>Returns a string containing the copyright notice of Imagemagick and Magickwand C API.</p>
		 * @link http://php.net/manual/en/imagick.getcopyright.php
		 * @since PECL imagick 2.0.0
		 */
		public function getCopyright(): string {}

		/**
		 * The filename associated with an image sequence
		 * <p>Returns the filename associated with an image sequence.</p>
		 * @return string <p>Returns a string on success.</p>
		 * @link http://php.net/manual/en/imagick.getfilename.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFilename(): string {}

		/**
		 * Gets font
		 * <p>Returns the objects font property. This method is available if Imagick has been compiled against ImageMagick version 6.3.7 or newer.</p>
		 * @return string <p>Returns the string containing the font name or <b><code>FALSE</code></b> if not font is set.</p>
		 * @link http://php.net/manual/en/imagick.getfont.php
		 * @see Imagick::setFont(), ImagickDraw::setFont(), ImagickDraw::getFont()
		 * @since PECL imagick 2.1.0
		 */
		public function getFont(): string {}

		/**
		 * Returns the format of the Imagick object
		 * <p>Returns the format of the Imagick object.</p>
		 * @return string <p>Returns the format of the image.</p>
		 * @link http://php.net/manual/en/imagick.getformat.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFormat(): string {}

		/**
		 * Gets the gravity
		 * <p>Gets the global gravity property for the Imagick object. This method is available if Imagick has been compiled against ImageMagick version 6.4.0 or newer.</p>
		 * @return int <p>Returns the gravity property. Refer to the list of gravity constants.</p>
		 * @link http://php.net/manual/en/imagick.getgravity.php
		 * @since No version information available, might only be in Git
		 */
		public function getGravity(): int {}

		/**
		 * Returns the ImageMagick home URL
		 * <p>Returns the ImageMagick home URL.</p>
		 * @return string <p>Returns a link to the imagemagick homepage.</p>
		 * @link http://php.net/manual/en/imagick.gethomeurl.php
		 * @since PECL imagick 2.0.0
		 */
		public function getHomeURL(): string {}

		/**
		 * Returns a new Imagick object
		 * <p>Returns a new Imagick object with the current image sequence.</p>
		 * @return Imagick <p>Returns a new Imagick object with the current image sequence.</p>
		 * @link http://php.net/manual/en/imagick.getimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImage(): \Imagick {}

		/**
		 * Gets the image alpha channel
		 * <p>Gets the image alpha channel value. The returned value is one of the alpha channel constants. This method is available if Imagick has been compiled against ImageMagick version 6.4.0 or newer.</p>
		 * @return int <p>Returns a constant defining the current alpha channel value. Refer to this list of alpha channel constants.</p>
		 * @link http://php.net/manual/en/imagick.getimagealphachannel.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageAlphaChannel(): int {}

		/**
		 * Get image artifact
		 * <p>Gets an artifact associated with the image. The difference between image properties and image artifacts is that properties are public and artifacts are private. This method is available if Imagick has been compiled against ImageMagick version 6.5.7 or newer.</p>
		 * @param string $artifact <p>The name of the artifact</p>
		 * @return string <p>Returns the artifact value on success.</p>
		 * @link http://php.net/manual/en/imagick.getimageartifact.php
		 * @see Imagick::setImageArtifact(), Imagick::deleteImageArtifact()
		 * @since No version information available, might only be in Git
		 */
		public function getImageArtifact(string $artifact): string {}

		/**
		 * Description
		 * <p>Returns a named attribute.</p>
		 * @param string $key <p>The key of the attribute to get.</p>
		 * @return string
		 * @link http://php.net/manual/en/imagick.getimageattribute.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageAttribute(string $key): string {}

		/**
		 * Returns the image background color
		 * <p>Returns the image background color.</p>
		 * @return ImagickPixel <p>Returns an ImagickPixel set to the background color of the image.</p>
		 * @link http://php.net/manual/en/imagick.getimagebackgroundcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageBackgroundColor(): \ImagickPixel {}

		/**
		 * Returns the image sequence as a blob
		 * <p>Implements direct to memory image formats. It returns the image sequence as a string. The format of the image determines the format of the returned blob (GIF, JPEG, PNG, etc.). To return a different image format, use Imagick::setImageFormat().</p>
		 * @return string <p>Returns a string containing the image.</p>
		 * @link http://php.net/manual/en/imagick.getimageblob.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageBlob(): string {}

		/**
		 * Returns the chromaticy blue primary point
		 * <p>Returns the chromaticity blue primary point for the image.</p>
		 * @return array <p>Array consisting of "x" and "y" coordinates of point.</p>
		 * @link http://php.net/manual/en/imagick.getimageblueprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageBluePrimary(): array {}

		/**
		 * Returns the image border color
		 * <p>Returns the image border color.</p>
		 * @return ImagickPixel <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagebordercolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageBorderColor(): \ImagickPixel {}

		/**
		 * Gets the depth for a particular image channel
		 * <p>Gets the depth for a particular image channel.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return int <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagechanneldepth.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageChannelDepth(int $channel): int {}

		/**
		 * Compares image channels of an image to a reconstructed image
		 * <p>Compares one or more image channels of an image to a reconstructed image and returns the specified distortion metric.</p>
		 * @param \Imagick $reference <p>Imagick object to compare to.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @param int $metric <p>One of the metric type constants.</p>
		 * @return float <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagechanneldistortion.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageChannelDistortion(\Imagick $reference, int $channel, int $metric): float {}

		/**
		 * Gets channel distortions
		 * <p>Compares one or more image channels of an image to a reconstructed image and returns the specified distortion metrics This method is available if Imagick has been compiled against ImageMagick version 6.4.4 or newer.</p>
		 * @param \Imagick $reference <p>Imagick object containing the reference image</p>
		 * @param int $metric <p>Refer to this list of metric type constants.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return float <p>Returns a double describing the channel distortion.</p>
		 * @link http://php.net/manual/en/imagick.getimagechanneldistortions.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageChannelDistortions(\Imagick $reference, int $metric, int $channel = Imagick::CHANNEL_DEFAULT): float {}

		/**
		 * Gets the extrema for one or more image channels
		 * <p>Gets the extrema for one or more image channels. Return value is an associative array with the keys "minima" and "maxima".</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return array <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagechannelextrema.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageChannelExtrema(int $channel): array {}

		/**
		 * The getImageChannelKurtosis purpose
		 * <p>Get the kurtosis and skewness of a specific channel. This method is available if Imagick has been compiled against ImageMagick version 6.4.9 or newer.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return array <p>Returns an array with <code>kurtosis</code> and <code>skewness</code> members.</p>
		 * @link http://php.net/manual/en/imagick.getimagechannelkurtosis.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageChannelKurtosis(int $channel = Imagick::CHANNEL_DEFAULT): array {}

		/**
		 * Gets the mean and standard deviation
		 * <p>Gets the mean and standard deviation of one or more image channels. Return value is an associative array with the keys "mean" and "standardDeviation".</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return array <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagechannelmean.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageChannelMean(int $channel): array {}

		/**
		 * Gets channel range
		 * <p>Gets the range for one or more image channels. This method is available if Imagick has been compiled against ImageMagick version 6.4.0 or newer.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return array <p>Returns an array containing minima and maxima values of the channel(s).</p>
		 * @link http://php.net/manual/en/imagick.getimagechannelrange.php
		 * @since PECL imagick 2.2.1
		 */
		public function getImageChannelRange(int $channel): array {}

		/**
		 * Returns statistics for each channel in the image
		 * <p>Returns statistics for each channel in the image. The statistics include the channel depth, its minima and maxima, the mean, and the standard deviation. You can access the red channel mean, for example, like this:</p>
		 * @return array <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagechannelstatistics.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageChannelStatistics(): array {}

		/**
		 * Gets image clip mask
		 * <p>Returns the image clip mask. The clip mask is an Imagick object containing the clip mask. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @return Imagick <p>Returns an Imagick object containing the clip mask.</p>
		 * @link http://php.net/manual/en/imagick.getimageclipmask.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageClipMask(): \Imagick {}

		/**
		 * Returns the color of the specified colormap index
		 * <p>Returns the color of the specified colormap index.</p>
		 * @param int $index <p>The offset into the image colormap.</p>
		 * @return ImagickPixel <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagecolormapcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageColormapColor(int $index): \ImagickPixel {}

		/**
		 * Gets the number of unique colors in the image
		 * <p>Gets the number of unique colors in the image.</p>
		 * @return int <p>Returns an <code>int</code>, the number of unique colors in the image.</p>
		 * @link http://php.net/manual/en/imagick.getimagecolors.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageColors(): int {}

		/**
		 * Gets the image colorspace
		 * <p>Gets the image colorspace.</p>
		 * @return int <p>Returns an integer which can be compared against COLORSPACE constants.</p>
		 * @link http://php.net/manual/en/imagick.getimagecolorspace.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageColorspace(): int {}

		/**
		 * Returns the composite operator associated with the image
		 * <p>Returns the composite operator associated with the image.</p>
		 * @return int <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagecompose.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageCompose(): int {}

		/**
		 * Gets the current image's compression type
		 * <p>Gets the current image's compression type.</p>
		 * @return int <p>Returns the compression constant</p>
		 * @link http://php.net/manual/en/imagick.getimagecompression.php
		 * @since PECL imagick 2.2.2
		 */
		public function getImageCompression(): int {}

		/**
		 * Gets the current image's compression quality
		 * <p>Gets the current image's compression quality</p>
		 * @return int <p>Returns integer describing the images compression quality</p>
		 * @link http://php.net/manual/en/imagick.getimagecompressionquality.php
		 * @since PECL imagick 2.2.2
		 */
		public function getImageCompressionQuality(): int {}

		/**
		 * Gets the image delay
		 * <p>Gets the image delay.</p>
		 * @return int <p>Returns the image delay.</p>
		 * @link http://php.net/manual/en/imagick.getimagedelay.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageDelay(): int {}

		/**
		 * Gets the image depth
		 * <p>Gets the image depth.</p>
		 * @return int <p>The image depth.</p>
		 * @link http://php.net/manual/en/imagick.getimagedepth.php
		 * @since PECL imagick 0.9.1-0.9.9
		 */
		public function getImageDepth(): int {}

		/**
		 * Gets the image disposal method
		 * <p>Gets the image disposal method.</p>
		 * @return int <p>Returns the dispose method on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagedispose.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageDispose(): int {}

		/**
		 * Compares an image to a reconstructed image
		 * <p>Compares an image to a reconstructed image and returns the specified distortion metric.</p>
		 * @param \MagickWand $reference <p>Imagick object to compare to.</p>
		 * @param int $metric <p>One of the metric type constants.</p>
		 * @return float <p>Returns the distortion metric used on the image (or the best guess thereof).</p>
		 * @link http://php.net/manual/en/imagick.getimagedistortion.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageDistortion(\MagickWand $reference, int $metric): float {}

		/**
		 * Gets the extrema for the image
		 * <p>Gets the extrema for the image. Returns an associative array with the keys "min" and "max".</p>
		 * @return array <p>Returns an associative array with the keys "min" and "max".</p>
		 * @link http://php.net/manual/en/imagick.getimageextrema.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageExtrema(): array {}

		/**
		 * Returns the filename of a particular image in a sequence
		 * <p>Returns the filename of a particular image in a sequence.</p>
		 * @return string <p>Returns a string with the filename of the image.</p>
		 * @link http://php.net/manual/en/imagick.getimagefilename.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageFilename(): string {}

		/**
		 * Returns the format of a particular image in a sequence
		 * <p>Returns the format of a particular image in a sequence.</p>
		 * @return string <p>Returns a string containing the image format on success.</p>
		 * @link http://php.net/manual/en/imagick.getimageformat.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageFormat(): string {}

		/**
		 * Gets the image gamma
		 * <p>Gets the image gamma.</p>
		 * @return float <p>Returns the image gamma on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagegamma.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageGamma(): float {}

		/**
		 * Gets the width and height as an associative array
		 * <p>Returns the width and height as an associative array.</p>
		 * @return array <p>Returns an array with the width/height of the image.</p>
		 * @link http://php.net/manual/en/imagick.getimagegeometry.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageGeometry(): array {}

		/**
		 * Gets the image gravity
		 * <p>Gets the current gravity value of the image. Unlike <code>Imagick::getGravity()</code>, this method returns the gravity defined for the current image sequence. This method is available if Imagick has been compiled against ImageMagick version 6.4.4 or newer.</p>
		 * @return int <p>Returns the images gravity property. Refer to the list of gravity constants.</p>
		 * @link http://php.net/manual/en/imagick.getimagegravity.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageGravity(): int {}

		/**
		 * Returns the chromaticy green primary point
		 * <p>Returns the chromaticity green primary point. Returns an array with the keys "x" and "y".</p>
		 * @return array <p>Returns an array with the keys "x" and "y" on success, throws an ImagickException on failure.</p>
		 * @link http://php.net/manual/en/imagick.getimagegreenprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageGreenPrimary(): array {}

		/**
		 * Returns the image height
		 * <p>Returns the image height.</p>
		 * @return int <p>Returns the image height in pixels.</p>
		 * @link http://php.net/manual/en/imagick.getimageheight.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageHeight(): int {}

		/**
		 * Gets the image histogram
		 * <p>Returns the image histogram as an array of ImagickPixel objects.</p>
		 * @return array <p>Returns the image histogram as an array of ImagickPixel objects.</p>
		 * @link http://php.net/manual/en/imagick.getimagehistogram.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageHistogram(): array {}

		/**
		 * Gets the index of the current active image
		 * <p>Returns the index of the current active image within the Imagick object. This method has been deprecated. See <code>Imagick::getIteratorIndex()</code>.</p>
		 * @return int <p>Returns an integer containing the index of the image in the stack.</p>
		 * @link http://php.net/manual/en/imagick.getimageindex.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageIndex(): int {}

		/**
		 * Gets the image interlace scheme
		 * <p>Gets the image interlace scheme.</p>
		 * @return int <p>Returns the interlace scheme as an integer on success. Throw an <b>ImagickException</b> on error.</p>
		 * @link http://php.net/manual/en/imagick.getimageinterlacescheme.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageInterlaceScheme(): int {}

		/**
		 * Returns the interpolation method
		 * <p>Returns the interpolation method for the specified image. The method is one of the <b><code>Imagick::INTERPOLATE_&#42;</code></b> constants.</p>
		 * @return int <p>Returns the interpolate method on success.</p>
		 * @link http://php.net/manual/en/imagick.getimageinterpolatemethod.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageInterpolateMethod(): int {}

		/**
		 * Gets the image iterations
		 * <p>Gets the image iterations.</p>
		 * @return int <p>Returns the image iterations as an integer.</p>
		 * @link http://php.net/manual/en/imagick.getimageiterations.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageIterations(): int {}

		/**
		 * Returns the image length in bytes
		 * <p>Returns the image length in bytes</p>
		 * @return int <p>Returns an int containing the current image size.</p>
		 * @link http://php.net/manual/en/imagick.getimagelength.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageLength(): int {}

		/**
		 * Returns a string containing the ImageMagick license
		 * <p>Returns a string containing the ImageMagick license</p>
		 * @return string <p>Returns a string containing the ImageMagick license.</p>
		 * @link http://php.net/manual/en/imagick.getimagemagicklicense.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageMagickLicense(): string {}

		/**
		 * Return if the image has a matte channel
		 * <p>Returns <b><code>TRUE</code></b> if the image has a matte channel otherwise false. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagematte.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageMatte(): bool {}

		/**
		 * Returns the image matte color
		 * <p>Returns the image matte color.</p>
		 * @return ImagickPixel <p>Returns ImagickPixel object on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagemattecolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageMatteColor(): \ImagickPixel {}

		/**
		 * Description
		 * <p>Returns the image mime-type.</p>
		 * @return string
		 * @link http://php.net/manual/en/imagick.getimagemimetype.php
		 * @since No version information available, might only be in Git
		 */
		public function getImageMimeType(): string {}

		/**
		 * Gets the image orientation
		 * <p>Gets the image orientation. The return value is one of the orientation constants.</p>
		 * @return int <p>Returns an int on success.</p>
		 * @link http://php.net/manual/en/imagick.getimageorientation.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageOrientation(): int {}

		/**
		 * Returns the page geometry
		 * <p>Returns the page geometry associated with the image in an array with the keys "width", "height", "x", and "y".</p>
		 * @return array <p>Returns the page geometry associated with the image in an array with the keys "width", "height", "x", and "y".</p>
		 * @link http://php.net/manual/en/imagick.getimagepage.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImagePage(): array {}

		/**
		 * Returns the color of the specified pixel
		 * <p>Returns the color of the specified pixel.</p>
		 * @param int $x <p>The x-coordinate of the pixel</p>
		 * @param int $y <p>The y-coordinate of the pixel</p>
		 * @return ImagickPixel <p>Returns an ImagickPixel instance for the color at the coordinates given.</p>
		 * @link http://php.net/manual/en/imagick.getimagepixelcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImagePixelColor(int $x, int $y): \ImagickPixel {}

		/**
		 * Returns the named image profile
		 * <p>Returns the named image profile.</p>
		 * @param string $name <p>The name of the profile to return.</p>
		 * @return string <p>Returns a string containing the image profile.</p>
		 * @link http://php.net/manual/en/imagick.getimageprofile.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageProfile(string $name): string {}

		/**
		 * Returns the image profiles
		 * <p>Returns all associated profiles that match the pattern. If <b><code>FALSE</code></b> is passed as second parameter only the profile names are returned. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @param string $pattern <p>The pattern for profile names.</p>
		 * @param bool $include_values <p>Whether to return only profile names. If <b><code>FALSE</code></b> then only profile names will be returned.</p>
		 * @return array <p>Returns an array containing the image profiles or profile names.</p>
		 * @link http://php.net/manual/en/imagick.getimageprofiles.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageProfiles(string $pattern = "*", bool $include_values = TRUE): array {}

		/**
		 * Returns the image properties
		 * <p>Returns all associated properties that match the pattern. If <b><code>FALSE</code></b> is passed as second parameter only the property names are returned. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @param string $pattern <p>The pattern for property names.</p>
		 * @param bool $include_values <p>Whether to return only property names. If <b><code>FALSE</code></b> then only property names will be returned.</p>
		 * @return array <p>Returns an array containing the image properties or property names.</p>
		 * @link http://php.net/manual/en/imagick.getimageproperties.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageProperties(string $pattern = "*", bool $include_values = TRUE): array {}

		/**
		 * Returns the named image property
		 * <p>Returns the named image property. This method is available if Imagick has been compiled against ImageMagick version 6.3.2 or newer.</p>
		 * @param string $name <p>name of the property (for example Exif:DateTime)</p>
		 * @return string <p>Returns a string containing the image property, false if a property with the given name does not exist.</p>
		 * @link http://php.net/manual/en/imagick.getimageproperty.php
		 * @see Imagick::setImageProperty()
		 * @since PECL imagick 2.0.0
		 */
		public function getImageProperty(string $name): string {}

		/**
		 * Returns the chromaticity red primary point
		 * <p>Returns the chromaticity red primary point as an array with the keys "x" and "y".</p>
		 * @return array <p>Returns the chromaticity red primary point as an array with the keys "x" and "y". Throw an <b>ImagickException</b> on error.</p>
		 * @link http://php.net/manual/en/imagick.getimageredprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageRedPrimary(): array {}

		/**
		 * Extracts a region of the image
		 * <p>Extracts a region of the image and returns it as a new Imagick object.</p>
		 * @param int $width <p>The width of the extracted region.</p>
		 * @param int $height <p>The height of the extracted region.</p>
		 * @param int $x <p>X-coordinate of the top-left corner of the extracted region.</p>
		 * @param int $y <p>Y-coordinate of the top-left corner of the extracted region.</p>
		 * @return Imagick <p>Extracts a region of the image and returns it as a new wand.</p>
		 * @link http://php.net/manual/en/imagick.getimageregion.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageRegion(int $width, int $height, int $x, int $y): \Imagick {}

		/**
		 * Gets the image rendering intent
		 * <p>Gets the image rendering intent.</p>
		 * @return int <p>Returns the image rendering intent.</p>
		 * @link http://php.net/manual/en/imagick.getimagerenderingintent.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageRenderingIntent(): int {}

		/**
		 * Gets the image X and Y resolution
		 * <p>Gets the image X and Y resolution.</p>
		 * @return array <p>Returns the resolution as an array.</p>
		 * @link http://php.net/manual/en/imagick.getimageresolution.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageResolution(): array {}

		/**
		 * Gets the image scene
		 * <p>Gets the image scene.</p>
		 * @return int <p>Returns the image scene.</p>
		 * @link http://php.net/manual/en/imagick.getimagescene.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageScene(): int {}

		/**
		 * Generates an SHA-256 message digest
		 * <p>Generates an SHA-256 message digest for the image pixel stream.</p>
		 * @return string <p>Returns a string containing the SHA-256 hash of the file.</p>
		 * @link http://php.net/manual/en/imagick.getimagesignature.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageSignature(): string {}

		/**
		 * Returns the image length in bytes
		 * <p>Returns the image length in bytes. Deprecated in favour of Imagick::getImageLength()</p>
		 * @return int <p>Returns an int containing the current image size.</p>
		 * @link http://php.net/manual/en/imagick.getimagesize.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageSize(): int {}

		/**
		 * Gets the image ticks-per-second
		 * <p>Gets the image ticks-per-second.</p>
		 * @return int <p>Returns the image ticks-per-second.</p>
		 * @link http://php.net/manual/en/imagick.getimagetickspersecond.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageTicksPerSecond(): int {}

		/**
		 * Gets the image total ink density
		 * <p>Gets the image total ink density.</p>
		 * @return float <p>Returns the image total ink density of the image. Throw an <b>ImagickException</b> on error.</p>
		 * @link http://php.net/manual/en/imagick.getimagetotalinkdensity.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageTotalInkDensity(): float {}

		/**
		 * Gets the potential image type
		 * <p>Gets the potential image type.</p>
		 * @return int <p>Returns the potential image type.</p><ul> <li>  <b><code>imagick::IMGTYPE_UNDEFINED</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_BILEVEL</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_GRAYSCALE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_GRAYSCALEMATTE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_PALETTE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_PALETTEMATTE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_TRUECOLOR</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_TRUECOLORMATTE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_COLORSEPARATION</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_COLORSEPARATIONMATTE</code></b>  </li> <li>  <b><code>imagick::IMGTYPE_OPTIMIZE</code></b>  </li> </ul>
		 * @link http://php.net/manual/en/imagick.getimagetype.php
		 * @since PECL imagick 0.9.10-0.9.9
		 */
		public function getImageType(): int {}

		/**
		 * Gets the image units of resolution
		 * <p>Gets the image units of resolution.</p>
		 * @return int <p>Returns the image units of resolution.</p>
		 * @link http://php.net/manual/en/imagick.getimageunits.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageUnits(): int {}

		/**
		 * Returns the virtual pixel method
		 * <p>Returns the virtual pixel method for the specified image.</p>
		 * @return int <p>Returns the virtual pixel method on success.</p>
		 * @link http://php.net/manual/en/imagick.getimagevirtualpixelmethod.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageVirtualPixelMethod(): int {}

		/**
		 * Returns the chromaticity white point
		 * <p>Returns the chromaticity white point as an associative array with the keys "x" and "y".</p>
		 * @return array <p>Returns the chromaticity white point as an associative array with the keys "x" and "y".</p>
		 * @link http://php.net/manual/en/imagick.getimagewhitepoint.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageWhitePoint(): array {}

		/**
		 * Returns the image width
		 * <p>Returns the image width.</p>
		 * @return int <p>Returns the image width.</p>
		 * @link http://php.net/manual/en/imagick.getimagewidth.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImageWidth(): int {}

		/**
		 * Returns all image sequences as a blob
		 * <p>Implements direct to memory image formats. It returns all image sequences as a string. The format of the image determines the format of the returned blob (GIF, JPEG, PNG, etc.). To return a different image format, use Imagick::setImageFormat().</p>
		 * @return string <p>Returns a string containing the images. On failure, throws ImagickException.</p>
		 * @link http://php.net/manual/en/imagick.getimagesblob.php
		 * @since PECL imagick 2.0.0
		 */
		public function getImagesBlob(): string {}

		/**
		 * Gets the object interlace scheme
		 * <p>Gets the object interlace scheme.</p>
		 * @return int <p>Gets the wand interlace scheme.</p>
		 * @link http://php.net/manual/en/imagick.getinterlacescheme.php
		 * @since PECL imagick 2.0.0
		 */
		public function getInterlaceScheme(): int {}

		/**
		 * Gets the index of the current active image
		 * <p>Returns the index of the current active image within the Imagick object. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @return int <p>Returns an integer containing the index of the image in the stack.</p>
		 * @link http://php.net/manual/en/imagick.getiteratorindex.php
		 * @see Imagick::setIteratorIndex(), Imagick::getImageIndex(), Imagick::setImageIndex()
		 * @since PECL imagick 2.0.0
		 */
		public function getIteratorIndex(): int {}

		/**
		 * Returns the number of images in the object
		 * <p>Returns the number of images associated with Imagick object.</p>
		 * @return int <p>Returns the number of images associated with Imagick object.</p>
		 * @link http://php.net/manual/en/imagick.getnumberimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function getNumberImages(): int {}

		/**
		 * Returns a value associated with the specified key
		 * <p>Returns a value associated within the object for the specified key.</p>
		 * @param string $key <p>The name of the option</p>
		 * @return string <p>Returns a value associated with a wand and the specified key.</p>
		 * @link http://php.net/manual/en/imagick.getoption.php
		 * @since PECL imagick 2.0.0
		 */
		public function getOption(string $key): string {}

		/**
		 * Returns the ImageMagick package name
		 * <p>Returns the ImageMagick package name.</p>
		 * @return string <p>Returns the ImageMagick package name as a string.</p>
		 * @link http://php.net/manual/en/imagick.getpackagename.php
		 * @since PECL imagick 2.0.0
		 */
		public function getPackageName(): string {}

		/**
		 * Returns the page geometry
		 * <p>Returns the page geometry associated with the Imagick object in an associative array with the keys "width", "height", "x", and "y".</p>
		 * @return array <p>Returns the page geometry associated with the Imagick object in an associative array with the keys "width", "height", "x", and "y", throwing ImagickException on error.</p>
		 * @link http://php.net/manual/en/imagick.getpage.php
		 * @since PECL imagick 2.0.0
		 */
		public function getPage(): array {}

		/**
		 * Returns a MagickPixelIterator
		 * <p>Returns a MagickPixelIterator.</p>
		 * @return ImagickPixelIterator <p>Returns an ImagickPixelIterator on success.</p>
		 * @link http://php.net/manual/en/imagick.getpixeliterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function getPixelIterator(): \ImagickPixelIterator {}

		/**
		 * Get an ImagickPixelIterator for an image section
		 * <p>Get an ImagickPixelIterator for an image section.</p>
		 * @param int $x <p>The x-coordinate of the region.</p>
		 * @param int $y <p>The y-coordinate of the region.</p>
		 * @param int $columns <p>The width of the region.</p>
		 * @param int $rows <p>The height of the region.</p>
		 * @return ImagickPixelIterator <p>Returns an ImagickPixelIterator for an image section.</p>
		 * @link http://php.net/manual/en/imagick.getpixelregioniterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function getPixelRegionIterator(int $x, int $y, int $columns, int $rows): \ImagickPixelIterator {}

		/**
		 * Gets point size
		 * <p>Returns the objects point size property. This method is available if Imagick has been compiled against ImageMagick version 6.3.7 or newer.</p>
		 * @return float <p>Returns a <code>float</code> containing the point size.</p>
		 * @link http://php.net/manual/en/imagick.getpointsize.php
		 * @see Imagick::setPointSize()
		 * @since No version information available, might only be in Git
		 */
		public function getPointSize(): float {}

		/**
		 * Description
		 * <p>Returns the ImageMagick quantum range as an integer.</p>
		 * @return int
		 * @link http://php.net/manual/en/imagick.getquantum.php
		 * @since No version information available, might only be in Git
		 */
		public static function getQuantum(): int {}

		/**
		 * Gets the quantum depth
		 * <p>Returns the Imagick quantum depth as a string.</p>
		 * @return array <p>Returns the Imagick quantum depth as a string.</p>
		 * @link http://php.net/manual/en/imagick.getquantumdepth.php
		 * @since PECL imagick 2.0.0
		 */
		public function getQuantumDepth(): array {}

		/**
		 * Returns the Imagick quantum range
		 * <p>Returns the quantum range for the Imagick instance.</p>
		 * @return array <p>Returns an associative array containing the quantum range as an <code>int</code> (<code>"quantumRangeLong"</code>) and as a <code>string</code> (<code>"quantumRangeString"</code>).</p>
		 * @link http://php.net/manual/en/imagick.getquantumrange.php
		 * @since PECL imagick 2.0.0
		 */
		public function getQuantumRange(): array {}

		/**
		 * Description
		 * <p>Get the StringRegistry entry for the named key or false if not set.</p>
		 * @param string $key <p>The entry to get.</p>
		 * @return string
		 * @link http://php.net/manual/en/imagick.getregistry.php
		 * @since No version information available, might only be in Git
		 */
		public static function getRegistry(string $key): string {}

		/**
		 * Returns the ImageMagick release date
		 * <p>Returns the ImageMagick release date as a string.</p>
		 * @return string <p>Returns the ImageMagick release date as a string.</p>
		 * @link http://php.net/manual/en/imagick.getreleasedate.php
		 * @since PECL imagick 2.0.0
		 */
		public function getReleaseDate(): string {}

		/**
		 * Returns the specified resource's memory usage
		 * <p>Returns the specified resource's memory usage in megabytes.</p>
		 * @param int $type <p>Refer to the list of resourcetype constants.</p>
		 * @return int <p>Returns the specified resource's memory usage in megabytes.</p>
		 * @link http://php.net/manual/en/imagick.getresource.php
		 * @since PECL imagick 2.0.0
		 */
		public function getResource(int $type): int {}

		/**
		 * Returns the specified resource limit
		 * <p>Returns the specified resource limit.</p>
		 * @param int $type <p>One of the resourcetype constants. The unit depends on the type of the resource being limited.</p>
		 * @return int <p>Returns the specified resource limit in megabytes.</p>
		 * @link http://php.net/manual/en/imagick.getresourcelimit.php
		 * @since PECL imagick 2.0.0
		 */
		public function getResourceLimit(int $type): int {}

		/**
		 * Gets the horizontal and vertical sampling factor
		 * <p>Gets the horizontal and vertical sampling factor.</p>
		 * @return array <p>Returns an associative array with the horizontal and vertical sampling factors of the image.</p>
		 * @link http://php.net/manual/en/imagick.getsamplingfactors.php
		 * @since PECL imagick 2.0.0
		 */
		public function getSamplingFactors(): array {}

		/**
		 * Returns the size associated with the Imagick object
		 * <p>Get the size in pixels associated with the Imagick object, previously set by <code>Imagick::setSize()</code>.</p><p><b>Note</b>:</p><p>This method just returns the size that was set using <code>Imagick::setSize()</code>. If you want to get the actual width / height of the image, use <code>Imagick::getImageWidth()</code> and <code>Imagick::getImageHeight()</code>.</p>
		 * @return array <p>Returns the size associated with the Imagick object as an array with the keys "columns" and "rows".</p>
		 * @link http://php.net/manual/en/imagick.getsize.php
		 * @since PECL imagick 2.0.0
		 */
		public function getSize(): array {}

		/**
		 * Returns the size offset
		 * <p>Returns the size offset associated with the Imagick object. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @return int <p>Returns the size offset associated with the Imagick object.</p>
		 * @link http://php.net/manual/en/imagick.getsizeoffset.php
		 * @since PECL imagick 2.0.0
		 */
		public function getSizeOffset(): int {}

		/**
		 * Returns the ImageMagick API version
		 * <p>Returns the ImageMagick API version as a string and as a number.</p>
		 * @return array <p>Returns the ImageMagick API version as a string and as a number.</p>
		 * @link http://php.net/manual/en/imagick.getversion.php
		 * @since PECL imagick 2.0.0
		 */
		public function getVersion(): array {}

		/**
		 * Replaces colors in the image
		 * <p>Replaces colors in the image using a Hald lookup table. Hald images can be created using HALD color coder.</p>
		 * @param \Imagick $clut <p>Imagick object containing the Hald lookup image.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.haldclutimage.php
		 * @since No version information available, might only be in Git
		 */
		public function haldClutImage(\Imagick $clut, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Checks if the object has more images
		 * <p>Returns <b><code>TRUE</code></b> if the object has more images when traversing the list in the forward direction.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the object has more images when traversing the list in the forward direction, returns <b><code>FALSE</code></b> if there are none.</p>
		 * @link http://php.net/manual/en/imagick.hasnextimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function hasNextImage(): bool {}

		/**
		 * Checks if the object has a previous image
		 * <p>Returns <b><code>TRUE</code></b> if the object has more images when traversing the list in the reverse direction</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the object has more images when traversing the list in the reverse direction, returns <b><code>FALSE</code></b> if there are none.</p>
		 * @link http://php.net/manual/en/imagick.haspreviousimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function hasPreviousImage(): bool {}

		/**
		 * Description
		 * <p>Replaces any embedded formatting characters with the appropriate image property and returns the interpreted text. See http://www.imagemagick.org/script/escape.php for escape sequences.</p>
		 * @param string $embedText <p>A string containing formatting sequences e.g. "Trim box: %@ number of unique colors: %k".</p>
		 * @return string|false <p>Returns format or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/imagick.identifyformat.php
		 * @since No version information available, might only be in Git
		 */
		public function identifyFormat(string $embedText) {}

		/**
		 * Identifies an image and fetches attributes
		 * <p>Identifies an image and returns the attributes. Attributes include the image width, height, size, and others.</p>
		 * @param bool $appendRawOutput <p>If <b><code>TRUE</code></b> then the raw output is appended to the array.</p>
		 * @return array <p>Identifies an image and returns the attributes. Attributes include the image width, height, size, and others.</p>
		 * @link http://php.net/manual/en/imagick.identifyimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function identifyImage(bool $appendRawOutput = FALSE): array {}

		/**
		 * Creates a new image as a copy
		 * <p>Creates a new image that is a copy of an existing one with the image pixels "imploded" by the specified percentage.</p>
		 * @param float $radius <p>The radius of the implode</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.implodeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function implodeImage(float $radius): bool {}

		/**
		 * Imports image pixels
		 * <p>Imports pixels from an array into an image. The <code>map</code> is usually 'RGB'. This method imposes the following constraints for the parameters: amount of pixels in the array must match <code>width</code> x <code>height</code> x length of the map. This method is available if Imagick has been compiled against ImageMagick version 6.4.5 or newer.</p>
		 * @param int $x <p>The image x position</p>
		 * @param int $y <p>The image y position</p>
		 * @param int $width <p>The image width</p>
		 * @param int $height <p>The image height</p>
		 * @param string $map <p>Map of pixel ordering as a string. This can be for example <code>RGB</code>. The value can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent), O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad.</p>
		 * @param int $storage <p>The pixel storage method. Refer to this list of pixel constants.</p>
		 * @param array $pixels <p>The array of pixels</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.importimagepixels.php
		 * @since No version information available, might only be in Git
		 */
		public function importImagePixels(int $x, int $y, int $width, int $height, string $map, int $storage, array $pixels): bool {}

		/**
		 * Description
		 * <p>Implements the inverse discrete Fourier transform (DFT) of the image either as a magnitude / phase or real / imaginary image pair.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Imagick $complement <p>The second image to combine with this one to form either the magnitude / phase or real / imaginary image pair.</p>
		 * @param bool $magnitude <p>If true, combine as magnitude / phase pair otherwise a real / imaginary image pair.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.inversefouriertransformimage.php
		 * @since No version information available, might only be in Git
		 */
		public function inverseFourierTransformImage(\Imagick $complement, bool $magnitude): bool {}

		/**
		 * Adds a label to an image
		 * <p>Adds a label to an image.</p>
		 * @param string $label <p>The label to add</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.labelimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function labelImage(string $label): bool {}

		/**
		 * Adjusts the levels of an image
		 * <p>Adjusts the levels of an image by scaling the colors falling between specified white and black points to the full available quantum range. The parameters provided represent the black, mid, and white points. The black point specifies the darkest color in the image. Colors darker than the black point are set to zero. Mid point specifies a gamma correction to apply to the image. White point specifies the lightest color in the image. Colors brighter than the white point are set to the maximum quantum value.</p>
		 * @param float $blackPoint <p>The image black point</p>
		 * @param float $gamma <p>The gamma value</p>
		 * @param float $whitePoint <p>The image white point</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.levelimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function levelImage(float $blackPoint, float $gamma, float $whitePoint, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Stretches with saturation the image intensity
		 * <p>Stretches with saturation the image intensity.</p>
		 * @param float $blackPoint <p>The image black point</p>
		 * @param float $whitePoint <p>The image white point</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.linearstretchimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function linearStretchImage(float $blackPoint, float $whitePoint): bool {}

		/**
		 * Animates an image or images
		 * <p>This method scales the images using liquid rescaling method. This method is an implementation of a technique called seam carving. In order for this method to work as expected ImageMagick must be compiled with liblqr support. This method is available if Imagick has been compiled against ImageMagick version 6.3.9 or newer.</p>
		 * @param int $width <p>The width of the target size</p>
		 * @param int $height <p>The height of the target size</p>
		 * @param float $delta_x <p>How much the seam can traverse on x-axis. Passing 0 causes the seams to be straight.</p>
		 * @param float $rigidity <p>Introduces a bias for non-straight seams. This parameter is typically 0.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.liquidrescaleimage.php
		 * @see Imagick::resizeImage()
		 * @since No version information available, might only be in Git
		 */
		public function liquidRescaleImage(int $width, int $height, float $delta_x, float $rigidity): bool {}

		/**
		 * Description
		 * <p>List all the registry settings. Returns an array of all the key/value pairs in the registry</p>
		 * @return array <p>An array containing the key/values from the registry.</p>
		 * @link http://php.net/manual/en/imagick.listregistry.php
		 * @since No version information available, might only be in Git
		 */
		public static function listRegistry(): array {}

		/**
		 * Scales an image proportionally 2x
		 * <p>Is a convenience method that scales an image proportionally to twice its original size.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.magnifyimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function magnifyImage(): bool {}

		/**
		 * Replaces the colors of an image with the closest color from a reference image
		 * @param \Imagick $map
		 * @param bool $dither
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.mapimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function mapImage(\Imagick $map, bool $dither): bool {}

		/**
		 * Changes the transparency value of a color
		 * <p>Changes the transparency value of any pixel that matches target and is an immediate neighbor. If the method <b><code>FillToBorderMethod</code></b> is specified, the transparency value is changed for any neighbor pixel that does not match the bordercolor member of image.</p>
		 * @param float $alpha <p>The level of transparency: 1.0 is fully opaque and 0.0 is fully transparent.</p>
		 * @param float $fuzz <p>The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.</p>
		 * @param mixed $bordercolor <p>An ImagickPixel object or string representing the border color.</p>
		 * @param int $x <p>The starting x coordinate of the operation.</p>
		 * @param int $y <p>The starting y coordinate of the operation.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.mattefloodfillimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function matteFloodfillImage(float $alpha, float $fuzz, $bordercolor, int $x, int $y): bool {}

		/**
		 * Applies a digital filter
		 * <p>Applies a digital filter that improves the quality of a noisy image. Each pixel is replaced by the median in a set of neighboring pixels as defined by radius.</p>
		 * @param float $radius <p>The radius of the pixel neighborhood.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.medianfilterimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function medianFilterImage(float $radius): bool {}

		/**
		 * Merges image layers
		 * <p>Merges image layers into one. This method is useful when working with image formats that use multiple layers such as PSD. The merging is controlled using the <code>layer_method</code> which defines how the layers are merged. This method is available if Imagick has been compiled against ImageMagick version 6.3.7 or newer.</p>
		 * @param int $layer_method <p>One of the <b><code>Imagick::LAYERMETHOD_&#42;</code></b> constants</p>
		 * @return Imagick <p>Returns an Imagick object containing the merged image.</p>
		 * @link http://php.net/manual/en/imagick.mergeimagelayers.php
		 * @see Imagick::flattenImages()
		 * @since PECL imagick 2.1.0
		 */
		public function mergeImageLayers(int $layer_method): \Imagick {}

		/**
		 * Scales an image proportionally to half its size
		 * <p>Is a convenience method that scales an image proportionally to one-half its original size</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.minifyimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function minifyImage(): bool {}

		/**
		 * Control the brightness, saturation, and hue
		 * <p>Lets you control the brightness, saturation, and hue of an image. Hue is the percentage of absolute rotation from the current position. For example 50 results in a counter-clockwise rotation of 90 degrees, 150 results in a clockwise rotation of 90 degrees, with 0 and 200 both resulting in a rotation of 180 degrees.</p>
		 * @param float $brightness
		 * @param float $saturation
		 * @param float $hue
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.modulateimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function modulateImage(float $brightness, float $saturation, float $hue): bool {}

		/**
		 * Creates a composite image
		 * <p>Creates a composite image by combining several separate images. The images are tiled on the composite image with the name of the image optionally appearing just below the individual tile.</p>
		 * @param \ImagickDraw $draw <p>The font name, size, and color are obtained from this object.</p>
		 * @param string $tile_geometry <p>The number of tiles per row and page (e.g. 6x4+0+0).</p>
		 * @param string $thumbnail_geometry <p>Preferred image size and border size of each thumbnail (e.g. 120x120+4+3&gt;).</p>
		 * @param int $mode <p>Thumbnail framing mode, see Montage Mode constants.</p>
		 * @param string $frame <p>Surround the image with an ornamental border (e.g. 15x15+3+3). The frame color is that of the thumbnail's matte color.</p>
		 * @return Imagick <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.montageimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function montageImage(\ImagickDraw $draw, string $tile_geometry, string $thumbnail_geometry, int $mode, string $frame): \Imagick {}

		/**
		 * Method morphs a set of images
		 * <p>Method morphs a set of images. Both the image pixels and size are linearly interpolated to give the appearance of a meta-morphosis from one image to the next.</p>
		 * @param int $number_frames <p>The number of in-between images to generate.</p>
		 * @return Imagick <p>This method returns a new Imagick object on success. Throw an <b>ImagickException</b> on error.</p>
		 * @link http://php.net/manual/en/imagick.morphimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function morphImages(int $number_frames): \Imagick {}

		/**
		 * Description
		 * <p>Applies a user supplied kernel to the image according to the given morphology method.</p>
		 * @param int $morphologyMethod <p>Which morphology method to use one of the \Imagick::MORPHOLOGY_&#42; constants.</p>
		 * @param int $iterations <p>The number of iteration to apply the morphology function. A value of -1 means loop until no change found. How this is applied may depend on the morphology method. Typically this is a value of 1.</p>
		 * @param \ImagickKernel $ImagickKernel
		 * @param int $channel
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.morphology.php
		 * @since No version information available, might only be in Git
		 */
		public function morphology(int $morphologyMethod, int $iterations, \ImagickKernel $ImagickKernel, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Forms a mosaic from images
		 * <p>Inlays an image sequence to form a single coherent picture. It returns a wand with each image in the sequence composited at the location defined by the page offset of the image.</p>
		 * @return Imagick <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.mosaicimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function mosaicImages(): \Imagick {}

		/**
		 * Simulates motion blur
		 * <p>Simulates motion blur. We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, radius should be larger than sigma. Use a radius of 0 and MotionBlurImage() selects a suitable radius for you. Angle gives the angle of the blurring motion.</p>
		 * @param float $radius <p>The radius of the Gaussian, in pixels, not counting the center pixel.</p>
		 * @param float $sigma <p>The standard deviation of the Gaussian, in pixels.</p>
		 * @param float $angle <p>Apply the effect along this angle.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants. The channel argument affects only if Imagick is compiled against ImageMagick version 6.4.4 or greater.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.motionblurimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function motionBlurImage(float $radius, float $sigma, float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Negates the colors in the reference image
		 * <p>Negates the colors in the reference image. The Grayscale option means that only grayscale values within the image are negated.</p>
		 * @param bool $gray <p>Whether to only negate grayscale pixels within the image.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.negateimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function negateImage(bool $gray, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Creates a new image
		 * <p>Creates a new image and associates ImagickPixel value as background color</p>
		 * @param int $cols <p>Columns in the new image</p>
		 * @param int $rows <p>Rows in the new image</p>
		 * @param mixed $background <p>The background color used for this image</p>
		 * @param string $format <p>Image format. This parameter was added in Imagick version 2.0.1.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.newimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function newImage(int $cols, int $rows, $background, string $format = NULL): bool {}

		/**
		 * Creates a new image
		 * <p>Creates a new image using ImageMagick pseudo-formats.</p>
		 * @param int $columns <p>columns in the new image</p>
		 * @param int $rows <p>rows in the new image</p>
		 * @param string $pseudoString <p>string containing pseudo image definition.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.newpseudoimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function newPseudoImage(int $columns, int $rows, string $pseudoString): bool {}

		/**
		 * Moves to the next image
		 * <p>Associates the next image in the image list with an Imagick object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.nextimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function nextImage(): bool {}

		/**
		 * Enhances the contrast of a color image
		 * <p>Enhances the contrast of a color image by adjusting the pixels color to span the entire range of colors available.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.normalizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function normalizeImage(int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Simulates an oil painting
		 * <p>Applies a special effect filter that simulates an oil painting. Each pixel is replaced by the most frequent color occurring in a circular region defined by radius.</p>
		 * @param float $radius <p>The radius of the circular neighborhood.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.oilpaintimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function oilPaintImage(float $radius): bool {}

		/**
		 * Changes the color value of any pixel that matches target
		 * <p>Changes any pixel that matches color with the color defined by fill. This method is available if Imagick has been compiled against ImageMagick version 6.3.8 or newer.</p>
		 * @param mixed $target <p>ImagickPixel object or a string containing the color to change</p>
		 * @param mixed $fill <p>The replacement color</p>
		 * @param float $fuzz <p>The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.</p>
		 * @param bool $invert <p>If <b><code>TRUE</code></b> paints any pixel that does not match the target color.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.opaquepaintimage.php
		 * @since No version information available, might only be in Git
		 */
		public function opaquePaintImage($target, $fill, float $fuzz, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Removes repeated portions of images to optimize
		 * <p>Compares each image the GIF disposed forms of the previous image in the sequence. From this it attempts to select the smallest cropped image to replace each frame, while preserving the results of the animation. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.optimizeimagelayers.php
		 * @see Imagick::compareImageLayers(), Imagick::writeImages(), Imagick::writeImage()
		 * @since PECL imagick 2.0.0
		 */
		public function optimizeImageLayers(): bool {}

		/**
		 * Performs an ordered dither
		 * <p>Performs an ordered dither based on a number of pre-defined dithering threshold maps, but over multiple intensity levels, which can be different for different channels, according to the input arguments. This method is available if Imagick has been compiled against ImageMagick version 6.3.1 or newer.</p>
		 * @param string $threshold_map <p>A string containing the name of the threshold dither map to use</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.orderedposterizeimage.php
		 * @since PECL imagick 2.2.2
		 */
		public function orderedPosterizeImage(string $threshold_map, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Changes the color value of any pixel that matches target
		 * <p>Changes the color value of any pixel that matches target and is an immediate neighbor. As of ImageMagick 6.3.8 this method has been deprecated and <code>Imagick::floodfillPaintImage()</code> should be used instead.</p>
		 * @param mixed $fill <p>ImagickPixel object or a string containing the fill color</p>
		 * @param float $fuzz <p>The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill.</p>
		 * @param mixed $bordercolor <p>ImagickPixel object or a string containing the border color</p>
		 * @param int $x <p>X start position of the floodfill</p>
		 * @param int $y <p>Y start position of the floodfill</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.paintfloodfillimage.php
		 * @since PECL imagick 2.1.0
		 */
		public function paintFloodfillImage($fill, float $fuzz, $bordercolor, int $x, int $y, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Change any pixel that matches color
		 * <p>Changes any pixel that matches color with the color defined by fill.</p>
		 * @param mixed $target <p>Change this target color to the fill color within the image. An ImagickPixel object or a string representing the target color.</p>
		 * @param mixed $fill <p>An ImagickPixel object or a string representing the fill color.</p>
		 * @param float $fuzz <p>The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.paintopaqueimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function paintOpaqueImage($target, $fill, float $fuzz, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Changes any pixel that matches color with the color defined by fill
		 * <p>Changes any pixel that matches color with the color defined by fill.</p>
		 * @param mixed $target <p>Change this target color to specified opacity value within the image.</p>
		 * @param float $alpha <p>The level of transparency: 1.0 is fully opaque and 0.0 is fully transparent.</p>
		 * @param float $fuzz <p>The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.painttransparentimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function paintTransparentImage($target, float $alpha, float $fuzz): bool {}

		/**
		 * Fetch basic attributes about the image
		 * <p>This method can be used to query image width, height, size, and format without reading the whole image in to memory.</p>
		 * @param string $filename <p>The filename to read the information from.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.pingimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function pingImage(string $filename): bool {}

		/**
		 * Quickly fetch attributes
		 * <p>This method can be used to query image width, height, size, and format without reading the whole image to memory. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param string $image <p>A string containing the image.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.pingimageblob.php
		 * @see Imagick::pingImage(), Imagick::pingImageFile(), Imagick::readImage(), Imagick::readImageBlob(), Imagick::readImageFile()
		 * @since PECL imagick 2.0.0
		 */
		public function pingImageBlob(string $image): bool {}

		/**
		 * Get basic image attributes in a lightweight manner
		 * <p>This method can be used to query image width, height, size, and format without reading the whole image to memory. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param resource $filehandle <p>An open filehandle to the image.</p>
		 * @param string $fileName <p>Optional filename for this image.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.pingimagefile.php
		 * @see Imagick::pingImage(), Imagick::pingImageBlob(), Imagick::readImage(), Imagick::readImageBlob(), Imagick::readImageFile()
		 * @since PECL imagick 2.0.0
		 */
		public function pingImageFile($filehandle, string $fileName = NULL): bool {}

		/**
		 * Simulates a Polaroid picture
		 * <p>Simulates a Polaroid picture. This method is available if Imagick has been compiled against ImageMagick version 6.3.2 or newer.</p>
		 * @param \ImagickDraw $properties <p>The polaroid properties</p>
		 * @param float $angle <p>The polaroid angle</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.polaroidimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function polaroidImage(\ImagickDraw $properties, float $angle): bool {}

		/**
		 * Reduces the image to a limited number of color level
		 * <p>Reduces the image to a limited number of color level.</p>
		 * @param int $levels
		 * @param bool $dither
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.posterizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function posterizeImage(int $levels, bool $dither): bool {}

		/**
		 * Quickly pin-point appropriate parameters for image processing
		 * <p>Tiles 9 thumbnails of the specified image with an image processing operation applied at varying strengths. This is helpful to quickly pin-point an appropriate parameter for an image processing operation.</p>
		 * @param int $preview <p>Preview type. See Preview type constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.previewimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function previewImages(int $preview): bool {}

		/**
		 * Move to the previous image in the object
		 * <p>Assocates the previous image in an image list with the Imagick object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.previousimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function previousImage(): bool {}

		/**
		 * Adds or removes a profile from an image
		 * <p>Adds or removes a ICC, IPTC, or generic profile from an image. If the profile is NULL, it is removed from the image otherwise added. Use a name of '&#42;' and a profile of NULL to remove all profiles from the image.</p>
		 * @param string $name
		 * @param string $profile
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.profileimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function profileImage(string $name, string $profile): bool {}

		/**
		 * Analyzes the colors within a reference image
		 * @param int $numberColors
		 * @param int $colorspace
		 * @param int $treedepth
		 * @param bool $dither
		 * @param bool $measureError
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.quantizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function quantizeImage(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool {}

		/**
		 * Analyzes the colors within a sequence of images
		 * @param int $numberColors
		 * @param int $colorspace
		 * @param int $treedepth
		 * @param bool $dither
		 * @param bool $measureError
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.quantizeimages.php
		 * @since PECL imagick 2.0.0
		 */
		public function quantizeImages(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool {}

		/**
		 * Returns an array representing the font metrics
		 * <p>Returns a multi-dimensional array representing the font metrics.</p>
		 * @param \ImagickDraw $properties <p>ImagickDraw object containing font properties</p>
		 * @param string $text <p>The text</p>
		 * @param bool $multiline <p>Multiline parameter. If left empty it is autodetected</p>
		 * @return array <p>Returns a multi-dimensional array representing the font metrics.</p>
		 * @link http://php.net/manual/en/imagick.queryfontmetrics.php
		 * @since PECL imagick 2.0.0
		 */
		public function queryFontMetrics(\ImagickDraw $properties, string $text, bool $multiline = NULL): array {}

		/**
		 * Returns the configured fonts
		 * <p>Returns the configured fonts.</p>
		 * @param string $pattern <p>The query pattern</p>
		 * @return array <p>Returns an array containing the configured fonts.</p>
		 * @link http://php.net/manual/en/imagick.queryfonts.php
		 * @since PECL imagick 2.0.0
		 */
		public function queryFonts(string $pattern = "*"): array {}

		/**
		 * Returns formats supported by Imagick
		 * <p>Returns formats supported by Imagick.</p>
		 * @param string $pattern
		 * @return array <p>Returns an array containing the formats supported by Imagick.</p>
		 * @link http://php.net/manual/en/imagick.queryformats.php
		 * @since PECL imagick 2.0.0
		 */
		public function queryFormats(string $pattern = "*"): array {}

		/**
		 * Radial blurs an image
		 * <p>Radial blurs an image.</p>
		 * @param float $angle
		 * @param int $channel
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.radialblurimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function radialBlurImage(float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Creates a simulated 3d button-like effect
		 * <p>Creates a simulated three-dimensional button-like effect by lightening and darkening the edges of the image. Members width and height of raise_info define the width of the vertical and horizontal edge of the effect.</p>
		 * @param int $width
		 * @param int $height
		 * @param int $x
		 * @param int $y
		 * @param bool $raise
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.raiseimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function raiseImage(int $width, int $height, int $x, int $y, bool $raise): bool {}

		/**
		 * Creates a high-contrast, two-color image
		 * <p>Changes the value of individual pixels based on the intensity of each pixel compared to threshold. The result is a high-contrast, two color image. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param float $low <p>The low point</p>
		 * @param float $high <p>The high point</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.randomthresholdimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function randomThresholdImage(float $low, float $high, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Reads image from filename
		 * <p>Reads image from filename</p>
		 * @param string $filename
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.readimage.php
		 * @since PECL imagick 0.9.0-0.9.9
		 */
		public function readImage(string $filename): bool {}

		/**
		 * Reads image from a binary string
		 * <p>Reads image from a binary string</p>
		 * @param string $image
		 * @param string $filename
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.readimageblob.php
		 * @since PECL imagick 2.0.0
		 */
		public function readImageBlob(string $image, string $filename = NULL): bool {}

		/**
		 * Reads image from open filehandle
		 * <p>Reads image from open filehandle</p>
		 * @param resource $filehandle
		 * @param string $fileName
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.readimagefile.php
		 * @since PECL imagick 2.0.0
		 */
		public function readImageFile($filehandle, string $fileName = NULL): bool {}

		/**
		 * Description
		 * <p>Reads image from an array of filenames. All the images are held in a single Imagick object.</p>
		 * @param array $filenames
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.readimages.php
		 * @since No version information available, might only be in Git
		 */
		public function readimages(array $filenames): bool {}

		/**
		 * Recolors image
		 * <p>Translate, scale, shear, or rotate image colors. This method supports variable sized matrices but normally 5x5 matrix is used for RGBA and 6x6 is used for CMYK. The last row should contain the normalized values. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @param array $matrix <p>The matrix containing the color values</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.recolorimage.php
		 * @see Imagick::displayImage()
		 * @since No version information available, might only be in Git
		 */
		public function recolorImage(array $matrix): bool {}

		/**
		 * Smooths the contours of an image
		 * <p>Smooths the contours of an image while still preserving edge information. The algorithm works by replacing each pixel with its neighbor closest in value. A neighbor is defined by radius. Use a radius of 0 and Imagick::reduceNoiseImage() selects a suitable radius for you.</p>
		 * @param float $radius
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.reducenoiseimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function reduceNoiseImage(float $radius): bool {}

		/**
		 * Remaps image colors
		 * <p>Replaces colors an image with those defined by <code>replacement</code>. The colors are replaced with the closest possible color. This method is available if Imagick has been compiled against ImageMagick version 6.4.5 or newer.</p>
		 * @param \Imagick $replacement <p>An Imagick object containing the replacement colors</p>
		 * @param int $DITHER <p>Refer to this list of dither method constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.remapimage.php
		 * @since No version information available, might only be in Git
		 */
		public function remapImage(\Imagick $replacement, int $DITHER): bool {}

		/**
		 * Removes an image from the image list
		 * <p>Removes an image from the image list.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.removeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function removeImage(): bool {}

		/**
		 * Removes the named image profile and returns it
		 * <p>Removes the named image profile and returns it.</p>
		 * @param string $name
		 * @return string <p>Returns a string containing the profile of the image.</p>
		 * @link http://php.net/manual/en/imagick.removeimageprofile.php
		 * @since PECL imagick 2.0.0
		 */
		public function removeImageProfile(string $name): string {}

		/**
		 * Renders all preceding drawing commands
		 * <p>Renders all preceding drawing commands.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.render.php
		 * @since PECL imagick 2.0.0
		 */
		public function render(): bool {}

		/**
		 * Resample image to desired resolution
		 * <p>Resample image to desired resolution.</p>
		 * @param float $x_resolution
		 * @param float $y_resolution
		 * @param int $filter
		 * @param float $blur
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.resampleimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function resampleImage(float $x_resolution, float $y_resolution, int $filter, float $blur): bool {}

		/**
		 * Reset image page
		 * <p>The page definition as a string. The string is in format WxH+x+y. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @param string $page <p>The page definition. For example <code>7168x5147+0+0</code></p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.resetimagepage.php
		 * @since No version information available, might only be in Git
		 */
		public function resetImagePage(string $page): bool {}

		/**
		 * Scales an image
		 * <p>Scales an image to the desired dimensions with a filter.</p><p><b>Note</b>:  The behavior of the parameter <code>bestfit</code> changed in Imagick 3.0.0. Before this version given dimensions 400x400 an image of dimensions 200x150 would be left untouched. In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as this is the "best fit" for the given dimensions. If <code>bestfit</code> parameter is used both width and height must be given. </p>
		 * @param int $columns <p>Width of the image</p>
		 * @param int $rows <p>Height of the image</p>
		 * @param int $filter <p>Refer to the list of filter constants.</p>
		 * @param float $blur <p>The blur factor where &gt; 1 is blurry, &lt; 1 is sharp.</p>
		 * @param bool $bestfit <p>Optional fit parameter.</p>
		 * @param bool $legacy
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.resizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function resizeImage(int $columns, int $rows, int $filter, float $blur, bool $bestfit = FALSE, bool $legacy = FALSE): bool {}

		/**
		 * Offsets an image
		 * <p>Offsets an image as defined by x and y.</p>
		 * @param int $x <p>The X offset.</p>
		 * @param int $y <p>The Y offset.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.rollimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function rollImage(int $x, int $y): bool {}

		/**
		 * Rotates an image
		 * <p>Rotates an image the specified number of degrees. Empty triangles left over from rotating the image are filled with the background color.</p>
		 * @param mixed $background <p>The background color</p>
		 * @param float $degrees <p>Rotation angle, in degrees. The rotation angle is interpreted as the number of degrees to rotate the image clockwise.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.rotateimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function rotateImage($background, float $degrees): bool {}

		/**
		 * Description
		 * <p>Rotational blurs an image.</p>
		 * @param float $angle <p>The angle to apply the blur over.</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.rotationalblurimage.php
		 * @since No version information available, might only be in Git
		 */
		public function rotationalBlurImage(float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Rounds image corners
		 * <p>Rounds image corners. The first two parameters control the amount of rounding and the three last parameters can be used to fine-tune the rounding process. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param float $x_rounding <p>x rounding</p>
		 * @param float $y_rounding <p>y rounding</p>
		 * @param float $stroke_width <p>stroke width</p>
		 * @param float $displace <p>image displace</p>
		 * @param float $size_correction <p>size correction</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.roundcorners.php
		 * @since PECL imagick 2.0.0
		 */
		public function roundCorners(float $x_rounding, float $y_rounding, float $stroke_width = 10, float $displace = 5, float $size_correction = -6): bool {}

		/**
		 * Scales an image with pixel sampling
		 * <p>Scales an image to the desired dimensions with pixel sampling. Unlike other scaling methods, this method does not introduce any additional color into the scaled image.</p>
		 * @param int $columns
		 * @param int $rows
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.sampleimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function sampleImage(int $columns, int $rows): bool {}

		/**
		 * Scales the size of an image
		 * <p>Scales the size of an image to the given dimensions. The other parameter will be calculated if 0 is passed as either param.</p><p><b>Note</b>:  The behavior of the parameter <code>bestfit</code> changed in Imagick 3.0.0. Before this version given dimensions 400x400 an image of dimensions 200x150 would be left untouched. In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as this is the "best fit" for the given dimensions. If <code>bestfit</code> parameter is used both width and height must be given. </p>
		 * @param int $cols
		 * @param int $rows
		 * @param bool $bestfit
		 * @param bool $legacy
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.scaleimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function scaleImage(int $cols, int $rows, bool $bestfit = FALSE, bool $legacy = FALSE): bool {}

		/**
		 * Segments an image
		 * <p>Analyses the image and identifies units that are similar. This method is available if Imagick has been compiled against ImageMagick version 6.4.5 or newer.</p>
		 * @param int $COLORSPACE <p>One of the COLORSPACE constants.</p>
		 * @param float $cluster_threshold <p>A percentage describing minimum number of pixels contained in hexedra before it is considered valid.</p>
		 * @param float $smooth_threshold <p>Eliminates noise from the histogram.</p>
		 * @param bool $verbose <p>Whether to output detailed information about recognised classes.</p>
		 * @return bool
		 * @link http://php.net/manual/en/imagick.segmentimage.php
		 * @since No version information available, might only be in Git
		 */
		public function segmentImage(int $COLORSPACE, float $cluster_threshold, float $smooth_threshold, bool $verbose = FALSE): bool {}

		/**
		 * Description
		 * <p>Selectively blur an image within a contrast threshold. It is similar to the unsharpen mask that sharpens everything with contrast above a certain threshold.</p>
		 * @param float $radius
		 * @param float $sigma
		 * @param float $threshold
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.selectiveblurimage.php
		 * @since No version information available, might only be in Git
		 */
		public function selectiveBlurImage(float $radius, float $sigma, float $threshold, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Separates a channel from the image
		 * <p>Separates a channel from the image and returns a grayscale image. A channel is a particular color component of each pixel in the image.</p>
		 * @param int $channel <p>Which 'channel' to return. For colorspaces other than RGB, you can still use the CHANNEL_RED, CHANNEL_GREEN, CHANNEL_BLUE constants to indicate the 1st, 2nd and 3rd channels.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.separateimagechannel.php
		 * @since PECL imagick 2.0.0
		 */
		public function separateImageChannel(int $channel): bool {}

		/**
		 * Sepia tones an image
		 * <p>Applies a special effect to the image, similar to the effect achieved in a photo darkroom by sepia toning. Threshold ranges from 0 to QuantumRange and is a measure of the extent of the sepia toning. A threshold of 80 is a good starting point for a reasonable tone.</p>
		 * @param float $threshold
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.sepiatoneimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function sepiaToneImage(float $threshold): bool {}

		/**
		 * Sets the object's default background color
		 * <p>Sets the object's default background color.</p>
		 * @param mixed $background
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setbackgroundcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setBackgroundColor($background): bool {}

		/**
		 * Set colorspace
		 * <p>Sets the global colorspace value for the object. This method is available if Imagick has been compiled against ImageMagick version 6.5.7 or newer.</p>
		 * @param int $COLORSPACE <p>One of the COLORSPACE constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setcolorspace.php
		 * @since No version information available, might only be in Git
		 */
		public function setColorspace(int $COLORSPACE): bool {}

		/**
		 * Sets the object's default compression type
		 * <p>Sets the object's default compression type</p>
		 * @param int $compression <p>The compression type. See the Imagick::COMPRESSION_&#42; constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setcompression.php
		 * @since PECL imagick 2.0.0
		 */
		public function setCompression(int $compression): bool {}

		/**
		 * Sets the object's default compression quality
		 * <p>Sets the object's default compression quality.</p><p>This method only works for new images e.g. those created through Imagick::newPseudoImage. For existing images you should use <code>Imagick::setImageCompressionQuality()</code>.</p>
		 * @param int $quality <p>An <code>int</code> between 1 and 100, 1 = high compression, 100 low compression.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setcompressionquality.php
		 * @since PECL imagick 0.9.10-0.9.9
		 */
		public function setCompressionQuality(int $quality): bool {}

		/**
		 * Sets the filename before you read or write the image
		 * <p>Sets the filename before you read or write an image file.</p>
		 * @param string $filename
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setfilename.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFilename(string $filename): bool {}

		/**
		 * Sets the Imagick iterator to the first image
		 * <p>Sets the Imagick iterator to the first image.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setfirstiterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFirstIterator(): bool {}

		/**
		 * Sets font
		 * <p>Sets object's font property. This method can be used for example to set font for caption: pseudo-format. The font needs to be configured in ImageMagick configuration or a file by the name of <code>font</code> must exist. This method should not be confused with <code>ImagickDraw::setFont()</code> which sets the font for a specific ImagickDraw object. This method is available if Imagick has been compiled against ImageMagick version 6.3.7 or newer.</p>
		 * @param string $font <p>Font name or a filename</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setfont.php
		 * @see Imagick::getFont(), ImagickDraw::setFont(), ImagickDraw::getFont()
		 * @since PECL imagick 2.1.0
		 */
		public function setFont(string $font): bool {}

		/**
		 * Sets the format of the Imagick object
		 * <p>Sets the format of the Imagick object.</p>
		 * @param string $format
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setformat.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFormat(string $format): bool {}

		/**
		 * Sets the gravity
		 * <p>Sets the global gravity property for the Imagick object. This method is available if Imagick has been compiled against ImageMagick version 6.4.0 or newer.</p>
		 * @param int $gravity <p>The gravity property. Refer to the list of gravity constants.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagick.setgravity.php
		 * @since No version information available, might only be in Git
		 */
		public function setGravity(int $gravity): bool {}

		/**
		 * Replaces image in the object
		 * <p>Replaces the current image sequence with the image from replace object.</p>
		 * @param \Imagick $replace <p>The replace Imagick object</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImage(\Imagick $replace): bool {}

		/**
		 * Sets image alpha channel
		 * <p>Activate or deactivate image alpha channel. The <code>mode</code> is one of the <b><code>Imagick::ALPHACHANNEL_&#42;</code></b> constants. This method is available if Imagick has been compiled against ImageMagick version 6.3.8 or newer.</p>
		 * @param int $mode <p>One of the <b><code>Imagick::ALPHACHANNEL_&#42;</code></b> constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagealphachannel.php
		 * @see Imagick::setImageMatte()
		 * @since No version information available, might only be in Git
		 */
		public function setImageAlphaChannel(int $mode): bool {}

		/**
		 * Set image artifact
		 * <p>Associates an artifact with the image. The difference between image properties and image artifacts is that properties are public and artifacts are private. This method is available if Imagick has been compiled against ImageMagick version 6.5.7 or newer.</p>
		 * @param string $artifact <p>The name of the artifact</p>
		 * @param string $value <p>The value of the artifact</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageartifact.php
		 * @see Imagick::getImageArtifact(), Imagick::deleteImageArtifact()
		 * @since No version information available, might only be in Git
		 */
		public function setImageArtifact(string $artifact, string $value): bool {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $key
		 * @param string $value
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageattribute.php
		 * @since No version information available, might only be in Git
		 */
		public function setImageAttribute(string $key, string $value): bool {}

		/**
		 * Sets the image background color
		 * <p>Sets the image background color.</p>
		 * @param mixed $background
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagebackgroundcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageBackgroundColor($background): bool {}

		/**
		 * Sets the image bias for any method that convolves an image
		 * <p>Sets the image bias for any method that convolves an image (e.g. Imagick::ConvolveImage()).</p>
		 * @param float $bias
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagebias.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageBias(float $bias): bool {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $bias
		 * @return void
		 * @link http://php.net/manual/en/imagick.setimagebiasquantum.php
		 * @since No version information available, might only be in Git
		 */
		public function setImageBiasQuantum(string $bias): void {}

		/**
		 * Sets the image chromaticity blue primary point
		 * <p>Sets the image chromaticity blue primary point.</p>
		 * @param float $x
		 * @param float $y
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageblueprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageBluePrimary(float $x, float $y): bool {}

		/**
		 * Sets the image border color
		 * <p>Sets the image border color.</p>
		 * @param mixed $border <p>The border color</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagebordercolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageBorderColor($border): bool {}

		/**
		 * Sets the depth of a particular image channel
		 * <p>Sets the depth of a particular image channel.</p>
		 * @param int $channel
		 * @param int $depth
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagechanneldepth.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageChannelDepth(int $channel, int $depth): bool {}

		/**
		 * Sets image clip mask
		 * <p>Sets image clip mask from another Imagick object. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @param \Imagick $clip_mask <p>The Imagick object containing the clip mask</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageclipmask.php
		 * @since No version information available, might only be in Git
		 */
		public function setImageClipMask(\Imagick $clip_mask): bool {}

		/**
		 * Sets the color of the specified colormap index
		 * <p>Sets the color of the specified colormap index.</p>
		 * @param int $index
		 * @param \ImagickPixel $color
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagecolormapcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageColormapColor(int $index, \ImagickPixel $color): bool {}

		/**
		 * Sets the image colorspace
		 * <p>Sets the image colorspace. This method should be used when creating new images. To change the colorspace of an existing image, you should use <code>Imagick::transformImageColorspace()</code>.</p>
		 * @param int $colorspace <p>One of the COLORSPACE constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagecolorspace.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageColorspace(int $colorspace): bool {}

		/**
		 * Sets the image composite operator
		 * <p>Sets the image composite operator, useful for specifying how to composite the image thumbnail when using the Imagick::montageImage() method.</p>
		 * @param int $compose
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagecompose.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageCompose(int $compose): bool {}

		/**
		 * Sets the image compression
		 * @param int $compression <p>One of the <b><code>COMPRESSION</code></b> constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagecompression.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageCompression(int $compression): bool {}

		/**
		 * Sets the image compression quality
		 * <p>Sets the image compression quality.</p>
		 * @param int $quality <p>The image compression quality as an integer</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagecompressionquality.php
		 * @since No version information available, might only be in Git
		 */
		public function setImageCompressionQuality(int $quality): bool {}

		/**
		 * Sets the image delay
		 * <p>Sets the image delay. For an animated image this is the amount of time that this frame of the image should be displayed for, before displaying the next frame.</p><p>The delay can be set individually for each frame in an image.</p>
		 * @param int $delay <p>The amount of time expressed in 'ticks' that the image should be displayed for. For animated GIFs there are 100 ticks per second, so a value of 20 would be 20/100 of a second aka 1/5th of a second.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagedelay.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageDelay(int $delay): bool {}

		/**
		 * Sets the image depth
		 * <p>Sets the image depth.</p>
		 * @param int $depth
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagedepth.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageDepth(int $depth): bool {}

		/**
		 * Sets the image disposal method
		 * <p>Sets the image disposal method.</p>
		 * @param int $dispose
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagedispose.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageDispose(int $dispose): bool {}

		/**
		 * Sets the image size
		 * <p>Sets the image size (i.e. columns &amp; rows).</p>
		 * @param int $columns
		 * @param int $rows
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageextent.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageExtent(int $columns, int $rows): bool {}

		/**
		 * Sets the filename of a particular image
		 * <p>Sets the filename of a particular image in a sequence.</p>
		 * @param string $filename
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagefilename.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageFilename(string $filename): bool {}

		/**
		 * Sets the format of a particular image
		 * <p>Sets the format of a particular image in a sequence.</p>
		 * @param string $format <p>String presentation of the image format. Format support depends on the ImageMagick installation.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageformat.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageFormat(string $format): bool {}

		/**
		 * Sets the image gamma
		 * <p>Sets the image gamma.</p>
		 * @param float $gamma
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagegamma.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageGamma(float $gamma): bool {}

		/**
		 * Sets the image gravity
		 * <p>Sets the gravity property for the current image. This method can be used to set the gravity property for a single image sequence. This method is available if Imagick has been compiled against ImageMagick version 6.4.4 or newer.</p>
		 * @param int $gravity <p>The gravity property. Refer to the list of gravity constants.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagick.setimagegravity.php
		 * @since No version information available, might only be in Git
		 */
		public function setImageGravity(int $gravity): bool {}

		/**
		 * Sets the image chromaticity green primary point
		 * <p>Sets the image chromaticity green primary point.</p>
		 * @param float $x
		 * @param float $y
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagegreenprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageGreenPrimary(float $x, float $y): bool {}

		/**
		 * Set the iterator position
		 * <p>Set the iterator to the position in the image list specified with the index parameter.</p><p>This method has been deprecated. See <code>Imagick::setIteratorIndex()</code>.</p>
		 * @param int $index <p>The position to set the iterator to</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageindex.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageIndex(int $index): bool {}

		/**
		 * Sets the image compression
		 * <p>Sets the image compression.</p>
		 * @param int $interlace_scheme
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageinterlacescheme.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageInterlaceScheme(int $interlace_scheme): bool {}

		/**
		 * Sets the image interpolate pixel method
		 * <p>Sets the image interpolate pixel method.</p>
		 * @param int $method <p>The method is one of the <b><code>Imagick::INTERPOLATE_&#42;</code></b> constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageinterpolatemethod.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageInterpolateMethod(int $method): bool {}

		/**
		 * Sets the image iterations
		 * <p>Sets the number of iterations an animated image is repeated.</p>
		 * @param int $iterations <p>The number of iterations the image should loop over. Set to '0' to loop continuously.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageiterations.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageIterations(int $iterations): bool {}

		/**
		 * Sets the image matte channel
		 * <p>Sets the image matte channel. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param bool $matte <p>True activates the matte channel and false disables it.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagematte.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageMatte(bool $matte): bool {}

		/**
		 * Sets the image matte color
		 * <p>Sets the image matte color.</p>
		 * @param mixed $matte
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagemattecolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageMatteColor($matte): bool {}

		/**
		 * Sets the image opacity level
		 * <p>Sets the image to the specified opacity level. This method is available if Imagick has been compiled against ImageMagick version 6.3.1 or newer. This method operates on all channels, which means that for example opacity value of 0.5 will set all transparent areas to partially opaque. To add transparency to areas that are not already transparent use Imagick::evaluateImage()</p>
		 * @param float $opacity <p>The level of transparency: 1.0 is fully opaque and 0.0 is fully transparent.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageopacity.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageOpacity(float $opacity): bool {}

		/**
		 * Sets the image orientation
		 * <p>Sets the image orientation.</p>
		 * @param int $orientation <p>One of the orientation constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageorientation.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageOrientation(int $orientation): bool {}

		/**
		 * Sets the page geometry of the image
		 * <p>Sets the page geometry of the image.</p>
		 * @param int $width
		 * @param int $height
		 * @param int $x
		 * @param int $y
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagepage.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImagePage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * Adds a named profile to the Imagick object
		 * <p>Adds a named profile to the Imagick object. If a profile with the same name already exists, it is replaced. This method differs from the Imagick::ProfileImage() method in that it does not apply any CMS color profiles.</p>
		 * @param string $name
		 * @param string $profile
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageprofile.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageProfile(string $name, string $profile): bool {}

		/**
		 * Sets an image property
		 * <p>Sets a named property to the image. This method is available if Imagick has been compiled against ImageMagick version 6.3.2 or newer.</p>
		 * @param string $name
		 * @param string $value
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageproperty.php
		 * @see Imagick::getImageProperty()
		 * @since PECL imagick 2.0.0
		 */
		public function setImageProperty(string $name, string $value): bool {}

		/**
		 * Sets the image chromaticity red primary point
		 * <p>Sets the image chromaticity red primary point.</p>
		 * @param float $x
		 * @param float $y
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageredprimary.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageRedPrimary(float $x, float $y): bool {}

		/**
		 * Sets the image rendering intent
		 * <p>Sets the image rendering intent.</p>
		 * @param int $rendering_intent
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagerenderingintent.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageRenderingIntent(int $rendering_intent): bool {}

		/**
		 * Sets the image resolution
		 * <p>Sets the image resolution.</p>
		 * @param float $x_resolution
		 * @param float $y_resolution
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageresolution.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageResolution(float $x_resolution, float $y_resolution): bool {}

		/**
		 * Sets the image scene
		 * <p>Sets the image scene.</p>
		 * @param int $scene
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagescene.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageScene(int $scene): bool {}

		/**
		 * Sets the image ticks-per-second
		 * <p>Adjust the amount of time that a frame of an animated image is displayed for.</p><p><b>Note</b>:</p><p>For animated GIFs, this function does not change the number of 'image ticks' per second, which is always defined as 100. Instead it adjusts the amount of time that the frame is displayed for to simulate the change in 'ticks per second'.</p><p>For example, for an animated GIF where each frame is displayed for 20 ticks (1/5 of a second) when this method is called on each frame of that image with an argument of <code>50</code> the frames are adjusted to be displayed for 40 ticks (2/5 of a second) and the animation will play at half the original speed.</p>
		 * @param int $ticks_per_second <p>The duration for which an image should be displayed expressed in ticks per second.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagetickspersecond.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageTicksPerSecond(int $ticks_per_second): bool {}

		/**
		 * Sets the image type
		 * <p>Sets the image type.</p>
		 * @param int $image_type
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagetype.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageType(int $image_type): bool {}

		/**
		 * Sets the image units of resolution
		 * <p>Sets the image units of resolution.</p>
		 * @param int $units
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimageunits.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageUnits(int $units): bool {}

		/**
		 * Sets the image virtual pixel method
		 * <p>Sets the image virtual pixel method.</p>
		 * @param int $method
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagevirtualpixelmethod.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageVirtualPixelMethod(int $method): bool {}

		/**
		 * Sets the image chromaticity white point
		 * <p>Sets the image chromaticity white point.</p>
		 * @param float $x
		 * @param float $y
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setimagewhitepoint.php
		 * @since PECL imagick 2.0.0
		 */
		public function setImageWhitePoint(float $x, float $y): bool {}

		/**
		 * Sets the image compression
		 * <p>Sets the image compression.</p>
		 * @param int $interlace_scheme
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setinterlacescheme.php
		 * @since PECL imagick 2.0.0
		 */
		public function setInterlaceScheme(int $interlace_scheme): bool {}

		/**
		 * Set the iterator position
		 * <p>Set the iterator to the position in the image list specified with the index parameter. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param int $index <p>The position to set the iterator to</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setiteratorindex.php
		 * @see Imagick::getIteratorIndex(), Imagick::getImageIndex(), Imagick::setImageIndex()
		 * @since PECL imagick 2.0.0
		 */
		public function setIteratorIndex(int $index): bool {}

		/**
		 * Sets the Imagick iterator to the last image
		 * <p>Sets the Imagick iterator to the last image.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setlastiterator.php
		 * @since PECL imagick 2.0.1
		 */
		public function setLastIterator(): bool {}

		/**
		 * Set an option
		 * <p>Associates one or more options with the wand.</p>
		 * @param string $key
		 * @param string $value
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setoption.php
		 * @since PECL imagick 2.0.0
		 */
		public function setOption(string $key, string $value): bool {}

		/**
		 * Sets the page geometry of the Imagick object
		 * <p>Sets the page geometry of the Imagick object.</p>
		 * @param int $width
		 * @param int $height
		 * @param int $x
		 * @param int $y
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setpage.php
		 * @since PECL imagick 2.0.0
		 */
		public function setPage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * Sets point size
		 * <p>Sets object's point size property. This method can be used for example to set font size for caption: pseudo-format. This method is available if Imagick has been compiled against ImageMagick version 6.3.7 or newer.</p>
		 * @param float $point_size <p>Point size</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setpointsize.php
		 * @see Imagick::getPointSize()
		 * @since PECL imagick 2.1.0
		 */
		public function setPointSize(float $point_size): bool {}

		/**
		 * Description
		 * <p>Set a callback that will be called during the processing of the Imagick image.</p>
		 * @param callable $callback <p>The progress function to call. It should return true if image processing should continue, or false if it should be cancelled. The offset parameter indicates the progress and the span parameter indicates the total amount of work needed to be done.</p>   callback  (  <code>mixed</code> <code>$offset</code>  ,  <code>mixed</code> <code>$span</code>  ) : <code>bool</code> <b>Caution</b> <p>The values passed to the callback function are not consistent. In particular the span parameter can increase during image processing. Because of this calculating the percentage complete of an image operation is not trivial.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setprogressmonitor.php
		 * @since No version information available, might only be in Git
		 */
		public function setProgressMonitor(callable $callback): bool {}

		/**
		 * Description
		 * <p>Sets the ImageMagick registry entry named key to value. This is most useful for setting "temporary-path" which controls where ImageMagick creates temporary images e.g. while processing PDFs.</p>
		 * @param string $key
		 * @param string $value
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setregistry.php
		 * @since No version information available, might only be in Git
		 */
		public static function setRegistry(string $key, string $value): bool {}

		/**
		 * Sets the image resolution
		 * <p>Sets the image resolution.</p>
		 * @param float $x_resolution <p>The horizontal resolution.</p>
		 * @param float $y_resolution <p>The vertical resolution.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setresolution.php
		 * @since PECL imagick 2.0.0
		 */
		public function setResolution(float $x_resolution, float $y_resolution): bool {}

		/**
		 * Sets the limit for a particular resource
		 * <p>This method is used to modify the resource limits of the underlying ImageMagick library.</p>
		 * @param int $type <p>Refer to the list of resourcetype constants.</p>
		 * @param int $limit <p>One of the resourcetype constants. The unit depends on the type of the resource being limited.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setresourcelimit.php
		 * @since PECL imagick 2.0.0
		 */
		public function setResourceLimit(int $type, int $limit): bool {}

		/**
		 * Sets the image sampling factors
		 * <p>Sets the image sampling factors.</p>
		 * @param array $factors
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setsamplingfactors.php
		 * @since PECL imagick 2.0.0
		 */
		public function setSamplingFactors(array $factors): bool {}

		/**
		 * Sets the size of the Imagick object
		 * <p>Sets the size of the Imagick object. Set it before you read a raw image format such as RGB, GRAY, or CMYK.</p>
		 * @param int $columns
		 * @param int $rows
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setsize.php
		 * @since PECL imagick 2.0.0
		 */
		public function setSize(int $columns, int $rows): bool {}

		/**
		 * Sets the size and offset of the Imagick object
		 * <p>Sets the size and offset of the Imagick object. Set it before you read a raw image format such as RGB, GRAY, or CMYK. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param int $columns <p>The width in pixels.</p>
		 * @param int $rows <p>The height in pixels.</p>
		 * @param int $offset <p>The image offset.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.setsizeoffset.php
		 * @since PECL imagick 2.0.0
		 */
		public function setSizeOffset(int $columns, int $rows, int $offset): bool {}

		/**
		 * Sets the image type attribute
		 * <p>Sets the image type attribute.</p>
		 * @param int $image_type
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.settype.php
		 * @since PECL imagick 2.0.0
		 */
		public function setType(int $image_type): bool {}

		/**
		 * Creates a 3D effect
		 * <p>Shines a distant light on an image to create a three-dimensional effect. You control the positioning of the light with azimuth and elevation; azimuth is measured in degrees off the x axis and elevation is measured in pixels above the Z axis. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param bool $gray <p>A value other than zero shades the intensity of each pixel.</p>
		 * @param float $azimuth <p>Defines the light source direction.</p>
		 * @param float $elevation <p>Defines the light source direction.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.shadeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function shadeImage(bool $gray, float $azimuth, float $elevation): bool {}

		/**
		 * Simulates an image shadow
		 * <p>Simulates an image shadow.</p>
		 * @param float $opacity
		 * @param float $sigma
		 * @param int $x
		 * @param int $y
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.shadowimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function shadowImage(float $opacity, float $sigma, int $x, int $y): bool {}

		/**
		 * Sharpens an image
		 * <p>Sharpens an image. We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, the radius should be larger than sigma. Use a radius of 0 and <b>Imagick::sharpenImage()</b> selects a suitable radius for you.</p>
		 * @param float $radius
		 * @param float $sigma
		 * @param int $channel
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.sharpenimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function sharpenImage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Shaves pixels from the image edges
		 * <p>Shaves pixels from the image edges. It allocates the memory necessary for the new Image structure and returns a pointer to the new image.</p>
		 * @param int $columns
		 * @param int $rows
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.shaveimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function shaveImage(int $columns, int $rows): bool {}

		/**
		 * Creating a parallelogram
		 * <p>Slides one edge of an image along the X or Y axis, creating a parallelogram. An X direction shear slides an edge along the X axis, while a Y direction shear slides an edge along the Y axis. The amount of the shear is controlled by a shear angle. For X direction shears, x_shear is measured relative to the Y axis, and similarly, for Y direction shears y_shear is measured relative to the X axis. Empty triangles left over from shearing the image are filled with the background color.</p>
		 * @param mixed $background <p>The background color</p>
		 * @param float $x_shear <p>The number of degrees to shear on the x axis</p>
		 * @param float $y_shear <p>The number of degrees to shear on the y axis</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.shearimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function shearImage($background, float $x_shear, float $y_shear): bool {}

		/**
		 * Adjusts the contrast of an image
		 * <p>Adjusts the contrast of an image with a non-linear sigmoidal contrast algorithm. Increase the contrast of the image using a sigmoidal transfer function without saturating highlights or shadows. Contrast indicates how much to increase the contrast (0 is none; 3 is typical; 20 is pushing it); mid-point indicates where midtones fall in the resultant image (0 is white; 50 is middle-gray; 100 is black). Set sharpen to <b><code>TRUE</code></b> to increase the image contrast otherwise the contrast is reduced.</p><p>See also ImageMagick v6 Examples - Image Transformations &mdash; Sigmoidal Non-linearity Contrast</p>
		 * @param bool $sharpen <p>If true increase the contrast, if false decrease the contrast.</p>
		 * @param float $alpha <p>The amount of contrast to apply. 1 is very little, 5 is a significant amount, 20 is extreme.</p>
		 * @param float $beta <p>Where the midpoint of the gradient will be. This value should be in the range 0 to 1 - mutliplied by the quantum value for ImageMagick.</p>
		 * @param int $channel <p>Which color channels the contrast will be applied to.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.sigmoidalcontrastimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function sigmoidalContrastImage(bool $sharpen, float $alpha, float $beta, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Simulates a pencil sketch
		 * <p>Simulates a pencil sketch. We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, radius should be larger than sigma. Use a radius of 0 and Imagick::sketchImage() selects a suitable radius for you. Angle gives the angle of the blurring motion. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param float $radius <p>The radius of the Gaussian, in pixels, not counting the center pixel</p>
		 * @param float $sigma <p>The standard deviation of the Gaussian, in pixels.</p>
		 * @param float $angle <p>Apply the effect along this angle.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.sketchimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function sketchImage(float $radius, float $sigma, float $angle): bool {}

		/**
		 * Description
		 * <p>Takes all images from the current image pointer to the end of the image list and smushs them to each other top-to-bottom if the stack parameter is true, otherwise left-to-right.</p>
		 * @param bool $stack
		 * @param int $offset
		 * @return Imagick <p>The new smushed image.</p>
		 * @link http://php.net/manual/en/imagick.smushimages.php
		 * @since No version information available, might only be in Git
		 */
		public function smushImages(bool $stack, int $offset): \Imagick {}

		/**
		 * Applies a solarizing effect to the image
		 * <p>Applies a special effect to the image, similar to the effect achieved in a photo darkroom by selectively exposing areas of photo sensitive paper to light. Threshold ranges from 0 to QuantumRange and is a measure of the extent of the solarization.</p>
		 * @param int $threshold
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.solarizeimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function solarizeImage(int $threshold): bool {}

		/**
		 * Interpolates colors
		 * <p>Given the arguments array containing numeric values this method interpolates the colors found at those coordinates across the whole image using <code>sparse_method</code>. This method is available if Imagick has been compiled against ImageMagick version 6.4.5 or newer.</p>
		 * @param int $SPARSE_METHOD <p>Refer to this list of sparse method constants</p>
		 * @param array $arguments <p>An array containing the coordinates. The array is in format <code>array(1,1, 2,45)</code></p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b><code>Imagick::CHANNEL_DEFAULT</code></b>. Refer to this list of channel constants</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.sparsecolorimage.php
		 * @since No version information available, might only be in Git
		 */
		public function sparseColorImage(int $SPARSE_METHOD, array $arguments, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Splices a solid color into the image
		 * <p>Splices a solid color into the image.</p>
		 * @param int $width
		 * @param int $height
		 * @param int $x
		 * @param int $y
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.spliceimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function spliceImage(int $width, int $height, int $x, int $y): bool {}

		/**
		 * Randomly displaces each pixel in a block
		 * <p>Special effects method that randomly displaces each pixel in a block defined by the radius parameter.</p>
		 * @param float $radius
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.spreadimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function spreadImage(float $radius): bool {}

		/**
		 * Description
		 * <p>Replace each pixel with corresponding statistic from the neighborhood of the specified width and height.</p>
		 * @param int $type
		 * @param int $width
		 * @param int $height
		 * @param int $channel
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.statisticimage.php
		 * @since No version information available, might only be in Git
		 */
		public function statisticImage(int $type, int $width, int $height, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Hides a digital watermark within the image
		 * <p>Hides a digital watermark within the image. Recover the hidden watermark later to prove that the authenticity of an image. Offset defines the start position within the image to hide the watermark.</p>
		 * @param \Imagick $watermark_wand
		 * @param int $offset
		 * @return Imagick <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.steganoimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function steganoImage(\Imagick $watermark_wand, int $offset): \Imagick {}

		/**
		 * Composites two images
		 * <p>Composites two images and produces a single image that is the composite of a left and right image of a stereo pair.</p>
		 * @param \Imagick $offset_wand
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.stereoimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function stereoImage(\Imagick $offset_wand): bool {}

		/**
		 * Strips an image of all profiles and comments
		 * <p>Strips an image of all profiles and comments.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.stripimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function stripImage(): bool {}

		/**
		 * Description
		 * <p>Searches for a subimage in the current image and returns a similarity image such that an exact match location is completely white and if none of the pixels match, black, otherwise some gray level in-between. You can also pass in the optional parameters bestMatch and similarity. After calling the function similarity will be set to the 'score' of the similarity between the subimage and the matching position in the larger image, bestMatch will contain an associative array with elements x, y, width, height that describe the matching region.</p>
		 * @param \Imagick $Imagick
		 * @param array $offset
		 * @param float $similarity <p>A new image that displays the amount of similarity at each pixel.</p>
		 * @return Imagick
		 * @link http://php.net/manual/en/imagick.subimagematch.php
		 * @since No version information available, might only be in Git
		 */
		public function subImageMatch(\Imagick $Imagick, array &$offset = NULL, float &$similarity = NULL): \Imagick {}

		/**
		 * Swirls the pixels about the center of the image
		 * <p>Swirls the pixels about the center of the image, where degrees indicates the sweep of the arc through which each pixel is moved. You get a more dramatic effect as the degrees move from 1 to 360.</p>
		 * @param float $degrees
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.swirlimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function swirlImage(float $degrees): bool {}

		/**
		 * Repeatedly tiles the texture image
		 * <p>Repeatedly tiles the texture image across and down the image canvas.</p>
		 * @param \Imagick $texture_wand <p>Imagick object to use as texture image</p>
		 * @return Imagick <p>Returns a new Imagick object that has the repeated texture applied.</p>
		 * @link http://php.net/manual/en/imagick.textureimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function textureImage(\Imagick $texture_wand): \Imagick {}

		/**
		 * Changes the value of individual pixels based on a threshold
		 * <p>Changes the value of individual pixels based on the intensity of each pixel compared to threshold. The result is a high-contrast, two color image.</p>
		 * @param float $threshold
		 * @param int $channel
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.thresholdimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function thresholdImage(float $threshold, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Changes the size of an image
		 * <p>Changes the size of an image to the given dimensions and removes any associated profiles. The goal is to produce small, low cost thumbnail images suited for display on the Web. If <b><code>TRUE</code></b> is given as a third parameter then columns and rows parameters are used as maximums for each side. Both sides will be scaled down until they match or are smaller than the parameter given for the side.</p><p><b>Note</b>:  The behavior of the parameter <code>bestfit</code> changed in Imagick 3.0.0. Before this version given dimensions 400x400 an image of dimensions 200x150 would be left untouched. In Imagick 3.0.0 and later the image would be scaled up to size 400x300 as this is the "best fit" for the given dimensions. If <code>bestfit</code> parameter is used both width and height must be given. </p>
		 * @param int $columns <p>Image width</p>
		 * @param int $rows <p>Image height</p>
		 * @param bool $bestfit <p>Whether to force maximum values</p>
		 * @param bool $fill
		 * @param bool $legacy
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.thumbnailimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function thumbnailImage(int $columns, int $rows, bool $bestfit = FALSE, bool $fill = FALSE, bool $legacy = FALSE): bool {}

		/**
		 * Applies a color vector to each pixel in the image
		 * <p>Applies a color vector to each pixel in the image. The length of the vector is 0 for black and white and at its maximum for the midtones. The vector weighing function is f(x)=(1-(4.0&#42;((x-0.5)&#42;(x-0.5)))).</p>
		 * @param mixed $tint
		 * @param mixed $opacity
		 * @param bool $legacy
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.tintimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function tintImage($tint, $opacity, bool $legacy = FALSE): bool {}

		/**
		 * Convenience method for setting crop size and the image geometry
		 * <p>A convenience method for setting crop size and the image geometry from strings. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param string $crop <p>A crop geometry string. This geometry defines a subregion of the image to crop.</p>
		 * @param string $geometry <p>An image geometry string. This geometry defines the final size of the image.</p>
		 * @return Imagick <p>Returns an Imagick object containing the transformed image.</p>
		 * @link http://php.net/manual/en/imagick.transformimage.php
		 * @see Imagick::cropImage(), Imagick::resizeImage(), Imagick::thumbnailImage()
		 * @since PECL imagick 2.0.0
		 */
		public function transformImage(string $crop, string $geometry): \Imagick {}

		/**
		 * Transforms an image to a new colorspace
		 * <p>Transforms an image to a new colorspace.</p>
		 * @param int $colorspace <p>The colorspace the image should be transformed to, one of the COLORSPACE constants e.g. Imagick::COLORSPACE_CMYK.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.transformimagecolorspace.php
		 * @since No version information available, might only be in Git
		 */
		public function transformImageColorspace(int $colorspace): bool {}

		/**
		 * Paints pixels transparent
		 * <p>Paints pixels matching the target color transparent. This method is available if Imagick has been compiled against ImageMagick version 6.3.8 or newer.</p>
		 * @param mixed $target <p>The target color to paint</p>
		 * @param float $alpha <p>The level of transparency: 1.0 is fully opaque and 0.0 is fully transparent.</p>
		 * @param float $fuzz <p>The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.</p>
		 * @param bool $invert <p>If <b><code>TRUE</code></b> paints any pixel that does not match the target color.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.transparentpaintimage.php
		 * @since No version information available, might only be in Git
		 */
		public function transparentPaintImage($target, float $alpha, float $fuzz, bool $invert): bool {}

		/**
		 * Creates a vertical mirror image
		 * <p>Creates a vertical mirror image by reflecting the pixels around the central x-axis while rotating them 90-degrees. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.transposeimage.php
		 * @see Imagick::transverseImage()
		 * @since PECL imagick 2.0.0
		 */
		public function transposeImage(): bool {}

		/**
		 * Creates a horizontal mirror image
		 * <p>Creates a horizontal mirror image by reflecting the pixels around the central y-axis while rotating them 270-degrees. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.transverseimage.php
		 * @see Imagick::transposeImage()
		 * @since PECL imagick 2.0.0
		 */
		public function transverseImage(): bool {}

		/**
		 * Remove edges from the image
		 * <p>Remove edges that are the background color from the image. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param float $fuzz <p>By default target must match a particular pixel color exactly. However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same. This parameter represents the variation on the quantum range.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.trimimage.php
		 * @see Imagick::getQuantumDepth(), Imagick::getQuantumRange(), imagecropauto()
		 * @since PECL imagick 2.0.0
		 */
		public function trimImage(float $fuzz): bool {}

		/**
		 * Discards all but one of any pixel color
		 * <p>Discards all but one of any pixel color. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.uniqueimagecolors.php
		 * @since PECL imagick 2.0.0
		 */
		public function uniqueImageColors(): bool {}

		/**
		 * Sharpens an image
		 * <p>Sharpens an image. We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, radius should be larger than sigma. Use a radius of 0 and Imagick::UnsharpMaskImage() selects a suitable radius for you.</p>
		 * @param float $radius
		 * @param float $sigma
		 * @param float $amount
		 * @param float $threshold
		 * @param int $channel
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.unsharpmaskimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function unsharpMaskImage(float $radius, float $sigma, float $amount, float $threshold, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

		/**
		 * Checks if the current item is valid
		 * <p>Checks if the current item is valid.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.valid.php
		 * @since PECL imagick 2.0.0
		 */
		public function valid(): bool {}

		/**
		 * Adds vignette filter to the image
		 * <p>Softens the edges of the image in vignette style. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param float $blackPoint <p>The black point.</p>
		 * @param float $whitePoint <p>The white point</p>
		 * @param int $x <p>X offset of the ellipse</p>
		 * @param int $y <p>Y offset of the ellipse</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.vignetteimage.php
		 * @see Imagick::waveImage(), Imagick::swirlImage()
		 * @since PECL imagick 2.0.0
		 */
		public function vignetteImage(float $blackPoint, float $whitePoint, int $x, int $y): bool {}

		/**
		 * Applies wave filter to the image
		 * <p>Applies a wave filter to the image. This method is available if Imagick has been compiled against ImageMagick version 6.2.9 or newer.</p>
		 * @param float $amplitude <p>The amplitude of the wave.</p>
		 * @param float $length <p>The length of the wave.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.waveimage.php
		 * @see Imagick::solarizeImage(), Imagick::oilpaintImage(), Imagick::embossImage(), Imagick::addNoiseImage(), Imagick::swirlImage()
		 * @since PECL imagick 2.0.0
		 */
		public function waveImage(float $amplitude, float $length): bool {}

		/**
		 * Force all pixels above the threshold into white
		 * <p>Is like Imagick::ThresholdImage() but force all pixels above the threshold into white while leaving all pixels below the threshold unchanged.</p>
		 * @param mixed $threshold
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.whitethresholdimage.php
		 * @since PECL imagick 2.0.0
		 */
		public function whiteThresholdImage($threshold): bool {}

		/**
		 * Writes an image to the specified filename
		 * <p>Writes an image to the specified filename. If the filename parameter is NULL, the image is written to the filename set by Imagick::readImage() or Imagick::setImageFilename().</p>
		 * @param string $filename <p>Filename where to write the image. The extension of the filename defines the type of the file. Format can be forced regardless of file extension using format: prefix, for example "jpg:test.png".</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.writeimage.php
		 * @since PECL imagick 0.9.0-0.9.9
		 */
		public function writeImage(string $filename = NULL): bool {}

		/**
		 * Writes an image to a filehandle
		 * <p>Writes the image sequence to an open filehandle. The handle must be opened with for example fopen. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @param resource $filehandle <p>Filehandle where to write the image</p>
		 * @param string $format
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.writeimagefile.php
		 * @since No version information available, might only be in Git
		 */
		public function writeImageFile($filehandle, string $format = NULL): bool {}

		/**
		 * Writes an image or image sequence
		 * <p>Writes an image or image sequence.</p>
		 * @param string $filename
		 * @param bool $adjoin
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.writeimages.php
		 * @since PECL imagick 0.9.0-0.9.9
		 */
		public function writeImages(string $filename, bool $adjoin): bool {}

		/**
		 * Writes frames to a filehandle
		 * <p>Writes all image frames into an open filehandle. This method can be used to write animated gifs or other multiframe images into open filehandle. This method is available if Imagick has been compiled against ImageMagick version 6.3.6 or newer.</p>
		 * @param resource $filehandle <p>Filehandle where to write the images</p>
		 * @param string $format
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagick.writeimagesfile.php
		 * @since No version information available, might only be in Git
		 */
		public function writeImagesFile($filehandle, string $format = NULL): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.imagickdraw.php
	 * @since PECL imagick 2.0.0
	 */
	class ImagickDraw {

		/**
		 * The ImagickDraw constructor
		 * <p>This function is currently not documented; only its argument list is available.</p><p>The ImagickDraw constructor</p>
		 * @return self <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.construct.php
		 * @since PECL imagick 2.0.0
		 */
		public function __construct() {}

		/**
		 * Adjusts the current affine transformation matrix
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Adjusts the current affine transformation matrix with the specified affine transformation matrix.</p>
		 * @param array $affine <p>Affine matrix parameters</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.affine.php
		 * @since PECL imagick 2.0.0
		 */
		public function affine(array $affine): bool {}

		/**
		 * Draws text on the image
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws text on the image.</p>
		 * @param float $x <p>The x coordinate where text is drawn</p>
		 * @param float $y <p>The y coordinate where text is drawn</p>
		 * @param string $text <p>The text to draw on the image</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.annotation.php
		 * @since PECL imagick 2.0.0
		 */
		public function annotation(float $x, float $y, string $text): bool {}

		/**
		 * Draws an arc
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws an arc falling within a specified bounding rectangle on the image.</p>
		 * @param float $sx <p>Starting x ordinate of bounding rectangle</p>
		 * @param float $sy <p>starting y ordinate of bounding rectangle</p>
		 * @param float $ex <p>ending x ordinate of bounding rectangle</p>
		 * @param float $ey <p>ending y ordinate of bounding rectangle</p>
		 * @param float $sd <p>starting degrees of rotation</p>
		 * @param float $ed <p>ending degrees of rotation</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.arc.php
		 * @since PECL imagick 2.0.0
		 */
		public function arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed): bool {}

		/**
		 * Draws a bezier curve
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a bezier curve through a set of points on the image.</p>
		 * @param array $coordinates <p>Multidimensional array like array( array( 'x' =&gt; 1, 'y' =&gt; 2 ), array( 'x' =&gt; 3, 'y' =&gt; 4 ) )</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.bezier.php
		 * @since PECL imagick 2.0.0
		 */
		public function bezier(array $coordinates): bool {}

		/**
		 * Draws a circle
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a circle on the image.</p>
		 * @param float $ox <p>origin x coordinate</p>
		 * @param float $oy <p>origin y coordinate</p>
		 * @param float $px <p>perimeter x coordinate</p>
		 * @param float $py <p>perimeter y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.circle.php
		 * @since PECL imagick 2.0.0
		 */
		public function circle(float $ox, float $oy, float $px, float $py): bool {}

		/**
		 * Clears the ImagickDraw
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Clears the ImagickDraw object of any accumulated commands, and resets the settings it contains to their defaults.</p>
		 * @return bool <p>Returns an ImagickDraw object.</p>
		 * @link http://php.net/manual/en/imagickdraw.clear.php
		 * @since PECL imagick 2.0.0
		 */
		public function clear(): bool {}

		/**
		 * Makes an exact copy of the specified ImagickDraw object
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Makes an exact copy of the specified ImagickDraw object.</p>
		 * @return ImagickDraw <p>What the function returns, first on success, then on failure. See also the &amp;return.success; entity</p>
		 * @link http://php.net/manual/en/imagickdraw.clone.php
		 * @since PECL imagick 2.0.0
		 */
		public function clone(): \ImagickDraw {}

		/**
		 * Draws color on image
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws color on image using the current fill color, starting at specified position, and using specified paint method.</p>
		 * @param float $x <p>x coordinate of the paint</p>
		 * @param float $y <p>y coordinate of the paint</p>
		 * @param int $paintMethod <p>one of the PAINT_ constants</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.color.php
		 * @since PECL imagick 2.0.0
		 */
		public function color(float $x, float $y, int $paintMethod): bool {}

		/**
		 * Adds a comment
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Adds a comment to a vector output stream.</p>
		 * @param string $comment <p>The comment string to add to vector output stream</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.comment.php
		 * @since PECL imagick 2.0.0
		 */
		public function comment(string $comment): bool {}

		/**
		 * Composites an image onto the current image
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Composites an image onto the current image, using the specified composition operator, specified position, and at the specified size.</p>
		 * @param int $compose <p>composition operator. One of COMPOSITE_ constants</p>
		 * @param float $x <p>x coordinate of the top left corner</p>
		 * @param float $y <p>y coordinate of the top left corner</p>
		 * @param float $width <p>width of the composition image</p>
		 * @param float $height <p>height of the composition image</p>
		 * @param \Imagick $compositeWand <p>the Imagick object where composition image is taken from</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.composite.php
		 * @since PECL imagick 2.0.0
		 */
		public function composite(int $compose, float $x, float $y, float $width, float $height, \Imagick $compositeWand): bool {}

		/**
		 * Frees all associated resources
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Frees all resources associated with the ImagickDraw object.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.destroy.php
		 * @since PECL imagick 2.0.0
		 */
		public function destroy(): bool {}

		/**
		 * Draws an ellipse on the image
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws an ellipse on the image.</p>
		 * @param float $ox
		 * @param float $oy
		 * @param float $rx
		 * @param float $ry
		 * @param float $start
		 * @param float $end
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.ellipse.php
		 * @since PECL imagick 2.0.0
		 */
		public function ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end): bool {}

		/**
		 * Obtains the current clipping path ID
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Obtains the current clipping path ID.</p>
		 * @return string <p>Returns a string containing the clip path ID or false if no clip path exists.</p>
		 * @link http://php.net/manual/en/imagickdraw.getclippath.php
		 * @since PECL imagick 2.0.0
		 */
		public function getClipPath(): string {}

		/**
		 * Returns the current polygon fill rule
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the current polygon fill rule to be used by the clipping path.</p>
		 * @return int <p>Returns one of the FILLRULE_ constants.</p>
		 * @link http://php.net/manual/en/imagickdraw.getcliprule.php
		 * @since PECL imagick 2.0.0
		 */
		public function getClipRule(): int {}

		/**
		 * Returns the interpretation of clip path units
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the interpretation of clip path units.</p>
		 * @return int <p>Returns an int on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.getclipunits.php
		 * @since PECL imagick 2.0.0
		 */
		public function getClipUnits(): int {}

		/**
		 * Returns the fill color
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the fill color used for drawing filled objects.</p>
		 * @return ImagickPixel <p>Returns an ImagickPixel object.</p>
		 * @link http://php.net/manual/en/imagickdraw.getfillcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFillColor(): \ImagickPixel {}

		/**
		 * Returns the opacity used when drawing
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the opacity used when drawing using the fill color or fill texture. Fully opaque is 1.0.</p>
		 * @return float <p>The opacity.</p>
		 * @link http://php.net/manual/en/imagickdraw.getfillopacity.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFillOpacity(): float {}

		/**
		 * Returns the fill rule
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the fill rule used while drawing polygons.</p>
		 * @return int <p>Returns a FILLRULE_ constant</p>
		 * @link http://php.net/manual/en/imagickdraw.getfillrule.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFillRule(): int {}

		/**
		 * Returns the font
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns a string specifying the font used when annotating with text.</p>
		 * @return string <p>Returns a string on success and false if no font is set.</p>
		 * @link http://php.net/manual/en/imagickdraw.getfont.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFont(): string {}

		/**
		 * Returns the font family
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the font family to use when annotating with text.</p>
		 * @return string <p>Returns the font family currently selected or false if font family is not set.</p>
		 * @link http://php.net/manual/en/imagickdraw.getfontfamily.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFontFamily(): string {}

		/**
		 * Returns the font pointsize
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the font pointsize used when annotating with text.</p>
		 * @return float <p>Returns the font size associated with the current ImagickDraw object.</p>
		 * @link http://php.net/manual/en/imagickdraw.getfontsize.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFontSize(): float {}

		/**
		 * Description
		 * <p>Gets the font stretch to use when annotating with text. Returns a StretchType.</p>
		 * @return int
		 * @link http://php.net/manual/en/imagickdraw.getfontstretch.php
		 * @since No version information available, might only be in Git
		 */
		public function getFontStretch(): int {}

		/**
		 * Returns the font style
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the font style used when annotating with text.</p>
		 * @return int <p>Returns the font style constant (STYLE_) associated with the ImagickDraw object or 0 if no style is set.</p>
		 * @link http://php.net/manual/en/imagickdraw.getfontstyle.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFontStyle(): int {}

		/**
		 * Returns the font weight
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the font weight used when annotating with text.</p>
		 * @return int <p>Returns an int on success and 0 if no weight is set.</p>
		 * @link http://php.net/manual/en/imagickdraw.getfontweight.php
		 * @since PECL imagick 2.0.0
		 */
		public function getFontWeight(): int {}

		/**
		 * Returns the text placement gravity
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the text placement gravity used when annotating with text.</p>
		 * @return int <p>Returns a GRAVITY_ constant on success and 0 if no gravity is set.</p>
		 * @link http://php.net/manual/en/imagickdraw.getgravity.php
		 * @since PECL imagick 2.0.0
		 */
		public function getGravity(): int {}

		/**
		 * Returns the current stroke antialias setting
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the current stroke antialias setting. Stroked outlines are antialiased by default. When antialiasing is disabled stroked pixels are thresholded to determine if the stroke color or underlying canvas color should be used.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if antialiasing is on and false if it is off.</p>
		 * @link http://php.net/manual/en/imagickdraw.getstrokeantialias.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeAntialias(): bool {}

		/**
		 * Returns the color used for stroking object outlines
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the color used for stroking object outlines.</p>
		 * @return ImagickPixel <p>Returns an ImagickPixel object which describes the color.</p>
		 * @link http://php.net/manual/en/imagickdraw.getstrokecolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeColor(): \ImagickPixel {}

		/**
		 * Returns an array representing the pattern of dashes and gaps used to stroke paths
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns an array representing the pattern of dashes and gaps used to stroke paths.</p>
		 * @return array <p>Returns an array on success and empty array if not set.</p>
		 * @link http://php.net/manual/en/imagickdraw.getstrokedasharray.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeDashArray(): array {}

		/**
		 * Returns the offset into the dash pattern to start the dash
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the offset into the dash pattern to start the dash.</p>
		 * @return float <p>Returns a float representing the offset and 0 if it's not set.</p>
		 * @link http://php.net/manual/en/imagickdraw.getstrokedashoffset.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeDashOffset(): float {}

		/**
		 * Returns the shape to be used at the end of open subpaths when they are stroked
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the shape to be used at the end of open subpaths when they are stroked.</p>
		 * @return int <p>Returns one of the LINECAP_ constants or 0 if stroke linecap is not set.</p>
		 * @link http://php.net/manual/en/imagickdraw.getstrokelinecap.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeLineCap(): int {}

		/**
		 * Returns the shape to be used at the corners of paths when they are stroked
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the shape to be used at the corners of paths (or other vector shapes) when they are stroked.</p>
		 * @return int <p>Returns one of the LINEJOIN_ constants or 0 if stroke line join is not set.</p>
		 * @link http://php.net/manual/en/imagickdraw.getstrokelinejoin.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeLineJoin(): int {}

		/**
		 * Returns the stroke miter limit
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the miter limit. When two line segments meet at a sharp angle and miter joins have been specified for 'lineJoin', it is possible for the miter to extend far beyond the thickness of the line stroking the path. The 'miterLimit' imposes a limit on the ratio of the miter length to the 'lineWidth'.</p>
		 * @return int <p>Returns an int describing the miter limit and 0 if no miter limit is set.</p>
		 * @link http://php.net/manual/en/imagickdraw.getstrokemiterlimit.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeMiterLimit(): int {}

		/**
		 * Returns the opacity of stroked object outlines
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the opacity of stroked object outlines.</p>
		 * @return float <p>Returns a double describing the opacity.</p>
		 * @link http://php.net/manual/en/imagickdraw.getstrokeopacity.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeOpacity(): float {}

		/**
		 * Returns the width of the stroke used to draw object outlines
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the width of the stroke used to draw object outlines.</p>
		 * @return float <p>Returns a double describing the stroke width.</p>
		 * @link http://php.net/manual/en/imagickdraw.getstrokewidth.php
		 * @since PECL imagick 2.0.0
		 */
		public function getStrokeWidth(): float {}

		/**
		 * Returns the text alignment
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the alignment applied when annotating with text.</p>
		 * @return int <p>Returns one of the ALIGN_ constants and 0 if no align is set.</p>
		 * @link http://php.net/manual/en/imagickdraw.gettextalignment.php
		 * @since PECL imagick 2.0.0
		 */
		public function getTextAlignment(): int {}

		/**
		 * Returns the current text antialias setting
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the current text antialias setting, which determines whether text is antialiased. Text is antialiased by default.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if text is antialiased and false if not.</p>
		 * @link http://php.net/manual/en/imagickdraw.gettextantialias.php
		 * @since PECL imagick 2.0.0
		 */
		public function getTextAntialias(): bool {}

		/**
		 * Returns the text decoration
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the decoration applied when annotating with text.</p>
		 * @return int <p>Returns one of the DECORATION_ constants and 0 if no decoration is set.</p>
		 * @link http://php.net/manual/en/imagickdraw.gettextdecoration.php
		 * @since PECL imagick 2.0.0
		 */
		public function getTextDecoration(): int {}

		/**
		 * Returns the code set used for text annotations
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns a string which specifies the code set used for text annotations.</p>
		 * @return string <p>Returns a string specifying the code set or false if text encoding is not set.</p>
		 * @link http://php.net/manual/en/imagickdraw.gettextencoding.php
		 * @since PECL imagick 2.0.0
		 */
		public function getTextEncoding(): string {}

		/**
		 * Description
		 * <p>Gets the text interword spacing.</p>
		 * @return float
		 * @link http://php.net/manual/en/imagickdraw.gettextinterlinespacing.php
		 * @since No version information available, might only be in Git
		 */
		public function getTextInterlineSpacing(): float {}

		/**
		 * Description
		 * <p>Gets the text interword spacing.</p>
		 * @return float
		 * @link http://php.net/manual/en/imagickdraw.gettextinterwordspacing.php
		 * @since No version information available, might only be in Git
		 */
		public function getTextInterwordSpacing(): float {}

		/**
		 * Description
		 * <p>Gets the text kerning.</p>
		 * @return float
		 * @link http://php.net/manual/en/imagickdraw.gettextkerning.php
		 * @since No version information available, might only be in Git
		 */
		public function getTextKerning(): float {}

		/**
		 * Returns the text under color
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the color of a background rectangle to place under text annotations.</p>
		 * @return ImagickPixel <p>Returns an ImagickPixel object describing the color.</p>
		 * @link http://php.net/manual/en/imagickdraw.gettextundercolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getTextUnderColor(): \ImagickPixel {}

		/**
		 * Returns a string containing vector graphics
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns a string which specifies the vector graphics generated by any graphics calls made since the ImagickDraw object was instantiated.</p>
		 * @return string <p>Returns a string containing the vector graphics.</p>
		 * @link http://php.net/manual/en/imagickdraw.getvectorgraphics.php
		 * @since PECL imagick 2.0.0
		 */
		public function getVectorGraphics(): string {}

		/**
		 * Draws a line
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a line on the image using the current stroke color, stroke opacity, and stroke width.</p>
		 * @param float $sx <p>starting x coordinate</p>
		 * @param float $sy <p>starting y coordinate</p>
		 * @param float $ex <p>ending x coordinate</p>
		 * @param float $ey <p>ending y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.line.php
		 * @since PECL imagick 2.0.0
		 */
		public function line(float $sx, float $sy, float $ex, float $ey): bool {}

		/**
		 * Paints on the image's opacity channel
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Paints on the image's opacity channel in order to set effected pixels to transparent, to influence the opacity of pixels.</p>
		 * @param float $x <p>x coordinate of the matte</p>
		 * @param float $y <p>y coordinate of the matte</p>
		 * @param int $paintMethod <p>PAINT_ constant</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/imagickdraw.matte.php
		 * @since PECL imagick 2.0.0
		 */
		public function matte(float $x, float $y, int $paintMethod): bool {}

		/**
		 * Adds a path element to the current path
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Adds a path element to the current path which closes the current subpath by drawing a straight line from the current point to the current subpath's most recent starting point (usually, the most recent moveto point).</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathclose.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathClose(): bool {}

		/**
		 * Draws a cubic Bezier curve
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a cubic Bezier curve from the current point to (x,y) using (x1,y1) as the control point at the beginning of the curve and (x2,y2) as the control point at the end of the curve using absolute coordinates. At the end of the command, the new current point becomes the final (x,y) coordinate pair used in the polybezier.</p>
		 * @param float $x1 <p>x coordinate of the first control point</p>
		 * @param float $y1 <p>y coordinate of the first control point</p>
		 * @param float $x2 <p>x coordinate of the second control point</p>
		 * @param float $y2 <p>y coordinate of the first control point</p>
		 * @param float $x <p>x coordinate of the curve end</p>
		 * @param float $y <p>y coordinate of the curve end</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathcurvetoabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToAbsolute(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool {}

		/**
		 * Draws a quadratic Bezier curve
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a quadratic Bezier curve from the current point to (x,y) using (x1,y1) as the control point using absolute coordinates. At the end of the command, the new current point becomes the final (x,y) coordinate pair used in the polybezier.</p>
		 * @param float $x1 <p>x coordinate of the control point</p>
		 * @param float $y1 <p>y coordinate of the control point</p>
		 * @param float $x <p>x coordinate of the end point</p>
		 * @param float $y <p>y coordinate of the end point</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToQuadraticBezierAbsolute(float $x1, float $y1, float $x, float $y): bool {}

		/**
		 * Draws a quadratic Bezier curve
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a quadratic Bezier curve from the current point to (x,y) using (x1,y1) as the control point using relative coordinates. At the end of the command, the new current point becomes the final (x,y) coordinate pair used in the polybezier.</p>
		 * @param float $x1 <p>starting x coordinate</p>
		 * @param float $y1 <p>starting y coordinate</p>
		 * @param float $x <p>ending x coordinate</p>
		 * @param float $y <p>ending y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToQuadraticBezierRelative(float $x1, float $y1, float $x, float $y): bool {}

		/**
		 * Draws a quadratic Bezier curve
		 * <p>Draws a quadratic Bezier curve (using absolute coordinates) from the current point to (x,y). The control point is assumed to be the reflection of the control point on the previous command relative to the current point. (If there is no previous command or if the previous command was not a DrawPathCurveToQuadraticBezierAbsolute, DrawPathCurveToQuadraticBezierRelative, DrawPathCurveToQuadraticBezierSmoothAbsolut or DrawPathCurveToQuadraticBezierSmoothRelative, assume the control point is coincident with the current point.). At the end of the command, the new current point becomes the final (x,y) coordinate pair used in the polybezier.</p><p>This function cannot be used to continue a cubic Bezier curve smoothly. It can only continue from a quadratic curve smoothly.</p>
		 * @param float $x <p>ending x coordinate</p>
		 * @param float $y <p>ending y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToQuadraticBezierSmoothAbsolute(float $x, float $y): bool {}

		/**
		 * Draws a quadratic Bezier curve
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a quadratic Bezier curve (using relative coordinates) from the current point to (x, y). The control point is assumed to be the reflection of the control point on the previous command relative to the current point. (If there is no previous command or if the previous command was not a DrawPathCurveToQuadraticBezierAbsolute, DrawPathCurveToQuadraticBezierRelative, DrawPathCurveToQuadraticBezierSmoothAbsolut or DrawPathCurveToQuadraticBezierSmoothRelative, assume the control point is coincident with the current point). At the end of the command, the new current point becomes the final (x, y) coordinate pair used in the polybezier.</p><p>This function cannot be used to continue a cubic Bezier curve smoothly. It can only continue from a quadratic curve smoothly.</p>
		 * @param float $x <p>ending x coordinate</p>
		 * @param float $y <p>ending y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToQuadraticBezierSmoothRelative(float $x, float $y): bool {}

		/**
		 * Draws a cubic Bezier curve
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a cubic Bezier curve from the current point to (x,y) using (x1,y1) as the control point at the beginning of the curve and (x2,y2) as the control point at the end of the curve using relative coordinates. At the end of the command, the new current point becomes the final (x,y) coordinate pair used in the polybezier.</p>
		 * @param float $x1 <p>x coordinate of starting control point</p>
		 * @param float $y1 <p>y coordinate of starting control point</p>
		 * @param float $x2 <p>x coordinate of ending control point</p>
		 * @param float $y2 <p>y coordinate of ending control point</p>
		 * @param float $x <p>ending x coordinate</p>
		 * @param float $y <p>ending y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathcurvetorelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToRelative(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool {}

		/**
		 * Draws a cubic Bezier curve
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a cubic Bezier curve from the current point to (x,y) using absolute coordinates. The first control point is assumed to be the reflection of the second control point on the previous command relative to the current point. (If there is no previous command or if the previous command was not an DrawPathCurveToAbsolute, DrawPathCurveToRelative, DrawPathCurveToSmoothAbsolute or DrawPathCurveToSmoothRelative, assume the first control point is coincident with the current point.) (x2,y2) is the second control point (i.e., the control point at the end of the curve). At the end of the command, the new current point becomes the final (x,y) coordinate pair used in the polybezier.</p>
		 * @param float $x2 <p>x coordinate of the second control point</p>
		 * @param float $y2 <p>y coordinate of the second control point</p>
		 * @param float $x <p>x coordinate of the ending point</p>
		 * @param float $y <p>y coordinate of the ending point</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathcurvetosmoothabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToSmoothAbsolute(float $x2, float $y2, float $x, float $y): bool {}

		/**
		 * Draws a cubic Bezier curve
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a cubic Bezier curve from the current point to (x,y) using relative coordinates. The first control point is assumed to be the reflection of the second control point on the previous command relative to the current point. (If there is no previous command or if the previous command was not an DrawPathCurveToAbsolute, DrawPathCurveToRelative, DrawPathCurveToSmoothAbsolute or DrawPathCurveToSmoothRelative, assume the first control point is coincident with the current point.) (x2,y2) is the second control point (i.e., the control point at the end of the curve). At the end of the command, the new current point becomes the final (x,y) coordinate pair used in the polybezier.</p>
		 * @param float $x2 <p>x coordinate of the second control point</p>
		 * @param float $y2 <p>y coordinate of the second control point</p>
		 * @param float $x <p>x coordinate of the ending point</p>
		 * @param float $y <p>y coordinate of the ending point</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathcurvetosmoothrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathCurveToSmoothRelative(float $x2, float $y2, float $x, float $y): bool {}

		/**
		 * Draws an elliptical arc
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws an elliptical arc from the current point to (x, y) using absolute coordinates. The size and orientation of the ellipse are defined by two radii (rx, ry) and an xAxisRotation, which indicates how the ellipse as a whole is rotated relative to the current coordinate system. The center (cx, cy) of the ellipse is calculated automatically to satisfy the constraints imposed by the other parameters. largeArcFlag and sweepFlag contribute to the automatic calculations and help determine how the arc is drawn. If largeArcFlag is <b><code>TRUE</code></b> then draw the larger of the available arcs. If sweepFlag is true, then draw the arc matching a clock-wise rotation.</p>
		 * @param float $rx <p>x radius</p>
		 * @param float $ry <p>y radius</p>
		 * @param float $x_axis_rotation <p>x axis rotation</p>
		 * @param bool $large_arc_flag <p>large arc flag</p>
		 * @param bool $sweep_flag <p>sweep flag</p>
		 * @param float $x <p>x coordinate</p>
		 * @param float $y <p>y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathellipticarcabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathEllipticArcAbsolute(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool {}

		/**
		 * Draws an elliptical arc
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws an elliptical arc from the current point to (x, y) using relative coordinates. The size and orientation of the ellipse are defined by two radii (rx, ry) and an xAxisRotation, which indicates how the ellipse as a whole is rotated relative to the current coordinate system. The center (cx, cy) of the ellipse is calculated automatically to satisfy the constraints imposed by the other parameters. largeArcFlag and sweepFlag contribute to the automatic calculations and help determine how the arc is drawn. If largeArcFlag is <b><code>TRUE</code></b> then draw the larger of the available arcs. If sweepFlag is true, then draw the arc matching a clock-wise rotation.</p>
		 * @param float $rx <p>x radius</p>
		 * @param float $ry <p>y radius</p>
		 * @param float $x_axis_rotation <p>x axis rotation</p>
		 * @param bool $large_arc_flag <p>large arc flag</p>
		 * @param bool $sweep_flag <p>sweep flag</p>
		 * @param float $x <p>x coordinate</p>
		 * @param float $y <p>y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathellipticarcrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathEllipticArcRelative(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool {}

		/**
		 * Terminates the current path
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Terminates the current path.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathfinish.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathFinish(): bool {}

		/**
		 * Draws a line path
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a line path from the current point to the given coordinate using absolute coordinates. The coordinate then becomes the new current point.</p>
		 * @param float $x <p>starting x coordinate</p>
		 * @param float $y <p>ending x coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathlinetoabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToAbsolute(float $x, float $y): bool {}

		/**
		 * Draws a horizontal line path
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a horizontal line path from the current point to the target point using absolute coordinates. The target point then becomes the new current point.</p>
		 * @param float $x <p>x coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathlinetohorizontalabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToHorizontalAbsolute(float $x): bool {}

		/**
		 * Draws a horizontal line
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a horizontal line path from the current point to the target point using relative coordinates. The target point then becomes the new current point.</p>
		 * @param float $x <p>x coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToHorizontalRelative(float $x): bool {}

		/**
		 * Draws a line path
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a line path from the current point to the given coordinate using relative coordinates. The coordinate then becomes the new current point.</p>
		 * @param float $x <p>starting x coordinate</p>
		 * @param float $y <p>starting y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathlinetorelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToRelative(float $x, float $y): bool {}

		/**
		 * Draws a vertical line
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a vertical line path from the current point to the target point using absolute coordinates. The target point then becomes the new current point.</p>
		 * @param float $y <p>y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathlinetoverticalabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToVerticalAbsolute(float $y): bool {}

		/**
		 * Draws a vertical line path
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a vertical line path from the current point to the target point using relative coordinates. The target point then becomes the new current point.</p>
		 * @param float $y <p>y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathlinetoverticalrelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathLineToVerticalRelative(float $y): bool {}

		/**
		 * Starts a new sub-path
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Starts a new sub-path at the given coordinate using absolute coordinates. The current point then becomes the specified coordinate.</p>
		 * @param float $x <p>x coordinate of the starting point</p>
		 * @param float $y <p>y coordinate of the starting point</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathmovetoabsolute.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathMoveToAbsolute(float $x, float $y): bool {}

		/**
		 * Starts a new sub-path
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Starts a new sub-path at the given coordinate using relative coordinates. The current point then becomes the specified coordinate.</p>
		 * @param float $x <p>target x coordinate</p>
		 * @param float $y <p>target y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathmovetorelative.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathMoveToRelative(float $x, float $y): bool {}

		/**
		 * Declares the start of a path drawing list
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Declares the start of a path drawing list which is terminated by a matching DrawPathFinish() command. All other DrawPath commands must be enclosed between a and a DrawPathFinish() command. This is because path drawing commands are subordinate commands and they do not function by themselves.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pathstart.php
		 * @since PECL imagick 2.0.0
		 */
		public function pathStart(): bool {}

		/**
		 * Draws a point
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a point using the current stroke color and stroke thickness at the specified coordinates.</p>
		 * @param float $x <p>point's x coordinate</p>
		 * @param float $y <p>point's y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.point.php
		 * @since PECL imagick 2.0.0
		 */
		public function point(float $x, float $y): bool {}

		/**
		 * Draws a polygon
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a polygon using the current stroke, stroke width, and fill color or texture, using the specified array of coordinates.</p>
		 * @param array $coordinates <p>multidimensional array like array( array( 'x' =&gt; 3, 'y' =&gt; 4 ), array( 'x' =&gt; 2, 'y' =&gt; 6 ) );</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.polygon.php
		 * @since PECL imagick 2.0.0
		 */
		public function polygon(array $coordinates): bool {}

		/**
		 * Draws a polyline
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a polyline using the current stroke, stroke width, and fill color or texture, using the specified array of coordinates.</p>
		 * @param array $coordinates <p>array of x and y coordinates: array( array( 'x' =&gt; 4, 'y' =&gt; 6 ), array( 'x' =&gt; 8, 'y' =&gt; 10 ) )</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.polyline.php
		 * @since PECL imagick 2.0.0
		 */
		public function polyline(array $coordinates): bool {}

		/**
		 * Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw. Multiple ImagickDraws may exist. It is an error to attempt to pop more ImagickDraws than have been pushed, and it is proper form to pop all ImagickDraws which have been pushed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and false on failure.</p>
		 * @link http://php.net/manual/en/imagickdraw.pop.php
		 * @since PECL imagick 2.0.0
		 */
		public function pop(): bool {}

		/**
		 * Terminates a clip path definition
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Terminates a clip path definition.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.popclippath.php
		 * @since PECL imagick 2.0.0
		 */
		public function popClipPath(): bool {}

		/**
		 * Terminates a definition list
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Terminates a definition list.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.popdefs.php
		 * @since PECL imagick 2.0.0
		 */
		public function popDefs(): bool {}

		/**
		 * Terminates a pattern definition
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Terminates a pattern definition.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/imagickdraw.poppattern.php
		 * @since PECL imagick 2.0.0
		 */
		public function popPattern(): bool {}

		/**
		 * Clones the current ImagickDraw and pushes it to the stack
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Clones the current ImagickDraw to create a new ImagickDraw, which is then added to the ImagickDraw stack. The original drawing ImagickDraw(s) may be returned to by invoking pop(). The ImagickDraws are stored on a ImagickDraw stack. For every Pop there must have already been an equivalent Push.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/imagickdraw.push.php
		 * @since PECL imagick 2.0.0
		 */
		public function push(): bool {}

		/**
		 * Starts a clip path definition
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Starts a clip path definition which is comprised of any number of drawing commands and terminated by a ImagickDraw::popClipPath() command.</p>
		 * @param string $clip_mask_id <p>Clip mask Id</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pushclippath.php
		 * @since PECL imagick 2.0.0
		 */
		public function pushClipPath(string $clip_mask_id): bool {}

		/**
		 * Indicates that following commands create named elements for early processing
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Indicates that commands up to a terminating ImagickDraw::popDefs() command create named elements (e.g. clip-paths, textures, etc.) which may safely be processed earlier for the sake of efficiency.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.pushdefs.php
		 * @since PECL imagick 2.0.0
		 */
		public function pushDefs(): bool {}

		/**
		 * Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Indicates that subsequent commands up to a DrawPopPattern() command comprise the definition of a named pattern. The pattern space is assigned top left corner coordinates, a width and height, and becomes its own drawing space. Anything which can be drawn may be used in a pattern definition. Named patterns may be used as stroke or brush definitions.</p>
		 * @param string $pattern_id <p>the pattern Id</p>
		 * @param float $x <p>x coordinate of the top-left corner</p>
		 * @param float $y <p>y coordinate of the top-left corner</p>
		 * @param float $width <p>width of the pattern</p>
		 * @param float $height <p>height of the pattern</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/imagickdraw.pushpattern.php
		 * @since PECL imagick 2.0.0
		 */
		public function pushPattern(string $pattern_id, float $x, float $y, float $width, float $height): bool {}

		/**
		 * Draws a rectangle
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a rectangle given two coordinates and using the current stroke, stroke width, and fill settings.</p>
		 * @param float $x1 <p>x coordinate of the top left corner</p>
		 * @param float $y1 <p>y coordinate of the top left corner</p>
		 * @param float $x2 <p>x coordinate of the bottom right corner</p>
		 * @param float $y2 <p>y coordinate of the bottom right corner</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.rectangle.php
		 * @since PECL imagick 2.0.0
		 */
		public function rectangle(float $x1, float $y1, float $x2, float $y2): bool {}

		/**
		 * Renders all preceding drawing commands onto the image
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Renders all preceding drawing commands onto the image.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/imagickdraw.render.php
		 * @since PECL imagick 2.0.0
		 */
		public function render(): bool {}

		/**
		 * Description
		 * <p>Resets the vector graphics.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.resetvectorgraphics.php
		 * @since No version information available, might only be in Git
		 */
		public function resetVectorGraphics(): bool {}

		/**
		 * Applies the specified rotation to the current coordinate space
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Applies the specified rotation to the current coordinate space.</p>
		 * @param float $degrees <p>degrees to rotate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.rotate.php
		 * @since PECL imagick 2.0.0
		 */
		public function rotate(float $degrees): bool {}

		/**
		 * Draws a rounded rectangle
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Draws a rounded rectangle given two coordinates, x &amp; y corner radiuses and using the current stroke, stroke width, and fill settings.</p>
		 * @param float $x1 <p>x coordinate of the top left corner</p>
		 * @param float $y1 <p>y coordinate of the top left corner</p>
		 * @param float $x2 <p>x coordinate of the bottom right</p>
		 * @param float $y2 <p>y coordinate of the bottom right</p>
		 * @param float $rx <p>x rounding</p>
		 * @param float $ry <p>y rounding</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.roundrectangle.php
		 * @since PECL imagick 2.0.0
		 */
		public function roundRectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry): bool {}

		/**
		 * Adjusts the scaling factor
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Adjusts the scaling factor to apply in the horizontal and vertical directions to the current coordinate space.</p>
		 * @param float $x <p>horizontal factor</p>
		 * @param float $y <p>vertical factor</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.scale.php
		 * @since PECL imagick 2.0.0
		 */
		public function scale(float $x, float $y): bool {}

		/**
		 * Associates a named clipping path with the image
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Associates a named clipping path with the image. Only the areas drawn on by the clipping path will be modified as long as it remains in effect.</p>
		 * @param string $clip_mask <p>the clipping path name</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setclippath.php
		 * @since PECL imagick 2.0.0
		 */
		public function setClipPath(string $clip_mask): bool {}

		/**
		 * Set the polygon fill rule to be used by the clipping path
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Set the polygon fill rule to be used by the clipping path.</p>
		 * @param int $fill_rule <p>FILLRULE_ constant</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setcliprule.php
		 * @since PECL imagick 2.0.0
		 */
		public function setClipRule(int $fill_rule): bool {}

		/**
		 * Sets the interpretation of clip path units
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the interpretation of clip path units.</p>
		 * @param int $clip_units <p>the number of clip units</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setclipunits.php
		 * @since PECL imagick 2.0.0
		 */
		public function setClipUnits(int $clip_units): bool {}

		/**
		 * Sets the opacity to use when drawing using the fill color or fill texture
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the opacity to use when drawing using the fill color or fill texture. Fully opaque is 1.0.</p>
		 * @param float $opacity <p>fill alpha</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setfillalpha.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFillAlpha(float $opacity): bool {}

		/**
		 * Sets the fill color to be used for drawing filled objects
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the fill color to be used for drawing filled objects.</p>
		 * @param \ImagickPixel $fill_pixel <p>ImagickPixel to use to set the color</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setfillcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFillColor(\ImagickPixel $fill_pixel): bool {}

		/**
		 * Sets the opacity to use when drawing using the fill color or fill texture
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the opacity to use when drawing using the fill color or fill texture. Fully opaque is 1.0.</p>
		 * @param float $fillOpacity <p>the fill opacity</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setfillopacity.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFillOpacity(float $fillOpacity): bool {}

		/**
		 * Sets the URL to use as a fill pattern for filling objects
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the URL to use as a fill pattern for filling objects. Only local URLs ("#identifier") are supported at this time. These local URLs are normally created by defining a named fill pattern with DrawPushPattern/DrawPopPattern.</p>
		 * @param string $fill_url <p>URL to use to obtain fill pattern.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/imagickdraw.setfillpatternurl.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFillPatternURL(string $fill_url): bool {}

		/**
		 * Sets the fill rule to use while drawing polygons
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the fill rule to use while drawing polygons.</p>
		 * @param int $fill_rule <p>FILLRULE_ constant</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setfillrule.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFillRule(int $fill_rule): bool {}

		/**
		 * Sets the fully-specified font to use when annotating with text
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the fully-specified font to use when annotating with text.</p>
		 * @param string $font_name
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.setfont.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFont(string $font_name): bool {}

		/**
		 * Sets the font family to use when annotating with text
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the font family to use when annotating with text.</p>
		 * @param string $font_family <p>the font family</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.setfontfamily.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFontFamily(string $font_family): bool {}

		/**
		 * Sets the font pointsize to use when annotating with text
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the font pointsize to use when annotating with text.</p>
		 * @param float $pointsize <p>the point size</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setfontsize.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFontSize(float $pointsize): bool {}

		/**
		 * Sets the font stretch to use when annotating with text
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the font stretch to use when annotating with text. The AnyStretch enumeration acts as a wild-card "don't care" option.</p>
		 * @param int $fontStretch <p>STRETCH_ constant</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setfontstretch.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFontStretch(int $fontStretch): bool {}

		/**
		 * Sets the font style to use when annotating with text
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the font style to use when annotating with text. The AnyStyle enumeration acts as a wild-card "don't care" option.</p>
		 * @param int $style <p>STYLETYPE_ constant</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setfontstyle.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFontStyle(int $style): bool {}

		/**
		 * Sets the font weight
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the font weight to use when annotating with text.</p>
		 * @param int $font_weight
		 * @return bool
		 * @link http://php.net/manual/en/imagickdraw.setfontweight.php
		 * @since PECL imagick 2.0.0
		 */
		public function setFontWeight(int $font_weight): bool {}

		/**
		 * Sets the text placement gravity
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the text placement gravity to use when annotating with text.</p>
		 * @param int $gravity <p>GRAVITY_ constant</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setgravity.php
		 * @since PECL imagick 2.0.0
		 */
		public function setGravity(int $gravity): bool {}

		/**
		 * Description
		 * <p>Sets the resolution.</p>
		 * @param float $x_resolution
		 * @param float $y_resolution
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.setresolution.php
		 * @since No version information available, might only be in Git
		 */
		public function setResolution(float $x_resolution, float $y_resolution): bool {}

		/**
		 * Specifies the opacity of stroked object outlines
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies the opacity of stroked object outlines.</p>
		 * @param float $opacity <p>opacity</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokealpha.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeAlpha(float $opacity): bool {}

		/**
		 * Controls whether stroked outlines are antialiased
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Controls whether stroked outlines are antialiased. Stroked outlines are antialiased by default. When antialiasing is disabled stroked pixels are thresholded to determine if the stroke color or underlying canvas color should be used.</p>
		 * @param bool $stroke_antialias <p>the antialias setting</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokeantialias.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeAntialias(bool $stroke_antialias): bool {}

		/**
		 * Sets the color used for stroking object outlines
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the color used for stroking object outlines.</p>
		 * @param \ImagickPixel $stroke_pixel <p>the stroke color</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokecolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeColor(\ImagickPixel $stroke_pixel): bool {}

		/**
		 * Specifies the pattern of dashes and gaps used to stroke paths
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies the pattern of dashes and gaps used to stroke paths. The strokeDashArray represents an array of numbers that specify the lengths of alternating dashes and gaps in pixels. If an odd number of values is provided, then the list of values is repeated to yield an even number of values. To remove an existing dash array, pass a zero number_elements argument and null dash_array. A typical strokeDashArray_ array might contain the members 5 3 2.</p>
		 * @param array $dashArray <p>array of floats</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokedasharray.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeDashArray(array $dashArray): bool {}

		/**
		 * Specifies the offset into the dash pattern to start the dash
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies the offset into the dash pattern to start the dash.</p>
		 * @param float $dash_offset <p>dash offset</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokedashoffset.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeDashOffset(float $dash_offset): bool {}

		/**
		 * Specifies the shape to be used at the end of open subpaths when they are stroked
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies the shape to be used at the end of open subpaths when they are stroked.</p>
		 * @param int $linecap <p>LINECAP_ constant</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokelinecap.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeLineCap(int $linecap): bool {}

		/**
		 * Specifies the shape to be used at the corners of paths when they are stroked
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies the shape to be used at the corners of paths (or other vector shapes) when they are stroked.</p>
		 * @param int $linejoin <p>LINEJOIN_ constant</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokelinejoin.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeLineJoin(int $linejoin): bool {}

		/**
		 * Specifies the miter limit
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies the miter limit. When two line segments meet at a sharp angle and miter joins have been specified for 'lineJoin', it is possible for the miter to extend far beyond the thickness of the line stroking the path. The miterLimit' imposes a limit on the ratio of the miter length to the 'lineWidth'.</p>
		 * @param int $miterlimit <p>the miter limit</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokemiterlimit.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeMiterLimit(int $miterlimit): bool {}

		/**
		 * Specifies the opacity of stroked object outlines
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies the opacity of stroked object outlines.</p>
		 * @param float $stroke_opacity <p>stroke opacity. 1.0 is fully opaque</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokeopacity.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeOpacity(float $stroke_opacity): bool {}

		/**
		 * Sets the pattern used for stroking object outlines
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the pattern used for stroking object outlines.</p>
		 * @param string $stroke_url <p>stroke URL</p>
		 * @return bool <p>imagick.imagickdraw.return.success;</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokepatternurl.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokePatternURL(string $stroke_url): bool {}

		/**
		 * Sets the width of the stroke used to draw object outlines
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the width of the stroke used to draw object outlines.</p>
		 * @param float $stroke_width <p>stroke width</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setstrokewidth.php
		 * @since PECL imagick 2.0.0
		 */
		public function setStrokeWidth(float $stroke_width): bool {}

		/**
		 * Specifies a text alignment
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies a text alignment to be applied when annotating with text.</p>
		 * @param int $alignment <p>ALIGN_ constant</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.settextalignment.php
		 * @since PECL imagick 2.0.0
		 */
		public function setTextAlignment(int $alignment): bool {}

		/**
		 * Controls whether text is antialiased
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Controls whether text is antialiased. Text is antialiased by default.</p>
		 * @param bool $antiAlias
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.settextantialias.php
		 * @since PECL imagick 2.0.0
		 */
		public function setTextAntialias(bool $antiAlias): bool {}

		/**
		 * Specifies a decoration
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies a decoration to be applied when annotating with text.</p>
		 * @param int $decoration <p>DECORATION_ constant</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.settextdecoration.php
		 * @since PECL imagick 2.0.0
		 */
		public function setTextDecoration(int $decoration): bool {}

		/**
		 * Specifies the text code set
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies the code set to use for text annotations. The only character encoding which may be specified at this time is "UTF-8" for representing Unicode as a sequence of bytes. Specify an empty string to set text encoding to the system's default. Successful text annotation using Unicode may require fonts designed to support Unicode.</p>
		 * @param string $encoding <p>the encoding name</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.settextencoding.php
		 * @since PECL imagick 2.0.0
		 */
		public function setTextEncoding(string $encoding): bool {}

		/**
		 * Description
		 * <p>Sets the text interline spacing.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param float $spacing
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.settextinterlinespacing.php
		 * @since No version information available, might only be in Git
		 */
		public function setTextInterlineSpacing(float $spacing): bool {}

		/**
		 * Description
		 * <p>Sets the text interword spacing.</p>
		 * @param float $spacing
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.settextinterwordspacing.php
		 * @since No version information available, might only be in Git
		 */
		public function setTextInterwordSpacing(float $spacing): bool {}

		/**
		 * Description
		 * <p>Sets the text kerning</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param float $kerning
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickdraw.settextkerning.php
		 * @since No version information available, might only be in Git
		 */
		public function setTextKerning(float $kerning): bool {}

		/**
		 * Specifies the color of a background rectangle
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Specifies the color of a background rectangle to place under text annotations.</p>
		 * @param \ImagickPixel $under_color <p>the under color</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.settextundercolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setTextUnderColor(\ImagickPixel $under_color): bool {}

		/**
		 * Sets the vector graphics
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the vector graphics associated with the specified ImagickDraw object. Use this method with ImagickDraw::getVectorGraphics() as a method to persist the vector graphics state.</p>
		 * @param string $xml <p>xml containing the vector graphics</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/imagickdraw.setvectorgraphics.php
		 * @since PECL imagick 2.0.0
		 */
		public function setVectorGraphics(string $xml): bool {}

		/**
		 * Sets the overall canvas size
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the overall canvas size to be recorded with the drawing vector data. Usually this will be specified using the same size as the canvas image. When the vector data is saved to SVG or MVG formats, the viewbox is use to specify the size of the canvas image that a viewer will render the vector data on.</p>
		 * @param int $x1 <p>left x coordinate</p>
		 * @param int $y1 <p>left y coordinate</p>
		 * @param int $x2 <p>right x coordinate</p>
		 * @param int $y2 <p>right y coordinate</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.setviewbox.php
		 * @since PECL imagick 2.0.0
		 */
		public function setViewbox(int $x1, int $y1, int $x2, int $y2): bool {}

		/**
		 * Skews the current coordinate system in the horizontal direction
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Skews the current coordinate system in the horizontal direction.</p>
		 * @param float $degrees <p>degrees to skew</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.skewx.php
		 * @since PECL imagick 2.0.0
		 */
		public function skewX(float $degrees): bool {}

		/**
		 * Skews the current coordinate system in the vertical direction
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Skews the current coordinate system in the vertical direction.</p>
		 * @param float $degrees <p>degrees to skew</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.skewy.php
		 * @since PECL imagick 2.0.0
		 */
		public function skewY(float $degrees): bool {}

		/**
		 * Applies a translation to the current coordinate system
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Applies a translation to the current coordinate system which moves the coordinate system origin to the specified coordinate.</p>
		 * @param float $x <p>horizontal translation</p>
		 * @param float $y <p>vertical translation</p>
		 * @return bool <p>No value is returned.</p>
		 * @link http://php.net/manual/en/imagickdraw.translate.php
		 * @since PECL imagick 2.0.0
		 */
		public function translate(float $x, float $y): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.imagickkernel.php
	 * @since PECL imagick >= 3.3.0
	 */
	class ImagickKernel {

		/**
		 * Description
		 * <p>Attach another kernel to this kernel to allow them to both be applied in a single morphology or filter function. Returns the new combined kernel.</p>
		 * @param \ImagickKernel $ImagickKernel
		 * @return void
		 * @link http://php.net/manual/en/imagickkernel.addkernel.php
		 * @since PECL imagick >= 3.3.0
		 */
		public function addKernel(\ImagickKernel $ImagickKernel): void {}

		/**
		 * Description
		 * <p>Adds a given amount of the 'Unity' Convolution Kernel to the given pre-scaled and normalized Kernel. This in effect adds that amount of the original image into the resulting convolution kernel. The resulting effect is to convert the defined kernels into blended soft-blurs, unsharp kernels or into sharpening kernels.</p>
		 * @param float $scale
		 * @return void
		 * @link http://php.net/manual/en/imagickkernel.addunitykernel.php
		 * @since PECL imagick >= 3.3.0
		 */
		public function addUnityKernel(float $scale): void {}

		/**
		 * Description
		 * <p>Create a kernel from a builtin in kernel. See http://www.imagemagick.org/Usage/morphology/#kernel for examples. Currently the 'rotation' symbols are not supported. Example: $diamondKernel = ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DIAMOND, "2");</p>
		 * @param int $kernelType
		 * @param string $kernelString <p>A string that describes the parameters e.g. "4,2.5"</p>
		 * @return ImagickKernel
		 * @link http://php.net/manual/en/imagickkernel.frombuiltin.php
		 * @since PECL imagick >= 3.3.0
		 */
		public static function fromBuiltIn(int $kernelType, string $kernelString): \ImagickKernel {}

		/**
		 * Description
		 * <p>Create a kernel from an 2d matrix of values. Each value should either be a float (if the element should be used) or 'false' if the element should be skipped. For matrices that are odd sizes in both dimensions the origin pixel will default to the centre of the kernel. For all other kernel sizes the origin pixel must be specified.</p>
		 * @param array $matrix
		 * @param array $origin
		 * @return ImagickKernel <p>The generated ImagickKernel.</p>
		 * @link http://php.net/manual/en/imagickkernel.frommatrix.php
		 * @since PECL imagick >= 3.3.0
		 */
		public static function fromMatrix(array $matrix, array $origin = NULL): \ImagickKernel {}

		/**
		 * Description
		 * <p>Get the 2d matrix of values used in this kernel. The elements are either float for elements that are used or 'false' if the element should be skipped.</p>
		 * @return array <p>A matrix (2d array) of the values that represent the kernel.</p>
		 * @link http://php.net/manual/en/imagickkernel.getmatrix.php
		 * @since PECL imagick >= 3.3.0
		 */
		public function getMatrix(): array {}

		/**
		 * Description
		 * <p>ScaleKernelInfo() scales the given kernel list by the given amount, with or without normalization of the sum of the kernel values (as per given flags). The exact behaviour of this function depends on the normalization type being used please see http://www.imagemagick.org/api/morphology.php#ScaleKernelInfo for details. Flag should be one of Imagick::NORMALIZE_KERNEL_VALUE, Imagick::NORMALIZE_KERNEL_CORRELATE, Imagick::NORMALIZE_KERNEL_PERCENT or not set.</p>
		 * @param float $scale
		 * @param int $normalizeFlag
		 * @return void
		 * @link http://php.net/manual/en/imagickkernel.scale.php
		 * @since PECL imagick >= 3.3.0
		 */
		public function scale(float $scale, int $normalizeFlag = NULL): void {}

		/**
		 * Description
		 * <p>Separates a linked set of kernels and returns an array of ImagickKernels.</p>
		 * @return array
		 * @link http://php.net/manual/en/imagickkernel.separate.php
		 * @since PECL imagick >= 3.3.0
		 */
		public function separate(): array {}
	}

	/**
	 * @link http://php.net/manual/en/class.imagickpixel.php
	 * @since PECL imagick 2.0.0
	 */
	class ImagickPixel {

		/**
		 * The ImagickPixel constructor
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Constructs an ImagickPixel object. If a color is specified, the object is constructed and then initialised with that color before being returned.</p>
		 * @param string $color <p>The optional color string to use as the initial value of this object.</p>
		 * @return self <p>Returns an ImagickPixel object on success, throwing ImagickPixelException on failure.</p>
		 * @link http://php.net/manual/en/imagickpixel.construct.php
		 * @since PECL imagick 2.0.0
		 */
		public function __construct(string $color = NULL) {}

		/**
		 * Clears resources associated with this object
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Clears the ImagickPixel object, leaving it in a fresh state. This also unsets any color associated with the object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixel.clear.php
		 * @since PECL imagick 2.0.0
		 */
		public function clear(): bool {}

		/**
		 * Deallocates resources associated with this object
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Deallocates any resources used by the ImagickPixel object, and unsets any associated color. The object should not be used after the destroy function has been called.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixel.destroy.php
		 * @since PECL imagick 2.0.0
		 */
		public function destroy(): bool {}

		/**
		 * Returns the color
		 * <p>Returns the color described by the ImagickPixel object, as an array. If the color has an opacity channel set, this is provided as a fourth value in the list.</p>
		 * @param int $normalized <p>Normalize the color values</p>
		 * @return array <p>An array of channel values, each normalized if <b><code>TRUE</code></b> is given as param. Throws ImagickPixelException on error.</p>
		 * @link http://php.net/manual/en/imagickpixel.getcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function getColor(int $normalized = 0): array {}

		/**
		 * Returns the color as a string
		 * <p>Returns the color of the ImagickPixel object as a string.</p>
		 * @return string <p>Returns the color of the ImagickPixel object as a string.</p>
		 * @link http://php.net/manual/en/imagickpixel.getcolorasstring.php
		 * @since PECL imagick 2.1.0
		 */
		public function getColorAsString(): string {}

		/**
		 * Returns the color count associated with this color
		 * <p>Returns the color count associated with this color.</p><p>The color count is the number of pixels in the image that have the same color as this ImagickPixel.</p><p>ImagickPixel::getColorCount appears to only work for ImagickPixel objects created through Imagick::getImageHistogram()</p>
		 * @return int <p>Returns the color count as an integer on success, throws ImagickPixelException on failure.</p>
		 * @link http://php.net/manual/en/imagickpixel.getcolorcount.php
		 * @since PECL imagick 2.0.0
		 */
		public function getColorCount(): int {}

		/**
		 * Description
		 * <p>Returns the color of the pixel in an array as Quantum values. If ImageMagick was compiled as HDRI these will be floats, otherwise they will be integers.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>Returns an array with keys <code>"r"</code>, <code>"g"</code>, <code>"b"</code>, <code>"a"</code>.</p>
		 * @link http://php.net/manual/en/imagickpixel.getcolorquantum.php
		 * @since No version information available, might only be in Git
		 */
		public function getColorQuantum(): array {}

		/**
		 * Gets the normalized value of the provided color channel
		 * <p>Retrieves the value of the color channel specified, as a floating-point number between 0 and 1.</p>
		 * @param int $color <p>The color to get the value of, specified as one of the Imagick color constants. This can be one of the RGB colors, CMYK colors, alpha and opacity e.g (Imagick::COLOR_BLUE, Imagick::COLOR_MAGENTA).</p>
		 * @return float <p>The value of the channel, as a normalized floating-point number, throwing ImagickPixelException on error.</p>
		 * @link http://php.net/manual/en/imagickpixel.getcolorvalue.php
		 * @since PECL imagick 2.0.0
		 */
		public function getColorValue(int $color): float {}

		/**
		 * Description
		 * <p>Gets the quantum value of a color in the ImagickPixel. Return value is a float if ImageMagick was compiled with HDRI, otherwise an integer.</p>
		 * @param int $color
		 * @return int|float <p>The quantum value of the color element. Float if ImageMagick was compiled with HDRI, otherwise an int.</p>
		 * @link http://php.net/manual/en/imagickpixel.getcolorvaluequantum.php
		 * @since No version information available, might only be in Git
		 */
		public function getColorValueQuantum(int $color) {}

		/**
		 * Returns the normalized HSL color of the ImagickPixel object
		 * <p>Returns the normalized HSL color described by the ImagickPixel object, with each of the three values as floating point numbers between 0.0 and 1.0.</p>
		 * @return array <p>Returns the HSL value in an array with the keys "hue", "saturation", and "luminosity". Throws ImagickPixelException on failure.</p>
		 * @link http://php.net/manual/en/imagickpixel.gethsl.php
		 * @since PECL imagick 2.0.0
		 */
		public function getHSL(): array {}

		/**
		 * Description
		 * <p>Gets the colormap index of the pixel wand.</p>
		 * @return int
		 * @link http://php.net/manual/en/imagickpixel.getindex.php
		 * @since No version information available, might only be in Git
		 */
		public function getIndex(): int {}

		/**
		 * Check the distance between this color and another
		 * <p>Checks the distance between the color described by this ImagickPixel object and that of the provided object, by plotting their RGB values on the color cube. If the distance between the two points is less than the fuzz value given, the colors are similar. This method replaces ImagickPixel::isSimilar() and correctly normalises the fuzz value to ImageMagick QuantumRange.</p>
		 * @param \ImagickPixel $color <p>The ImagickPixel object to compare this object against.</p>
		 * @param float $fuzz <p>The maximum distance within which to consider these colors as similar. The theoretical maximum for this value is the square root of three (1.732).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixel.ispixelsimilar.php
		 * @since No version information available, might only be in Git
		 */
		public function isPixelSimilar(\ImagickPixel $color, float $fuzz): bool {}

		/**
		 * Description
		 * <p>Returns true if the distance between two colors is less than the specified distance. The fuzz value should be in the range 0-QuantumRange. The maximum value represents the longest possible distance in the colorspace. e.g. from RGB(0, 0, 0) to RGB(255, 255, 255) for the RGB colorspace</p>
		 * @param string $color
		 * @param string $fuzz
		 * @return bool
		 * @link http://php.net/manual/en/imagickpixel.ispixelsimilarquantum.php
		 * @since No version information available, might only be in Git
		 */
		public function isPixelSimilarQuantum(string $color, string $fuzz = NULL): bool {}

		/**
		 * Check the distance between this color and another
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Checks the distance between the color described by this ImagickPixel object and that of the provided object, by plotting their RGB values on the color cube. If the distance between the two points is less than the fuzz value given, the colors are similar. Deprecated in favour of ImagickPixel::isPixelSimilar().</p>
		 * @param \ImagickPixel $color <p>The ImagickPixel object to compare this object against.</p>
		 * @param float $fuzz <p>The maximum distance within which to consider these colors as similar. The theoretical maximum for this value is the square root of three (1.732).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixel.issimilar.php
		 * @since PECL imagick 2.0.0
		 */
		public function isSimilar(\ImagickPixel $color, float $fuzz): bool {}

		/**
		 * Sets the color
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the color described by the ImagickPixel object, with a string (e.g. "blue", "#0000ff", "rgb(0,0,255)", "cmyk(100,100,100,10)", etc.).</p>
		 * @param string $color <p>The color definition to use in order to initialise the ImagickPixel object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the specified color was set, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/imagickpixel.setcolor.php
		 * @since PECL imagick 2.0.0
		 */
		public function setColor(string $color): bool {}

		/**
		 * Description
		 * <p>Sets the color count associated with this color.</p>
		 * @param int $colorCount
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixel.setcolorcount.php
		 * @since No version information available, might only be in Git
		 */
		public function setColorCount(int $colorCount): bool {}

		/**
		 * Sets the normalized value of one of the channels
		 * <p>Sets the value of the specified channel of this object to the provided value, which should be between 0 and 1. This function can be used to provide an opacity channel to an ImagickPixel object.</p>
		 * @param int $color <p>One of the Imagick color constants e.g. \Imagick::COLOR_GREEN or \Imagick::COLOR_ALPHA.</p>
		 * @param float $value <p>The value to set this channel to, ranging from 0 to 1.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixel.setcolorvalue.php
		 * @since PECL imagick 2.0.0
		 */
		public function setColorValue(int $color, float $value): bool {}

		/**
		 * Description
		 * <p>Sets the quantum value of a color element of the ImagickPixel.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $color <p>Which color element to set e.g. \Imagick::COLOR_GREEN.</p>
		 * @param int|float $value <p>The quantum value to set the color element to. This should be a float if ImageMagick was compiled with HDRI otherwise an int in the range 0 to Imagick::getQuantum().</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixel.setcolorvaluequantum.php
		 * @since No version information available, might only be in Git
		 */
		public function setColorValueQuantum(int $color, $value): bool {}

		/**
		 * Sets the normalized HSL color
		 * <p>Sets the color described by the ImagickPixel object using normalized values for hue, saturation and luminosity.</p>
		 * @param float $hue <p>The normalized value for hue, described as a fractional arc (between 0 and 1) of the hue circle, where the zero value is red.</p>
		 * @param float $saturation <p>The normalized value for saturation, with 1 as full saturation.</p>
		 * @param float $luminosity <p>The normalized value for luminosity, on a scale from black at 0 to white at 1, with the full HS value at 0.5 luminosity.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixel.sethsl.php
		 * @since PECL imagick 2.0.0
		 */
		public function setHSL(float $hue, float $saturation, float $luminosity): bool {}

		/**
		 * Description
		 * <p>Sets the colormap index of the pixel wand.</p>
		 * @param int $index
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixel.setindex.php
		 * @since No version information available, might only be in Git
		 */
		public function setIndex(int $index): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.imagickpixeliterator.php
	 * @since PECL imagick 2.0.0
	 */
	class ImagickPixelIterator {

		/**
		 * The ImagickPixelIterator constructor
		 * <p>This function is currently not documented; only its argument list is available.</p><p>The ImagickPixelIterator constructor</p>
		 * @param \Imagick $wand
		 * @return self <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.construct.php
		 * @since PECL imagick 2.0.0
		 */
		public function __construct(\Imagick $wand) {}

		/**
		 * Clear resources associated with a PixelIterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Clear resources associated with a PixelIterator.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.clear.php
		 * @since PECL imagick 2.0.0
		 */
		public function clear(): bool {}

		/**
		 * Deallocates resources associated with a PixelIterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Deallocates resources associated with a PixelIterator.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.destroy.php
		 * @since PECL imagick 2.0.0
		 */
		public function destroy(): bool {}

		/**
		 * Returns the current row of ImagickPixel objects
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the current row as an array of ImagickPixel objects from the pixel iterator.</p>
		 * @return array <p>Returns a row as an array of ImagickPixel objects that can themselves be iterated.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.getcurrentiteratorrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function getCurrentIteratorRow(): array {}

		/**
		 * Returns the current pixel iterator row
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the current pixel iterator row.</p>
		 * @return int <p>Returns the integer offset of the row, throwing ImagickPixelIteratorException on error.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.getiteratorrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function getIteratorRow(): int {}

		/**
		 * Returns the next row of the pixel iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the next row as an array of pixel wands from the pixel iterator.</p>
		 * @return array <p>Returns the next row as an array of ImagickPixel objects, throwing ImagickPixelIteratorException on error.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.getnextiteratorrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function getNextIteratorRow(): array {}

		/**
		 * Returns the previous row
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the previous row as an array of pixel wands from the pixel iterator.</p>
		 * @return array <p>Returns the previous row as an array of ImagickPixelWand objects from the ImagickPixelIterator, throwing ImagickPixelIteratorException on error.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.getpreviousiteratorrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function getPreviousIteratorRow(): array {}

		/**
		 * Returns a new pixel iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns a new pixel iterator.</p>
		 * @param \Imagick $wand
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Throwing ImagickPixelIteratorException.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.newpixeliterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function newPixelIterator(\Imagick $wand): bool {}

		/**
		 * Returns a new pixel iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns a new pixel iterator.</p>
		 * @param \Imagick $wand
		 * @param int $x
		 * @param int $y
		 * @param int $columns
		 * @param int $rows
		 * @return bool <p>Returns a new ImagickPixelIterator on success; on failure, throws ImagickPixelIteratorException.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.newpixelregioniterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function newPixelRegionIterator(\Imagick $wand, int $x, int $y, int $columns, int $rows): bool {}

		/**
		 * Resets the pixel iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Resets the pixel iterator. Use it in conjunction with ImagickPixelIterator::getNextIteratorRow() to iterate over all the pixels in a pixel container.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.resetiterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function resetIterator(): bool {}

		/**
		 * Sets the pixel iterator to the first pixel row
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the pixel iterator to the first pixel row.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.setiteratorfirstrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function setIteratorFirstRow(): bool {}

		/**
		 * Sets the pixel iterator to the last pixel row
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Sets the pixel iterator to the last pixel row.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.setiteratorlastrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function setIteratorLastRow(): bool {}

		/**
		 * Set the pixel iterator row
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Set the pixel iterator row.</p>
		 * @param int $row
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.setiteratorrow.php
		 * @since PECL imagick 2.0.0
		 */
		public function setIteratorRow(int $row): bool {}

		/**
		 * Syncs the pixel iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Syncs the pixel iterator.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
		 * @link http://php.net/manual/en/imagickpixeliterator.synciterator.php
		 * @since PECL imagick 2.0.0
		 */
		public function syncIterator(): bool {}
	}

}
