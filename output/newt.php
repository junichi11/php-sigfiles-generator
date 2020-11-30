<?php



namespace {

	/**
	 * Send a beep to the terminal
	 * <p>This function sends a beep to the terminal.</p><p><b>Note</b>:</p><p>Depending on the terminal's settings, this beep may or may not be audible.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-bell.php
	 * @since PECL newt >= 0.1
	 */
	function newt_bell(): void {}

	/**
	 * Create a new button
	 * <p>Creates a new button.</p>
	 * @param int $left <p>X-coordinate of the button.</p>
	 * @param int $top <p>Y-coordinate of the button.</p>
	 * @param string $text <p>The text which should be displayed in the button.</p>
	 * @return resource <p>Returns a resource link to the created button component, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.newt-button.php
	 * @see newt_button_bar()
	 * @since PECL newt >= 0.1
	 */
	function newt_button(int $left, int $top, string $text) {}

	/**
	 * This function returns a grid containing the buttons created
	 * <p>This function returns a grid containing the buttons created.</p>
	 * @param array $buttons
	 * @return resource <p>Returns grid containing the buttons created.</p>
	 * @link http://php.net/manual/en/function.newt-button-bar.php
	 * @since PECL newt >= 0.1
	 */
	function newt_button_bar(array &$buttons) {}

	/**
	 * Open a centered window of the specified size
	 * <p>Open a centered window of the specified size.</p>
	 * @param int $width <p>Window width</p>
	 * @param int $height <p>Window height</p>
	 * @param string $title <p>Window title</p>
	 * @return int <p>Undefined value.</p>
	 * @link http://php.net/manual/en/function.newt-centered-window.php
	 * @see newt_pop_window(), newt_open_window()
	 * @since PECL newt >= 0.1
	 */
	function newt_centered_window(int $width, int $height, string $title = NULL): int {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param string $text
	 * @param string $def_value
	 * @param string $seq
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-checkbox.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox(int $left, int $top, string $text, string $def_value, string $seq = NULL) {}

	/**
	 * Retreives value of checkox resource
	 * <p>This function returns the character in the sequence which indicates the current value of the checkbox.</p>
	 * @param resource $checkbox
	 * @return string <p>Returns character indicating the value of the checkbox.</p>
	 * @link http://php.net/manual/en/function.newt-checkbox-get-value.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_get_value($checkbox): string {}

	/**
	 * Configures checkbox resource
	 * <p>This function allows to set various flags on checkbox resource.</p>
	 * @param resource $checkbox
	 * @param int $flags
	 * @param int $sense
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-checkbox-set-flags.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_set_flags($checkbox, int $flags, int $sense): void {}

	/**
	 * Sets the value of the checkbox
	 * <p>This function allows to set the current value of the checkbox resource.</p>
	 * @param resource $checkbox
	 * @param string $value
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-checkbox-set-value.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_set_value($checkbox, string $value): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param int $height
	 * @param int $flags
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-checkbox-tree.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree(int $left, int $top, int $height, int $flags = NULL) {}

	/**
	 * Adds new item to the checkbox tree
	 * <p>This function allows to add new item to the checkbox tree.</p>
	 * @param resource $checkboxtree
	 * @param string $text
	 * @param mixed $data
	 * @param int $flags
	 * @param int $index
	 * @param int $_
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-add-item.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_add_item($checkboxtree, string $text, $data, int $flags, int $index, int $_ = NULL): void {}

	/**
	 * Finds an item in the checkbox tree
	 * <p>Finds an item in the checkbox tree by item's data.</p>
	 * @param resource $checkboxtree
	 * @param mixed $data
	 * @return array <p>Returns checkbox tree item resource, or <b><code>NULL</code></b> if it wasn't found.</p>
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-find-item.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_find_item($checkboxtree, $data): array {}

	/**
	 * Returns checkbox tree selected item
	 * <p>This method returns checkbox tree selected tem.</p>
	 * @param resource $checkboxtree
	 * @return mixed <p>Returns current (selected) checkbox tree item.</p>
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-get-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_get_current($checkboxtree) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $checkboxtree
	 * @param mixed $data
	 * @return string
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-get-entry-value.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_get_entry_value($checkboxtree, $data): string {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $checkboxtree
	 * @param string $seqnum
	 * @return array
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-get-multi-selection.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_get_multi_selection($checkboxtree, string $seqnum): array {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $checkboxtree
	 * @return array
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-get-selection.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_get_selection($checkboxtree): array {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param int $height
	 * @param string $seq
	 * @param int $flags
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-multi.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_multi(int $left, int $top, int $height, string $seq, int $flags = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $checkboxtree
	 * @param mixed $data
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-set-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_set_current($checkboxtree, $data): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $checkboxtree
	 * @param mixed $data
	 * @param string $text
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-set-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_set_entry($checkboxtree, $data, string $text): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $checkboxtree
	 * @param mixed $data
	 * @param string $value
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-set-entry-value.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_set_entry_value($checkboxtree, $data, string $value): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $checkbox_tree
	 * @param int $width
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-checkbox-tree-set-width.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_set_width($checkbox_tree, int $width): void {}

	/**
	 * Discards the contents of the terminal's input buffer without waiting for additional input
	 * <p>Discards the contents of the terminal's input buffer without waiting for additional input.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-clear-key-buffer.php
	 * @see newt_wait_for_key()
	 * @since PECL newt >= 0.1
	 */
	function newt_clear_key_buffer(): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-cls.php
	 * @since PECL newt >= 0.1
	 */
	function newt_cls(): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param string $text
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-compact-button.php
	 * @since PECL newt >= 0.1
	 */
	function newt_compact_button(int $left, int $top, string $text) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $component
	 * @param mixed $func_name
	 * @param mixed $data
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-component-add-callback.php
	 * @since PECL newt >= 0.1
	 */
	function newt_component_add_callback($component, $func_name, $data): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $component
	 * @param bool $takes_focus
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-component-takes-focus.php
	 * @since PECL newt >= 0.1
	 */
	function newt_component_takes_focus($component, bool $takes_focus): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $cols
	 * @param int $rows
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-create-grid.php
	 * @since PECL newt >= 0.1
	 */
	function newt_create_grid(int $cols, int $rows) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-cursor-off.php
	 * @since PECL newt >= 0.1
	 */
	function newt_cursor_off(): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-cursor-on.php
	 * @since PECL newt >= 0.1
	 */
	function newt_cursor_on(): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $microseconds
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-delay.php
	 * @since PECL newt >= 0.1
	 */
	function newt_delay(int $microseconds): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $form
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-draw-form.php
	 * @since PECL newt >= 0.1
	 */
	function newt_draw_form($form): void {}

	/**
	 * Displays the string text at the position indicated
	 * <p>Displays the string text at the position indicated.</p>
	 * @param int $left <p>Column number</p> <p><b>Note</b>:</p><p>If left is negative, the position is measured from the opposite side of the screen.</p>
	 * @param int $top <p>Line number</p> <p><b>Note</b>:</p><p>If top is negative, the position is measured from the opposite side of the screen.</p>
	 * @param string $text <p>Text to display.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-draw-root-text.php
	 * @see newt_push_help_line(), newt_pop_help_line()
	 * @since PECL newt >= 0.1
	 */
	function newt_draw_root_text(int $left, int $top, string $text): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param int $width
	 * @param string $init_value
	 * @param int $flags
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_entry(int $left, int $top, int $width, string $init_value = NULL, int $flags = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $entry
	 * @return string
	 * @link http://php.net/manual/en/function.newt-entry-get-value.php
	 * @since PECL newt >= 0.1
	 */
	function newt_entry_get_value($entry): string {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $entry
	 * @param string $value
	 * @param bool $cursor_at_end
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-entry-set.php
	 * @since PECL newt >= 0.1
	 */
	function newt_entry_set($entry, string $value, bool $cursor_at_end = NULL): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $entry
	 * @param callable $filter
	 * @param mixed $data
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-entry-set-filter.php
	 * @since PECL newt >= 0.1
	 */
	function newt_entry_set_filter($entry, callable $filter, $data): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $entry
	 * @param int $flags
	 * @param int $sense
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-entry-set-flags.php
	 * @since PECL newt >= 0.1
	 */
	function newt_entry_set_flags($entry, int $flags, int $sense): void {}

	/**
	 * Uninitializes newt interface
	 * <p>Uninitializes newt interface. This function be called, when program is ready to exit.</p>
	 * @return int <p>Returns 1 on success, 0 on failure.</p>
	 * @link http://php.net/manual/en/function.newt-finished.php
	 * @see newt_init()
	 * @since PECL newt >= 0.1
	 */
	function newt_finished(): int {}

	/**
	 * Create a form
	 * <p>Create a new form.</p>
	 * @param resource $vert_bar <p>Vertical scrollbar which should be associated with the form</p>
	 * @param string $help <p>Help text string</p>
	 * @param int $flags <p>Various flags</p>
	 * @return resource <p>Returns a resource link to the created form component, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.newt-form.php
	 * @see newt_form_run(), newt_run_form(), newt_form_add_component(), newt_form_add_components(), newt_form_destroy()
	 * @since PECL newt >= 0.1
	 */
	function newt_form($vert_bar = NULL, string $help = NULL, int $flags = NULL) {}

	/**
	 * Adds a single component to the form
	 * <p>Adds a single component to the <code>form</code>.</p>
	 * @param resource $form <p>Form to which component will be added</p>
	 * @param resource $component <p>Component to add to the form</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-add-component.php
	 * @see newt_form_add_components()
	 * @since PECL newt >= 0.1
	 */
	function newt_form_add_component($form, $component): void {}

	/**
	 * Add several components to the form
	 * <p>Adds several components to the <code>form</code>.</p>
	 * @param resource $form <p>Form to which components will be added</p>
	 * @param array $components <p>Array of components to add to the form</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-add-components.php
	 * @see newt_form_add_component()
	 * @since PECL newt >= 0.1
	 */
	function newt_form_add_components($form, array $components): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $form
	 * @param int $key
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-add-hot-key.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_add_hot_key($form, int $key): void {}

	/**
	 * Destroys a form
	 * <p>This function frees the memory resources used by the form and all of the components which have been added to the form (including those components which are on subforms). Once a form has been destroyed, none of the form's components can be used.</p>
	 * @param resource $form <p>Form component, which is going to be destroyed</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-destroy.php
	 * @see newt_form_run(), newt_run_form()
	 * @since PECL newt >= 0.1
	 */
	function newt_form_destroy($form): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $form
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-form-get-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_get_current($form) {}

	/**
	 * Runs a form
	 * <p>This function runs the form passed to it.</p>
	 * @param resource $form <p>Form component</p>
	 * @param array $exit_struct <p>Array, used for returning information after running the form component. Keys and values are described in the following table:</p> <b>Form Exit Structure</b>   Index Key Value Type Description     reason integer  The reason, why the form has been exited. Possible values are defined here.    watch resource Resource link, specified in <code>newt_form_watch_fd()</code>   key integer Hotkey   component resource Component, which caused the form to exit
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-run.php
	 * @see newt_run_form()
	 * @since PECL newt >= 0.1
	 */
	function newt_form_run($form, array &$exit_struct): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $from
	 * @param int $background
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-set-background.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_set_background($from, int $background): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $form
	 * @param int $height
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-set-height.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_set_height($form, int $height): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $form
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-set-size.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_set_size($form): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $form
	 * @param int $milliseconds
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-set-timer.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_set_timer($form, int $milliseconds): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $form
	 * @param int $width
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-set-width.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_set_width($form, int $width): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $form
	 * @param resource $stream
	 * @param int $flags
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-form-watch-fd.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_watch_fd($form, $stream, int $flags = NULL): void {}

	/**
	 * Fills in the passed references with the current size of the terminal
	 * <p>Fills in the passed references with the current size of the terminal.</p>
	 * @param int $cols <p>Number of columns in the terminal</p>
	 * @param int $rows <p>Number of rows in the terminal</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-get-screen-size.php
	 * @since PECL newt >= 0.1
	 */
	function newt_get_screen_size(int &$cols, int &$rows): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $grid
	 * @param resource $form
	 * @param bool $recurse
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-grid-add-components-to-form.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_add_components_to_form($grid, $form, bool $recurse): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $text
	 * @param resource $middle
	 * @param resource $buttons
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-grid-basic-window.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_basic_window($text, $middle, $buttons) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $grid
	 * @param bool $recurse
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-grid-free.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_free($grid, bool $recurse): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param \resouce $grid
	 * @param int $width
	 * @param int $height
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-grid-get-size.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_get_size(\resouce $grid, int &$width, int &$height): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $element1_type
	 * @param resource $element1
	 * @param resource $_
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-grid-h-close-stacked.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_h_close_stacked(int $element1_type, $element1, $_ = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $element1_type
	 * @param resource $element1
	 * @param resource $_
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-grid-h-stacked.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_h_stacked(int $element1_type, $element1, $_ = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $grid
	 * @param int $left
	 * @param int $top
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-grid-place.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_place($grid, int $left, int $top): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $grid
	 * @param int $col
	 * @param int $row
	 * @param int $type
	 * @param resource $val
	 * @param int $pad_left
	 * @param int $pad_top
	 * @param int $pad_right
	 * @param int $pad_bottom
	 * @param int $anchor
	 * @param int $flags
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-grid-set-field.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_set_field($grid, int $col, int $row, int $type, $val, int $pad_left, int $pad_top, int $pad_right, int $pad_bottom, int $anchor, int $flags = NULL): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $text
	 * @param resource $middle
	 * @param resource $buttons
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-grid-simple-window.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_simple_window($text, $middle, $buttons) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $element1_type
	 * @param resource $element1
	 * @param resource $_
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-grid-v-close-stacked.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_v_close_stacked(int $element1_type, $element1, $_ = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $element1_type
	 * @param resource $element1
	 * @param resource $_
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-grid-v-stacked.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_v_stacked(int $element1_type, $element1, $_ = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $grid
	 * @param string $title
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-grid-wrapped-window.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_wrapped_window($grid, string $title): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $grid
	 * @param string $title
	 * @param int $left
	 * @param int $top
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-grid-wrapped-window-at.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_wrapped_window_at($grid, string $title, int $left, int $top): void {}

	/**
	 * Initialize newt
	 * <p>Initializes the newt interface. This function must be called before any other newt function.</p>
	 * @return int <p>Returns 1 on success, 0 on failure.</p>
	 * @link http://php.net/manual/en/function.newt-init.php
	 * @see newt_finished()
	 * @since PECL newt >= 0.1
	 */
	function newt_init(): int {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param string $text
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-label.php
	 * @since PECL newt >= 0.1
	 */
	function newt_label(int $left, int $top, string $text) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $label
	 * @param string $text
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-label-set-text.php
	 * @since PECL newt >= 0.1
	 */
	function newt_label_set_text($label, string $text): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param int $height
	 * @param int $flags
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-listbox.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox(int $left, int $top, int $height, int $flags = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @param string $text
	 * @param mixed $data
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-append-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_append_entry($listbox, string $text, $data): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listobx
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-clear.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_clear($listobx): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-clear-selection.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_clear_selection($listbox): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @param mixed $key
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-delete-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_delete_entry($listbox, $key): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @return string
	 * @link http://php.net/manual/en/function.newt-listbox-get-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_get_current($listbox): string {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @return array
	 * @link http://php.net/manual/en/function.newt-listbox-get-selection.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_get_selection($listbox): array {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @param string $text
	 * @param mixed $data
	 * @param mixed $key
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-insert-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_insert_entry($listbox, string $text, $data, $key): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @return int
	 * @link http://php.net/manual/en/function.newt-listbox-item-count.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_item_count($listbox): int {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @param mixed $key
	 * @param int $sense
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-select-item.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_select_item($listbox, $key, int $sense): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @param int $num
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-set-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_set_current($listbox, int $num): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @param mixed $key
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-set-current-by-key.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_set_current_by_key($listbox, $key): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @param int $num
	 * @param mixed $data
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-set-data.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_set_data($listbox, int $num, $data): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @param int $num
	 * @param string $text
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-set-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_set_entry($listbox, int $num, string $text): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $listbox
	 * @param int $width
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listbox-set-width.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_set_width($listbox, int $width): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param string $text
	 * @param bool $is_default
	 * @param \resouce $prev_item
	 * @param mixed $data
	 * @param int $flags
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-listitem.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listitem(int $left, int $top, string $text, bool $is_default, \resouce $prev_item, $data, int $flags = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $item
	 * @return mixed
	 * @link http://php.net/manual/en/function.newt-listitem-get-data.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listitem_get_data($item) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $item
	 * @param string $text
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-listitem-set.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listitem_set($item, string $text): void {}

	/**
	 * Open a window of the specified size and position
	 * <p>Open a window of the specified size and position.</p>
	 * @param int $left <p>Location of the upper left-hand corner of the window (column number)</p>
	 * @param int $top <p>Location of the upper left-hand corner of the window (row number)</p>
	 * @param int $width <p>Window width</p>
	 * @param int $height <p>Window height</p>
	 * @param string $title <p>Window title</p>
	 * @return int <p>Returns 1 on success, 0 on failure.</p>
	 * @link http://php.net/manual/en/function.newt-open-window.php
	 * @see newt_pop_window(), newt_centered_window()
	 * @since PECL newt >= 0.1
	 */
	function newt_open_window(int $left, int $top, int $width, int $height, string $title = NULL): int {}

	/**
	 * Replaces the current help line with the one from the stack
	 * <p>Replaces the current help line with the one from the stack.</p><p><b>Note</b>:</p><p>It's important not to call to <b>newt_pop_help_line()</b> more than <code>newt_push_help_line()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-pop-help-line.php
	 * @see newt_push_help_line()
	 * @since PECL newt >= 0.1
	 */
	function newt_pop_help_line(): void {}

	/**
	 * Removes the top window from the display
	 * <p>Removes the top window from the display, and redraws the display areas which the window overwrote.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-pop-window.php
	 * @see newt_open_window(), newt_centered_window()
	 * @since PECL newt >= 0.1
	 */
	function newt_pop_window(): void {}

	/**
	 * Saves the current help line on a stack, and displays the new line
	 * <p>Saves the current help line on a stack, and displays the new line.</p>
	 * @param string $text <p>New help text message</p> <p><b>Note</b>:</p><p>If not specified, the help line is cleared.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-push-help-line.php
	 * @see newt_pop_help_line()
	 * @since PECL newt >= 0.1
	 */
	function newt_push_help_line(string $text = NULL): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $set_member
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-radio-get-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_radio_get_current($set_member) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param string $text
	 * @param bool $is_default
	 * @param resource $prev_button
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-radiobutton.php
	 * @since PECL newt >= 0.1
	 */
	function newt_radiobutton(int $left, int $top, string $text, bool $is_default, $prev_button = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-redraw-help-line.php
	 * @since PECL newt >= 0.1
	 */
	function newt_redraw_help_line(): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $text
	 * @param int $width
	 * @param int $flex_down
	 * @param int $flex_up
	 * @param int $actual_width
	 * @param int $actual_height
	 * @return string
	 * @link http://php.net/manual/en/function.newt-reflow-text.php
	 * @since PECL newt >= 0.1
	 */
	function newt_reflow_text(string $text, int $width, int $flex_down, int $flex_up, int &$actual_width, int &$actual_height): string {}

	/**
	 * Updates modified portions of the screen
	 * <p>To increase performance, newt only updates the display when it needs to, not when the program tells it to write to the terminal. Applications can force newt to immediately update modified portions of the screen by calling this function.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-refresh.php
	 * @since PECL newt >= 0.1
	 */
	function newt_refresh(): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param bool $redraw
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-resize-screen.php
	 * @since PECL newt >= 0.1
	 */
	function newt_resize_screen(bool $redraw = NULL): void {}

	/**
	 * Resume using the newt interface after calling newt_suspend()
	 * <p>Resume using the newt interface after calling <code>newt_suspend()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-resume.php
	 * @see newt_suspend()
	 * @since PECL newt >= 0.1
	 */
	function newt_resume(): void {}

	/**
	 * Runs a form
	 * <p>This function runs the form passed to it.</p>
	 * @param resource $form <p>Form component</p>
	 * @return resource <p>The component which caused the form to stop running.</p><p><b>Note</b>:</p><p>Notice that this function doesn't fit in with newt's normal naming convention. It is an older interface which will not work for all forms. It was left in newt only for legacy applications. It is a simpler interface than the new <code>newt_form_run()</code> though, and is still used quite often as a result. When an application is done with a form, it destroys the form and all of the components the form contains.</p>
	 * @link http://php.net/manual/en/function.newt-run-form.php
	 * @see newt_form_run(), newt_form_destroy()
	 * @since PECL newt >= 0.1
	 */
	function newt_run_form($form) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param int $width
	 * @param int $full_value
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-scale.php
	 * @since PECL newt >= 0.1
	 */
	function newt_scale(int $left, int $top, int $width, int $full_value) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $scale
	 * @param int $amount
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-scale-set.php
	 * @since PECL newt >= 0.1
	 */
	function newt_scale_set($scale, int $amount): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $scrollbar
	 * @param int $where
	 * @param int $total
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-scrollbar-set.php
	 * @since PECL newt >= 0.1
	 */
	function newt_scrollbar_set($scrollbar, int $where, int $total): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param mixed $function
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-set-help-callback.php
	 * @since PECL newt >= 0.1
	 */
	function newt_set_help_callback($function): void {}

	/**
	 * Set a callback function which gets invoked when user presses the suspend key
	 * <p>Set a callback function which gets invoked when user presses the suspend key (normally ^Z). If no suspend callback is registered, the suspend keystroke is ignored.</p>
	 * @param callable $function <p>A callback function, which accepts one argument: data</p>
	 * @param mixed $data <p>This data is been passed to the callback function</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-set-suspend-callback.php
	 * @see newt_suspend(), newt_resume()
	 * @since PECL newt >= 0.1
	 */
	function newt_set_suspend_callback(callable $function, $data): void {}

	/**
	 * Tells newt to return the terminal to its initial state
	 * <p>Tells newt to return the terminal to its initial state. Once this is done, the application can suspend itself (by sending itself a SIGTSTP, fork a child program, or do whatever else it likes).</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-suspend.php
	 * @see newt_resume()
	 * @since PECL newt >= 0.1
	 */
	function newt_suspend(): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param int $width
	 * @param int $height
	 * @param int $flags
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-textbox.php
	 * @since PECL newt >= 0.1
	 */
	function newt_textbox(int $left, int $top, int $width, int $height, int $flags = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $textbox
	 * @return int
	 * @link http://php.net/manual/en/function.newt-textbox-get-num-lines.php
	 * @since PECL newt >= 0.1
	 */
	function newt_textbox_get_num_lines($textbox): int {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param \char $_text
	 * @param int $width
	 * @param int $flex_down
	 * @param int $flex_up
	 * @param int $flags
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-textbox-reflowed.php
	 * @since PECL newt >= 0.1
	 */
	function newt_textbox_reflowed(int $left, int $top, \char $_text, int $width, int $flex_down, int $flex_up, int $flags = NULL) {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $textbox
	 * @param int $height
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-textbox-set-height.php
	 * @since PECL newt >= 0.1
	 */
	function newt_textbox_set_height($textbox, int $height): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $textbox
	 * @param string $text
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-textbox-set-text.php
	 * @since PECL newt >= 0.1
	 */
	function newt_textbox_set_text($textbox, string $text): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $left
	 * @param int $top
	 * @param int $height
	 * @param int $normal_colorset
	 * @param int $thumb_colorset
	 * @return resource
	 * @link http://php.net/manual/en/function.newt-vertical-scrollbar.php
	 * @since PECL newt >= 0.1
	 */
	function newt_vertical_scrollbar(int $left, int $top, int $height, int $normal_colorset = NULL, int $thumb_colorset = NULL) {}

	/**
	 * Doesn't return until a key has been pressed
	 * <p>This function doesn't return until a key has been pressed. The keystroke is then ignored. If a key is already in the terminal's buffer, this function discards a keystroke and returns immediately.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-wait-for-key.php
	 * @see newt_clear_key_buffer()
	 * @since PECL newt >= 0.1
	 */
	function newt_wait_for_key(): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $title
	 * @param string $button1_text
	 * @param string $button2_text
	 * @param string $format
	 * @param mixed $args
	 * @param mixed $_
	 * @return int
	 * @link http://php.net/manual/en/function.newt-win-choice.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_choice(string $title, string $button1_text, string $button2_text, string $format, $args = NULL, $_ = NULL): int {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $title
	 * @param string $text
	 * @param int $suggested_width
	 * @param int $flex_down
	 * @param int $flex_up
	 * @param int $data_width
	 * @param array $items
	 * @param string $button1
	 * @param string $_
	 * @return int
	 * @link http://php.net/manual/en/function.newt-win-entries.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_entries(string $title, string $text, int $suggested_width, int $flex_down, int $flex_up, int $data_width, array &$items, string $button1, string $_ = NULL): int {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $title
	 * @param string $text
	 * @param int $suggestedWidth
	 * @param int $flexDown
	 * @param int $flexUp
	 * @param int $maxListHeight
	 * @param array $items
	 * @param int $listItem
	 * @param string $button1
	 * @param string $_
	 * @return int <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-win-menu.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_menu(string $title, string $text, int $suggestedWidth, int $flexDown, int $flexUp, int $maxListHeight, array $items, int &$listItem, string $button1 = NULL, string $_ = NULL): int {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $title
	 * @param string $button_text
	 * @param string $format
	 * @param mixed $args
	 * @param mixed $_
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-win-message.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_message(string $title, string $button_text, string $format, $args = NULL, $_ = NULL): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $title
	 * @param string $button_text
	 * @param string $format
	 * @param array $args
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.newt-win-messagev.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_messagev(string $title, string $button_text, string $format, array $args): void {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $title <p>Its description</p>
	 * @param string $button1_text <p>Its description</p>
	 * @param string $button2_text <p>Its description</p>
	 * @param string $button3_text <p>Its description</p>
	 * @param string $format <p>Its description</p>
	 * @param mixed $args <p>Its description</p>
	 * @param mixed $_
	 * @return int <p>What the function returns, first on success, then on failure. See also the &amp;return.success; entity</p>
	 * @link http://php.net/manual/en/function.newt-win-ternary.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_ternary(string $title, string $button1_text, string $button2_text, string $button3_text, string $format, $args = NULL, $_ = NULL): int {}

}
