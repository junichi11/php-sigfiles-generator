<?php



namespace UI {

	/**
	 * <p>An Area represents a canvas which can be used to draw, and respond to mouse and key events.</p>
	 * @link http://php.net/manual/en/class.ui-area.php
	 * @since UI 0.9.9
	 */
	class Area extends \UI\Control {

		/**
		 * @var int <p>Shall be set in the modifiers passed to key and mouse events when the CTRL key is active</p>
		 * @link http://php.net/manual/en/class.ui-area.php
		 */
		const Ctrl = null;

		/**
		 * @var int <p>Shall be set in the modifiers passed to key and mouse events when the ALT key is active</p>
		 * @link http://php.net/manual/en/class.ui-area.php
		 */
		const Alt = null;

		/**
		 * @var int <p>Shall be set in the modifiers passed to key and mouse events when the SHIFT key is active</p>
		 * @link http://php.net/manual/en/class.ui-area.php
		 */
		const Shift = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-area.php
		 */
		const Super = null;

		/**
		 * @var int <p>Shall be set in the modifiers passed to key and mouse events</p>
		 * @link http://php.net/manual/en/class.ui-area.php
		 */
		const Down = null;

		/**
		 * @var int <p>Shall be set in the modifiers passed to key and mouse events</p>
		 * @link http://php.net/manual/en/class.ui-area.php
		 */
		const Up = null;

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Draw Callback
		 * <p>Shall be invoked when this Area requires redrawing</p>
		 * @param \UI\Draw\Pen $pen <p>A Pen suitable for drawing in this Area</p>
		 * @param \UI\Size $areaSize <p>The size of the Area</p>
		 * @param \UI\Point $clipPoint <p>The clip point of the Area</p>
		 * @param \UI\Size $clipSize <p>The clip size of the Area</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-area.ondraw.php
		 * @since UI 0.9.9
		 */
		protected function onDraw(\UI\Draw\Pen $pen, \UI\Size $areaSize, \UI\Point $clipPoint, \UI\Size $clipSize) {}

		/**
		 * Key Callback
		 * <p>Shall be executed on key events</p>
		 * @param string $key <p>The key pressed</p>
		 * @param int $ext <p>The extended key pressed</p>
		 * @param int $flags <p>Event modifiers</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-area.onkey.php
		 * @since UI 0.9.9
		 */
		protected function onKey(string $key, int $ext, int $flags) {}

		/**
		 * Mouse Callback
		 * <p>Shall be executed on mouse events</p>
		 * @param \UI\Point $areaPoint <p>The co-ordinates of the event</p>
		 * @param \UI\Size $areaSize <p>The size of the area of the event</p>
		 * @param int $flags <p>Event modifiers</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-area.onmouse.php
		 * @since UI 0.9.9
		 */
		protected function onMouse(\UI\Point $areaPoint, \UI\Size $areaSize, int $flags) {}

		/**
		 * Redraw Area
		 * <p>Requests that this Area is redrawn</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-area.redraw.php
		 * @since UI 0.9.9
		 */
		public function redraw() {}

		/**
		 * Area Scroll
		 * <p>Scroll this Area</p>
		 * @param \UI\Point $point <p>The point to scroll to</p>
		 * @param \UI\Size $size <p>The size of the scroll pane</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-area.scrollto.php
		 * @since UI 0.9.9
		 */
		public function scrollTo(\UI\Point $point, \UI\Size $size) {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Size
		 * <p>Sets the size of this Area</p>
		 * @param \UI\Size $size <p>The new size</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-area.setsize.php
		 * @since UI 0.9.9
		 */
		public function setSize(\UI\Size $size) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>This is the closed base class for all UI Controls.</p>
	 * @link http://php.net/manual/en/class.ui-control.php
	 * @since UI 0.9.9
	 */
	final class Control {

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

}

namespace UI\Controls {

	/**
	 * <p>A Box allows the arrangement of other controls</p>
	 * @link http://php.net/manual/en/class.ui-controls-box.php
	 * @since UI 0.9.9
	 */
	class Box extends \UI\Control {

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-controls-box.php
		 */
		const Vertical = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-controls-box.php
		 */
		const Horizontal = null;

		/**
		 * @var mixed <p>Contains controls, should not be manipulated directly</p>
		 * @link http://php.net/manual/en/class.ui-controls-box.php#ui-controls-box.props.controls
		 */
		protected $controls;

		/**
		 * Construct a new Box
		 * <p>Shall construct a new box</p>
		 * @param int $orientation <p>Box::Horizontal or Box::Vertical</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-box.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(int $orientation = UI\Controls\Box::Horizontal) {}

		/**
		 * Append Control
		 * <p>Shall append the given control to this Box</p>
		 * @param \Control $control <p>The control to append</p>
		 * @param bool $stretchy <p>Set true to stretch the control</p>
		 * @return int <p>Shall return the index of the appended control, may be 0</p>
		 * @link http://php.net/manual/en/ui-controls-box.append.php
		 * @since UI 0.9.9
		 */
		public function append(\Control $control, bool $stretchy = FALSE): int {}

		/**
		 * Delete Control
		 * <p>Shall delete the control at the given index from this Box</p>
		 * @param int $index <p>The index of the control to delete</p>
		 * @return bool <p>Indication of success</p>
		 * @link http://php.net/manual/en/ui-controls-box.delete.php
		 * @since UI 0.9.9
		 */
		public function delete(int $index): bool {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Orientation
		 * <p>Shall retrieve the orientation of this Box</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-controls-box.getorientation.php
		 * @since UI 0.9.9
		 */
		public function getOrientation(): int {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Padding Detection
		 * <p>Shall detect if padding is enabled on this Box</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-controls-box.ispadded.php
		 * @since UI 0.9.9
		 */
		public function isPadded(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Set Padding
		 * <p>Shall enable or disable padding on this Box</p>
		 * @param bool $padded
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-box.setpadded.php
		 * @since UI 0.9.9
		 */
		public function setPadded(bool $padded) {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>Represents a labelled clickable button</p>
	 * @link http://php.net/manual/en/class.ui-controls-button.php
	 * @since UI 0.9.9
	 */
	class Button extends \UI\Control {

		/**
		 * Construct a new Button
		 * <p>Shall construct a new Button</p>
		 * @param string $text <p>The text (label) for this Button</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-button.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(string $text) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Text
		 * <p>Shall retrieve the text (label) for this Button</p>
		 * @return string <p>The current text (label)</p>
		 * @link http://php.net/manual/en/ui-controls-button.gettext.php
		 * @since UI 0.9.9
		 */
		public function getText(): string {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Click Handler
		 * <p>Shall be executed when this Button is clicked</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-button.onclick.php
		 * @since UI 0.9.9
		 */
		protected function onClick() {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Text
		 * <p>Shall set the text (label) for this Button</p>
		 * @param string $text <p>The new text (label)</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-button.settext.php
		 * @since UI 0.9.9
		 */
		public function setText(string $text) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Check is a labelled checkable box</p>
	 * @link http://php.net/manual/en/class.ui-controls-check.php
	 * @since UI 0.9.9
	 */
	class Check extends \UI\Control {

		/**
		 * Construct a new Check
		 * <p>Shall construct a new Check</p>
		 * @param string $text <p>The text (label) for the Check box</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-check.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(string $text) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Text
		 * <p>Shall return the text (label) for this Check</p>
		 * @return string <p>The current text (label)</p>
		 * @link http://php.net/manual/en/ui-controls-check.gettext.php
		 * @since UI 0.9.9
		 */
		public function getText(): string {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Checked Detection
		 * <p>Shall detect the status of this Check</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-controls-check.ischecked.php
		 * @since UI 0.9.9
		 */
		public function isChecked(): bool {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Toggle Callback
		 * <p>Shall be executed when the status of this Check is changed</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-check.ontoggle.php
		 * @since UI 0.9.9
		 */
		protected function onToggle() {}

		/**
		 * Set Checked
		 * <p>Shall change the status of this Check</p>
		 * @param bool $checked <p>The new status</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-check.setchecked.php
		 * @since UI 0.9.9
		 */
		public function setChecked(bool $checked) {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Text
		 * <p>Shall set the text (label) for this Check</p>
		 * @param string $text <p>The new text (label)</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-check.settext.php
		 * @since UI 0.9.9
		 */
		public function setText(string $text) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Color Button is a button which displays a color picker when clicked</p>
	 * @link http://php.net/manual/en/class.ui-controls-colorbutton.php
	 * @since UI 0.9.9
	 */
	class ColorButton extends \UI\Control {

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Color
		 * <p>Shall retrieve the currently selected Color</p>
		 * @return UI\Color
		 * @link http://php.net/manual/en/ui-controls-colorbutton.getcolor.php
		 * @since UI 0.9.9
		 */
		public function getColor(): \UI\Color {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Change Handler
		 * <p>Shall be executed when the selected Color is changed</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-colorbutton.onchange.php
		 * @since UI 0.9.9
		 */
		protected function onChange() {}

		/**
		 * Set Color
		 * <p>Shall set the currently selected Color</p>
		 * @param \UI\Draw\Color $color <p>The new color</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-colorbutton.setcolor.php
		 * @since UI 0.9.9
		 */
		public function setColor(\UI\Draw\Color $color) {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Combo control represents a list of options, like the familiar select HTML element.</p>
	 * @link http://php.net/manual/en/class.ui-controls-combo.php
	 * @since UI 0.9.9
	 */
	class Combo extends \UI\Control {

		/**
		 * Append Option
		 * <p>Append an option to this Combo</p>
		 * @param string $text <p>The text for the new option</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-combo.append.php
		 * @since UI 0.9.9
		 */
		public function append(string $text) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Selected Option
		 * <p>Shall retrieve the index of the option selected in this Combo</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-controls-combo.getselected.php
		 * @since UI 0.9.9
		 */
		public function getSelected(): int {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Selected Handler
		 * <p>Shall be executed when an option is selected in this Combo</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-combo.onselected.php
		 * @since UI 0.9.9
		 */
		protected function onSelected() {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Selected Option
		 * <p>Shall set the currently selected option in this Combo</p>
		 * @param int $index <p>The index of the option to select</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-combo.setselected.php
		 * @since UI 0.9.9
		 */
		public function setSelected(int $index) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>An Editable Combo is a Combo which allows the user to enter custom options</p>
	 * @link http://php.net/manual/en/class.ui-controls-editablecombo.php
	 * @since UI 0.9.9
	 */
	class EditableCombo extends \UI\Control {

		/**
		 * Append Option
		 * <p>Shall append a new option to this Editable Combo</p>
		 * @param string $text <p>The text for the new option</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-editablecombo.append.php
		 * @since UI 0.9.9
		 */
		public function append(string $text) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Text
		 * <p>Get the value of the currently selected option in this Editable Combo</p>
		 * @return string
		 * @link http://php.net/manual/en/ui-controls-editablecombo.gettext.php
		 * @since UI 0.9.9
		 */
		public function getText(): string {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Change Handler
		 * <p>Shall be executed when the value of this Editable Combobox changes</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-editablecombo.onchange.php
		 * @since UI 0.9.9
		 */
		protected function onChange() {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Text
		 * <p>Shall set the text of the currently selected option in this Editable Combo</p>
		 * @param string $text <p>The new text</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-editablecombo.settext.php
		 * @since UI 0.9.9
		 */
		public function setText(string $text) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>An Entry is a text entry control, suitable for entering plain text, passwords, or search terms.</p>
	 * @link http://php.net/manual/en/class.ui-controls-entry.php
	 * @since UI 0.9.9
	 */
	class Entry extends \UI\Control {

		/**
		 * @var int <p>A normal single line entry</p>
		 * @link http://php.net/manual/en/class.ui-controls-entry.php
		 */
		const Normal = null;

		/**
		 * @var int <p>A password entry</p>
		 * @link http://php.net/manual/en/class.ui-controls-entry.php
		 */
		const Password = null;

		/**
		 * @var int <p>A search entry</p>
		 * @link http://php.net/manual/en/class.ui-controls-entry.php
		 */
		const Search = null;

		/**
		 * Construct a new Entry
		 * <p>Construct a new entry of the given type</p>
		 * @param int $type <p>Entry::Normal, Entry::Password, or Entry::Search</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-entry.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(int $type = UI\Controls\Entry::Normal) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Text
		 * <p>Shall return the current text from this Entry</p>
		 * @return string <p>The current text</p>
		 * @link http://php.net/manual/en/ui-controls-entry.gettext.php
		 * @since UI 0.9.9
		 */
		public function getText(): string {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Detect Read Only
		 * <p>Shall detect if this Entry is read only</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-controls-entry.isreadonly.php
		 * @since UI 0.9.9
		 */
		public function isReadOnly(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Change Handler
		 * <p>Shall be executed when the text in this Entry changes</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-entry.onchange.php
		 * @since UI 0.9.9
		 */
		protected function onChange() {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Read Only
		 * <p>Shall enable or disable read only for this Entry</p>
		 * @param bool $readOnly
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-entry.setreadonly.php
		 * @since UI 0.9.9
		 */
		public function setReadOnly(bool $readOnly) {}

		/**
		 * Set Text
		 * <p>Shall set the text for this Entry</p>
		 * @param string $text <p>The new text</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-entry.settext.php
		 * @since UI 0.9.9
		 */
		public function setText(string $text) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Form is a control which allows the arrangement of other controls into a familiar layout (the form).</p>
	 * @link http://php.net/manual/en/class.ui-controls-form.php
	 * @since UI 0.9.9
	 */
	class Form extends \UI\Control {

		/**
		 * @var mixed <p>Contains controls, should not be manipulated directly</p>
		 * @link http://php.net/manual/en/class.ui-controls-form.php#ui-controls-form.props.controls
		 */
		protected $controls;

		/**
		 * Append Control
		 * <p>Shall append the control to the form, and set the label</p>
		 * @param string $label <p>The text for the label</p>
		 * @param \UI\Control $control <p>A control</p>
		 * @param bool $stretchy <p>Should be set true to stretch the control</p>
		 * @return int <p>Shall return the index of the appended control, may be 0</p>
		 * @link http://php.net/manual/en/ui-controls-form.append.php
		 * @since UI 0.9.9
		 */
		public function append(string $label, \UI\Control $control, bool $stretchy = FALSE): int {}

		/**
		 * Delete Control
		 * <p>Shall delete the control at the given index in this Form</p>
		 * @param int $index <p>The index of the control to remove</p>
		 * @return bool <p>Indication of succcess</p>
		 * @link http://php.net/manual/en/ui-controls-form.delete.php
		 * @since UI 0.9.9
		 */
		public function delete(int $index): bool {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Padding Detection
		 * <p>Shall detect if padding is enabled on this Form</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-controls-form.ispadded.php
		 * @since UI 0.9.9
		 */
		public function isPadded(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Set Padding
		 * <p>Shall enable or disable padding on this Form</p>
		 * @param bool $padded
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-form.setpadded.php
		 * @since UI 0.9.9
		 */
		public function setPadded(bool $padded) {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Grid is a control which is allows the arrangement of children into a grid</p>
	 * @link http://php.net/manual/en/class.ui-controls-grid.php
	 * @since UI 0.9.9
	 */
	class Grid extends \UI\Control {

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-controls-grid.php
		 */
		const Fill = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-controls-grid.php
		 */
		const Start = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-controls-grid.php
		 */
		const Center = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-controls-grid.php
		 */
		const End = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-controls-grid.php
		 */
		const Leading = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-controls-grid.php
		 */
		const Top = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-controls-grid.php
		 */
		const Trailing = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-controls-grid.php
		 */
		const Bottom = null;

		/**
		 * @var mixed <p>Contains controls, should not be manipulated directly</p>
		 * @link http://php.net/manual/en/class.ui-controls-grid.php#ui-controls-grid.props.controls
		 */
		protected $controls;

		/**
		 * Append Control
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \UI\Control $control <p>The Control to append</p>
		 * @param int $left
		 * @param int $top
		 * @param int $xspan
		 * @param int $yspan
		 * @param bool $hexpand
		 * @param int $halign
		 * @param bool $vexpand
		 * @param int $valign
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-grid.append.php
		 * @since UI 0.9.9
		 */
		public function append(\UI\Control $control, int $left, int $top, int $xspan, int $yspan, bool $hexpand, int $halign, bool $vexpand, int $valign) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Padding Detection
		 * <p>Shall detect if padding is enabled on this Grid</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-controls-grid.ispadded.php
		 * @since UI 0.9.9
		 */
		public function isPadded(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Set Padding
		 * <p>Shall enable or disable padding for this Grid</p>
		 * @param bool $padding
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-grid.setpadded.php
		 * @since UI 0.9.9
		 */
		public function setPadded(bool $padding) {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Group is a titled container for child controls</p>
	 * @link http://php.net/manual/en/class.ui-controls-group.php
	 * @since UI 0.9.9
	 */
	class Group extends \UI\Control {

		/**
		 * @var mixed <p>Contains controls, should not be manipulated directly</p>
		 * @link http://php.net/manual/en/class.ui-controls-group.php#ui-controls-group.props.controls
		 */
		protected $controls;

		/**
		 * Construct a new Group
		 * <p>Shall construct a new Group with the given title</p>
		 * @param string $title <p>The text for the title label</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-group.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(string $title) {}

		/**
		 * Append Control
		 * <p>Shall append a control to this Group</p>
		 * @param \UI\Control $control <p>The control to append</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-group.append.php
		 * @since No version information available, might only be in Git
		 */
		public function append(\UI\Control $control) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Title
		 * <p>Shall return the current title for this Group</p>
		 * @return string <p>The current title</p>
		 * @link http://php.net/manual/en/ui-controls-group.gettitle.php
		 * @since UI 0.9.9
		 */
		public function getTitle(): string {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Margin Detection
		 * <p>Shall detect if this Group has a margin</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-controls-group.hasmargin.php
		 * @since UI 0.9.9
		 */
		public function hasMargin(): bool {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Set Margin
		 * <p>Shall enable or disable margins for this Group</p>
		 * @param bool $margin
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-group.setmargin.php
		 * @since UI 0.9.9
		 */
		public function setMargin(bool $margin) {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Title
		 * <p>Shall set the title for this Group</p>
		 * @param string $title <p>The text for the new title</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-group.settitle.php
		 * @since UI 0.9.9
		 */
		public function setTitle(string $title) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Label is a single line of text, meant to identify, for the user, some element of the interface.</p>
	 * @link http://php.net/manual/en/class.ui-controls-label.php
	 * @since UI 0.9.9
	 */
	class Label extends \UI\Control {

		/**
		 * Construct a new Label
		 * <p>Shall construct a new Label</p>
		 * @param string $text <p>The text for this label</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-label.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(string $text) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Text
		 * <p>Shall return the current text for this Label</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/ui-controls-label.gettext.php
		 * @since UI 0.9.9
		 */
		public function getText(): string {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Text
		 * <p>Shall set the text for this Label</p>
		 * @param string $text <p>The new text</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-label.settext.php
		 * @since UI 0.9.9
		 */
		public function setText(string $text) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Multiline Entry is a text entry control able to hold multiple lines of text, with or without wrapping.</p>
	 * @link http://php.net/manual/en/class.ui-controls-multilineentry.php
	 * @since UI 0.9.9
	 */
	class MultilineEntry extends \UI\Control {

		/**
		 * @var int <p>Allow lines to wrap</p>
		 * @link http://php.net/manual/en/class.ui-controls-multilineentry.php
		 */
		const Wrap = null;

		/**
		 * @var int <p>Do not allow lines to wrap</p>
		 * @link http://php.net/manual/en/class.ui-controls-multilineentry.php
		 */
		const NoWrap = null;

		/**
		 * Construct a new Multiline Entry
		 * <p>Shall construct a new Multiline Entry of the given type</p>
		 * @param int $type <p>MultilineEntry::Wrap or MultilineEntry::NoWrap</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-multilineentry.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(int $type = NULL) {}

		/**
		 * Append Text
		 * <p>Shall append the given text to the text in this Multiline Entry</p>
		 * @param string $text <p>The text to append</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-multilineentry.append.php
		 * @since UI 0.9.9
		 */
		public function append(string $text) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Text
		 * <p>Shall return the text in this Multiline Entry</p>
		 * @return string
		 * @link http://php.net/manual/en/ui-controls-multilineentry.gettext.php
		 * @since UI 0.9.9
		 */
		public function getText(): string {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Read Only Detection
		 * <p>Shall detect if this Multiline Entry is read only</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-controls-multilineentry.isreadonly.php
		 * @since UI 0.9.9
		 */
		public function isReadOnly(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Change Handler
		 * <p>Shall be executed when the text in this Multiline Entry is changed</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-multilineentry.onchange.php
		 * @since UI 0.9.9
		 */
		protected function onChange() {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Read Only
		 * <p>Shall enable or disable read only on this Multiline Entry</p>
		 * @param bool $readOnly
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-multilineentry.setreadonly.php
		 * @since UI 0.9.9
		 */
		public function setReadOnly(bool $readOnly) {}

		/**
		 * Set Text
		 * <p>Shall set the text in this Multiline Entry</p>
		 * @param string $text <p>The new text</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-multilineentry.settext.php
		 * @since UI 0.9.9
		 */
		public function setText(string $text) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Picker represents a button which when clicked presents a native Date/Time/DateTime Picker interface to the user.</p>
	 * @link http://php.net/manual/en/class.ui-controls-picker.php
	 * @since UI 0.9.9
	 */
	class Picker extends \UI\Control {

		/**
		 * @var int <p>A Date Picker</p>
		 * @link http://php.net/manual/en/class.ui-controls-picker.php
		 */
		const Date = null;

		/**
		 * @var int <p>A Time Picker</p>
		 * @link http://php.net/manual/en/class.ui-controls-picker.php
		 */
		const Time = null;

		/**
		 * @var int <p>A Date and Time Picker</p>
		 * @link http://php.net/manual/en/class.ui-controls-picker.php
		 */
		const DateTime = null;

		/**
		 * Construct a new Picker
		 * <p>Construct a new Picker of the given type</p>
		 * @param int $type <p>Picker::Date, Picker::Time, or Picker::DateTime</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-picker.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(int $type = UI\Controls\Picker::Date) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Progress control is a familiar Progress bar: It represents progress as a percentage, with a possible range of 0 to 100 (inclusive).</p>
	 * @link http://php.net/manual/en/class.ui-controls-progress.php
	 * @since UI 0.9.9
	 */
	class Progress extends \UI\Control {

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Get Value
		 * <p>Shall retrieve the current value of this Progress bar</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-controls-progress.getvalue.php
		 * @since UI 0.9.9
		 */
		public function getValue(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Value
		 * <p>Shall set the value for this Progress bar</p>
		 * @param int $value <p>An integer between 0 and 100 (inclusive)</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-progress.setvalue.php
		 * @since UI 0.9.9
		 */
		public function setValue(int $value) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Radio is similar to the radio input type familiar from HTML</p>
	 * @link http://php.net/manual/en/class.ui-controls-radio.php
	 * @since UI 0.9.9
	 */
	class Radio extends \UI\Control {

		/**
		 * Append Option
		 * <p>Shall append a new option to this Radio</p>
		 * @param string $text <p>The text (label) for the option</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-radio.append.php
		 * @since UI 0.9.9
		 */
		public function append(string $text) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Selected Option
		 * <p>Shall retrieve the index of the currently selected option in this Radio</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-controls-radio.getselected.php
		 * @since UI 0.9.9
		 */
		public function getSelected(): int {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Selected Handler
		 * <p>Shall be executed when the option selected in this Radio changes</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-radio.onselected.php
		 * @since UI 0.9.9
		 */
		protected function onSelected() {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Selected Option
		 * <p>Shall set the currently selected option in this Radio</p>
		 * @param int $index <p>The index of the option to select</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-radio.setselected.php
		 * @since UI 0.9.9
		 */
		public function setSelected(int $index) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Separator represents a control separator, it has no other function.</p>
	 * @link http://php.net/manual/en/class.ui-controls-separator.php
	 * @since UI 0.9.9
	 */
	class Separator extends \UI\Control {

		/**
		 * @var int <p>A Horizontal Separator</p>
		 * @link http://php.net/manual/en/class.ui-controls-separator.php
		 */
		const Horizontal = null;

		/**
		 * @var int <p>A Vertical Separator</p>
		 * @link http://php.net/manual/en/class.ui-controls-separator.php
		 */
		const Vertical = null;

		/**
		 * Construct a new Separator
		 * <p>Shall construct a new Separator of the given type</p>
		 * @param int $type <p>Separator::Horizonal or Separator::Vertical</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-separator.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(int $type = UI\Controls\Separator::Horizontal) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Slider is a control which represents a range, and a current value in the range. The sliding element of the control (sometimes called the "thumb") reflects the value, and can be adjusted within the range.</p>
	 * @link http://php.net/manual/en/class.ui-controls-slider.php
	 * @since UI 0.9.9
	 */
	class Slider extends \UI\Control {

		/**
		 * Construct a new Slider
		 * <p>Construct a new Slider with the given range</p>
		 * @param int $min <p>The minimum allowed value</p>
		 * @param int $max <p>The maximum allowed value</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-slider.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(int $min, int $max) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Get Value
		 * <p>Get the value from this Slider</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-controls-slider.getvalue.php
		 * @since UI 0.9.9
		 */
		public function getValue(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Change Handler
		 * <p>Shall be executed when the value of this Slider changes</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-slider.onchange.php
		 * @since UI 0.9.9
		 */
		protected function onChange() {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Value
		 * <p>Shall set the value for this Slider</p>
		 * @param int $value <p>The new value</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-slider.setvalue.php
		 * @since UI 0.9.9
		 */
		public function setValue(int $value) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Spin box is a text box with an up-down control which changes the integer value in the box, within a defined range</p>
	 * @link http://php.net/manual/en/class.ui-controls-spin.php
	 * @since UI 0.9.9
	 */
	class Spin extends \UI\Control {

		/**
		 * Construct a new Spin
		 * <p>Constructs a new Spin with the given range</p>
		 * @param int $min <p>The minimum value allowed</p>
		 * @param int $max <p>The maximum value allowed</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-controls-spin.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(int $min, int $max) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Get Value
		 * <p>Get the value in this Spin</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-controls-spin.getvalue.php
		 * @since UI 0.9.9
		 */
		public function getValue(): int {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Change Handler
		 * <p>Shall be executed when the value in this Spin changes</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-spin.onchange.php
		 * @since UI 0.9.9
		 */
		protected function onChange() {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Value
		 * <p>Set the value in this Spin</p>
		 * @param int $value <p>The new value</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-spin.setvalue.php
		 * @since UI 0.9.9
		 */
		public function setValue(int $value) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

	/**
	 * <p>A Tab can contain many pages of Controls, each with a title, each selectable by the user.</p>
	 * @link http://php.net/manual/en/class.ui-controls-tab.php
	 * @since UI 0.9.9
	 */
	class Tab extends \UI\Control {

		/**
		 * @var mixed <p>Contains controls, should not be manipulated directly</p>
		 * @link http://php.net/manual/en/class.ui-controls-tab.php#ui-controls-tab.props.controls
		 */
		protected $controls;

		/**
		 * Append Page
		 * <p>Append a new page to this Tab</p>
		 * @param string $name <p>The name for the new page</p>
		 * @param \UI\Control $control <p>The control for the new page</p>
		 * @return int <p>Shall return the index of the appended control, may be 0</p>
		 * @link http://php.net/manual/en/ui-controls-tab.append.php
		 * @since UI 0.9.9
		 */
		public function append(string $name, \UI\Control $control): int {}

		/**
		 * Delete Page
		 * <p>Shall remove the selected page from this Tab</p>
		 * @param int $index <p>The index of the page to remove</p>
		 * @return bool <p>Indication of success</p>
		 * @link http://php.net/manual/en/ui-controls-tab.delete.php
		 * @since UI 0.9.9
		 */
		public function delete(int $index): bool {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Margin Detection
		 * <p>Shall detect if the given page has a margin.</p>
		 * @param int $page <p>The index of the page</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-controls-tab.hasmargin.php
		 * @since UI 0.9.9
		 */
		public function hasMargin(int $page): bool {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Insert Page
		 * <p>Shall insert a new page into this Tab</p>
		 * @param string $name <p>The name for the new page</p>
		 * @param int $page <p>The index to perform the insertion before</p>
		 * @param \UI\Control $control <p>The control for the new page</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-tab.insertat.php
		 * @since UI 0.9.9
		 */
		public function insertAt(string $name, int $page, \UI\Control $control) {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Page Count
		 * <p>Shall return the number of pages in this Tab</p>
		 * @return int <p>The number of pages in this Tab</p>
		 * @link http://php.net/manual/en/ui-controls-tab.pages.php
		 * @since UI 0.9.9
		 */
		public function pages(): int {}

		/**
		 * Set Margin
		 * <p>Shall enable or disable margins on the selected page</p>
		 * @param int $page <p>The page to select</p>
		 * @param bool $margin <p>Margin switch</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-controls-tab.setmargin.php
		 * @since UI 0.9.9
		 */
		public function setMargin(int $page, bool $margin) {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

}

namespace UI\Draw {

	/**
	 * <p>Represents a solid color brush</p>
	 * @link http://php.net/manual/en/class.ui-draw-brush.php
	 * @since UI 0.9.9
	 */
	class Brush {

		/**
		 * Construct a new Brush
		 * <p>Shall construct a solid brush using the given color</p>
		 * @param \UI\Draw\Color $color <p>Can be a UI\Draw\Color or RRGGBBAA</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-draw-brush.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(\UI\Draw\Color $color) {}

		/**
		 * Get Color
		 * <p>Shall return a UI\Draw\Color for this brush</p>
		 * @return UI\Draw\Color <p>The current color of the brush</p>
		 * @link http://php.net/manual/en/ui-draw-brush.getcolor.php
		 * @since UI 0.9.9
		 */
		public function getColor(): \UI\Draw\Color {}

		/**
		 * Set Color
		 * <p>Shall set the color of this brush to the color provided</p>
		 * @param \UI\Draw\Color $color <p>Can be a UI\Draw\Color or RRGGBBAA</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-brush.setcolor.php
		 * @since UI 0.9.9
		 */
		public function setColor(\UI\Draw\Color $color): void {}
	}

}

namespace UI\Draw\Brush {

	/**
	 * <p>Abstract for gradient brushes</p>
	 * @link http://php.net/manual/en/class.ui-draw-brush-gradient.php
	 * @since UI 2.0.0
	 */
	abstract class Gradient extends \UI\Draw\Brush {

		/**
		 * Stop Manipulation
		 * <p>Shall at a stop of the given color at the given position</p>
		 * @param float $position <p>The position for the new stop</p>
		 * @param \UI\Draw\Color $color <p>The color for the new stop, may be UI\Draw\Color or RRGGBBAA</p>
		 * @return int <p>Total number of stops</p>
		 * @link http://php.net/manual/en/ui-draw-brush-gradient.addstop.php
		 * @since UI 2.0.0
		 */
		public function addStop(float $position, \UI\Draw\Color $color): int {}

		/**
		 * Stop Manipulation
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $index
		 * @return int <p>Total number of stops</p>
		 * @link http://php.net/manual/en/ui-draw-brush-gradient.delstop.php
		 * @since UI 2.0.0
		 */
		public function delStop(int $index): int {}

		/**
		 * Get Color
		 * <p>Shall return a UI\Draw\Color for this brush</p>
		 * @return UI\Draw\Color <p>The current color of the brush</p>
		 * @link http://php.net/manual/en/ui-draw-brush.getcolor.php
		 * @since UI 0.9.9
		 */
		public function getColor(): \UI\Draw\Color {}

		/**
		 * Set Color
		 * <p>Shall set the color of this brush to the color provided</p>
		 * @param \UI\Draw\Color $color <p>Can be a UI\Draw\Color or RRGGBBAA</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-brush.setcolor.php
		 * @since UI 0.9.9
		 */
		public function setColor(\UI\Draw\Color $color): void {}

		/**
		 * Stop Manipulation
		 * @param int $index <p>The index of the stop to set</p>
		 * @param float $position <p>The position for the stop</p>
		 * @param \UI\Draw\Color $color <p>The color for the stop, may be UI\Draw\Color or RRGGBBAA</p>
		 * @return bool <p>Indication of success</p>
		 * @link http://php.net/manual/en/ui-draw-brush-gradient.setstop.php
		 * @since UI 2.0.0
		 */
		public function setStop(int $index, float $position, \UI\Draw\Color $color): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.ui-draw-brush-lineargradient.php
	 * @since UI 2.0.0
	 */
	class LinearGradient extends \UI\Draw\Brush\Gradient {

		/**
		 * Construct a Linear Gradient
		 * <p>Shall construct a new linear gradient</p>
		 * @param \UI\Point $start
		 * @param \UI\Point $end
		 * @return self
		 * @link http://php.net/manual/en/ui-draw-brush-lineargradient.construct.php
		 * @since UI 2.0.0
		 */
		public function __construct(\UI\Point $start, \UI\Point $end) {}

		/**
		 * Stop Manipulation
		 * <p>Shall at a stop of the given color at the given position</p>
		 * @param float $position <p>The position for the new stop</p>
		 * @param \UI\Draw\Color $color <p>The color for the new stop, may be UI\Draw\Color or RRGGBBAA</p>
		 * @return int <p>Total number of stops</p>
		 * @link http://php.net/manual/en/ui-draw-brush-gradient.addstop.php
		 * @since UI 2.0.0
		 */
		public function addStop(float $position, \UI\Draw\Color $color): int {}

		/**
		 * Stop Manipulation
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $index
		 * @return int <p>Total number of stops</p>
		 * @link http://php.net/manual/en/ui-draw-brush-gradient.delstop.php
		 * @since UI 2.0.0
		 */
		public function delStop(int $index): int {}

		/**
		 * Stop Manipulation
		 * @param int $index <p>The index of the stop to set</p>
		 * @param float $position <p>The position for the stop</p>
		 * @param \UI\Draw\Color $color <p>The color for the stop, may be UI\Draw\Color or RRGGBBAA</p>
		 * @return bool <p>Indication of success</p>
		 * @link http://php.net/manual/en/ui-draw-brush-gradient.setstop.php
		 * @since UI 2.0.0
		 */
		public function setStop(int $index, float $position, \UI\Draw\Color $color): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.ui-draw-brush-radialgradient.php
	 * @since UI 2.0.0
	 */
	class RadialGradient extends \UI\Draw\Brush\Gradient {

		/**
		 * Construct a new Radial Gradient
		 * <p>Shall construct a new radial gradient</p>
		 * @param \UI\Point $start
		 * @param \UI\Point $outer
		 * @param float $radius
		 * @return self
		 * @link http://php.net/manual/en/ui-draw-brush-radialgradient.construct.php
		 * @since UI 2.0.0
		 */
		public function __construct(\UI\Point $start, \UI\Point $outer, float $radius) {}

		/**
		 * Stop Manipulation
		 * <p>Shall at a stop of the given color at the given position</p>
		 * @param float $position <p>The position for the new stop</p>
		 * @param \UI\Draw\Color $color <p>The color for the new stop, may be UI\Draw\Color or RRGGBBAA</p>
		 * @return int <p>Total number of stops</p>
		 * @link http://php.net/manual/en/ui-draw-brush-gradient.addstop.php
		 * @since UI 2.0.0
		 */
		public function addStop(float $position, \UI\Draw\Color $color): int {}

		/**
		 * Stop Manipulation
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $index
		 * @return int <p>Total number of stops</p>
		 * @link http://php.net/manual/en/ui-draw-brush-gradient.delstop.php
		 * @since UI 2.0.0
		 */
		public function delStop(int $index): int {}

		/**
		 * Stop Manipulation
		 * @param int $index <p>The index of the stop to set</p>
		 * @param float $position <p>The position for the stop</p>
		 * @param \UI\Draw\Color $color <p>The color for the stop, may be UI\Draw\Color or RRGGBBAA</p>
		 * @return bool <p>Indication of success</p>
		 * @link http://php.net/manual/en/ui-draw-brush-gradient.setstop.php
		 * @since UI 2.0.0
		 */
		public function setStop(int $index, float $position, \UI\Draw\Color $color): bool {}
	}

}

namespace UI\Draw {

	/**
	 * <p>Represents RGBA colours, individual channels are accessible via public properties.</p>
	 * @link http://php.net/manual/en/class.ui-draw-color.php
	 * @since UI 0.9.9
	 */
	class Color {

		/**
		 * @var int <p>Identifies the red channel</p>
		 * @link http://php.net/manual/en/class.ui-draw-color.php
		 */
		const Red = null;

		/**
		 * @var int <p>Identifies the green channel</p>
		 * @link http://php.net/manual/en/class.ui-draw-color.php
		 */
		const Green = null;

		/**
		 * @var int <p>Identifies the blue channel</p>
		 * @link http://php.net/manual/en/class.ui-draw-color.php
		 */
		const Blue = null;

		/**
		 * @var int <p>Identifies the alpha channel</p>
		 * @link http://php.net/manual/en/class.ui-draw-color.php
		 */
		const Alpha = null;

		/**
		 * @var mixed <p>Provides access to the red channel</p>
		 * @link http://php.net/manual/en/class.ui-draw-color.php#ui-draw-color.props.r
		 */
		public $r;

		/**
		 * @var mixed <p>Provides access to the green channel</p>
		 * @link http://php.net/manual/en/class.ui-draw-color.php#ui-draw-color.props.g
		 */
		public $g;

		/**
		 * @var mixed <p>Provides access to the blue channel</p>
		 * @link http://php.net/manual/en/class.ui-draw-color.php#ui-draw-color.props.b
		 */
		public $b;

		/**
		 * @var mixed <p>Provides access to the alpha channel</p>
		 * @link http://php.net/manual/en/class.ui-draw-color.php#ui-draw-color.props.a
		 */
		public $a;

		/**
		 * Construct new Color
		 * <p>Shall construct a new color</p>
		 * @param \UI\Draw\Color $color <p>May be UI\Draw\Color or RRGGBBAA</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-draw-color.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(\UI\Draw\Color $color = NULL) {}

		/**
		 * Color Manipulation
		 * <p>Shall retrieve the value for a channel</p>
		 * @param int $channel <p>Constant channel identity</p>
		 * @return float <p>The current value of the requested channel</p>
		 * @link http://php.net/manual/en/ui-draw-color.getchannel.php
		 * @since UI 0.9.9
		 */
		public function getChannel(int $channel): float {}

		/**
		 * Color Manipulation
		 * <p>Shall set the selected channel to the given value</p>
		 * @param int $channel <p>Constant channel identity</p>
		 * @param float $value <p>The new value for the selected channel</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-color.setchannel.php
		 * @since UI 0.9.9
		 */
		public function setChannel(int $channel, float $value): void {}
	}

}

namespace UI\Draw\Line {

	/**
	 * @link http://php.net/manual/en/class.ui-draw-line-cap.php
	 * @since UI 0.9.9
	 */
	final class Cap {

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-line-cap.php
		 */
		const Flat = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-line-cap.php
		 */
		const Round = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-line-cap.php
		 */
		const Square = null;
	}

	/**
	 * @link http://php.net/manual/en/class.ui-draw-line-join.php
	 * @since UI 0.9.9
	 */
	final class Join {

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-line-join.php
		 */
		const Miter = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-line-join.php
		 */
		const Round = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-line-join.php
		 */
		const Bevel = null;
	}

}

namespace UI\Draw {

	/**
	 * @link http://php.net/manual/en/class.ui-draw-matrix.php
	 * @since UI 0.9.9
	 */
	class Matrix {

		/**
		 * Invert Matrix
		 * <p>Shall invert this matrix</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-matrix.invert.php
		 * @since UI 0.9.9
		 */
		public function invert() {}

		/**
		 * Invertible Detection
		 * <p>Shall detect if this Matrix may be inverted</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-draw-matrix.isinvertible.php
		 * @since UI 0.9.9
		 */
		public function isInvertible(): bool {}

		/**
		 * Multiply Matrix
		 * <p>Shall multiply this matrix with the given matrix</p>
		 * @param \UI\Draw\Matrix $matrix
		 * @return UI\Draw\Matrix <p>The new Matrix</p>
		 * @link http://php.net/manual/en/ui-draw-matrix.multiply.php
		 * @since UI 0.9.9
		 */
		public function multiply(\UI\Draw\Matrix $matrix): \UI\Draw\Matrix {}

		/**
		 * Rotate Matrix
		 * <p>Shall rotate this Matrix</p>
		 * @param \UI\Point $point
		 * @param float $amount
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-matrix.rotate.php
		 * @since UI 0.9.9
		 */
		public function rotate(\UI\Point $point, float $amount) {}

		/**
		 * Scale Matrix
		 * <p>Shall scale this Matrix</p>
		 * @param \UI\Point $center
		 * @param \UI\Point $point
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-matrix.scale.php
		 * @since UI 0.9.9
		 */
		public function scale(\UI\Point $center, \UI\Point $point) {}

		/**
		 * Skew Matrix
		 * <p>Shall skew this Matrix</p>
		 * @param \UI\Point $point
		 * @param \UI\Point $amount
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-matrix.skew.php
		 * @since UI 0.9.9
		 */
		public function skew(\UI\Point $point, \UI\Point $amount) {}

		/**
		 * Translate Matrix
		 * <p>Shall translate this Matrix</p>
		 * @param \UI\Point $point
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-matrix.translate.php
		 * @since UI 0.9.9
		 */
		public function translate(\UI\Point $point) {}
	}

	/**
	 * <p>A Draw Path guides a Draw Pen, telling the Pen where to draw on an Area.</p>
	 * @link http://php.net/manual/en/class.ui-draw-path.php
	 * @since UI 0.9.9
	 */
	class Path {

		/**
		 * @var int <p>This is the default draw path mode</p>
		 * @link http://php.net/manual/en/class.ui-draw-path.php
		 */
		const Winding = null;

		/**
		 * @var int <p>This is the alternate draw path mode</p>
		 * @link http://php.net/manual/en/class.ui-draw-path.php
		 */
		const Alternate = null;

		/**
		 * Construct a new Path
		 * <p>Shall construct a new path in the given mode</p>
		 * @param int $mode <p>Path::Winding or Path::Alternate</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-draw-path.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(int $mode = UI\Draw\Path::Winding) {}

		/**
		 * Draw a Rectangle
		 * <p>Shall map the path of a rectangle of the given size, at the given point</p>
		 * @param \UI\Point $point <p>The point to begin the shape</p>
		 * @param \UI\Size $size <p>The size of the rectangle</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-path.addrectangle.php
		 * @since UI 0.9.9
		 */
		public function addRectangle(\UI\Point $point, \UI\Size $size) {}

		/**
		 * Draw an Arc
		 * <p>Shall map the path for an arc</p>
		 * @param \UI\Point $point <p>The point to begin mapping</p>
		 * @param float $radius <p>The radius of the arc</p>
		 * @param float $angle <p>The angle of the arc</p>
		 * @param float $sweep <p>The sweep of the arc</p>
		 * @param float $negative
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-path.arcto.php
		 * @since UI 0.9.9
		 */
		public function arcTo(\UI\Point $point, float $radius, float $angle, float $sweep, float $negative) {}

		/**
		 * Draw Bezier Curve
		 * <p>Shall draw a bezier curve</p>
		 * @param \UI\Point $point <p>The point at which to begin mapping</p>
		 * @param float $radius <p>The radius of the curve</p>
		 * @param float $angle <p>The angle of the curve</p>
		 * @param float $sweep <p>The sweep of the curve</p>
		 * @param float $negative
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-path.bezierto.php
		 * @since UI 0.9.9
		 */
		public function bezierTo(\UI\Point $point, float $radius, float $angle, float $sweep, float $negative) {}

		/**
		 * Close Figure
		 * <p>Shall close the current figure</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-path.closefigure.php
		 * @since UI 0.9.9
		 */
		public function closeFigure() {}

		/**
		 * Finalize Path
		 * <p>Shall finalize this Path</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-path.end.php
		 * @since UI 0.9.9
		 */
		public function end() {}

		/**
		 * Draw a Line
		 * <p>Shall map the path for a line</p>
		 * @param \UI\Point $point <p>The point to begin mapping</p>
		 * @param float $radius
		 * @param float $angle
		 * @param float $sweep
		 * @param float $negative
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-path.lineto.php
		 * @since UI 0.9.9
		 */
		public function lineTo(\UI\Point $point, float $radius, float $angle, float $sweep, float $negative) {}

		/**
		 * Draw Figure
		 * <p>Shall map a new figure at the given point</p>
		 * @param \UI\Point $point <p>The point to begin mapping</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-path.newfigure.php
		 * @since UI 0.9.9
		 */
		public function newFigure(\UI\Point $point) {}

		/**
		 * Draw Figure with Arc
		 * @param \UI\Point $point
		 * @param float $radius
		 * @param float $angle
		 * @param float $sweep
		 * @param float $negative
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-path.newfigurewitharc.php
		 * @since UI 0.9.9
		 */
		public function newFigureWithArc(\UI\Point $point, float $radius, float $angle, float $sweep, float $negative) {}
	}

	/**
	 * <p>The Pen is passed to the Area Draw event handler, it is used for clipping, filling, stroking, and writing to Draw Paths.</p>
	 * @link http://php.net/manual/en/class.ui-draw-pen.php
	 * @since UI 0.9.9
	 */
	final class Pen {

		/**
		 * Clip a Path
		 * <p>Shall clip the given Path</p>
		 * @param \UI\Draw\Path $path <p>The path to clip</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-pen.clip.php
		 * @since UI 0.9.9
		 */
		public function clip(\UI\Draw\Path $path) {}

		/**
		 * Fill a Path
		 * <p>Shall fill the given path</p>
		 * @param \UI\Draw\Path $path <p>The path to fill</p>
		 * @param \UI\Draw\Brush $with <p>The color or brush to fill with</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-pen.fill.php
		 * @since UI 0.9.9
		 */
		public function fill(\UI\Draw\Path $path, \UI\Draw\Brush $with) {}

		/**
		 * Restore
		 * <p>Shall restore a previously saved Pen</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-pen.restore.php
		 * @since UI 0.9.9
		 */
		public function restore() {}

		/**
		 * Save
		 * <p>Shall save the Pen</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-pen.save.php
		 * @since UI 0.9.9
		 */
		public function save() {}

		/**
		 * Stroke a Path
		 * <p>Shall stroke the given path</p>
		 * @param \UI\Draw\Path $path <p>The path to stroke</p>
		 * @param \UI\Draw\Brush $with <p>The color or brush to stroke with</p>
		 * @param \UI\Draw\Stroke $stroke <p>The configuration of the stroke</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-pen.stroke.php
		 * @since UI 0.9.9
		 */
		public function stroke(\UI\Draw\Path $path, \UI\Draw\Brush $with, \UI\Draw\Stroke $stroke) {}

		/**
		 * Matrix Transform
		 * <p>Shall perform matrix transformation</p>
		 * @param \UI\Draw\Matrix $matrix <p>The matrix to use</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-pen.transform.php
		 * @since UI 0.9.9
		 */
		public function transform(\UI\Draw\Matrix $matrix) {}

		/**
		 * Draw Text at Point
		 * <p>Shall draw the given text layout at the given point</p>
		 * @param \UI\Point $point <p>The point to perform the drawing</p>
		 * @param \UI\Draw\Text\Layout $layout <p>The layout of the text to draw</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-pen.write.php
		 * @since UI 0.9.9
		 */
		public function write(\UI\Point $point, \UI\Draw\Text\Layout $layout) {}
	}

	/**
	 * <p>Holds the configuration for the Pen to perform a stroke</p>
	 * @link http://php.net/manual/en/class.ui-draw-stroke.php
	 * @since UI 0.9.9
	 */
	class Stroke {

		/**
		 * Construct a new Stroke
		 * <p>Shall construct a new Stroke</p>
		 * @param int $cap <p>UI\Draw\Line\Cap::Flat, UI\Draw\Line\Cap::Round, or UI\Draw\Line\Cap::Square</p>
		 * @param int $join <p>UI\Draw\Line\Join::Miter, UI\Draw\Line\Join::Round, or UI\Draw\Line\Join::Bevel</p>
		 * @param float $thickness <p>The thickness of the stroke</p>
		 * @param float $miterLimit <p>Miter limit (default is sensible for all supported platforms)</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-draw-stroke.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(int $cap = UI\Draw\Line\Cap::Flat, int $join = UI\Draw\Line\Join::Miter, float $thickness = 1, float $miterLimit = 10) {}

		/**
		 * Get Line Cap
		 * <p>Shall retrieve the line cap setting of this Stroke</p>
		 * @return int <p>UI\Draw\Line\Cap::Flat, UI\Draw\Line\Cap::Round, or UI\Draw\Line\Cap::Square</p>
		 * @link http://php.net/manual/en/ui-draw-stroke.getcap.php
		 * @since UI 0.9.9
		 */
		public function getCap(): int {}

		/**
		 * Get Line Join
		 * <p>Shall retrieve the line join setting of this Stroke</p>
		 * @return int <p>UI\Draw\Line\Join::Miter, UI\Draw\Line\Join::Round, or UI\Draw\Line\Join::Bevel</p>
		 * @link http://php.net/manual/en/ui-draw-stroke.getjoin.php
		 * @since UI 0.9.9
		 */
		public function getJoin(): int {}

		/**
		 * Get Miter Limit
		 * <p>Shall retrieve the miter limit of this Stroke</p>
		 * @return float <p>The current miter limit</p>
		 * @link http://php.net/manual/en/ui-draw-stroke.getmiterlimit.php
		 * @since UI 0.9.9
		 */
		public function getMiterLimit(): float {}

		/**
		 * Get Thickness
		 * <p>Shall retrieve the thickness of this Stroke</p>
		 * @return float <p>The current thickness</p>
		 * @link http://php.net/manual/en/ui-draw-stroke.getthickness.php
		 * @since UI 0.9.9
		 */
		public function getThickness(): float {}

		/**
		 * Set Line Cap
		 * <p>Shall set the line cap setting for this Stroke</p>
		 * @param int $cap <p>UI\Draw\Line\Cap::Flat, UI\Draw\Line\Cap::Round, or UI\Draw\Line\Cap::Square</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-stroke.setcap.php
		 * @since UI 0.9.9
		 */
		public function setCap(int $cap) {}

		/**
		 * Set Line Join
		 * <p>Shall set the line join setting for this Stroke</p>
		 * @param int $join <p>UI\Draw\Line\Join::Miter, UI\Draw\Line\Join::Round, or UI\Draw\Line\Join::Bevel</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-stroke.setjoin.php
		 * @since UI 0.9.9
		 */
		public function setJoin(int $join) {}

		/**
		 * Set Miter Limit
		 * <p>Set the miter limit for this Stroke</p>
		 * @param float $limit <p>The new limit</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-stroke.setmiterlimit.php
		 * @since UI 0.9.9
		 */
		public function setMiterLimit(float $limit) {}

		/**
		 * Set Thickness
		 * <p>Shall set the thickness for this Stroke</p>
		 * @param float $thickness <p>The new thickness</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-stroke.setthickness.php
		 * @since UI 0.9.9
		 */
		public function setThickness(float $thickness) {}
	}

}

namespace UI\Draw\Text {

	/**
	 * <p>Loads a described font</p>
	 * @link http://php.net/manual/en/class.ui-draw-text-font.php
	 * @since UI 0.9.9
	 */
	class Font {

		/**
		 * Construct a new Font
		 * <p>Shall construct a new Font using the given descriptor</p>
		 * @param \UI\Draw\Text\Font\Descriptor $descriptor <p>The descriptor for the Font</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-draw-text-font.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(\UI\Draw\Text\Font\Descriptor $descriptor) {}

		/**
		 * Font Metrics
		 * @return float
		 * @link http://php.net/manual/en/ui-draw-text-font.getascent.php
		 * @since UI 1.0.3
		 */
		public function getAscent(): float {}

		/**
		 * Font Metrics
		 * @return float
		 * @link http://php.net/manual/en/ui-draw-text-font.getdescent.php
		 * @since UI 1.0.3
		 */
		public function getDescent(): float {}

		/**
		 * Font Metrics
		 * @return float
		 * @link http://php.net/manual/en/ui-draw-text-font.getleading.php
		 * @since UI 1.0.3
		 */
		public function getLeading(): float {}

		/**
		 * Font Metrics
		 * @return float
		 * @link http://php.net/manual/en/ui-draw-text-font.getunderlineposition.php
		 * @since UI 1.0.3
		 */
		public function getUnderlinePosition(): float {}

		/**
		 * Font Metrics
		 * @return float
		 * @link http://php.net/manual/en/ui-draw-text-font.getunderlinethickness.php
		 * @since UI 1.0.3
		 */
		public function getUnderlineThickness(): float {}
	}

}

namespace UI\Draw\Text\Font {

	/**
	 * <p>Describes a font</p>
	 * @link http://php.net/manual/en/class.ui-draw-text-font-descriptor.php
	 * @since UI 0.9.9
	 */
	class Descriptor {

		/**
		 * Construct a new Font Descriptor
		 * <p>Shall construct a new Font Descriptor</p>
		 * @param string $family <p>The name of a valid family of fonts</p>
		 * @param float $size <p>The preferred size</p>
		 * @param int $weight <p>UI\Draw\Text\Font\Weight constant</p>
		 * @param int $italic <p>UI\Draw\Text\Font\Italic constant</p>
		 * @param int $stretch <p>UI\Draw\Text\Font\Stretch constant</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-draw-text-font-descriptor.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(string $family, float $size, int $weight = UI\Draw\Text\Font\Weight::Normal, int $italic = UI\Draw\Text\Font\Italic::Normal, int $stretch = UI\Draw\Text\Font\Stretch::Normal) {}

		/**
		 * Get Font Family
		 * <p>Shall return the requested font family</p>
		 * @return string
		 * @link http://php.net/manual/en/ui-draw-text-font-descriptor.getfamily.php
		 * @since UI 1.0.3
		 */
		public function getFamily(): string {}

		/**
		 * Style Detection
		 * <p>Shall return constant setting</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-draw-text-font-descriptor.getitalic.php
		 * @since UI 1.0.3
		 */
		public function getItalic(): int {}

		/**
		 * Size Detection
		 * <p>Shall return the requested size</p>
		 * @return float
		 * @link http://php.net/manual/en/ui-draw-text-font-descriptor.getsize.php
		 * @since UI 1.0.3
		 */
		public function getSize(): float {}

		/**
		 * Style Detection
		 * <p>Shall return requested stretch</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-draw-text-font-descriptor.getstretch.php
		 * @since UI 1.0.3
		 */
		public function getStretch(): int {}

		/**
		 * Weight Detection
		 * <p>Shall return requested weight</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-draw-text-font-descriptor.getweight.php
		 * @since UI 1.0.3
		 */
		public function getWeight(): int {}
	}

	/**
	 * @link http://php.net/manual/en/class.ui-draw-text-font-italic.php
	 * @since UI 0.9.9
	 */
	final class Italic {

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-italic.php
		 */
		const Normal = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-italic.php
		 */
		const Oblique = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-italic.php
		 */
		const Italic = 2;
	}

	/**
	 * @link http://php.net/manual/en/class.ui-draw-text-font-stretch.php
	 * @since UI 0.9.9
	 */
	final class Stretch {

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-stretch.php
		 */
		const UltraCondensed = 0;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-stretch.php
		 */
		const ExtraCondensed = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-stretch.php
		 */
		const Condensed = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-stretch.php
		 */
		const SemiCondensed = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-stretch.php
		 */
		const Normal = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-stretch.php
		 */
		const SemiExpanded = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-stretch.php
		 */
		const Expanded = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-stretch.php
		 */
		const ExtraExpanded = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-stretch.php
		 */
		const UltraExpanded = 8;
	}

	/**
	 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
	 * @since UI 0.9.9
	 */
	final class Weight {

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const Thin = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const UltraLight = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const Light = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const Book = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const Normal = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const Medium = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const SemiBold = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const Bold = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const UltraBold = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const Heavy = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-draw-text-font-weight.php
		 */
		const UltraHeavy = null;
	}

}

namespace UI\Draw\Text {

	/**
	 * <p>A Text Layout represents the layout of text which will be drawn by the Pen</p>
	 * @link http://php.net/manual/en/class.ui-draw-text-layout.php
	 * @since UI 0.9.9
	 */
	class Layout {

		/**
		 * Construct a new Text Layout
		 * <p>Shall construct a new Text Layout</p>
		 * @param string $text <p>The text for the layout</p>
		 * @param \UI\Draw\Text\Font $font <p>The font to use for writing</p>
		 * @param float $width <p>The width of the layout</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-draw-text-layout.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(string $text, \UI\Draw\Text\Font $font, float $width) {}

		/**
		 * Set Color
		 * <p>Shall set the Color for all of, or a range of the text in the Layout</p>
		 * @param \UI\Draw\Color $color <p>The color to use</p>
		 * @param int $start <p>The starting character</p>
		 * @param int $end <p>The ending character, by default the end of the string</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-text-layout.setcolor.php
		 * @since UI 0.9.9
		 */
		public function setColor(\UI\Draw\Color $color, int $start = 0, int $end = NULL) {}

		/**
		 * Set Width
		 * <p>Shall set the width of this Text Layout</p>
		 * @param float $width <p>The new width</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-draw-text-layout.setwidth.php
		 * @since UI 0.9.9
		 */
		public function setWidth(float $width) {}
	}

}

namespace UI\Exception {

	/**
	 * @link http://php.net/manual/en/class.ui-exception-invalidargumentexception.php
	 * @since UI 1.0.3
	 */
	class InvalidArgumentException extends \InvalidArgumentException implements \Throwable {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * @link http://php.net/manual/en/class.ui-exception-runtimeexception.php
	 * @since UI 1.0.3
	 */
	class RuntimeException extends \RuntimeException implements \Throwable {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

}

namespace UI {

	/**
	 * <p>This facility schedules repetitive execution of a callback, useful for animations and other such activities.</p>
	 * @link http://php.net/manual/en/class.ui-executor.php
	 * @since UI 2.0.0
	 */
	abstract class Executor {

		/**
		 * Construct a new Executor
		 * <p>Shall construct an executor with the given interval, will not start executing until main loop is entered</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-executor.construct.php
		 * @since UI 2.0.0
		 */
		public function __construct() {}

		/**
		 * Stop Executor
		 * <p>Shall stop an executor, the executor cannot be restarted</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-executor.kill.php
		 * @since UI 2.0.0
		 */
		public function kill(): void {}

		/**
		 * Execution Callback
		 * <p>Shall be repetitively queued for execution in the main thread</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-executor.onexecute.php
		 * @since UI 2.0.0
		 */
		abstract protected function onExecute(): void;

		/**
		 * Interval Manipulation
		 * <p>Shall set the new interval. An interval of 0 will pause the executor until a new interval has been set</p>
		 * @param int $microseconds
		 * @return bool <p>Indication of success</p>
		 * @link http://php.net/manual/en/ui-executor.setinterval.php
		 * @since UI 2.0.0
		 */
		public function setInterval(int $microseconds): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.ui-key.php
	 * @since UI 1.0.0
	 */
	final class Key {

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const Escape = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const Insert = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const Delete = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const Home = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const End = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const PageUp = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const PageDown = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const Up = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const Down = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const Left = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const Right = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F1 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F2 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F3 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F4 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F5 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F6 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F7 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F8 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F9 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F10 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F11 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const F12 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const N0 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const N1 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const N2 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const N3 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const N4 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const N5 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const N6 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const N7 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const N8 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const N9 = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const NDot = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const NEnter = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const NAdd = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const NSubtract = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const NMultiply = null;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.ui-key.php
		 */
		const NDivide = null;
	}

	/**
	 * <p>Menus must be constructed before the first Window, and can be shown on any Window</p>
	 * @link http://php.net/manual/en/class.ui-menu.php
	 * @since UI 0.9.9
	 */
	class Menu {

		/**
		 * Construct a new Menu
		 * <p>Shall construct a new Menu</p>
		 * @param string $name <p>The name (text) for the menu</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-menu.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(string $name) {}

		/**
		 * Append Menu Item
		 * <p>Shall append a new Menu Item</p>
		 * @param string $name <p>The name (text) for the new item</p>
		 * @param string $type <p>The type for the new item</p>
		 * @return UI\MenuItem <p>A constructed object of the given type</p>
		 * @link http://php.net/manual/en/ui-menu.append.php
		 * @since UI 0.9.9
		 */
		public function append(string $name, string $type = 'UI\MenuItem::class'): \UI\MenuItem {}

		/**
		 * Append About Menu Item
		 * <p>Shall append an About menu item</p>
		 * @param string $type <p>The type for the new item</p>
		 * @return UI\MenuItem <p>A constructed About menu item of the given type</p>
		 * @link http://php.net/manual/en/ui-menu.appendabout.php
		 * @since UI 0.9.9
		 */
		public function appendAbout(string $type = 'UI\MenuItem::class'): \UI\MenuItem {}

		/**
		 * Append Checkable Menu Item
		 * <p>Shall append a checkable menu item</p>
		 * @param string $name <p>The name (text) for the new item</p>
		 * @param string $type <p>The type for the new item</p>
		 * @return UI\MenuItem <p>A constructed checkable menu item of the given type</p>
		 * @link http://php.net/manual/en/ui-menu.appendcheck.php
		 * @since UI 0.9.9
		 */
		public function appendCheck(string $name, string $type = 'UI\MenuItem::class'): \UI\MenuItem {}

		/**
		 * Append Preferences Menu Item
		 * <p>Shall append a Preferences menu item</p>
		 * @param string $type <p>The type for the new item</p>
		 * @return UI\MenuItem <p>A constructed Preferences menu item of the given type</p>
		 * @link http://php.net/manual/en/ui-menu.appendpreferences.php
		 * @since UI 0.9.9
		 */
		public function appendPreferences(string $type = 'UI\MenuItem::class'): \UI\MenuItem {}

		/**
		 * Append Quit Menu Item
		 * <p>Shall append a Quit menu item</p>
		 * @param string $type <p>The type for the new item</p>
		 * @return UI\MenuItem <p>A constructed Quit menu item of the given type</p>
		 * @link http://php.net/manual/en/ui-menu.appendquit.php
		 * @since UI 0.9.9
		 */
		public function appendQuit(string $type = 'UI\MenuItem::class'): \UI\MenuItem {}

		/**
		 * Append Menu Item Separator
		 * <p>Shall append a separator</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-menu.appendseparator.php
		 * @since UI 0.9.9
		 */
		public function appendSeparator() {}
	}

	/**
	 * <p>Menu Items should only be created by the Menu</p>
	 * @link http://php.net/manual/en/class.ui-menuitem.php
	 * @since UI 0.9.9
	 */
	class MenuItem {

		/**
		 * Disable Menu Item
		 * <p>Shall disable this Menu Item</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-menuitem.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Menu Item
		 * <p>Shall enable this Menu Item</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-menuitem.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Detect Checked
		 * <p>Shall detect if this Menu Item is checked</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-menuitem.ischecked.php
		 * @since UI 0.9.9
		 */
		public function isChecked(): bool {}

		/**
		 * On Click Callback
		 * <p>Shall be executed when this Menu Item is clicked</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-menuitem.onclick.php
		 * @since UI 0.9.9
		 */
		protected function onClick() {}

		/**
		 * Set Checked
		 * <p>Shall set the checked status of this Menu Item</p>
		 * @param bool $checked <p>The new status</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-menuitem.setchecked.php
		 * @since UI 0.9.9
		 */
		public function setChecked(bool $checked) {}
	}

	/**
	 * <p>Points are used throughout UI to represent co-ordinates on a screen, control, or area.</p>
	 * @link http://php.net/manual/en/class.ui-point.php
	 * @since UI 0.9.9
	 */
	final class Point {

		/**
		 * @var mixed <p>Holds the X co-ordinate, can be read/written directly</p>
		 * @link http://php.net/manual/en/class.ui-point.php#ui-point.props.x
		 */
		public $x;

		/**
		 * @var mixed <p>Holds the Y co-ordinate, can be read/written directly</p>
		 * @link http://php.net/manual/en/class.ui-point.php#ui-point.props.y
		 */
		public $y;

		/**
		 * Construct a new Point
		 * <p>Construct a new Point using new co-ordinates</p>
		 * @param float $x <p>The new X co-ordinate</p>
		 * @param float $y <p>The new Y co-ordinate</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-point.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(float $x, float $y) {}

		/**
		 * Size Coercion
		 * <p>Shall return a UI\Point object where x and y are equal to those supplied, either in float or UI\Size form</p>
		 * @param float $point <p>The value for x and y</p>
		 * @return UI\Point <p>The resulting Point</p>
		 * @link http://php.net/manual/en/ui-point.at.php
		 * @since UI 1.0.2
		 */
		public static function at(float $point): \UI\Point {}

		/**
		 * Retrieves X
		 * <p>Retrieves the X co-ordinate</p>
		 * @return float <p>The current X co-ordinate</p>
		 * @link http://php.net/manual/en/ui-point.getx.php
		 * @since UI 0.9.9
		 */
		public function getX(): float {}

		/**
		 * Retrieves Y
		 * <p>Retrieves the Y co-ordinate</p>
		 * @return float <p>The current Y co-ordinate</p>
		 * @link http://php.net/manual/en/ui-point.gety.php
		 * @since UI 0.9.9
		 */
		public function getY(): float {}

		/**
		 * Set X
		 * <p>Set the X co-ordinate</p>
		 * @param float $point <p>The new X co-ordinate</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-point.setx.php
		 * @since UI 0.9.9
		 */
		public function setX(float $point) {}

		/**
		 * Set Y
		 * <p>Set the Y co-ordinate</p>
		 * @param float $point <p>The new Y co-ordinate</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-point.sety.php
		 * @since UI 0.9.9
		 */
		public function setY(float $point) {}
	}

	/**
	 * <p>Sizes are used throughout UI to represent the size of a screen, control, or area.</p>
	 * @link http://php.net/manual/en/class.ui-size.php
	 * @since UI 0.9.9
	 */
	final class Size {

		/**
		 * @var mixed <p>Holds the width, can be read/written directly</p>
		 * @link http://php.net/manual/en/class.ui-size.php#ui-size.props.width
		 */
		public $width;

		/**
		 * @var mixed <p>Holds the height, can be read/written directly</p>
		 * @link http://php.net/manual/en/class.ui-size.php#ui-size.props.height
		 */
		public $height;

		/**
		 * Construct a new Size
		 * <p>Construct a new Size using new width and height</p>
		 * @param float $width <p>The new width</p>
		 * @param float $height <p>The new height</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-size.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(float $width, float $height) {}

		/**
		 * Retrieves Height
		 * <p>Retrieves the Height</p>
		 * @return float <p>The current Height</p>
		 * @link http://php.net/manual/en/ui-size.getheight.php
		 * @since UI 0.9.9
		 */
		public function getHeight(): float {}

		/**
		 * Retrives Width
		 * <p>Retrieves the Width</p>
		 * @return float <p>The current Width</p>
		 * @link http://php.net/manual/en/ui-size.getwidth.php
		 * @since UI 0.9.9
		 */
		public function getWidth(): float {}

		/**
		 * Point Coercion
		 * <p>Shall return a UI\Size object where width and height are equal to those supplied, either in float or UI\Point form</p>
		 * @param float $size <p>The value for width and height</p>
		 * @return UI\Size <p>The resulting Size</p>
		 * @link http://php.net/manual/en/ui-size.of.php
		 * @since UI 1.0.2
		 */
		public static function of(float $size): \UI\Size {}

		/**
		 * Set Height
		 * <p>Set new Height</p>
		 * @param float $size <p>The new Height</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-size.setheight.php
		 * @since UI 0.9.9
		 */
		public function setHeight(float $size) {}

		/**
		 * Set Width
		 * <p>Set new Width</p>
		 * @param float $size <p>The new Width</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-size.setwidth.php
		 * @since UI 0.9.9
		 */
		public function setWidth(float $size) {}
	}

	/**
	 * <p>Represents a UI Window</p>
	 * @link http://php.net/manual/en/class.ui-window.php
	 * @since UI 0.9.9
	 */
	class Window extends \UI\Control {

		/**
		 * @var mixed <p>Contains controls, should not be manipulated directly</p>
		 * @link http://php.net/manual/en/class.ui-window.php#ui-window.props.controls
		 */
		protected $controls;

		/**
		 * Construct a new Window
		 * <p>Shall construct a new Window</p>
		 * @param string $title <p>The title of the Window</p>
		 * @param \Size $size <p>The size of the Window</p>
		 * @param bool $menu <p>Menu switch</p>
		 * @return self
		 * @link http://php.net/manual/en/ui-window.construct.php
		 * @since UI 0.9.9
		 */
		public function __construct(string $title, \Size $size, bool $menu = FALSE) {}

		/**
		 * Add a Control
		 * <p>Shall add a Control to this Window</p>
		 * @param \UI\Control $control <p>The Control to add</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-window.add.php
		 * @since UI 0.9.9
		 */
		public function add(\UI\Control $control) {}

		/**
		 * Destroy Control
		 * <p>Shall destroy this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.destroy.php
		 * @since UI 0.9.9
		 */
		public function destroy() {}

		/**
		 * Disable Control
		 * <p>Shall disable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.disable.php
		 * @since UI 0.9.9
		 */
		public function disable() {}

		/**
		 * Enable Control
		 * <p>Shall enable this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.enable.php
		 * @since UI 0.9.9
		 */
		public function enable() {}

		/**
		 * Show Error Box
		 * <p>Shall show an error box</p>
		 * @param string $title <p>The title of the error box</p>
		 * @param string $msg <p>The message for the error box</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-window.error.php
		 * @since UI 0.9.9
		 */
		public function error(string $title, string $msg) {}

		/**
		 * Get Parent Control
		 * <p>Shall return the parent Control</p>
		 * @return UI\Control
		 * @link http://php.net/manual/en/ui-control.getparent.php
		 * @since UI 0.9.9
		 */
		public function getParent(): \UI\Control {}

		/**
		 * Get Window Size
		 * <p>Shall return the size of this Window</p>
		 * @return UI\Size
		 * @link http://php.net/manual/en/ui-window.getsize.php
		 * @since UI 0.9.9
		 */
		public function getSize(): \UI\Size {}

		/**
		 * Get Title
		 * <p>Shall retrieve the title of this Window</p>
		 * @return string
		 * @link http://php.net/manual/en/ui-window.gettitle.php
		 * @since UI 0.9.9
		 */
		public function getTitle(): string {}

		/**
		 * Get Top Level
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-control.gettoplevel.php
		 * @since UI 0.9.9
		 */
		public function getTopLevel(): int {}

		/**
		 * Border Detection
		 * <p>Shall detect if borders are used on this Window</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-window.hasborders.php
		 * @since UI 0.9.9
		 */
		public function hasBorders(): bool {}

		/**
		 * Margin Detection
		 * <p>Shall detect if margins are used on this Window</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-window.hasmargin.php
		 * @since UI 0.9.9
		 */
		public function hasMargin(): bool {}

		/**
		 * Hide Control
		 * <p>Shall hide this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.hide.php
		 * @since UI 0.9.9
		 */
		public function hide() {}

		/**
		 * Determine if Control is enabled
		 * <p>Shall detect if this Control is enabled</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isenabled.php
		 * @since UI 0.9.9
		 */
		public function isEnabled(): bool {}

		/**
		 * Full Screen Detection
		 * <p>Shall detect if this Window us using the whole screen</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-window.isfullscreen.php
		 * @since UI 0.9.9
		 */
		public function isFullScreen(): bool {}

		/**
		 * Determine if Control is visible
		 * <p>Shall detect if this Control is visible</p>
		 * @return bool
		 * @link http://php.net/manual/en/ui-control.isvisible.php
		 * @since UI 0.9.9
		 */
		public function isVisible(): bool {}

		/**
		 * Show Message Box
		 * <p>Shall show a message box</p>
		 * @param string $title <p>The title of the message box</p>
		 * @param string $msg <p>The message</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-window.msg.php
		 * @since UI 0.9.9
		 */
		public function msg(string $title, string $msg) {}

		/**
		 * Closing Callback
		 * <p>Should gracefully destroy this Window</p>
		 * @return int
		 * @link http://php.net/manual/en/ui-window.onclosing.php
		 * @since UI 0.9.9
		 */
		protected function onClosing(): int {}

		/**
		 * Open Dialog
		 * <p>Shall show an open file dialog</p>
		 * @return string <p>Returns the name of the file selected for opening</p>
		 * @link http://php.net/manual/en/ui-window.open.php
		 * @since UI 0.9.9
		 */
		public function open(): string {}

		/**
		 * Save Dialog
		 * <p>Shall show a save dialog</p>
		 * @return string <p>Returns the file name selecting for saving</p>
		 * @link http://php.net/manual/en/ui-window.save.php
		 * @since UI 0.9.9
		 */
		public function save(): string {}

		/**
		 * Border Use
		 * <p>Shall enable or disable the use of borders on this Window</p>
		 * @param bool $borders
		 * @return void
		 * @link http://php.net/manual/en/ui-window.setborders.php
		 * @since UI 0.9.9
		 */
		public function setBorders(bool $borders) {}

		/**
		 * Full Screen Use
		 * <p>Shall enable or disable the use of the full screen for this Window</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param bool $full
		 * @return void
		 * @link http://php.net/manual/en/ui-window.setfullscreen.php
		 * @since UI 0.9.9
		 */
		public function setFullScreen(bool $full) {}

		/**
		 * Margin Use
		 * <p>Shall enable or disable the use of margins for this Window</p>
		 * @param bool $margin
		 * @return void
		 * @link http://php.net/manual/en/ui-window.setmargin.php
		 * @since UI 0.9.9
		 */
		public function setMargin(bool $margin) {}

		/**
		 * Set Parent Control
		 * <p>Shall set the parent Control of this Control</p>
		 * @param \UI\Control $parent <p>The parent Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.setparent.php
		 * @since UI 0.9.9
		 */
		public function setParent(\UI\Control $parent) {}

		/**
		 * Set Size
		 * <p>Shall set the size of this Window</p>
		 * @param \UI\Size $size
		 * @return void
		 * @link http://php.net/manual/en/ui-window.setsize.php
		 * @since UI 0.9.9
		 */
		public function setSize(\UI\Size $size) {}

		/**
		 * Window Title
		 * <p>Shall set the title for this Window</p>
		 * @param string $title <p>The new title</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-window.settitle.php
		 * @since UI 0.9.9
		 */
		public function setTitle(string $title) {}

		/**
		 * Control Show
		 * <p>Shall show this Control</p>
		 * @return void
		 * @link http://php.net/manual/en/ui-control.show.php
		 * @since UI 0.9.9
		 */
		public function show() {}
	}

}

namespace UI\Draw\Text\Font {

	/**
	 * Retrieve Font Families
	 * <p>Returns an array of valid font families for the current system</p>
	 * @return array
	 * @link http://php.net/manual/en/function.ui-draw-text-font-fontfamilies.php
	 * @since UI 0.9.9
	 */
	function fontFamilies(): array {}

}

namespace UI {

	/**
	 * Quit UI Loop
	 * <p>Shall cause the main loop to be exited</p>
	 * @return void
	 * @link http://php.net/manual/en/function.ui-quit.php
	 * @since UI 2.0.0
	 */
	function quit(): void {}

	/**
	 * Enter UI Loop
	 * <p>Shall cause PHP to enter into the main loop, by default control will not be returned to the caller</p>
	 * @param int $flags <p>Set UI\Loop to return control, and UI\Wait to return control after waiting</p>
	 * @return void
	 * @link http://php.net/manual/en/function.ui-run.php
	 * @since UI 2.0.0
	 */
	function run(int $flags = NULL): void {}

}
