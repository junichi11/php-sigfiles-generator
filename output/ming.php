<?php



namespace {

	/**
	 * <p>SWFAction.</p>
	 * @link http://php.net/manual/en/class.swfaction.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFAction {

		/**
		 * Creates a new SWFAction
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Creates a new SWFAction and compiles the given <code>script</code> in it.</p>
		 * @param string $script <p>An ActionScript snippet to associate with the SWFAction. See SWFAction for more details.</p>
		 * @return self
		 * @link http://php.net/manual/en/swfaction.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct(string $script) {}
	}

	/**
	 * <p>SWFBitmap.</p>
	 * @link http://php.net/manual/en/class.swfbitmap.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFBitmap {

		/**
		 * Loads Bitmap object
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Creates the new SWFBitmap object from the given <code>file</code>.</p>
		 * @param mixed $file <p></p> <p><b>Note</b>:</p><p>We can only deal with baseline (frame 0) jpegs, no baseline optimized or progressive scan jpegs!</p>  <p>You can't import png images directly, though- have to use the png2dbl utility to make a dbl ("define bits lossless") file from the png. The reason for this is that I don't want a dependency on the png library in ming- autoconf should solve this, but that's not set up yet.</p>
		 * @param mixed $alphafile <p>An MSK file to be used as an alpha mask for a JPEG image.</p>
		 * @return self
		 * @link http://php.net/manual/en/swfbitmap.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct($file, $alphafile = NULL) {}

		/**
		 * Returns the bitmap's height
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Returns the bitmap's height.</p>
		 * @return float <p>Returns the bitmap height in pixels.</p>
		 * @link http://php.net/manual/en/swfbitmap.getheight.php
		 * @see SWFBitmap::getWidth()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getHeight(): float {}

		/**
		 * Returns the bitmap's width
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Returns the bitmap's width.</p>
		 * @return float <p>Returns the bitmap width in pixels.</p>
		 * @link http://php.net/manual/en/swfbitmap.getwidth.php
		 * @see SWFBitmap::getHeight()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getWidth(): float {}
	}

	/**
	 * <p>SWFButton.</p>
	 * @link http://php.net/manual/en/class.swfbutton.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFButton {

		/**
		 * Creates a new Button
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Creates a new Button.</p>
		 * @return self
		 * @link http://php.net/manual/en/swfbutton.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct() {}

		/**
		 * Associates a sound with a button transition
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SWFSound $sound
		 * @param int $flags
		 * @return SWFSoundInstance
		 * @link http://php.net/manual/en/swfbutton.addasound.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addASound(\SWFSound $sound, int $flags): \SWFSoundInstance {}

		/**
		 * Adds an action
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Adds the given <code>action</code> to the button for the given conditions.</p>
		 * @param \SWFAction $action <p>An SWFAction, returned by <code>SWFAction::__construct()</code>.</p>
		 * @param int $flags <p>The following <code>flags</code> are valid: <b><code>SWFBUTTON_MOUSEOVER</code></b>, <b><code>SWFBUTTON_MOUSEOUT</code></b>, <b><code>SWFBUTTON_MOUSEUP</code></b>, <b><code>SWFBUTTON_MOUSEUPOUTSIDE</code></b>, <b><code>SWFBUTTON_MOUSEDOWN</code></b>, <b><code>SWFBUTTON_DRAGOUT</code></b> and <b><code>SWFBUTTON_DRAGOVER</code></b>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfbutton.addaction.php
		 * @see SWFButton::addShape()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addAction(\SWFAction $action, int $flags): void {}

		/**
		 * Adds a shape to a button
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Adds the given <code>shape</code> to the button.</p>
		 * @param \SWFShape $shape <p>An SWFShape instance</p>
		 * @param int $flags <p>The following <code>flags</code> are valid: <b><code>SWFBUTTON_UP</code></b>, <b><code>SWFBUTTON_OVER</code></b>, <b><code>SWFBUTTON_DOWN</code></b> and <b><code>SWFBUTTON_HIT</code></b>.</p> <p><b><code>SWFBUTTON_HIT</code></b> isn't ever displayed, it defines the hit region for the button. That is, everywhere the hit shape would be drawn is considered a "touchable" part of the button.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfbutton.addshape.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addShape(\SWFShape $shape, int $flags): void {}

		/**
		 * Sets the action
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Sets the action to be performed when the button is clicked.</p><p>This is a shortcut for <code>SWFButton::addAction()</code> called with the <b><code>SWFBUTTON_MOUSEUP</code></b> flag.</p>
		 * @param \SWFAction $action <p>An SWFAction, returned by <code>SWFAction::__construct()</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfbutton.setaction.php
		 * @see SWFButton::addAction()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setAction(\SWFAction $action): void {}

		/**
		 * Alias for addShape(shape, SWFBUTTON_DOWN)
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfbutton::setdown()</b> alias for addShape(shape, SWFBUTTON_DOWN).</p>
		 * @param \SWFShape $shape
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfbutton.setdown.php
		 * @see SWFButton::addShape()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setDown(\SWFShape $shape): void {}

		/**
		 * Alias for addShape(shape, SWFBUTTON_HIT)
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfbutton::sethit()</b> alias for addShape(shape, SWFBUTTON_HIT).</p>
		 * @param \SWFShape $shape
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfbutton.sethit.php
		 * @see SWFButton::addShape()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setHit(\SWFShape $shape): void {}

		/**
		 * Enable track as menu button behaviour
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $flag <p>This parameter can be used for a slight different behavior of buttons. You can set it to 0 (off) or 1 (on).</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfbutton.setmenu.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setMenu(int $flag): void {}

		/**
		 * Alias for addShape(shape, SWFBUTTON_OVER)
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfbutton::setover()</b> alias for addShape(shape, SWFBUTTON_OVER).</p>
		 * @param \SWFShape $shape
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfbutton.setover.php
		 * @see SWFButton::addShape()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setOver(\SWFShape $shape): void {}

		/**
		 * Alias for addShape(shape, SWFBUTTON_UP)
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfbutton::setup()</b> alias for addShape(shape, SWFBUTTON_UP).</p>
		 * @param \SWFShape $shape
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfbutton.setup.php
		 * @see SWFButton::addShape()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setUp(\SWFShape $shape): void {}
	}

	/**
	 * <p>SWFDisplayItem.</p>
	 * @link http://php.net/manual/en/class.swfdisplayitem.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFDisplayItem {

		/**
		 * Adds this SWFAction to the given SWFSprite instance
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SWFAction $action <p>An SWFAction, returned by <code>SWFAction::__construct()</code>.</p>
		 * @param int $flags
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.addaction.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addAction(\SWFAction $action, int $flags): void {}

		/**
		 * Adds the given color to this item's color transform
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::addcolor()</b> adds the color to this item's color transform. The color is given in its RGB form.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param int $red
		 * @param int $green
		 * @param int $blue
		 * @param int $a
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.addcolor.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addColor(int $red, int $green, int $blue, int $a = NULL): void {}

		/**
		 * Another way of defining a MASK layer
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.endmask.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function endMask(): void {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swfdisplayitem.getrot.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getRot(): float {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swfdisplayitem.getx.php
		 * @see SWFDisplayItem::getY()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getX(): float {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swfdisplayitem.getxscale.php
		 * @see SWFDisplayItem::getYScale()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getXScale(): float {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swfdisplayitem.getxskew.php
		 * @see SWFDisplayItem::getYSkew()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getXSkew(): float {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swfdisplayitem.gety.php
		 * @see SWFDisplayItem::getX()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getY(): float {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swfdisplayitem.getyscale.php
		 * @see SWFDisplayItem::getXScale()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getYScale(): float {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swfdisplayitem.getyskew.php
		 * @see SWFDisplayItem::getXSkew()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getYSkew(): float {}

		/**
		 * Moves object in relative coordinates
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::move()</b> moves the current object by (<code>dx</code>,<code>dy</code>) from its current position.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $dx
		 * @param float $dy
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.move.php
		 * @see SWFDisplayItem::moveTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function move(float $dx, float $dy): void {}

		/**
		 * Moves object in global coordinates
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::moveto()</b> moves the current object to (<code>x</code>,<code>y</code>) in global coordinates.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $x
		 * @param float $y
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.moveto.php
		 * @see SWFDisplayItem::move()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function moveTo(float $x, float $y): void {}

		/**
		 * Multiplies the item's color transform
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::multcolor()</b> multiplies the item's color transform by the given values.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $red <p>Value of red component</p>
		 * @param float $green <p>Value of green component</p>
		 * @param float $blue <p>Value of blue component</p>
		 * @param float $a <p>Value of alpha component</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.multcolor.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function multColor(float $red, float $green, float $blue, float $a = NULL): void {}

		/**
		 * Removes the object from the movie
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::remove()</b> removes this object from the movie's display list.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.remove.php
		 * @see SWFMovie::add()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function remove(): void {}

		/**
		 * Rotates in relative coordinates
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::rotate()</b> rotates the current object by <code>angle</code> degrees from its current rotation.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $angle
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.rotate.php
		 * @see SWFDisplayItem::rotateTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function rotate(float $angle): void {}

		/**
		 * Rotates the object in global coordinates
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::rotateto()</b> set the current object rotation to <code>angle</code> degrees in global coordinates.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $angle
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.rotateto.php
		 * @see SWFDisplayItem::rotate()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function rotateTo(float $angle): void {}

		/**
		 * Scales the object in relative coordinates
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::scale()</b> scales the current object by (<code>dx</code>,<code>dy</code>) from its current size.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $dx
		 * @param float $dy
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.scale.php
		 * @see SWFDisplayItem::scaleTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function scale(float $dx, float $dy): void {}

		/**
		 * Scales the object in global coordinates
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::scaleto()</b> scales the current object to (<code>x</code>,<code>y</code>) in global coordinates.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $x
		 * @param float $y
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.scaleto.php
		 * @see SWFDisplayItem::scale()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function scaleTo(float $x, float $y = NULL): void {}

		/**
		 * Sets z-order
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::setdepth()</b> sets the object's z-order to <code>depth</code>. Depth defaults to the order in which instances are created (by adding a shape/text to a movie)- newer ones are on top of older ones. If two objects are given the same depth, only the later-defined one can be moved.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param int $depth
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.setdepth.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setDepth(int $depth): void {}

		/**
		 * Defines a MASK layer at level
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $level
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.setmasklevel.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setMaskLevel(int $level): void {}

		/**
		 * Sets the item's transform matrix
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param float $a
		 * @param float $b
		 * @param float $c
		 * @param float $d
		 * @param float $x
		 * @param float $y
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.setmatrix.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setMatrix(float $a, float $b, float $c, float $d, float $x, float $y): void {}

		/**
		 * Sets the object's name
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::setname()</b> sets the object's name to <code>name</code>, for targetting with action script. Only useful on sprites.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param string $name
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.setname.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setName(string $name): void {}

		/**
		 * Sets the object's ratio
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::setratio()</b> sets the object's ratio to <code>ratio</code>. Obviously only useful for morphs.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $ratio
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.setratio.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setRatio(float $ratio): void {}

		/**
		 * Sets the X-skew
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::skewx()</b> adds <code>ddegrees</code> to current x-skew.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $ddegrees
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.skewx.php
		 * @see SWFDisplayItem::skewXTo(), SWFDisplayItem::skewY(), SWFDisplayItem::skewYTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function skewX(float $ddegrees): void {}

		/**
		 * Sets the X-skew
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::skewxto()</b> sets the x-skew to <code>degrees</code>. For <code>degrees</code> is 1.0, it means a 45-degree forward slant. More is more forward, less is more backward.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $degrees
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.skewxto.php
		 * @see SWFDisplayItem::skewX(), SWFDisplayItem::skewY(), SWFDisplayItem::skewYTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function skewXTo(float $degrees): void {}

		/**
		 * Sets the Y-skew
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::skewy()</b> adds <code>ddegrees</code> to current y-skew.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $ddegrees
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.skewy.php
		 * @see SWFDisplayItem::skewYTo(), SWFDisplayItem::skewX(), SWFDisplayItem::skewXTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function skewY(float $ddegrees): void {}

		/**
		 * Sets the Y-skew
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfdisplayitem::skewyto()</b> sets the y-skew to <code>degrees</code>. For <code>degrees</code> is 1.0, it means a 45-degree forward slant. More is more upward, less is more downward.</p><p>The object may be a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b> or a <b>swfsprite()</b> object. It must have been added using the <code>swfmovie::add()</code>.</p>
		 * @param float $degrees
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfdisplayitem.skewyto.php
		 * @see SWFDisplayItem::skewY(), SWFDisplayItem::skewX(), SWFDisplayItem::skewXTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function skewYTo(float $degrees): void {}
	}

	/**
	 * <p>The <b>SWFFill</b> object allows you to transform (scale, skew, rotate) bitmap and gradient fills.</p>
	 * <p><b>swffill</b> objects are created by the <code>SWFShape::addFill()</code> method.</p>
	 * @link http://php.net/manual/en/class.swffill.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFFill {

		/**
		 * Moves fill origin
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Moves the fill origin to the given global coordinates.</p>
		 * @param float $x <p>X-coordinate</p>
		 * @param float $y <p>Y-coordinate</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swffill.moveto.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function moveTo(float $x, float $y): void {}

		/**
		 * Sets fill's rotation
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Sets the fill rotation to the given <code>angle</code>.</p>
		 * @param float $angle <p>The rotation angle, in degrees.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swffill.rotateto.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function rotateTo(float $angle): void {}

		/**
		 * Sets fill's scale
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Sets the fill scale to the given coordinates.</p>
		 * @param float $x <p>X-coordinate</p>
		 * @param float $y <p>Y-coordinate</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swffill.scaleto.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function scaleTo(float $x, float $y = NULL): void {}

		/**
		 * Sets fill x-skew
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Sets the fill x-skew to <code>x</code>.</p>
		 * @param float $x <p>When <code>x</code> is 1.0, it is a 45-degree forward slant. More is more forward, less is more backward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swffill.skewxto.php
		 * @see SWFFill::skewYTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function skewXTo(float $x): void {}

		/**
		 * Sets fill y-skew
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Sets the fill y-skew to <code>y</code>.</p>
		 * @param float $y <p>When <code>y</code> is 1.0, it is a 45-degree upward slant. More is more upward, less is more downward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swffill.skewyto.php
		 * @see SWFFill::skewXTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function skewYTo(float $y): void {}
	}

	/**
	 * <p>The <b>SWFFont</b> object represent a reference to the font definition, for us with <code>SWFText::setFont()</code> and <code>SWFTextField::setFont()</code>.</p>
	 * @link http://php.net/manual/en/class.swffont.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFFont {

		/**
		 * Loads a font definition
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>If <code>filename</code> is the name of an FDB file (i.e., it ends in ".fdb"), load the font definition found in said file. Otherwise, create a browser-defined font reference.</p><p>FDB ("font definition block") is a very simple wrapper for the SWF DefineFont2 block which contains a full description of a font. One may create FDB files from SWT Generator template files with the included makefdb utility- look in the util directory off the main ming distribution directory.</p><p>Browser-defined fonts don't contain any information about the font other than its name. It is assumed that the font definition will be provided by the movie player. The fonts _serif, _sans, and _typewriter should always be available. For example:</p><p></p>
		 * @param string $filename
		 * @return self
		 * @link http://php.net/manual/en/swffont.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct(string $filename) {}

		/**
		 * Returns the ascent of the font, or 0 if not available
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swffont.getascent.php
		 * @see SWFFont::getDescent()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getAscent(): float {}

		/**
		 * Returns the descent of the font, or 0 if not available
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swffont.getdescent.php
		 * @see SWFFont::getAscent()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getDescent(): float {}

		/**
		 * Returns the leading of the font, or 0 if not available
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swffont.getleading.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getLeading(): float {}

		/**
		 * Returns the glyph shape of a char as a text string
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $code
		 * @return string
		 * @link http://php.net/manual/en/swffont.getshape.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getShape(int $code): string {}

		/**
		 * Calculates the width of the given string in this font at full height
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $string
		 * @return float
		 * @link http://php.net/manual/en/swffont.getutf8width.php
		 * @see SWFFont::getWidth()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getUTF8Width(string $string): float {}

		/**
		 * Returns the string's width
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swffont::getwidth()</b> returns the string <code>string</code>'s width, using font's default scaling. You'll probably want to use the <b>swftext()</b> version of this method which uses the text object's scale.</p>
		 * @param string $string
		 * @return float
		 * @link http://php.net/manual/en/swffont.getwidth.php
		 * @see SWFFont::getUTF8Width()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getWidth(string $string): float {}
	}

	/**
	 * <p>SWFFontChar.</p>
	 * @link http://php.net/manual/en/class.swffontchar.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFFontChar {

		/**
		 * Adds characters to a font for exporting font
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $char
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swffontchar.addchars.php
		 * @see SWFFontChar::addUTF8Chars()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addChars(string $char): void {}

		/**
		 * Adds characters to a font for exporting font
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $char
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swffontchar.addutf8chars.php
		 * @see SWFFontChar::addChars()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addUTF8Chars(string $char): void {}
	}

	/**
	 * <p>SWFGradient.</p>
	 * @link http://php.net/manual/en/class.swfgradient.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFGradient {

		/**
		 * Creates a gradient object
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfgradient()</b> creates a new SWFGradient object.</p><p>After you've added the entries to your gradient, you can use the gradient in a shape fill with the <code>swfshape::addfill()</code> method.</p><p>SWFGradient has the following methods : <code>swfgradient::addentry()</code>.</p><p>This simple example will draw a big black-to-white gradient as background, and a reddish disc in its center.</p><p><b>Example #1 <b>swfgradient()</b> example</b></p>
		 * @return self
		 * @link http://php.net/manual/en/swfgradient.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct() {}

		/**
		 * Adds an entry to the gradient list
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfgradient::addentry()</b> adds an entry to the gradient list. <code>ratio</code> is a number between 0 and 1 indicating where in the gradient this color appears. Thou shalt add entries in order of increasing ratio.</p><p><code>red</code>, <code>green</code>, <code>blue</code> is a color (RGB mode).</p>
		 * @param float $ratio
		 * @param int $red
		 * @param int $green
		 * @param int $blue
		 * @param int $alpha
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfgradient.addentry.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addEntry(float $ratio, int $red, int $green, int $blue, int $alpha = 255): void {}
	}

	/**
	 * <p>The methods here are sort of weird. It would make more sense to just have newSWFMorph(shape1, shape2);, but as things are now, shape2 needs to know that it's the second part of a morph. (This, because it starts writing its output as soon as it gets drawing commands- if it kept its own description of its shapes and wrote on completion this and some other things would be much easier.)</p>
	 * @link http://php.net/manual/en/class.swfmorph.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFMorph {

		/**
		 * Creates a new SWFMorph object
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Creates a new SWFMorph object.</p><p>Also called a "shape tween". This thing lets you make those tacky twisting things that make your computer choke. Oh, joy!</p>
		 * @return self
		 * @link http://php.net/manual/en/swfmorph.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct() {}

		/**
		 * Gets a handle to the starting shape
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Gets the morph's starting shape.</p>
		 * @return SWFShape <p>Returns a SWFShape object.</p>
		 * @link http://php.net/manual/en/swfmorph.getshape1.php
		 * @see SWFMorph::getShape2()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getShape1(): \SWFShape {}

		/**
		 * Gets a handle to the ending shape
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Gets the morph's ending shape.</p>
		 * @return SWFShape <p>Returns a SWFShape object.</p>
		 * @link http://php.net/manual/en/swfmorph.getshape2.php
		 * @see SWFMorph::getShape1()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getShape2(): \SWFShape {}
	}

	/**
	 * <p><b>SWFMovie</b> is a movie object representing an SWF movie.</p>
	 * @link http://php.net/manual/en/class.swfmovie.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFMovie {

		/**
		 * Creates a new movie object, representing an SWF version 4 movie
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Creates a new movie object, representing an SWF movie.</p>
		 * @param int $version <p>The desired SWF version. Default is 4.</p>
		 * @return self
		 * @link http://php.net/manual/en/swfmovie.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct(int $version = NULL) {}

		/**
		 * Adds any type of data to a movie
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Adds an SWF object <code>instance</code> to the current movie.</p>
		 * @param object $instance <p>Any type of object instance, like SWFShape, SWFText, SWFFont.</p>
		 * @return mixed <p>For displayable types (shape, text, button, sprite), this returns an SWFDisplayItem, a handle to the object in a display list. Thus, you can add the same shape to a movie multiple times and get separate handles back for each separate instance.</p>
		 * @link http://php.net/manual/en/swfmovie.add.php
		 * @see SWFMovie::remove()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function add(object $instance) {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SWFCharacter $char
		 * @param string $name
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.addexport.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addExport(\SWFCharacter $char, string $name): void {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SWFFont $font
		 * @return mixed <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.addfont.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addFont(\SWFFont $font) {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $libswf
		 * @param string $name
		 * @return SWFSprite
		 * @link http://php.net/manual/en/swfmovie.importchar.php
		 * @see SWFMovie::importFont()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function importChar(string $libswf, string $name): \SWFSprite {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $libswf
		 * @param string $name
		 * @return SWFFontChar
		 * @link http://php.net/manual/en/swfmovie.importfont.php
		 * @see SWFMovie::importChar()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function importFont(string $libswf, string $name): \SWFFontChar {}

		/**
		 * Labels a frame
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $label
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.labelframe.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function labelFrame(string $label): void {}

		/**
		 * Moves to the next frame of the animation
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Moves to the next frame of the animation.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.nextframe.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function nextFrame(): void {}

		/**
		 * Dumps your lovingly prepared movie out
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Dumps the SWFMovie.</p><p>Don't forget to send the <i>Content-Type</i> HTTP header file before using this function, in order to display the movie in a browser.</p>
		 * @param int $compression <p>The compression level can be a value between 0 and 9, defining the SWF compression similar to gzip compression.</p> <p>This parameter is only available as of Flash MX (6).</p>
		 * @return int <p>Return the number of bytes written or <b><code>FALSE</code></b> on error.</p>
		 * @link http://php.net/manual/en/swfmovie.output.php
		 * @see SWFMovie::save(), SWFMovie::saveToFile()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function output(int $compression = NULL): int {}

		/**
		 * Removes the object instance from the display list
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Removes the given object <code>instance</code> from the display list.</p>
		 * @param object $instance
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.remove.php
		 * @see SWFMovie::add()
		 * @since PHP 5.2.1-5.3.0, PHP 7, PECL ming SVN
		 */
		public function remove(object $instance): void {}

		/**
		 * Saves the SWF movie in a file
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Saves the SWF movie to the specified <code>filename</code>.</p>
		 * @param string $filename <p>The path to the saved SWF document.</p>
		 * @param int $compression <p>The compression level can be a value between 0 and 9, defining the SWF compression similar to gzip compression.</p> <p>This parameter is only available as of Flash MX (6).</p>
		 * @return int <p>Return the number of bytes written or <b><code>FALSE</code></b> on error.</p>
		 * @link http://php.net/manual/en/swfmovie.save.php
		 * @see SWFMovie::output(), SWFMovie::saveToFile()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function save(string $filename, int $compression = -1): int {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param resource $x
		 * @param int $compression <p>The compression level can be a value between 0 and 9, defining the SWF compression similar to gzip compression.</p> <p>This parameter is only available as of Flash MX (6).</p>
		 * @return int <p>Return the number of bytes written or <b><code>FALSE</code></b> on error.</p>
		 * @link http://php.net/manual/en/swfmovie.savetofile.php
		 * @see SWFMovie::output(), SWFMovie::save()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function saveToFile($x, int $compression = -1): int {}

		/**
		 * Sets the movie's width and height
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Sets the movie's dimension to the specified <code>width</code> and <code>height</code>.</p>
		 * @param float $width <p>The movie width.</p>
		 * @param float $height <p>The movie height.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.setdimension.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setDimension(float $width, float $height): void {}

		/**
		 * Sets the total number of frames in the animation
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Sets the total number of frames in the animation to the given <code>number</code>.</p>
		 * @param int $number <p>The number of frames.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.setframes.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setFrames(int $number): void {}

		/**
		 * Sets the animation's frame rate
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Sets the frame rate to the specified <code>rate</code>.</p><p>Animation will slow down if the player can't render frames fast enough- unless there's a streaming sound, in which case display frames are sacrificed to keep sound from skipping.</p>
		 * @param float $rate <p>The frame rate, in frame per seconds.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.setrate.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setRate(float $rate): void {}

		/**
		 * Sets the background color
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Sets the background color.</p><p>Why is there no rgba version&#63; Think about it, you might want to let the HTML background show through. There's a way to do that, but it only works on IE4. Search the http://www.macromedia.com/ site for details.</p>
		 * @param int $red <p>Value of red component</p>
		 * @param int $green <p>Value of green component</p>
		 * @param int $blue <p>Value of blue component</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.setbackground.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setbackground(int $red, int $green, int $blue): void {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SWFSound $sound
		 * @return SWFSoundInstance
		 * @link http://php.net/manual/en/swfmovie.startsound.php
		 * @see SWFMovie::stopSound()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function startSound(\SWFSound $sound): \SWFSoundInstance {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SWFSound $sound
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.stopsound.php
		 * @see SWFMovie::startSound()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function stopSound(\SWFSound $sound): void {}

		/**
		 * Streams a MP3 file
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Streams the given MP3 file <code>mp3file</code>.</p><p>This method is not very robust in dealing with oddities (can skip over an initial ID3 tag, but that's about it).</p><p>Note that the movie isn't smart enough to put enough frames in to contain the entire mp3 stream- you'll have to add (length of song &#42; frames per second) frames to get the entire stream in.</p>
		 * @param mixed $mp3file <p>Can be a file pointer returned by <code>fopen()</code> or the MP3 data, as a binary string.</p>
		 * @param float $skip <p>Number of seconds to skip.</p>
		 * @return int <p>Return number of frames.</p>
		 * @link http://php.net/manual/en/swfmovie.streammp3.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function streamMP3($mp3file, float $skip = 0): int {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfmovie.writeexports.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function writeExports(): void {}
	}

	/**
	 * <p>SWFPrebuiltClip.</p>
	 * @link http://php.net/manual/en/class.swfprebuiltclip.php
	 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
	 */
	class SWFPrebuiltClip {

		/**
		 * Returns a SWFPrebuiltClip object
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $file
		 * @return self
		 * @link http://php.net/manual/en/swfprebuiltclip.construct.php
		 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
		 */
		public function __construct($file) {}
	}

	/**
	 * <p>SWFShape.</p>
	 * @link http://php.net/manual/en/class.swfshape.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFShape {

		/**
		 * Creates a new shape object
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Created a new SWFShape object.</p>
		 * @return self
		 * @link http://php.net/manual/en/swfshape.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct() {}

		/**
		 * Adds a solid fill to the shape
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>SWFShape::addFill()</b> adds a solid fill to the shape's list of fill styles. <b>SWFShape::addFill()</b> accepts three different types of arguments.</p><p><code>red</code>, <code>green</code>, <code>blue</code> is a color (RGB mode).</p><p>The <code>bitmap</code> argument is an <b>SWFBitmap()</b> object. The <code>flags</code> argument can be one of the following values: SWFFILL_CLIPPED_BITMAP, SWFFILL_TILED_BITMAP, SWFFILL_LINEAR_GRADIENT or SWFFILL_RADIAL_GRADIENT. Default is SWFFILL_TILED_BITMAP for SWFBitmap and SWFFILL_LINEAR_GRADIENT for SWFGradient.</p><p>The <code>gradient</code> argument is an <b>SWFGradient()</b> object. The flags argument can be one of the following values : SWFFILL_RADIAL_GRADIENT or SWFFILL_LINEAR_GRADIENT. Default is SWFFILL_LINEAR_GRADIENT. I'm sure about this one. Really.</p><p><b>SWFShape::addFill()</b> returns an <b>SWFFill()</b> object for use with the <code>SWFShape::setLeftFill()</code> and <code>SWFShape::setRightFill()</code> functions described below.</p>
		 * @param int $red
		 * @param int $green
		 * @param int $blue
		 * @param int $alpha
		 * @return SWFFill
		 * @link http://php.net/manual/en/swfshape.addfill.php
		 * @see SWFShape::setLeftFill(), SWFShape::setRightFill()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addFill(int $red, int $green, int $blue, int $alpha = 255): \SWFFill {}

		/**
		 * Draws an arc of radius r centered at the current location, from angle startAngle to angle endAngle measured clockwise from 12 o'clock
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param float $r
		 * @param float $startAngle
		 * @param float $endAngle
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfshape.drawarc.php
		 * @see SWFShape::drawCircle()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function drawArc(float $r, float $startAngle, float $endAngle): void {}

		/**
		 * Draws a circle of radius r centered at the current location, in a counter-clockwise fashion
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param float $r
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfshape.drawcircle.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function drawCircle(float $r): void {}

		/**
		 * Draws a cubic bezier curve using the current position and the three given points as control points
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param float $bx
		 * @param float $by
		 * @param float $cx
		 * @param float $cy
		 * @param float $dx
		 * @param float $dy
		 * @return int
		 * @link http://php.net/manual/en/swfshape.drawcubic.php
		 * @see SWFShape::drawCubicTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function drawCubic(float $bx, float $by, float $cx, float $cy, float $dx, float $dy): int {}

		/**
		 * Draws a cubic bezier curve using the current position and the three given points as control points
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param float $bx
		 * @param float $by
		 * @param float $cx
		 * @param float $cy
		 * @param float $dx
		 * @param float $dy
		 * @return int
		 * @link http://php.net/manual/en/swfshape.drawcubicto.php
		 * @see SWFShape::drawCubic()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function drawCubicTo(float $bx, float $by, float $cx, float $cy, float $dx, float $dy): int {}

		/**
		 * Draws a curve (relative)
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfshape::drawcurve()</b> draws a quadratic curve (using the current line style,set by <code>swfshape::setline()</code>) from the current pen position to the relative position (<code>anchorx</code>,<code>anchory</code>) using relative control point (<code>controlx</code>,<code>controly</code>). That is, head towards the control point, then smoothly turn to the anchor point.</p><p>With 6 parameters, it draws a cubic bezier to point (x+<code>targetdx</code>, x+<code>targetdy</code>) with control points (x+<code>controldx</code>, y+<code>controldy</code>) and (x+<code>anchordx</code>, y+<code>anchordy</code>).</p>
		 * @param float $controldx
		 * @param float $controldy
		 * @param float $anchordx
		 * @param float $anchordy
		 * @param float $targetdx
		 * @param float $targetdy
		 * @return int
		 * @link http://php.net/manual/en/swfshape.drawcurve.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function drawCurve(float $controldx, float $controldy, float $anchordx, float $anchordy, float $targetdx = NULL, float $targetdy): int {}

		/**
		 * Draws a curve
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfshape::drawcurveto()</b> draws a quadratic curve (using the current line style, set by <code>swfshape::setline()</code>) from the current pen position to (<code>anchorx</code>,<code>anchory</code>) using (<code>controlx</code>,<code>controly</code>) as a control point. That is, head towards the control point, then smoothly turn to the anchor point.</p><p>With 6 parameters, it draws a cubic bezier to point (<code>targetx</code>, <code>targety</code>) with control points (<code>controlx</code>, <code>controly</code>) and (<code>anchorx</code>, <code>anchory</code>).</p>
		 * @param float $controlx
		 * @param float $controly
		 * @param float $anchorx
		 * @param float $anchory
		 * @param float $targetx
		 * @param float $targety
		 * @return int
		 * @link http://php.net/manual/en/swfshape.drawcurveto.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function drawCurveTo(float $controlx, float $controly, float $anchorx, float $anchory, float $targetx = NULL, float $targety): int {}

		/**
		 * Draws the first character in the given string into the shape using the glyph definition from the given font
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SWFFont $font
		 * @param string $character
		 * @param int $size
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfshape.drawglyph.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function drawGlyph(\SWFFont $font, string $character, int $size = NULL): void {}

		/**
		 * Draws a line (relative)
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfshape::drawline()</b> draws a line (using the current line style set by <code>swfshape::setline()</code>) from the current pen position to displacement (<code>dx</code>,<code>dy</code>).</p>
		 * @param float $dx
		 * @param float $dy
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfshape.drawline.php
		 * @see SWFShape::drawLineTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function drawLine(float $dx, float $dy): void {}

		/**
		 * Draws a line
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><code>swfshape::setrightfill()</code> draws a line (using the current line style, set by <code>swfshape::setline()</code>) from the current pen position to point (<code>x</code>,<code>y</code>) in the shape's coordinate space.</p>
		 * @param float $x
		 * @param float $y
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfshape.drawlineto.php
		 * @see SWFShape::drawLine()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function drawLineTo(float $x, float $y): void {}

		/**
		 * Moves the shape's pen (relative)
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><code>swfshape::setrightfill()</code> move the shape's pen from coordinates (current x,current y) to (current x + <code>dx</code>, current y + <code>dy</code>) in the shape's coordinate space.</p>
		 * @param float $dx
		 * @param float $dy
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfshape.movepen.php
		 * @see SWFShape::movePenTo()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function movePen(float $dx, float $dy): void {}

		/**
		 * Moves the shape's pen
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><code>swfshape::setrightfill()</code> move the shape's pen to (<code>x</code>,<code>y</code>) in the shape's coordinate space.</p>
		 * @param float $x
		 * @param float $y
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfshape.movepento.php
		 * @see SWFShape::movePen()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function movePenTo(float $x, float $y): void {}

		/**
		 * Sets left rasterizing color
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>What this nonsense is about is, every edge segment borders at most two fills. When rasterizing the object, it's pretty handy to know what those fills are ahead of time, so the swf format requires these to be specified.</p><p><b>swfshape::setleftfill()</b> sets the fill on the left side of the edge- that is, on the interior if you're defining the outline of the shape in a counter-clockwise fashion. The fill object is an SWFFill object returned from one of the addFill functions above.</p><p>This seems to be reversed when you're defining a shape in a morph, though. If your browser crashes, just try setting the fill on the other side.</p><p>Shortcut for <i>$swfshape-&gt;setleftfill($s-&gt;addfill($r, $g, $b [, $a]));</i>.</p>
		 * @param \SWFGradient $fill
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfshape.setleftfill.php
		 * @see SWFShape::setRightFill()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setLeftFill(\SWFGradient $fill): void {}

		/**
		 * Sets the shape's line style
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfshape::setline()</b> sets the shape's line style. <code>width</code> is the line's width. If <code>width</code> is 0, the line's style is removed (then, all other arguments are ignored). If <code>width</code> &gt; 0, then line's color is set to <code>red</code>, <code>green</code>, <code>blue</code>. Last parameter <code>a</code> is optional.</p><p>You must declare all line styles before you use them (see example).</p>
		 * @param \SWFShape $shape
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfshape.setline.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setLine(\SWFShape $shape): void {}

		/**
		 * Sets right rasterizing color
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Shortcut for <i>$swfshape-&gt;setrightfill($s-&gt;addfill($r, $g, $b [, $a]));</i>.</p>
		 * @param \SWFGradient $fill
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfshape.setrightfill.php
		 * @see SWFShape::setLeftFill()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setRightFill(\SWFGradient $fill): void {}
	}

	/**
	 * <p>SWFSound.</p>
	 * @link http://php.net/manual/en/class.swfsound.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFSound {

		/**
		 * Returns a new SWFSound object from given file
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $filename
		 * @param int $flags
		 * @return self
		 * @link http://php.net/manual/en/swfsound.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct(string $filename, int $flags = 0) {}
	}

	/**
	 * <p><b>SWFSoundInstance</b> objects are returned by the <code>SWFSprite::startSound()</code> and <code>SWFMovie::startSound()</code> methods.</p>
	 * @link http://php.net/manual/en/class.swfsoundinstance.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFSoundInstance {

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $point
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfsoundinstance.loopcount.php
		 * @see SWFSoundInstance::loopOutPoint()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function loopCount(int $point): void {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $point
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfsoundinstance.loopinpoint.php
		 * @see SWFSoundInstance::loopOutPoint()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function loopInPoint(int $point): void {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $point
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfsoundinstance.loopoutpoint.php
		 * @see SWFSoundInstance::loopInPoint()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function loopOutPoint(int $point): void {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfsoundinstance.nomultiple.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function noMultiple(): void {}
	}

	/**
	 * <p>An <b>SWFSprite</b> is also known as a "movie clip", this allows one to create objects which are animated in their own timelines. Hence, the sprite has most of the same methods as the movie.</p>
	 * @link http://php.net/manual/en/class.swfsprite.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFSprite {

		/**
		 * Creates a movie clip (a sprite)
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Creates a new SWFSprite object.</p>
		 * @return self
		 * @link http://php.net/manual/en/swfsprite.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct() {}

		/**
		 * Adds an object to a sprite
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfsprite::add()</b> adds a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b>, a <b>swfaction()</b> or a <b>swfsprite()</b> object.</p><p>For displayable types (<b>swfshape()</b>, <b>swfbutton()</b>, <b>swftext()</b>, <b>swfaction()</b> or <b>swfsprite()</b>), this returns a handle to the object in a display list.</p>
		 * @param object $object
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfsprite.add.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function add(object $object): void {}

		/**
		 * Labels frame
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $label
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfsprite.labelframe.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function labelFrame(string $label): void {}

		/**
		 * Moves to the next frame of the animation
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><code>swfsprite::setframes()</code> moves to the next frame of the animation.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfsprite.nextframe.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function nextFrame(): void {}

		/**
		 * Removes an object to a sprite
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfsprite::remove()</b> remove a <b>swfshape()</b>, a <b>swfbutton()</b>, a <b>swftext()</b>, a <b>swfaction()</b> or a <b>swfsprite()</b> object from the sprite.</p>
		 * @param object $object
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfsprite.remove.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function remove(object $object): void {}

		/**
		 * Sets the total number of frames in the animation
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swfsprite::setframes()</b> sets the total number of frames in the animation to <code>numberofframes</code>.</p>
		 * @param int $number
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfsprite.setframes.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setFrames(int $number): void {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SWFSound $sount
		 * @return SWFSoundInstance
		 * @link http://php.net/manual/en/swfsprite.startsound.php
		 * @see SWFSprite::stopSound()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function startSound(\SWFSound $sount): \SWFSoundInstance {}

		/**
		 * 
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SWFSound $sount
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfsprite.stopsound.php
		 * @see SWFSprite::startSound()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function stopSound(\SWFSound $sount): void {}
	}

	/**
	 * <p>SWFText.</p>
	 * @link http://php.net/manual/en/class.swftext.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFText {

		/**
		 * Creates a new SWFText object
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Creates a new SWFText object, fresh for manipulating.</p>
		 * @return self
		 * @link http://php.net/manual/en/swftext.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct() {}

		/**
		 * Draws a string
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftext::addstring()</b> draws the string <code>string</code> at the current pen (cursor) location. Pen is at the baseline of the text; i.e., ascending text is in the -y direction.</p>
		 * @param string $string
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftext.addstring.php
		 * @see SWFText::addUTF8String()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addString(string $string): void {}

		/**
		 * Writes the given text into this SWFText object at the current pen position, using the current font, height, spacing, and color
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $text
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftext.addutf8string.php
		 * @see SWFText::addString()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addUTF8String(string $text): void {}

		/**
		 * Returns the ascent of the current font at its current size, or 0 if not available
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swftext.getascent.php
		 * @see SWFText::getDescent()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getAscent(): float {}

		/**
		 * Returns the descent of the current font at its current size, or 0 if not available
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swftext.getdescent.php
		 * @see SWFText::getAscent()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getDescent(): float {}

		/**
		 * Returns the leading of the current font at its current size, or 0 if not available
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return float
		 * @link http://php.net/manual/en/swftext.getleading.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getLeading(): float {}

		/**
		 * Calculates the width of the given string in this text objects current font and size
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $string
		 * @return float
		 * @link http://php.net/manual/en/swftext.getutf8width.php
		 * @see SWFText::getWidth()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getUTF8Width(string $string): float {}

		/**
		 * Computes string's width
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Returns the rendered width of the <code>string</code> at the text object's current font, scale, and spacing settings.</p>
		 * @param string $string
		 * @return float
		 * @link http://php.net/manual/en/swftext.getwidth.php
		 * @see SWFText::getUTF8Width()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function getWidth(string $string): float {}

		/**
		 * Moves the pen
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftext::moveto()</b> moves the pen (or cursor, if that makes more sense) to (<code>x</code>,<code>y</code>) in text object's coordinate space. If either is zero, though, value in that dimension stays the same. Annoying, should be fixed.</p>
		 * @param float $x
		 * @param float $y
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftext.moveto.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function moveTo(float $x, float $y): void {}

		/**
		 * Sets the current text color
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Changes the current text color.</p>
		 * @param int $red <p>Value of red component</p>
		 * @param int $green <p>Value of green component</p>
		 * @param int $blue <p>Value of blue component</p>
		 * @param int $a <p>Value of alpha component</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftext.setcolor.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setColor(int $red, int $green, int $blue, int $a = 255): void {}

		/**
		 * Sets the current font
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftext::setfont()</b> sets the current font to <code>font</code>.</p>
		 * @param \SWFFont $font
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftext.setfont.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setFont(\SWFFont $font): void {}

		/**
		 * Sets the current font height
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftext::setheight()</b> sets the current font height to <code>height</code>. Default is 240.</p>
		 * @param float $height
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftext.setheight.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setHeight(float $height): void {}

		/**
		 * Sets the current font spacing
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftext::setspacing()</b> sets the current font spacing to <code>spacing</code>. Default is 1.0. 0 is all of the letters written at the same point. This doesn't really work that well because it inflates the advance across the letter, doesn't add the same amount of spacing between the letters. I should try and explain that better, prolly. Or just fix the damn thing to do constant spacing. This was really just a way to figure out how letter advances work, anyway.. So nyah.</p>
		 * @param float $spacing
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftext.setspacing.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setSpacing(float $spacing): void {}
	}

	/**
	 * <p>SWFTextField.</p>
	 * @link http://php.net/manual/en/class.swftextfield.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	class SWFTextField {

		/**
		 * Creates a text field object
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield()</b> creates a new text field object. Text Fields are less flexible than <b>swftext()</b> objects- they can't be rotated, scaled non-proportionally, or skewed, but they can be used as form entries, and they can use browser-defined fonts.</p><p>The optional flags change the text field's behavior. It has the following possibles values :</p><p>SWFTextField has the following methods : <code>swftextfield::setfont()</code>, <code>swftextfield::setbounds()</code>, <code>swftextfield::align()</code>, <code>swftextfield::setheight()</code>, <code>swftextfield::setleftmargin()</code>, <code>swftextfield::setrightmargin()</code>, <code>swftextfield::setmargins()</code>, <code>swftextfield::setindentation()</code>, <code>swftextfield::setlinespacing()</code>, <code>swftextfield::setcolor()</code>, <code>swftextfield::setname()</code> and <code>swftextfield::addstring()</code>.</p>
		 * @param int $flags
		 * @return self
		 * @link http://php.net/manual/en/swftextfield.construct.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function __construct(int $flags = NULL) {}

		/**
		 * Adds characters to a font that will be available within a textfield
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $chars
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.addchars.php
		 * @see SWFTextField::addString()
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addChars(string $chars): void {}

		/**
		 * Concatenates the given string to the text field
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><code>swftextfield::setname()</code> concatenates the string <code>string</code> to the text field.</p>
		 * @param string $string
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.addstring.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function addString(string $string): void {}

		/**
		 * Sets the text field alignment
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::align()</b> sets the text field alignment to <code>alignement</code>. Valid values for <code>alignement</code> are : SWFTEXTFIELD_ALIGN_LEFT, SWFTEXTFIELD_ALIGN_RIGHT, SWFTEXTFIELD_ALIGN_CENTER and SWFTEXTFIELD_ALIGN_JUSTIFY.</p>
		 * @param int $alignement
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.align.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function align(int $alignement): void {}

		/**
		 * Sets the text field width and height
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::setbounds()</b> sets the text field width to <code>width</code> and height to <code>height</code>. If you don't set the bounds yourself, Ming makes a poor guess at what the bounds are.</p>
		 * @param float $width
		 * @param float $height
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setbounds.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setBounds(float $width, float $height): void {}

		/**
		 * Sets the color of the text field
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::setcolor()</b> sets the color of the text field. Default is fully opaque black. Color is represented using RGB system.</p>
		 * @param int $red <p>Value of red component</p>
		 * @param int $green <p>Value of green component</p>
		 * @param int $blue <p>Value of blue component</p>
		 * @param int $a <p>Value of alpha component</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setcolor.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setColor(int $red, int $green, int $blue, int $a = 255): void {}

		/**
		 * Sets the text field font
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::setfont()</b> sets the text field font to the [browser-defined&#63;] <code>font</code> font.</p>
		 * @param \SWFFont $font
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setfont.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setFont(\SWFFont $font): void {}

		/**
		 * Sets the font height of this text field font
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::setheight()</b> sets the font height of this text field font to the given height <code>height</code>. Default is 240.</p>
		 * @param float $height
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setheight.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setHeight(float $height): void {}

		/**
		 * Sets the indentation of the first line
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::setindentation()</b> sets the indentation of the first line in the text field, to <code>width</code>.</p>
		 * @param float $width
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setindentation.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setIndentation(float $width): void {}

		/**
		 * Sets the left margin width of the text field
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::setleftmargin()</b> sets the left margin width of the text field to <code>width</code>. Default is 0.</p>
		 * @param float $width
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setleftmargin.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setLeftMargin(float $width): void {}

		/**
		 * Sets the line spacing of the text field
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::setlinespacing()</b> sets the line spacing of the text field to the height of <code>height</code>. Default is 40.</p>
		 * @param float $height
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setlinespacing.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setLineSpacing(float $height): void {}

		/**
		 * Sets the margins width of the text field
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::setmargins()</b> set both margins at once, for the man on the go.</p>
		 * @param float $left
		 * @param float $right
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setmargins.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setMargins(float $left, float $right): void {}

		/**
		 * Sets the variable name
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::setname()</b> sets the variable name of this text field to <code>name</code>, for form posting and action scripting purposes.</p>
		 * @param string $name
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setname.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setName(string $name): void {}

		/**
		 * Sets the padding of this textfield
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param float $padding
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setpadding.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setPadding(float $padding): void {}

		/**
		 * Sets the right margin width of the text field
		 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>swftextfield::setrightmargin()</b> sets the right margin width of the text field to <code>width</code>. Default is 0.</p>
		 * @param float $width
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swftextfield.setrightmargin.php
		 * @since PHP 5 < 5.3.0, PECL ming SVN
		 */
		public function setRightMargin(float $width): void {}
	}

	/**
	 * <p>SWFVideoStream.</p>
	 * @link http://php.net/manual/en/class.swfvideostream.php
	 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
	 */
	class SWFVideoStream {

		/**
		 * Returns a SWFVideoStream object
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $file
		 * @return self
		 * @link http://php.net/manual/en/swfvideostream.construct.php
		 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
		 */
		public function __construct(string $file = NULL) {}

		/**
		 * Returns the number of frames in the video
		 * <p>This function returns the number of video-frames of a SWFVideoStream.</p>
		 * @return int <p>Returns the number of frames, as an integer</p>
		 * @link http://php.net/manual/en/swfvideostream.getnumframes.php
		 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
		 */
		public function getNumFrames(): int {}

		/**
		 * Sets video dimension
		 * <p>Sets the width and height for streamed videos.</p>
		 * @param int $x <p>Width in pixels.</p>
		 * @param int $y <p>Height in pixels.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/swfvideostream.setdimension.php
		 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
		 */
		public function setDimension(int $x, int $y): void {}
	}

	/**
	 * Returns the action flag for keyPress(char)
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $char
	 * @return int
	 * @link http://php.net/manual/en/function.ming-keypress.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	function ming_keypress(string $char): int {}

	/**
	 * Set cubic threshold
	 * <p>Sets the threshold error for drawing cubic beziers.</p>
	 * @param int $threshold <p>The Threshold. Lower is more accurate, hence larger file size.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ming-setcubicthreshold.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7, PECL ming SVN
	 */
	function ming_setcubicthreshold(int $threshold): void {}

	/**
	 * Set the global scaling factor
	 * <p>Sets the scale of the output SWF. Inside the SWF file, coordinates are measured in TWIPS, rather than PIXELS. There are 20 TWIPS in 1 pixel.</p>
	 * @param float $scale <p>The scale to be set.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ming-setscale.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7, PECL ming SVN
	 */
	function ming_setscale(float $scale): void {}

	/**
	 * Sets the SWF output compression
	 * <p>Sets the SWF output compression level.</p>
	 * @param int $level <p>The new compression level. Should be a value between 1 and 9 inclusive.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ming-setswfcompression.php
	 * @since PHP 5.2.1-5.3.0, PHP 7, PECL ming SVN
	 */
	function ming_setswfcompression(int $level): void {}

	/**
	 * Use constant pool
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $use
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ming-useconstants.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	function ming_useconstants(int $use): void {}

	/**
	 * Sets the SWF version
	 * <p>Sets the SWF version to be used in the movie. This affect the bahaviour of Action Script.</p>
	 * @param int $version <p>SWF version to use.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ming-useswfversion.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ming SVN
	 */
	function ming_useswfversion(int $version): void {}

	define('MING_NEW', null);

	define('MING_ZLIB', null);

	define('SWFACTION_DATA', null);

	define('SWFACTION_ENTERFRAME', null);

	define('SWFACTION_KEYDOWN', null);

	define('SWFACTION_KEYUP', null);

	define('SWFACTION_MOUSEDOWN', null);

	define('SWFACTION_MOUSEMOVE', null);

	define('SWFACTION_MOUSEUP', null);

	define('SWFACTION_ONLOAD', null);

	define('SWFACTION_UNLOAD', null);

	define('SWFBUTTON_DOWN', null);

	define('SWFBUTTON_DRAGOUT', null);

	define('SWFBUTTON_DRAGOVER', null);

	define('SWFBUTTON_HIT', null);

	define('SWFBUTTON_MOUSEDOWN', null);

	define('SWFBUTTON_MOUSEOUT', null);

	define('SWFBUTTON_MOUSEOVER', null);

	define('SWFBUTTON_MOUSEUP', null);

	define('SWFBUTTON_MOUSEUPOUTSIDE', null);

	define('SWFBUTTON_OVER', null);

	define('SWFBUTTON_UP', null);

	define('SWFFILL_CLIPPED_BITMAP', null);

	define('SWFFILL_LINEAR_GRADIENT', null);

	define('SWFFILL_RADIAL_GRADIENT', null);

	define('SWFFILL_TILED_BITMAP', null);

	define('SWFTEXTFIELD_ALIGN_CENTER', null);

	define('SWFTEXTFIELD_ALIGN_JUSTIFY', null);

	define('SWFTEXTFIELD_ALIGN_LEFT', null);

	define('SWFTEXTFIELD_ALIGN_RIGHT', null);

	define('SWFTEXTFIELD_DRAWBOX', null);

	define('SWFTEXTFIELD_HASLENGTH', null);

	define('SWFTEXTFIELD_HTML', null);

	define('SWFTEXTFIELD_MULTILINE', null);

	define('SWFTEXTFIELD_NOEDIT', null);

	define('SWFTEXTFIELD_NOSELECT', null);

	define('SWFTEXTFIELD_PASSWORD', null);

	define('SWFTEXTFIELD_WORDWRAP', null);

}
