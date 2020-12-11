<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.gmagick.php
	 * @since PECL gmagick >= Unknown
	 */
	class Gmagick {

		/**
		 * @var int Black
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLOR_BLACK = null;

		/**
		 * @var int Blue
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLOR_BLUE = null;

		/**
		 * @var int Cyan
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLOR_CYAN = null;

		/**
		 * @var int Green
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLOR_GREEN = null;

		/**
		 * @var int Red
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLOR_RED = null;

		/**
		 * @var int Yellow
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLOR_YELLOW = null;

		/**
		 * @var int Magenta
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLOR_MAGENTA = null;

		/**
		 * @var int Opacity
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLOR_OPACITY = null;

		/**
		 * @var int Alpha
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLOR_ALPHA = null;

		/**
		 * @var int Fuzz
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLOR_FUZZ = null;

		/**
		 * @var int The default composite operator
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_DEFAULT = null;

		/**
		 * @var int Undefined composite operator
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_UNDEFINED = null;

		/**
		 * @var int No composite operator defined
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_NO = null;

		/**
		 * @var int The result of image + image
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_ADD = null;

		/**
		 * @var int The result is the same shape as image, with composite image obscuring image where the image shapes overlap
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_ATOP = null;

		/**
		 * @var int Blends the image
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_BLEND = null;

		/**
		 * @var int The same as COMPOSITE_MULTIPLY, except the source is converted to grayscale first.
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_BUMPMAP = null;

		/**
		 * @var int Makes the target image transparent
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_CLEAR = null;

		/**
		 * @var int Darkens the destination image to reflect the source image
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COLORBURN = null;

		/**
		 * @var int Brightens the destination image to reflect the source image
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COLORDODGE = null;

		/**
		 * @var int Colorizes the target image using the composite image
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COLORIZE = null;

		/**
		 * @var int Copies black from the source to target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COPYBLACK = null;

		/**
		 * @var int Copies blue from the source to target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COPYBLUE = null;

		/**
		 * @var int Copies the source image on the target image
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COPY = null;

		/**
		 * @var int Copies cyan from the source to target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COPYCYAN = null;

		/**
		 * @var int Copies green from the source to target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COPYGREEN = null;

		/**
		 * @var int Copies magenta from the source to target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COPYMAGENTA = null;

		/**
		 * @var int Copies opacity from the source to target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COPYOPACITY = null;

		/**
		 * @var int Copies red from the source to target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COPYRED = null;

		/**
		 * @var int Copies yellow from the source to target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_COPYYELLOW = null;

		/**
		 * @var int Darkens the target image
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_DARKEN = null;

		/**
		 * @var int The part of the destination lying inside of the source is composited over the source and replaces the destination
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_DSTATOP = null;

		/**
		 * @var int The target is left untouched
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_DST = null;

		/**
		 * @var int The parts inside the source replace the target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_DSTIN = null;

		/**
		 * @var int The parts outside the source replace the target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_DSTOUT = null;

		/**
		 * @var int Target replaces the source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_DSTOVER = null;

		/**
		 * @var int Subtracts the darker of the two constituent colors from the lighter
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_DIFFERENCE = null;

		/**
		 * @var int Shifts target image pixels as defined by the source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_DISPLACE = null;

		/**
		 * @var int Dissolves the source in to the target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_DISSOLVE = null;

		/**
		 * @var int Produces an effect similar to that of Gmagick::COMPOSITE_DIFFERENCE, but appears as lower contrast
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_EXCLUSION = null;

		/**
		 * @var int Multiplies or screens the colors, dependent on the source color value
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_HARDLIGHT = null;

		/**
		 * @var int Modifies the hue of the target as defined by source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_HUE = null;

		/**
		 * @var int Composites source into the target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_IN = null;

		/**
		 * @var int Lightens the target as defined by source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_LIGHTEN = null;

		/**
		 * @var int Luminizes the target as defined by source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_LUMINIZE = null;

		/**
		 * @var int Subtracts the source from the target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_MINUS = null;

		/**
		 * @var int Modulates the target brightness, saturation and hue as defined by source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_MODULATE = null;

		/**
		 * @var int Multiplies the target to the source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_MULTIPLY = null;

		/**
		 * @var int Composites outer parts of the source on the target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_OUT = null;

		/**
		 * @var int Composites source over the target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_OVER = null;

		/**
		 * @var int Overlays the source on the target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_OVERLAY = null;

		/**
		 * @var int Adds the source to the target
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_PLUS = null;

		/**
		 * @var int Replaces the target with the source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_REPLACE = null;

		/**
		 * @var int Saturates the target as defined by the source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_SATURATE = null;

		/**
		 * @var int The source and destination are complemented and then multiplied and then replace the destination
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_SCREEN = null;

		/**
		 * @var int Darkens or lightens the colors, dependent on the source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_SOFTLIGHT = null;

		/**
		 * @var int The part of the source lying inside of the destination is composited onto the destination
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_SRCATOP = null;

		/**
		 * @var int The source is copied to the destination
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_SRC = null;

		/**
		 * @var int The part of the source lying inside of the destination replaces the destination
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_SRCIN = null;

		/**
		 * @var int The part of the source lying outside of the destination replaces the destination
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_SRCOUT = null;

		/**
		 * @var int The source replaces the destination
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_SRCOVER = null;

		/**
		 * @var int Subtract the colors in the source image from the destination image
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_SUBTRACT = null;

		/**
		 * @var int The source is composited on the target as defined by source threshold
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_THRESHOLD = null;

		/**
		 * @var int The part of the source that lies outside of the destination is combined with the part of the destination that lies outside of the source
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPOSITE_XOR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const MONTAGEMODE_FRAME = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const MONTAGEMODE_UNFRAME = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const MONTAGEMODE_CONCATENATE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STYLE_NORMAL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STYLE_ITALIC = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STYLE_OBLIQUE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STYLE_ANY = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_POINT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_BOX = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_TRIANGLE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_HERMITE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_HANNING = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_HAMMING = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_BLACKMAN = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_GAUSSIAN = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_QUADRATIC = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_CUBIC = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_CATROM = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_MITCHELL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_LANCZOS = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_BESSEL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILTER_SINC = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_BILEVEL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_GRAYSCALE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_GRAYSCALEMATTE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_PALETTE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_PALETTEMATTE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_TRUECOLOR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_TRUECOLORMATTE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_COLORSEPARATION = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_COLORSEPARATIONMATTE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const IMGTYPE_OPTIMIZE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RESOLUTION_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RESOLUTION_PIXELSPERINCH = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RESOLUTION_PIXELSPERCENTIMETER = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_NO = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_BZIP = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_FAX = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_GROUP4 = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_JPEG = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_JPEG2000 = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_LOSSLESSJPEG = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_LZW = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_RLE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COMPRESSION_ZIP = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PAINT_POINT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PAINT_REPLACE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PAINT_FLOODFILL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PAINT_FILLTOBORDER = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PAINT_RESET = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const GRAVITY_NORTHWEST = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const GRAVITY_NORTH = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const GRAVITY_NORTHEAST = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const GRAVITY_WEST = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const GRAVITY_CENTER = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const GRAVITY_EAST = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const GRAVITY_SOUTHWEST = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const GRAVITY_SOUTH = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const GRAVITY_SOUTHEAST = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STRETCH_NORMAL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STRETCH_ULTRACONDENSED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STRETCH_CONDENSED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STRETCH_SEMICONDENSED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STRETCH_SEMIEXPANDED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STRETCH_EXPANDED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STRETCH_EXTRAEXPANDED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STRETCH_ULTRAEXPANDED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const STRETCH_ANY = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ALIGN_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ALIGN_LEFT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ALIGN_CENTER = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ALIGN_RIGHT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const DECORATION_NO = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const DECORATION_UNDERLINE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const DECORATION_OVERLINE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const DECORATION_LINETROUGH = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const NOISE_UNIFORM = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const NOISE_GAUSSIAN = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const NOISE_MULTIPLICATIVEGAUSSIAN = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const NOISE_IMPULSE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const NOISE_LAPLACIAN = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const NOISE_POISSON = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_RED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_GRAY = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_CYAN = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_GREEN = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_MAGENTA = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_BLUE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_YELLOW = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_ALPHA = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_OPACITY = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_MATTE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_BLACK = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_INDEX = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const CHANNEL_ALL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const METRIC_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const METRIC_MEANABSOLUTEERROR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const METRIC_MEANSQUAREERROR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const METRIC_PEAKABSOLUTEERROR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const METRIC_PEAKSIGNALTONOISERATIO = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const METRIC_ROOTMEANSQUAREDERROR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PIXEL_CHAR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PIXEL_DOUBLE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PIXEL_FLOAT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PIXEL_INTEGER = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PIXEL_LONG = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PIXEL_QUANTUM = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PIXEL_SHORT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_RGB = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_GRAY = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_TRANSPARENT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_OHTA = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_LAB = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_XYZ = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_YCBCR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_YCC = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_YIQ = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_YPBPR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_YUV = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_CMYK = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_SRGB = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_HSB = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_HSL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_HWB = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_REC601LUMA = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_REC709LUMA = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const COLORSPACE_LOG = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_BACKGROUND = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_CONSTANT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_EDGE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_MIRROR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_TILE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const VIRTUALPIXELMETHOD_TRANSPARENT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_ROTATE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_SHEAR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_ROLL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_HUE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_SATURATION = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_BRIGHTNESS = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_GAMMA = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_SPIFF = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_DULL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_GRAYSCALE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_QUANTIZE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_DESPECKLE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_REDUCENOISE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_ADDNOISE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_SHARPEN = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_BLUR = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_THRESHOLD = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_EDGEDETECT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_SPREAD = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_SOLARIZE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_SHADE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_RAISE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_SEGMENT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_SWIRL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_IMPLODE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_WAVE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_OILPAINT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_CHARCOALDRAWING = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PREVIEW_JPEG = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RENDERINGINTENT_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RENDERINGINTENT_SATURATION = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RENDERINGINTENT_PERCEPTUAL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RENDERINGINTENT_ABSOLUTE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RENDERINGINTENT_RELATIVE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILLRULE_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILLRULE_EVENODD = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const FILLRULE_NONZERO = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PATHUNITS_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PATHUNITS_USERSPACE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PATHUNITS_USERSPACEONUSE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const PATHUNITS_OBJECTBOUNDINGBOX = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const LINECAP_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const LINECAP_BUTT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const LINECAP_ROUND = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const LINECAP_SQUARE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const LINEJOIN_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const LINEJOIN_MITER = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const LINEJOIN_ROUND = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const LINEJOIN_BEVEL = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RESOURCETYPE_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RESOURCETYPE_AREA = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RESOURCETYPE_DISK = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RESOURCETYPE_FILE = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RESOURCETYPE_MAP = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const RESOURCETYPE_MEMORY = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ORIENTATION_UNDEFINED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ORIENTATION_TOPLEFT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ORIENTATION_TOPRIGHT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ORIENTATION_BOTTOMRIGHT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ORIENTATION_BOTTOMLEFT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ORIENTATION_LEFTTOP = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ORIENTATION_RIGHTTOP = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ORIENTATION_RIGHTBOTTOM = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/gmagick.constants.php
		 */
		const ORIENTATION_LEFTBOTTOM = null;

		/**
		 * The Gmagick constructor
		 * <p>The Gmagick constructor.</p>
		 * @param string $filename <p>The path to an image to load or array of paths</p>
		 * @return self <p>Returns a new Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.construct.php
		 * @since PECL gmagick >= Unknown
		 */
		public function __construct(string $filename = NULL) {}

		/**
		 * Adds new image to Gmagick object image list
		 * <p>Adds new image to Gmagick object from the current position of the source object. After the operation iterator position is moved at the end of the list.</p>
		 * @param \Gmagick $source <p>The source Gmagick object</p>
		 * @return Gmagick <p>The Gmagick object with image added</p>
		 * @link https://php.net/manual/en/gmagick.addimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function addimage(\Gmagick $source): \Gmagick {}

		/**
		 * Adds random noise to the image
		 * <p>Adds random noise to the image.</p>
		 * @param int $noise_type <p>The type of the noise. Refer to this list of noise constants.</p>
		 * @return Gmagick <p>The Gmagick object with noise added.</p>
		 * @link https://php.net/manual/en/gmagick.addnoiseimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function addnoiseimage(int $noise_type): \Gmagick {}

		/**
		 * Annotates an image with text
		 * <p>Annotates an image with text.</p>
		 * @param \GmagickDraw $GmagickDraw <p>The GmagickDraw object that contains settings for drawing the text</p>
		 * @param float $x <p>Horizontal offset in pixels to the left of text</p>
		 * @param float $y <p>Vertical offset in pixels to the baseline of text</p>
		 * @param float $angle <p>The angle at which to write the text</p>
		 * @param string $text <p>The string to draw</p>
		 * @return Gmagick <p>The Gmagick object with annotation made.</p>
		 * @link https://php.net/manual/en/gmagick.annotateimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function annotateimage(\GmagickDraw $GmagickDraw, float $x, float $y, float $angle, string $text): \Gmagick {}

		/**
		 * Adds blur filter to image
		 * <p>Adds blur filter to image.</p>
		 * @param float $radius <p>Blur radius</p>
		 * @param float $sigma <p>Standard deviation</p>
		 * @param int $channel
		 * @return Gmagick <p>The blurred Gmagick object</p>
		 * @link https://php.net/manual/en/gmagick.blurimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function blurimage(float $radius, float $sigma, int $channel = NULL): \Gmagick {}

		/**
		 * Surrounds the image with a border
		 * <p>Surrounds the image with a border of the color defined by the bordercolor GmagickPixel object or a color string.</p>
		 * @param \GmagickPixel $color <p>GmagickPixel object or a string containing the border color</p>
		 * @param int $width <p>Border width</p>
		 * @param int $height <p>Border height</p>
		 * @return Gmagick <p>The Gmagick object with border defined</p>
		 * @link https://php.net/manual/en/gmagick.borderimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function borderimage(\GmagickPixel $color, int $width, int $height): \Gmagick {}

		/**
		 * Simulates a charcoal drawing
		 * <p>Simulates a charcoal drawing.</p>
		 * @param float $radius <p>The radius of the Gaussian, in pixels, not counting the center pixel</p>
		 * @param float $sigma <p>The standard deviation of the Gaussian, in pixels</p>
		 * @return Gmagick <p>The Gmagick object with charcoal simulation</p>
		 * @link https://php.net/manual/en/gmagick.charcoalimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function charcoalimage(float $radius, float $sigma): \Gmagick {}

		/**
		 * Removes a region of an image and trims
		 * <p>Removes a region of an image and collapses the image to occupy the removed portion.</p>
		 * @param int $width <p>Width of the chopped area</p>
		 * @param int $height <p>Height of the chopped area</p>
		 * @param int $x <p>X origo of the chopped area</p>
		 * @param int $y <p>Y origo of the chopped area</p>
		 * @return Gmagick <p>The chopped Gmagick object</p>
		 * @link https://php.net/manual/en/gmagick.chopimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function chopimage(int $width, int $height, int $x, int $y): \Gmagick {}

		/**
		 * Clears all resources associated to Gmagick object
		 * <p>Clears all resources associated to Gmagick object</p>
		 * @return Gmagick <p>The cleared Gmagick object</p>
		 * @link https://php.net/manual/en/gmagick.clear.php
		 * @since PECL gmagick >= Unknown
		 */
		public function clear(): \Gmagick {}

		/**
		 * Adds a comment to your image
		 * <p>Adds a comment to your image.</p>
		 * @param string $comment <p>The comment to add</p>
		 * @return Gmagick <p>The Gmagick object with comment added.</p>
		 * @link https://php.net/manual/en/gmagick.commentimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function commentimage(string $comment): \Gmagick {}

		/**
		 * Composite one image onto another
		 * <p>Composite one image onto another at the specified offset.</p>
		 * @param \Gmagick $source <p>Gmagick object which holds the composite image</p>
		 * @param int $COMPOSE
		 * @param int $x <p>The column offset of the composited image</p>
		 * @param int $y <p>The row offset of the composited image</p>
		 * @return Gmagick <p>The Gmagick object with compositions.</p>
		 * @link https://php.net/manual/en/gmagick.compositeimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function compositeimage(\Gmagick $source, int $COMPOSE, int $x, int $y): \Gmagick {}

		/**
		 * Extracts a region of the image
		 * <p>Extracts a region of the image.</p>
		 * @param int $width <p>The width of the crop</p>
		 * @param int $height <p>The height of the crop</p>
		 * @param int $x <p>The X coordinate of the cropped region's top left corner</p>
		 * @param int $y <p>The Y coordinate of the cropped region's top left corner</p>
		 * @return Gmagick <p>The cropped Gmagick object</p>
		 * @link https://php.net/manual/en/gmagick.cropimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function cropimage(int $width, int $height, int $x, int $y): \Gmagick {}

		/**
		 * Creates a crop thumbnail
		 * <p>Creates a fixed size thumbnail by first scaling the image down and cropping a specified area from the center.</p>
		 * @param int $width <p>The width of the thumbnail</p>
		 * @param int $height <p>The Height of the thumbnail</p>
		 * @return Gmagick <p>The cropped Gmagick object</p>
		 * @link https://php.net/manual/en/gmagick.cropthumbnailimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function cropthumbnailimage(int $width, int $height): \Gmagick {}

		/**
		 * The current purpose
		 * <p>Returns reference to the current gmagick object with image pointer at the correct sequence.</p>
		 * @return Gmagick <p>Returns self on success.</p>
		 * @link https://php.net/manual/en/gmagick.current.php
		 * @since PECL gmagick >= Unknown
		 */
		public function current(): \Gmagick {}

		/**
		 * Displaces an image's colormap
		 * <p>Displaces an image's colormap by a given number of positions. If you cycle the colormap a number of times you can produce a psychedelic effect.</p>
		 * @param int $displace <p>The amount to displace the colormap.</p>
		 * @return Gmagick <p>Returns self on success.</p>
		 * @link https://php.net/manual/en/gmagick.cyclecolormapimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function cyclecolormapimage(int $displace): \Gmagick {}

		/**
		 * Returns certain pixel differences between images
		 * <p>Compares each image with the next in a sequence and returns the maximum bounding region of any pixel differences it discovers.</p>
		 * @return Gmagick <p>Returns a new Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.deconstructimages.php
		 * @since PECL gmagick >= Unknown
		 */
		public function deconstructimages(): \Gmagick {}

		/**
		 * The despeckleimage purpose
		 * <p>Reduces the speckle noise in an image while preserving the edges of the original image.</p>
		 * @return Gmagick <p>The despeckled Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.despeckleimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function despeckleimage(): \Gmagick {}

		/**
		 * The destroy purpose
		 * <p>Destroys the Gmagick object and frees all resources associated with it</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/gmagick.destroy.php
		 * @since PECL gmagick >= Unknown
		 */
		public function destroy(): bool {}

		/**
		 * Renders the GmagickDraw object on the current image
		 * <p>Renders the GmagickDraw object on the current image</p>
		 * @param \GmagickDraw $GmagickDraw <p>The drawing operations to render on the image.</p>
		 * @return Gmagick <p>The drawn Gmagick object</p>
		 * @link https://php.net/manual/en/gmagick.drawimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function drawimage(\GmagickDraw $GmagickDraw): \Gmagick {}

		/**
		 * Enhance edges within the image
		 * <p>Enhance edges within the image with a convolution filter of the given radius. Use radius 0 and it will be auto-selected.</p>
		 * @param float $radius <p>The radius of the operation.</p>
		 * @return Gmagick <p>The Gmagick object with edges enhanced.</p>
		 * @link https://php.net/manual/en/gmagick.edgeimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function edgeimage(float $radius): \Gmagick {}

		/**
		 * Returns a grayscale image with a three-dimensional effect
		 * <p>Returns a grayscale image with a three-dimensional effect. We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, radius should be larger than sigma. Use a radius of 0 and it will choose a suitable radius for you.</p>
		 * @param float $radius <p>The radius of the effect</p>
		 * @param float $sigma <p>The sigma of the effect</p>
		 * @return Gmagick <p>The embossed Gmagick object.</p>
		 * @link https://php.net/manual/en/gmagick.embossimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function embossimage(float $radius, float $sigma): \Gmagick {}

		/**
		 * Improves the quality of a noisy image
		 * <p>Applies a digital filter that improves the quality of a noisy image.</p>
		 * @return Gmagick <p>The enhanced Gmagick object.</p>
		 * @link https://php.net/manual/en/gmagick.enhanceimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function enhanceimage(): \Gmagick {}

		/**
		 * Equalizes the image histogram
		 * <p>Equalizes the image histogram.</p>
		 * @return Gmagick <p>The equalized Gmagick object.</p>
		 * @link https://php.net/manual/en/gmagick.equalizeimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function equalizeimage(): \Gmagick {}

		/**
		 * Creates a vertical mirror image
		 * <p>Creates a vertical mirror image by reflecting the pixels around the central x-axis.</p>
		 * @return Gmagick <p>The flipped Gmagick object.</p>
		 * @link https://php.net/manual/en/gmagick.flipimage.php
		 * @see Imagick::flopimage()
		 * @since PECL gmagick >= Unknown
		 */
		public function flipimage(): \Gmagick {}

		/**
		 * The flopimage purpose
		 * <p>Creates a vertical mirror image by reflecting the pixels around the central y-axis.</p>
		 * @return Gmagick <p>The flopped Gmagick object.</p>
		 * @link https://php.net/manual/en/gmagick.flopimage.php
		 * @see Imagick::flipimage()
		 * @since PECL gmagick >= Unknown
		 */
		public function flopimage(): \Gmagick {}

		/**
		 * Adds a simulated three-dimensional border
		 * <p>Adds a simulated three-dimensional border around the image. The width and height specify the border width of the vertical and horizontal sides of the frame. The inner and outer bevels indicate the width of the inner and outer shadows of the frame.</p>
		 * @param \GmagickPixel $color <p>GmagickPixel object or a float representing the matte color</p>
		 * @param int $width <p>The width of the border</p>
		 * @param int $height <p>The height of the border</p>
		 * @param int $inner_bevel <p>The inner bevel width</p>
		 * @param int $outer_bevel <p>The outer bevel width</p>
		 * @return Gmagick <p>The framed Gmagick object.</p>
		 * @link https://php.net/manual/en/gmagick.frameimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function frameimage(\GmagickPixel $color, int $width, int $height, int $inner_bevel, int $outer_bevel): \Gmagick {}

		/**
		 * Gamma-corrects an image
		 * <p>Gamma-corrects an image. The same image viewed on different devices will have perceptual differences in the way the image's intensities are represented on the screen. Specify individual gamma levels for the red, green, and blue channels, or adjust all three with the gamma parameter. Values typically range from 0.8 to 2.3.</p>
		 * @param float $gamma <p>The amount of gamma-correction.</p>
		 * @return Gmagick <p>The gamma corrected Gmagick object.</p>
		 * @link https://php.net/manual/en/gmagick.gammaimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function gammaimage(float $gamma): \Gmagick {}

		/**
		 * Returns the GraphicsMagick API copyright as a string
		 * <p>Returns the GraphicsMagick API copyright as a string.</p>
		 * @return string <p>Returns a string containing the copyright notice of GraphicsMagick and Magickwand C API.</p>
		 * @link https://php.net/manual/en/gmagick.getcopyright.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getcopyright(): string {}

		/**
		 * The filename associated with an image sequence
		 * <p>Returns the filename associated with an image sequence.</p>
		 * @return string <p>Returns a string on success.</p>
		 * @link https://php.net/manual/en/gmagick.getfilename.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getfilename(): string {}

		/**
		 * Returns the image background color
		 * <p>Returns the image background color.</p>
		 * @return GmagickPixel <p>Returns an GmagickPixel set to the background color of the image.</p>
		 * @link https://php.net/manual/en/gmagick.getimagebackgroundcolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagebackgroundcolor(): \GmagickPixel {}

		/**
		 * Returns the chromaticy blue primary point
		 * <p>Returns the chromaticity blue primary point for the image.</p>
		 * @return array <p>Array consisting of "x" and "y" coordinates of point.</p>
		 * @link https://php.net/manual/en/gmagick.getimageblueprimary.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageblueprimary(): array {}

		/**
		 * Returns the image border color
		 * <p>Returns the image border color.</p>
		 * @return GmagickPixel <p>GmagickPixel object representing the color of the border</p>
		 * @link https://php.net/manual/en/gmagick.getimagebordercolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagebordercolor(): \GmagickPixel {}

		/**
		 * Gets the depth for a particular image channel
		 * <p>Gets the depth for a particular image channel.</p>
		 * @param int $channel_type
		 * @return int <p>Depth of image channel</p>
		 * @link https://php.net/manual/en/gmagick.getimagechanneldepth.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagechanneldepth(int $channel_type): int {}

		/**
		 * Returns the color of the specified colormap index
		 * <p>Returns the color of the specified colormap index.</p>
		 * @return int <p>The number of colors in image.</p>
		 * @link https://php.net/manual/en/gmagick.getimagecolors.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagecolors(): int {}

		/**
		 * Gets the image colorspace
		 * <p>Gets the image colorspace.</p>
		 * @return int <p>Colorspace</p>
		 * @link https://php.net/manual/en/gmagick.getimagecolorspace.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagecolorspace(): int {}

		/**
		 * Returns the composite operator associated with the image
		 * <p>Returns the composite operator associated with the image.</p>
		 * @return int <p>Returns the composite operator associated with the image.</p>
		 * @link https://php.net/manual/en/gmagick.getimagecompose.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagecompose(): int {}

		/**
		 * Gets the image delay
		 * <p>Gets the image delay</p>
		 * @return int <p>Returns the composite operator associated with the image.</p>
		 * @link https://php.net/manual/en/gmagick.getimagedelay.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagedelay(): int {}

		/**
		 * Gets the depth of the image
		 * <p>Gets the depth of the image.</p>
		 * @return int <p>Image depth</p>
		 * @link https://php.net/manual/en/gmagick.getimagedepth.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagedepth(): int {}

		/**
		 * Gets the image disposal method
		 * <p>Gets the image disposal method</p>
		 * @return int <p>Returns the dispose method on success.</p>
		 * @link https://php.net/manual/en/gmagick.getimagedispose.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagedispose(): int {}

		/**
		 * Gets the extrema for the image
		 * <p>Returns an associative array with the keys "min" and "max". Throws an <b>GmagickException</b> on error.</p>
		 * @return array <p>Returns an associative array with the keys "min" and "max".</p>
		 * @link https://php.net/manual/en/gmagick.getimageextrema.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageextrema(): array {}

		/**
		 * Returns the filename of a particular image in a sequence
		 * <p>Returns the filename of a particular image in a sequence</p>
		 * @return string <p>Returns a string with the filename of the image</p>
		 * @link https://php.net/manual/en/gmagick.getimagefilename.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagefilename(): string {}

		/**
		 * Returns the format of a particular image in a sequence
		 * <p>Returns the format of a particular image in a sequence.</p>
		 * @return string <p>Returns a string containing the image format on success.</p>
		 * @link https://php.net/manual/en/gmagick.getimageformat.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageformat(): string {}

		/**
		 * Gets the image gamma
		 * <p>Gets the image gamma</p>
		 * @return float <p>Returns the image gamma on success</p>
		 * @link https://php.net/manual/en/gmagick.getimagegamma.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagegamma(): float {}

		/**
		 * Returns the chromaticy green primary point
		 * <p>Returns the chromaticity green primary point. Returns an array with the keys "x" and "y".</p>
		 * @return array <p>Returns an array with the keys "x" and "y" on success.</p>
		 * @link https://php.net/manual/en/gmagick.getimagegreenprimary.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagegreenprimary(): array {}

		/**
		 * Returns the image height
		 * <p>Returns the image height</p>
		 * @return int <p>Returns the image height in pixels.</p>
		 * @link https://php.net/manual/en/gmagick.getimageheight.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageheight(): int {}

		/**
		 * Gets the image histogram
		 * <p>Returns the image histogram as an array of GmagickPixel objects. Throw an GmagickException on error.</p>
		 * @return array <p>Returns the image histogram as an array of GmagickPixel objects.</p>
		 * @link https://php.net/manual/en/gmagick.getimagehistogram.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagehistogram(): array {}

		/**
		 * Gets the index of the current active image
		 * <p>Returns the index of the current active image within the Gmagick object.</p>
		 * @return int <p>Index of current active image</p>
		 * @link https://php.net/manual/en/gmagick.getimageindex.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageindex(): int {}

		/**
		 * Gets the image interlace scheme
		 * <p>Gets the image interlace scheme.</p>
		 * @return int <p>Returns the interlace scheme as an integer on success</p>
		 * @link https://php.net/manual/en/gmagick.getimageinterlacescheme.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageinterlacescheme(): int {}

		/**
		 * Gets the image iterations
		 * <p>Gets the image iterations.</p>
		 * @return int <p>Returns the image iterations as an integer.</p>
		 * @link https://php.net/manual/en/gmagick.getimageiterations.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageiterations(): int {}

		/**
		 * Check if the image has a matte channel
		 * <p>Returns <b><code>TRUE</code></b> if the image has a matte channel, otherwise <b><code>FALSE</code></b>.</p>
		 * @return int <p>Returns <b><code>TRUE</code></b> if the image has a matte channel, otherwise <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/en/gmagick.getimagematte.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagematte(): int {}

		/**
		 * Returns the image matte color
		 * <p>Returns GmagickPixel object on success. Throw an GmagickException on error.</p>
		 * @return GmagickPixel <p>Returns GmagickPixel object on success.</p>
		 * @link https://php.net/manual/en/gmagick.getimagemattecolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagemattecolor(): \GmagickPixel {}

		/**
		 * Returns the named image profile
		 * <p>Returns the named image profile.</p>
		 * @param string $name
		 * @return string <p>Returns a string containing the image profile.</p>
		 * @link https://php.net/manual/en/gmagick.getimageprofile.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageprofile(string $name): string {}

		/**
		 * Returns the chromaticity red primary point
		 * <p>Returns the chromaticity red primary point as an array with the keys "x" and "y".</p>
		 * @return array <p>Returns the chromaticity red primary point as an array with the keys "x" and "y".</p>
		 * @link https://php.net/manual/en/gmagick.getimageredprimary.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageredprimary(): array {}

		/**
		 * Gets the image rendering intent
		 * <p>Gets the image rendering intent</p>
		 * @return int <p>Extracts a region of the image and returns it as a new wand</p>
		 * @link https://php.net/manual/en/gmagick.getimagerenderingintent.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagerenderingintent(): int {}

		/**
		 * Gets the image X and Y resolution
		 * <p>Returns the resolution as an array.</p>
		 * @return array <p>Returns the resolution as an array.</p>
		 * @link https://php.net/manual/en/gmagick.getimageresolution.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageresolution(): array {}

		/**
		 * Gets the image scene
		 * <p>Gets the image scene.</p>
		 * @return int <p>Returns the image scene.</p>
		 * @link https://php.net/manual/en/gmagick.getimagescene.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagescene(): int {}

		/**
		 * Generates an SHA-256 message digest
		 * <p>Generates an SHA-256 message digest for the image pixel stream.</p>
		 * @return string <p>Returns a string containing the SHA-256 hash of the file.</p>
		 * @link https://php.net/manual/en/gmagick.getimagesignature.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagesignature(): string {}

		/**
		 * Gets the potential image type
		 * <p>Gets the potential image type.</p>
		 * @return int <p>Returns the potential image type.</p>
		 * @link https://php.net/manual/en/gmagick.getimagetype.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagetype(): int {}

		/**
		 * Gets the image units of resolution
		 * <p>Gets the image units of resolution.</p>
		 * @return int <p>Returns the image units of resolution.</p>
		 * @link https://php.net/manual/en/gmagick.getimageunits.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimageunits(): int {}

		/**
		 * Returns the chromaticity white point
		 * <p>Returns the chromaticity white point as an associative array with the keys "x" and "y".</p>
		 * @return array <p>Returns the chromaticity white point as an associative array with the keys "x" and "y".</p>
		 * @link https://php.net/manual/en/gmagick.getimagewhitepoint.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagewhitepoint(): array {}

		/**
		 * Returns the width of the image
		 * <p>Returns the width of the image.</p>
		 * @return int <p>Returns the image width.</p>
		 * @link https://php.net/manual/en/gmagick.getimagewidth.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getimagewidth(): int {}

		/**
		 * Returns the GraphicsMagick package name
		 * <p>Returns the GraphicsMagick package name.</p>
		 * @return string <p>Returns the GraphicsMagick package name as a string.</p>
		 * @link https://php.net/manual/en/gmagick.getpackagename.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getpackagename(): string {}

		/**
		 * Returns the Gmagick quantum depth as a string
		 * <p>Returns the Gmagick quantum depth as a string.</p>
		 * @return array <p>Returns the Gmagick quantum depth as a string.</p>
		 * @link https://php.net/manual/en/gmagick.getquantumdepth.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getquantumdepth(): array {}

		/**
		 * Returns the GraphicsMagick release date as a string
		 * <p>Returns the GraphicsMagick release date as a string.</p>
		 * @return string <p>Returns the GraphicsMagick release date as a string.</p>
		 * @link https://php.net/manual/en/gmagick.getreleasedate.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getreleasedate(): string {}

		/**
		 * Gets the horizontal and vertical sampling factor
		 * <p>Gets the horizontal and vertical sampling factor.</p>
		 * @return array <p>Returns an associative array with the horizontal and vertical sampling factors of the image.</p>
		 * @link https://php.net/manual/en/gmagick.getsamplingfactors.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getsamplingfactors(): array {}

		/**
		 * Returns the size associated with the Gmagick object
		 * <p>Returns the size associated with the Gmagick object as an array with the keys "columns" and "rows".</p>
		 * @return array <p>Returns the size associated with the Gmagick object as an array with the keys "columns" and "rows".</p>
		 * @link https://php.net/manual/en/gmagick.getsize.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getsize(): array {}

		/**
		 * Returns the GraphicsMagick API version
		 * <p>Returns the GraphicsMagick API version as a string and as a number.</p>
		 * @return array <p>Returns the GraphicsMagick API version as a string and as a number.</p>
		 * @link https://php.net/manual/en/gmagick.getversion.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getversion(): array {}

		/**
		 * Checks if the object has more images
		 * <p>Returns TRUE if the object has more images when traversing the list in the forward direction.</p>
		 * @return mixed <p>Returns TRUE if the object has more images when traversing the list in the forward direction, returns FALSE if there are none.</p>
		 * @link https://php.net/manual/en/gmagick.hasnextimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function hasnextimage() {}

		/**
		 * Checks if the object has a previous image
		 * <p>Returns TRUE if the object has more images when traversing the list in the reverse direction</p>
		 * @return mixed <p>Returns TRUE if the object has more images when traversing the list in the reverse direction, returns FALSE if there are none.</p>
		 * @link https://php.net/manual/en/gmagick.haspreviousimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function haspreviousimage() {}

		/**
		 * Creates a new image as a copy
		 * <p>Creates a new image that is a copy of an existing one with the image pixels "imploded" by the specified percentage.</p>
		 * @param float $radius <p>The radius of the implode</p>
		 * @return mixed <p>Returns imploded Gmagick object.</p>
		 * @link https://php.net/manual/en/gmagick.implodeimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function implodeimage(float $radius) {}

		/**
		 * Adds a label to an image
		 * <p>Adds a label to an image.</p>
		 * @param string $label <p>The label to add</p>
		 * @return mixed <p>Gmagick with label.</p>
		 * @link https://php.net/manual/en/gmagick.labelimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function labelimage(string $label) {}

		/**
		 * Adjusts the levels of an image
		 * <p>Adjusts the levels of an image by scaling the colors falling between specified white and black points to the full available quantum range. The parameters provided represent the black, mid, and white points. The black point specifies the darkest color in the image. Colors darker than the black point are set to zero. Mid point specifies a gamma correction to apply to the image. White point specifies the lightest color in the image. Colors brighter than the white point are set to the maximum quantum value.</p>
		 * @param float $blackPoint <p>The image black point</p>
		 * @param float $gamma <p>The gamma value</p>
		 * @param float $whitePoint <p>The image white point</p>
		 * @param int $channel <p>Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channeltype constants using bitwise operators. Refer to this list of channel constants.</p>
		 * @return mixed <p>Gmagick object with image levelled.</p>
		 * @link https://php.net/manual/en/gmagick.levelimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function levelimage(float $blackPoint, float $gamma, float $whitePoint, int $channel = Gmagick::CHANNEL_DEFAULT) {}

		/**
		 * Scales an image proportionally 2x
		 * <p>Conveniently scales an image proportionally to twice its original size.</p>
		 * @return mixed <p>Magnified Gmagick object.</p>
		 * @link https://php.net/manual/en/gmagick.magnifyimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function magnifyimage() {}

		/**
		 * Replaces the colors of an image with the closest color from a reference image
		 * <p>Replaces the colors of an image with the closest color from a reference image.</p>
		 * @param \gmagick $gmagick <p>The reference image</p>
		 * @param bool $dither <p>Set this integer value to something other than zero to dither the mapped image</p>
		 * @return Gmagick <p>Gmagick object</p>
		 * @link https://php.net/manual/en/gmagick.mapimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function mapimage(\gmagick $gmagick, bool $dither): \Gmagick {}

		/**
		 * Applies a digital filter
		 * <p>Applies a digital filter that improves the quality of a noisy image. Each pixel is replaced by the median in a set of neighboring pixels as defined by radius.</p>
		 * @param float $radius <p>The radius of the pixel neighborhood.</p>
		 * @return void <p>Gmagick object with median filter applied.</p>
		 * @link https://php.net/manual/en/gmagick.medianfilterimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function medianfilterimage(float $radius): void {}

		/**
		 * Scales an image proportionally to half its size
		 * <p>A convenient method that scales an image proportionally to one-half its original size</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.minifyimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function minifyimage(): \Gmagick {}

		/**
		 * Control the brightness, saturation, and hue
		 * <p>Lets you control the brightness, saturation, and hue of an image. Hue is the percentage of absolute rotation from the current position. For example 50 results in a counter-clockwise rotation of 90 degrees, 150 results in a clockwise rotation of 90 degrees, with 0 and 200 both resulting in a rotation of 180 degrees.</p>
		 * @param float $brightness <p>The percent change in brighness (-100 thru +100).</p>
		 * @param float $saturation <p>The percent change in saturation (-100 thru +100)</p>
		 * @param float $hue <p>The percent change in hue (-100 thru +100)</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.modulateimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function modulateimage(float $brightness, float $saturation, float $hue): \Gmagick {}

		/**
		 * Simulates motion blur
		 * <p>Simulates motion blur. We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, radius should be larger than sigma. Use a radius of 0 and MotionBlurImage() selects a suitable radius for you. Angle gives the angle of the blurring motion.</p>
		 * @param float $radius <p>The radius of the Gaussian, in pixels, not counting the center pixel.</p>
		 * @param float $sigma <p>The standard deviation of the Gaussian, in pixels.</p>
		 * @param float $angle <p>Apply the effect along this angle.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.motionblurimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function motionblurimage(float $radius, float $sigma, float $angle): \Gmagick {}

		/**
		 * Creates a new image
		 * <p>Creates a new image with the specified background color</p>
		 * @param int $width <p>Width of the new image</p>
		 * @param int $height <p>Height of the new image</p>
		 * @param string $background <p>The background color used for this image (as float)</p>
		 * @param string $format <p>Image format.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.newimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function newimage(int $width, int $height, string $background, string $format = NULL): \Gmagick {}

		/**
		 * Moves to the next image
		 * <p>Associates the next image in the image list with an Gmagick object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/gmagick.nextimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function nextimage(): bool {}

		/**
		 * Enhances the contrast of a color image
		 * <p>Enhances the contrast of a color image by adjusting the pixels color to span the entire range of colors available.</p>
		 * @param int $channel <p>Identify which channel to normalize</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.normalizeimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function normalizeimage(int $channel = NULL): \Gmagick {}

		/**
		 * Simulates an oil painting
		 * <p>Applies a special effect filter that simulates an oil painting. Each pixel is replaced by the most frequent color occurring in a circular region defined by radius.</p>
		 * @param float $radius <p>The radius of the circular neighborhood.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.oilpaintimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function oilpaintimage(float $radius): \Gmagick {}

		/**
		 * Move to the previous image in the object
		 * <p>Associates the previous image in an image list with the Gmagick object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/gmagick.previousimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function previousimage(): bool {}

		/**
		 * Adds or removes a profile from an image
		 * <p>Adds or removes a ICC, IPTC, or generic profile from an image. If the profile is NULL, it is removed from the image otherwise added. Use a name of '&#42;' and a profile of NULL to remove all profiles from the image.</p>
		 * @param string $name <p>Name of profile to add or remove: ICC, IPTC, or generic profile.</p>
		 * @param string $profile <p>The profile.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.profileimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function profileimage(string $name, string $profile): \Gmagick {}

		/**
		 * Analyzes the colors within a reference image
		 * <p>Analyzes the colors within a reference image and chooses a fixed number of colors to represent the image. The goal of the algorithm is to minimize the color difference between the input and output image while minimizing the processing time.</p>
		 * @param int $numColors <p>The number of colors.</p>
		 * @param int $colorspace <p>Perform color reduction in this colorspace, typically RGBColorspace.</p>
		 * @param int $treeDepth <p>Normally, this integer value is zero or one. A zero or one tells Quantize to choose a optimal tree depth of Log4(number_colors).% A tree of this depth generally allows the best representation of the reference image with the least amount of memory and the fastest computational speed. In some cases, such as an image with low color dispersion (a few number of colors), a value other than Log4(number_colors) is required. To expand the color tree completely, use a value of 8.</p>
		 * @param bool $dither <p>A value other than zero distributes the difference between an original image and the corresponding color reduced algorithm to neighboring pixels along a Hilbert curve.</p>
		 * @param bool $measureError <p>A value other than zero measures the difference between the original and quantized images. This difference is the total quantization error. The error is computed by summing over all pixels in an image the distance squared in RGB space between each reference pixel value and its quantized value.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.quantizeimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function quantizeimage(int $numColors, int $colorspace, int $treeDepth, bool $dither, bool $measureError): \Gmagick {}

		/**
		 * The quantizeimages purpose
		 * <p>Analyzes the colors within a sequence of images and chooses a fixed number of colors to represent the image. The goal of the algorithm is to minimize the color difference between the input and output image while minimizing the processing time.</p>
		 * @param int $numColors <p>The number of colors.</p>
		 * @param int $colorspace <p>Perform color reduction in this colorspace, typically RGBColorspace.</p>
		 * @param int $treeDepth <p>Normally, this integer value is zero or one. A zero or one tells Quantize to choose a optimal tree depth of Log4(number_colors).% A tree of this depth generally allows the best representation of the reference image with the least amount of memory and the fastest computational speed. In some cases, such as an image with low color dispersion (a few number of colors), a value other than Log4(number_colors) is required. To expand the color tree completely, use a value of 8.</p>
		 * @param bool $dither <p>A value other than zero distributes the difference between an original image and the corresponding color reduced algorithm to neighboring pixels along a Hilbert curve.</p>
		 * @param bool $measureError <p>A value other than zero measures the difference between the original and quantized images. This difference is the total quantization error. The error is computed by summing over all pixels in an image the distance squared in RGB space between each reference pixel value and its quantized value.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.quantizeimages.php
		 * @since PECL gmagick >= Unknown
		 */
		public function quantizeimages(int $numColors, int $colorspace, int $treeDepth, bool $dither, bool $measureError): \Gmagick {}

		/**
		 * Returns an array representing the font metrics
		 * <p>MagickQueryFontMetrics() returns an array representing the font metrics.</p>
		 * @param \GmagickDraw $draw
		 * @param string $text
		 * @return array <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.queryfontmetrics.php
		 * @since PECL gmagick >= Unknown
		 */
		public function queryfontmetrics(\GmagickDraw $draw, string $text): array {}

		/**
		 * Returns the configured fonts
		 * <p>Returns fonts supported by Gmagick.</p>
		 * @param string $pattern
		 * @return array <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.queryfonts.php
		 * @since PECL gmagick >= Unknown
		 */
		public function queryfonts(string $pattern = "*"): array {}

		/**
		 * Returns formats supported by Gmagick
		 * <p>Returns formats supported by Gmagick.</p>
		 * @param string $pattern <p>Specifies a <code>string</code> containing a pattern.</p>
		 * @return array <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.queryformats.php
		 * @since PECL gmagick >= Unknown
		 */
		public function queryformats(string $pattern = "*"): array {}

		/**
		 * Radial blurs an image
		 * <p>Radial blurs an image.</p>
		 * @param float $angle <p>The angle of the blur in degrees.</p>
		 * @param int $channel <p>Related channel</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.radialblurimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function radialblurimage(float $angle, int $channel = Gmagick::CHANNEL_DEFAULT): \Gmagick {}

		/**
		 * Creates a simulated 3d button-like effect
		 * <p>Creates a simulated three-dimensional button-like effect by lightening and darkening the edges of the image. Members width and height of raise_info define the width of the vertical and horizontal edge of the effect.</p>
		 * @param int $width <p>Width of the area to raise.</p>
		 * @param int $height <p>Height of the area to raise.</p>
		 * @param int $x <p>X coordinate</p>
		 * @param int $y <p>Y coordinate</p>
		 * @param bool $raise <p>A value other than zero creates a 3-D raise effect, otherwise it has a lowered effect.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.raiseimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function raiseimage(int $width, int $height, int $x, int $y, bool $raise): \Gmagick {}

		/**
		 * Reads image from filename
		 * <p>Reads image from filename.</p>
		 * @param string $filename <p>The image filename.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.read.php
		 * @since PECL gmagick >= Unknown
		 */
		public function read(string $filename): \Gmagick {}

		/**
		 * Reads image from filename
		 * <p>Reads image from filename.</p>
		 * @param string $filename <p>The image filename.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.readimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function readimage(string $filename): \Gmagick {}

		/**
		 * Reads image from a binary string
		 * <p>Reads image from a binary string.</p>
		 * @param string $imageContents <p>Content of image</p>
		 * @param string $filename <p>The image filename.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.readimageblob.php
		 * @since PECL gmagick >= Unknown
		 */
		public function readimageblob(string $imageContents, string $filename = NULL): \Gmagick {}

		/**
		 * The readimagefile purpose
		 * <p>Reads an image or image sequence from an open file descriptor.</p>
		 * @param resource $fp <p>The file descriptor.</p>
		 * @param string $filename
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.readimagefile.php
		 * @since PECL gmagick >= Unknown
		 */
		public function readimagefile($fp, string $filename = NULL): \Gmagick {}

		/**
		 * Smooths the contours of an image
		 * <p>Smooths the contours of an image while still preserving edge information. The algorithm works by replacing each pixel with its neighbor closest in value. A neighbor is defined by radius. Use a radius of 0 and Gmagick::reduceNoiseImage() selects a suitable radius for you.</p>
		 * @param float $radius <p>The radius of the pixel neighborhood.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.reducenoiseimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function reducenoiseimage(float $radius): \Gmagick {}

		/**
		 * Removes an image from the image list
		 * <p>Removes an image from the image list.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.removeimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function removeimage(): \Gmagick {}

		/**
		 * Removes the named image profile and returns it
		 * <p>Removes the named image profile and returns it.</p>
		 * @param string $name <p>Name of profile to return: ICC, IPTC, or generic profile.</p>
		 * @return string <p>The named profile.</p>
		 * @link https://php.net/manual/en/gmagick.removeimageprofile.php
		 * @since PECL gmagick >= Unknown
		 */
		public function removeimageprofile(string $name): string {}

		/**
		 * Resample image to desired resolution
		 * <p>Resample image to desired resolution.</p>
		 * @param float $xResolution <p>The new image x resolution.</p>
		 * @param float $yResolution <p>The new image y resolution.</p>
		 * @param int $filter <p>Image filter to use.</p>
		 * @param float $blur <p>The blur factor where larger than 1 is blurry, smaller than 1 is sharp.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.resampleimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function resampleimage(float $xResolution, float $yResolution, int $filter, float $blur): \Gmagick {}

		/**
		 * Scales an image
		 * <p>Scales an image to the desired dimensions with a filter.</p>
		 * @param int $width <p>The number of columns in the scaled image.</p>
		 * @param int $height <p>The number of rows in the scaled image.</p>
		 * @param int $filter <p>Image filter to use.</p>
		 * @param float $blur <p>The blur factor where larger than 1 is blurry, lesser than 1 is sharp.</p>
		 * @param bool $fit
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.resizeimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function resizeimage(int $width, int $height, int $filter, float $blur, bool $fit = FALSE): \Gmagick {}

		/**
		 * Offsets an image
		 * <p>Offsets an image as defined by x and y.</p>
		 * @param int $x <p>The x offset.</p>
		 * @param int $y <p>The y offset.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.rollimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function rollimage(int $x, int $y): \Gmagick {}

		/**
		 * Rotates an image
		 * <p>Rotates an image the specified number of degrees. Empty triangles left over from rotating the image are filled with the background color.</p>
		 * @param mixed $color <p>The background pixel.</p>
		 * @param float $degrees <p>The number of degrees to rotate the image.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.rotateimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function rotateimage($color, float $degrees): \Gmagick {}

		/**
		 * Scales the size of an image
		 * <p>Scales the size of an image to the given dimensions. The other parameter will be calculated if 0 is passed as either param.</p>
		 * @param int $width <p>The number of columns in the scaled image.</p>
		 * @param int $height <p>The number of rows in the scaled image.</p>
		 * @param bool $fit
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.scaleimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function scaleimage(int $width, int $height, bool $fit = FALSE): \Gmagick {}

		/**
		 * Separates a channel from the image
		 * <p>Separates a channel from the image and returns a grayscale image. A channel is a particular color component of each pixel in the image.</p>
		 * @param int $channel <p>Identify which channel to extract: RedChannel, GreenChannel, BlueChannel, OpacityChannel, CyanChannel, MagentaChannel, YellowChannel, BlackChannel.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.separateimagechannel.php
		 * @since PECL gmagick >= Unknown
		 */
		public function separateimagechannel(int $channel): \Gmagick {}

		/**
		 * Sets the object's default compression quality
		 * <p>Sets the object's default compression quality.</p>
		 * @param int $quality
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setcompressionquality.php
		 * @since No version information available, might only be in Git
		 */
		public function setCompressionQuality(int $quality = 75): \Gmagick {}

		/**
		 * Sets the filename before you read or write the image
		 * <p>Sets the filename before you read or write an image file.</p>
		 * @param string $filename <p>The image filename.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setfilename.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setfilename(string $filename): \Gmagick {}

		/**
		 * Sets the image background color
		 * <p>Sets the image background color.</p>
		 * @param \GmagickPixel $color <p>The background pixel wand.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setimagebackgroundcolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagebackgroundcolor(\GmagickPixel $color): \Gmagick {}

		/**
		 * Sets the image chromaticity blue primary point
		 * <p>Sets the image chromaticity blue primary point.</p>
		 * @param float $x <p>The blue primary x-point.</p>
		 * @param float $y <p>The blue primary y-point.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setimageblueprimary.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimageblueprimary(float $x, float $y): \Gmagick {}

		/**
		 * Sets the image border color
		 * <p>Sets the image border color.</p>
		 * @param \GmagickPixel $color <p>The border pixel wand.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setimagebordercolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagebordercolor(\GmagickPixel $color): \Gmagick {}

		/**
		 * Sets the depth of a particular image channel
		 * <p>Sets the depth of a particular image channel.</p>
		 * @param int $channel <p>Identify which channel to extract: RedChannel, GreenChannel, BlueChannel, OpacityChannel, CyanChannel, MagentaChannel, YellowChannel, BlackChannel.</p>
		 * @param int $depth <p>The image depth in bits.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setimagechanneldepth.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagechanneldepth(int $channel, int $depth): \Gmagick {}

		/**
		 * Sets the image colorspace
		 * <p>Sets the image colorspace.</p>
		 * @param int $colorspace <p>The image colorspace: UndefinedColorspace, RGBColorspace, GRAYColorspace, TransparentColorspace, OHTAColorspace, XYZColorspace, YCbCrColorspace, YCCColorspace, YIQColorspace, YPbPrColorspace, YPbPrColorspace, YUVColorspace, CMYKColorspace, sRGBColorspace, HSLColorspace, or HWBColorspace.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setimagecolorspace.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagecolorspace(int $colorspace): \Gmagick {}

		/**
		 * Sets the image composite operator
		 * <p>Sets the image composite operator.</p>
		 * @param int $composite <p>The image composite operator.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setimagecompose.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagecompose(int $composite): \Gmagick {}

		/**
		 * Sets the image delay
		 * <p>Sets the image delay</p>
		 * @param int $delay <p>The image delay in 1/100th of a second.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimagedelay.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagedelay(int $delay): \Gmagick {}

		/**
		 * Sets the image depth
		 * <p>Sets the image depth</p>
		 * @param int $depth <p>The image depth in bits: 8, 16, or 32.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimagedepth.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagedepth(int $depth): \Gmagick {}

		/**
		 * Sets the image disposal method
		 * <p>Sets the image disposal method.</p>
		 * @param int $disposeType <p>The image disposal type.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setimagedispose.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagedispose(int $disposeType): \Gmagick {}

		/**
		 * Sets the filename of a particular image in a sequence
		 * <p>Sets the filename of a particular image in a sequence.</p>
		 * @param string $filename <p>The image filename.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimagefilename.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagefilename(string $filename): \Gmagick {}

		/**
		 * Sets the format of a particular image
		 * <p>Sets the format of a particular image in a sequence.</p>
		 * @param string $imageFormat <p>The image format.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimageformat.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimageformat(string $imageFormat): \Gmagick {}

		/**
		 * Sets the image gamma
		 * <p>Sets the image gamma.</p>
		 * @param float $gamma <p>The image gamma.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setimagegamma.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagegamma(float $gamma): \Gmagick {}

		/**
		 * Sets the image chromaticity green primary point
		 * <p>Sets the image chromaticity green primary point.</p>
		 * @param float $x <p>The chromaticity green primary x-point.</p>
		 * @param float $y <p>The chromaticity green primary y-point.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimagegreenprimary.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagegreenprimary(float $x, float $y): \Gmagick {}

		/**
		 * Set the iterator to the position in the image list specified with the index parameter
		 * <p>Set the iterator to the position in the image list specified with the index parameter.</p>
		 * @param int $index <p>The scene number.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimageindex.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimageindex(int $index): \Gmagick {}

		/**
		 * Sets the interlace scheme of the image
		 * <p>Sets the interlace scheme of the image.</p>
		 * @param int $interlace <p>The image interlace scheme: NoInterlace, LineInterlace, PlaneInterlace, PartitionInterlace.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.setimageinterlacescheme.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimageinterlacescheme(int $interlace): \Gmagick {}

		/**
		 * Sets the image iterations
		 * <p>Sets the image iterations.</p>
		 * @param int $iterations <p>The image delay in 1/100th of a second.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimageiterations.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimageiterations(int $iterations): \Gmagick {}

		/**
		 * Adds a named profile to the Gmagick object
		 * <p>Adds a named profile to the Gmagick object. If a profile with the same name already exists, it is replaced. This method differs from the Gmagick::profileimage() method in that it does not apply any CMS color profiles.</p>
		 * @param string $name <p>Name of profile to add or remove: ICC, IPTC, or generic profile.</p>
		 * @param string $profile <p>The profile.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimageprofile.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimageprofile(string $name, string $profile): \Gmagick {}

		/**
		 * Sets the image chromaticity red primary point
		 * <p>Sets the image chromaticity red primary point.</p>
		 * @param float $x <p>The red primary x-point.</p>
		 * @param float $y <p>The red primary y-point.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimageredprimary.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimageredprimary(float $x, float $y): \Gmagick {}

		/**
		 * Sets the image rendering intent
		 * <p>Sets the image rendering intent.</p>
		 * @param int $rendering_intent <p>The image rendering intent: UndefinedIntent, SaturationIntent, PerceptualIntent, AbsoluteIntent, or RelativeIntent.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimagerenderingintent.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagerenderingintent(int $rendering_intent): \Gmagick {}

		/**
		 * Sets the image resolution
		 * <p>Sets the image resolution.</p>
		 * @param float $xResolution <p>The image x resolution.</p>
		 * @param float $yResolution <p>The image y resolution.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimageresolution.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimageresolution(float $xResolution, float $yResolution): \Gmagick {}

		/**
		 * Sets the image scene
		 * <p>Sets the image scene.</p>
		 * @param int $scene <p>The image scene number.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimagescene.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagescene(int $scene): \Gmagick {}

		/**
		 * Sets the image type
		 * <p>Sets the image type.</p>
		 * @param int $imgType <p>The image type: UndefinedType, BilevelType, GrayscaleType, GrayscaleMatteType, PaletteType, PaletteMatteType, TrueColorType, TrueColorMatteType, ColorSeparationType, ColorSeparationMatteType, or OptimizeType.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimagetype.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagetype(int $imgType): \Gmagick {}

		/**
		 * Sets the image units of resolution
		 * <p>Sets the image units of resolution.</p>
		 * @param int $resolution <p>The image units of resolution : Undefinedresolution, PixelsPerInchResolution, or PixelsPerCentimeterResolution.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimageunits.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimageunits(int $resolution): \Gmagick {}

		/**
		 * Sets the image chromaticity white point
		 * <p>Sets the image chromaticity white point.</p>
		 * @param float $x <p>The white x-point.</p>
		 * @param float $y <p>The white y-point.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setimagewhitepoint.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setimagewhitepoint(float $x, float $y): \Gmagick {}

		/**
		 * Sets the image sampling factors
		 * <p>Sets the image sampling factors.</p>
		 * @param array $factors <p>An array of doubles representing the sampling factor for each color component (in RGB order).</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setsamplingfactors.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setsamplingfactors(array $factors): \Gmagick {}

		/**
		 * Sets the size of the Gmagick object
		 * <p>Sets the size of the Gmagick object. Set it before you read a raw image format such as RGB, GRAY, or CMYK.</p>
		 * @param int $columns <p>The width in pixels.</p>
		 * @param int $rows <p>The height in pixels.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.setsize.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setsize(int $columns, int $rows): \Gmagick {}

		/**
		 * Creating a parallelogram
		 * <p>Slides one edge of an image along the X or Y axis, creating a parallelogram. An X direction shear slides an edge along the X axis, while a Y direction shear slides an edge along the Y axis. The amount of the shear is controlled by a shear angle. For X direction shears, x_shear is measured relative to the Y axis, and similarly, for Y direction shears y_shear is measured relative to the X axis. Empty triangles left over from shearing the image are filled with the background color.</p>
		 * @param mixed $color <p>The background pixel wand.</p>
		 * @param float $xShear <p>The number of degrees to shear the image.</p>
		 * @param float $yShear <p>The number of degrees to shear the image.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.shearimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function shearimage($color, float $xShear, float $yShear): \Gmagick {}

		/**
		 * Applies a solarizing effect to the image
		 * <p>Applies a special effect to the image, similar to the effect achieved in a photo darkroom by selectively exposing areas of photo sensitive paper to light. Threshold ranges from 0 to QuantumRange and is a measure of the extent of the solarization.</p>
		 * @param int $threshold <p>Define the extent of the solarization.</p>
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.solarizeimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function solarizeimage(int $threshold): \Gmagick {}

		/**
		 * Randomly displaces each pixel in a block
		 * <p>Special effects method that randomly displaces each pixel in a block defined by the radius parameter.</p>
		 * @param float $radius <p>Choose a random pixel in a neighborhood of this extent.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.spreadimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function spreadimage(float $radius): \Gmagick {}

		/**
		 * Strips an image of all profiles and comments
		 * <p>Strips an image of all profiles and comments.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.stripimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function stripimage(): \Gmagick {}

		/**
		 * Swirls the pixels about the center of the image
		 * <p>Swirls the pixels about the center of the image, where degrees indicates the sweep of the arc through which each pixel is moved. You get a more dramatic effect as the degrees move from 1 to 360.</p>
		 * @param float $degrees <p>Define the tightness of the swirling effect.</p>
		 * @return Gmagick <p>The Gmagick object on success</p>
		 * @link https://php.net/manual/en/gmagick.swirlimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function swirlimage(float $degrees): \Gmagick {}

		/**
		 * Changes the size of an image
		 * <p>Changes the size of an image to the given dimensions and removes any associated profiles. The goal is to produce small low cost thumbnail images suited for display on the Web. If TRUE is given as a third parameter then columns and rows parameters are used as maximums for each side. Both sides will be scaled down until the match or are smaller than the parameter given for the side.</p>
		 * @param int $width <p>Image width</p>
		 * @param int $height <p>Image height</p>
		 * @param bool $fit
		 * @return Gmagick <p>The Gmagick object on success.</p>
		 * @link https://php.net/manual/en/gmagick.thumbnailimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function thumbnailimage(int $width, int $height, bool $fit = FALSE): \Gmagick {}

		/**
		 * Remove edges from the image
		 * <p>Remove edges that are the background color from the image.</p>
		 * @param float $fuzz <p>By default target must match a particular pixel color exactly. However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same. This parameter represents the variation on the quantum range.</p>
		 * @return Gmagick <p>The Gmagick object</p>
		 * @link https://php.net/manual/en/gmagick.trimimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function trimimage(float $fuzz): \Gmagick {}

		/**
		 * Writes an image to the specified filename
		 * <p>Writes an image to the specified filename. If the filename parameter is NULL, the image is written to the filename set by Gmagick::ReadImage() or Gmagick::SetImageFilename().</p>
		 * @param string $filename <p>The image filename.</p>
		 * @param bool $all_frames
		 * @return Gmagick <p>The Gmagick object</p>
		 * @link https://php.net/manual/en/gmagick.writeimage.php
		 * @since PECL gmagick >= Unknown
		 */
		public function writeimage(string $filename, bool $all_frames = FALSE): \Gmagick {}
	}

	/**
	 * @link https://php.net/manual/en/class.gmagickdraw.php
	 * @since PECL gmagick >= Unknown
	 */
	class GmagickDraw {

		/**
		 * Draws text on the image
		 * <p>Draws text on the image.</p>
		 * @param float $x <p>x ordinate to left of text</p>
		 * @param float $y <p>y ordinate to text baseline</p>
		 * @param string $text <p>text to draw</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success.</p>
		 * @link https://php.net/manual/en/gmagickdraw.annotate.php
		 * @since PECL gmagick >= Unknown
		 */
		public function annotate(float $x, float $y, string $text): \GmagickDraw {}

		/**
		 * Draws an arc
		 * <p>Draws an arc falling within a specified bounding rectangle on the image.</p>
		 * @param float $sx <p>starting x ordinate of bounding rectangle</p>
		 * @param float $sy <p>starting y ordinate of bounding rectangle</p>
		 * @param float $ex <p>ending x ordinate of bounding rectangle</p>
		 * @param float $ey <p>ending y ordinate of bounding rectangle</p>
		 * @param float $sd <p>starting degrees of rotation</p>
		 * @param float $ed <p>ending degrees of rotation</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success.</p>
		 * @link https://php.net/manual/en/gmagickdraw.arc.php
		 * @since PECL gmagick >= Unknown
		 */
		public function arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed): \GmagickDraw {}

		/**
		 * Draws a bezier curve
		 * <p>Draws a bezier curve through a set of points on the image.</p>
		 * @param array $coordinate_array <p>Coordinates array</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.bezier.php
		 * @since PECL gmagick >= Unknown
		 */
		public function bezier(array $coordinate_array): \GmagickDraw {}

		/**
		 * Draws an ellipse on the image
		 * <p>Draws an ellipse on the image.</p>
		 * @param float $ox <p>origin x ordinate</p>
		 * @param float $oy <p>origin y ordinate</p>
		 * @param float $rx <p>radius in x</p>
		 * @param float $ry <p>radius in y</p>
		 * @param float $start <p>starting rotation in degrees</p>
		 * @param float $end <p>ending rotation in degrees</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.ellipse.php
		 * @since PECL gmagick >= Unknown
		 */
		public function ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end): \GmagickDraw {}

		/**
		 * Returns the fill color
		 * <p>Returns the fill color used for drawing filled objects.</p>
		 * @return GmagickPixel <p>The GmagickPixel fill color used for drawing filled objects.</p>
		 * @link https://php.net/manual/en/gmagickdraw.getfillcolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getfillcolor(): \GmagickPixel {}

		/**
		 * Returns the opacity used when drawing
		 * <p>Returns the opacity used when drawing</p>
		 * @return float <p>Returns the opacity used when drawing using the fill color or fill texture. Fully opaque is 1.0.</p>
		 * @link https://php.net/manual/en/gmagickdraw.getfillopacity.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getfillopacity(): float {}

		/**
		 * Returns the font
		 * <p>Returns a string specifying the font used when annotating with text.</p>
		 * @return mixed <p>Returns a string on success and <b><code>FALSE</code></b> if no font is set.</p>
		 * @link https://php.net/manual/en/gmagickdraw.getfont.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getfont() {}

		/**
		 * Returns the font pointsize
		 * <p>Returns the font pointsize used when annotating with text.</p>
		 * @return float <p>Returns the font size associated with the current GmagickDraw object.</p>
		 * @link https://php.net/manual/en/gmagickdraw.getfontsize.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getfontsize(): float {}

		/**
		 * Returns the font style
		 * <p>Returns the font style used when annotating with text.</p>
		 * @return int <p>Returns the font style constant (STYLE_) associated with the GmagickDraw object or 0 if no style is set.</p>
		 * @link https://php.net/manual/en/gmagickdraw.getfontstyle.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getfontstyle(): int {}

		/**
		 * Returns the font weight
		 * <p>Returns the font weight used when annotating with text.</p>
		 * @return int <p>Returns an int on success and 0 if no weight is set.</p>
		 * @link https://php.net/manual/en/gmagickdraw.getfontweight.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getfontweight(): int {}

		/**
		 * Returns the color used for stroking object outlines
		 * <p>Returns the color used for stroking object outlines.</p>
		 * @return GmagickPixel <p>Returns an GmagickPixel object which describes the color.</p>
		 * @link https://php.net/manual/en/gmagickdraw.getstrokecolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getstrokecolor(): \GmagickPixel {}

		/**
		 * Returns the opacity of stroked object outlines
		 * <p>Returns the opacity of stroked object outlines.</p>
		 * @return float <p>Returns a double describing the opacity.</p>
		 * @link https://php.net/manual/en/gmagickdraw.getstrokeopacity.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getstrokeopacity(): float {}

		/**
		 * Returns the width of the stroke used to draw object outlines
		 * <p>Returns the width of the stroke used to draw object outlines.</p>
		 * @return float <p>Returns a double describing the stroke width.</p>
		 * @link https://php.net/manual/en/gmagickdraw.getstrokewidth.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getstrokewidth(): float {}

		/**
		 * Returns the text decoration
		 * <p>Returns the decoration applied when annotating with text.</p>
		 * @return int <p>Returns one of the DECORATION_ constants and 0 if no decoration is set.</p>
		 * @link https://php.net/manual/en/gmagickdraw.gettextdecoration.php
		 * @since PECL gmagick >= Unknown
		 */
		public function gettextdecoration(): int {}

		/**
		 * Returns the code set used for text annotations
		 * <p>Returns a string which specifies the code set used for text annotations.</p>
		 * @return mixed <p>Returns a string specifying the code set or <b><code>FALSE</code></b> if text encoding is not set.</p>
		 * @link https://php.net/manual/en/gmagickdraw.gettextencoding.php
		 * @since PECL gmagick >= Unknown
		 */
		public function gettextencoding() {}

		/**
		 * The line purpose
		 * <p>Draws a line on the image using the current stroke color, stroke opacity, and stroke width.</p>
		 * @param float $sx <p>starting x ordinate</p>
		 * @param float $sy <p>starting y ordinate</p>
		 * @param float $ex <p>ending x ordinate</p>
		 * @param float $ey <p>ending y ordinate</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.line.php
		 * @since PECL gmagick >= Unknown
		 */
		public function line(float $sx, float $sy, float $ex, float $ey): \GmagickDraw {}

		/**
		 * Draws a point
		 * <p>Draws a point using the current stroke color and stroke thickness at the specified coordinates.</p>
		 * @param float $x <p>target x coordinate</p>
		 * @param float $y <p>target y coordinate</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.point.php
		 * @since PECL gmagick >= Unknown
		 */
		public function point(float $x, float $y): \GmagickDraw {}

		/**
		 * Draws a polygon
		 * <p>Draws a polygon using the current stroke, stroke width, and fill color or texture, using the specified array of coordinates.</p>
		 * @param array $coordinates <p>coordinate array</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.polygon.php
		 * @since PECL gmagick >= Unknown
		 */
		public function polygon(array $coordinates): \GmagickDraw {}

		/**
		 * Draws a polyline
		 * <p>Draws a polyline using the current stroke, stroke width, and fill color or texture, using the specified array of coordinates.</p>
		 * @param array $coordinate_array <p>The array of coordinates</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.polyline.php
		 * @since PECL gmagick >= Unknown
		 */
		public function polyline(array $coordinate_array): \GmagickDraw {}

		/**
		 * Draws a rectangle
		 * <p>Draws a rectangle given two coordinates and using the current stroke, stroke width, and fill settings.</p>
		 * @param float $x1 <p>x ordinate of first coordinate</p>
		 * @param float $y1 <p>y ordinate of first coordinate</p>
		 * @param float $x2 <p>x ordinate of second coordinate</p>
		 * @param float $y2 <p>y ordinate of second coordinate</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.rectangle.php
		 * @since PECL gmagick >= Unknown
		 */
		public function rectangle(float $x1, float $y1, float $x2, float $y2): \GmagickDraw {}

		/**
		 * Applies the specified rotation to the current coordinate space
		 * <p>Applies the specified rotation to the current coordinate space.</p>
		 * @param float $degrees <p>degrees of rotation</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.rotate.php
		 * @since PECL gmagick >= Unknown
		 */
		public function rotate(float $degrees): \GmagickDraw {}

		/**
		 * Draws a rounded rectangle
		 * <p>Draws a rounded rectangle given two coordinates, x and y corner radiuses and using the current stroke, stroke width, and fill settings.</p>
		 * @param float $x1 <p>x ordinate of first coordinate</p>
		 * @param float $y1 <p>y ordinate of first coordinate</p>
		 * @param float $x2 <p>x ordinate of second coordinate</p>
		 * @param float $y2 <p>y ordinate of second coordinate</p>
		 * @param float $rx <p>radius of corner in horizontal direction</p>
		 * @param float $ry <p>radius of corner in vertical direction</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.roundrectangle.php
		 * @since PECL gmagick >= Unknown
		 */
		public function roundrectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry): \GmagickDraw {}

		/**
		 * Adjusts the scaling factor
		 * <p>Adjusts the scaling factor to apply in the horizontal and vertical directions to the current coordinate space.</p>
		 * @param float $x <p>horizontal scale factor</p>
		 * @param float $y <p>vertical scale factor</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.scale.php
		 * @since PECL gmagick >= Unknown
		 */
		public function scale(float $x, float $y): \GmagickDraw {}

		/**
		 * Sets the fill color to be used for drawing filled objects
		 * <p>Sets the fill color to be used for drawing filled objects.</p>
		 * @param mixed $color <p>GmagickPixel or <code>string</code> indicating color to use for filling.</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success.</p>
		 * @link https://php.net/manual/en/gmagickdraw.setfillcolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setfillcolor($color): \GmagickDraw {}

		/**
		 * The setfillopacity purpose
		 * <p>Sets the opacity to use when drawing using the fill color or fill texture. Setting it to 1.0 will make fill full opaque.</p>
		 * @param float $fill_opacity <p>Fill opacity</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.setfillopacity.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setfillopacity(float $fill_opacity): \GmagickDraw {}

		/**
		 * Sets the fully-specified font to use when annotating with text
		 * <p>Sets the fully-specified font to use when annotating with text</p>
		 * @param string $font <p>font name</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.setfont.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setfont(string $font): \GmagickDraw {}

		/**
		 * Sets the font pointsize to use when annotating with text
		 * <p>Sets the font pointsize to use when annotating with text.</p>
		 * @param float $pointsize <p>Text pointsize</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.setfontsize.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setfontsize(float $pointsize): \GmagickDraw {}

		/**
		 * Sets the font style to use when annotating with text
		 * <p>Sets the font style to use when annotating with text. The AnyStyle enumeration acts as a wild-card "don't care" option.</p>
		 * @param int $style <p>Font style (NormalStyle, ItalicStyle, ObliqueStyle, AnyStyle)</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.setfontstyle.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setfontstyle(int $style): \GmagickDraw {}

		/**
		 * Sets the font weight
		 * <p>Sets the font weight to use when annotating with text.</p>
		 * @param int $weight <p>Font weight (valid range 100-900)</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.setfontweight.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setfontweight(int $weight): \GmagickDraw {}

		/**
		 * Sets the color used for stroking object outlines
		 * <p>Sets the color used for stroking object outlines.</p>
		 * @param mixed $color <p>GmagickPixel or <code>string</code> representing the color for the stroke.</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success.</p>
		 * @link https://php.net/manual/en/gmagickdraw.setstrokecolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setstrokecolor($color): \GmagickDraw {}

		/**
		 * Specifies the opacity of stroked object outlines
		 * <p>Specifies the opacity of stroked object outlines.</p>
		 * @param float $stroke_opacity <p>Stroke opacity. The value 1.0 is opaque.</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.setstrokeopacity.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setstrokeopacity(float $stroke_opacity): \GmagickDraw {}

		/**
		 * Sets the width of the stroke used to draw object outlines
		 * <p>Sets the width of the stroke used to draw object outlines</p>
		 * @param float $width <p>Stroke width</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.setstrokewidth.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setstrokewidth(float $width): \GmagickDraw {}

		/**
		 * Specifies a decoration
		 * <p>Specifies a decoration to be applied when annotating with text.</p>
		 * @param int $decoration
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.settextdecoration.php
		 * @since PECL gmagick >= Unknown
		 */
		public function settextdecoration(int $decoration): \GmagickDraw {}

		/**
		 * Specifies the text code set
		 * <p>Specifies the code set to use for text annotations. The only character encoding which may be specified at this time is "UTF-8" for representing Unicode as a sequence of bytes. Specify an empty string to set text encoding to the system's default. Successful text annotation using Unicode may require fonts designed to support Unicode.</p>
		 * @param string $encoding <p>Character string specifying text encoding</p>
		 * @return GmagickDraw <p>The GmagickDraw object on success</p>
		 * @link https://php.net/manual/en/gmagickdraw.settextencoding.php
		 * @since PECL gmagick >= Unknown
		 */
		public function settextencoding(string $encoding): \GmagickDraw {}
	}

	/**
	 * @link https://php.net/manual/en/class.gmagickpixel.php
	 * @since PECL gmagick >= Unknown
	 */
	class GmagickPixel {

		/**
		 * The GmagickPixel constructor
		 * <p>Constructs an GmagickPixel object. If a color is specified, the object is constructed and then initialised with that color before being returned.</p>
		 * @param string $color <p>The optional color string to use as the initial value of this object.</p>
		 * @return self <p>The GmagickPixel object on success.</p>
		 * @link https://php.net/manual/en/gmagickpixel.construct.php
		 * @since PECL gmagick >= Unknown
		 */
		public function __construct(string $color = NULL) {}

		/**
		 * Returns the color
		 * <p>Returns the color described by the GmagickPixel object, as a <code>string</code> or an <code>array</code>. If the color has an opacity channel set, this is provided as a fourth value in the list.</p>
		 * @param bool $as_array <p><b><code>TRUE</code></b> to indicate return of <code>array</code> instead of <code>string</code>.</p>
		 * @param bool $normalize_array <p><b><code>TRUE</code></b> to normalize the color values.</p>
		 * @return mixed <p>A <code>string</code> or an <code>array</code> of channel values, each normalized if <b><code>TRUE</code></b> is given as <code>normalize_array</code>. Throws <b>GmagickPixelException</b> on error.</p>
		 * @link https://php.net/manual/en/gmagickpixel.getcolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getcolor(bool $as_array = FALSE, bool $normalize_array = FALSE) {}

		/**
		 * Returns the color count associated with this color
		 * <p>Returns the color count associated with this color</p>
		 * @return int <p>Returns the color count as an integer on success, throws GmagickPixelException on failure.</p>
		 * @link https://php.net/manual/en/gmagickpixel.getcolorcount.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getcolorcount(): int {}

		/**
		 * Gets the normalized value of the provided color channel
		 * <p>Retrieves the value of the color channel specified, as a floating-point number between 0 and 1.</p>
		 * @param int $color <p>The channel to check, specified as one of the Gmagick channel constants.</p>
		 * @return float <p>The value of the channel, as a normalized floating-point number, throwing GmagickPixelException on error.</p>
		 * @link https://php.net/manual/en/gmagickpixel.getcolorvalue.php
		 * @since PECL gmagick >= Unknown
		 */
		public function getcolorvalue(int $color): float {}

		/**
		 * Sets the color
		 * <p>Sets the color described by the GmagickPixel object, with a string (e.g. "blue", "#0000ff", "rgb(0,0,255)", "cmyk(100,100,100,10)", etc.).</p>
		 * @param string $color <p>The color definition to use in order to initialise the GmagickPixel object.</p>
		 * @return GmagickPixel <p>The GmagickPixel object on success.</p>
		 * @link https://php.net/manual/en/gmagickpixel.setcolor.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setcolor(string $color): \GmagickPixel {}

		/**
		 * Sets the normalized value of one of the channels
		 * <p>Sets the value of the specified channel of this object to the provided value, which should be between 0 and 1. This function can be used to provide an opacity channel to a GmagickPixel object.</p>
		 * @param int $color <p>One of the Gmagick channel color constants.</p>
		 * @param float $value <p>The value to set this channel to, ranging from 0 to 1.</p>
		 * @return GmagickPixel <p>The GmagickPixel object on success.</p>
		 * @link https://php.net/manual/en/gmagickpixel.setcolorvalue.php
		 * @since PECL gmagick >= Unknown
		 */
		public function setcolorvalue(int $color, float $value): \GmagickPixel {}
	}

}
