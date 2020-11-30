<?php



namespace {

	/**
	 * Get the long name of an ID3v2 frame
	 * <p><b>id3_get_frame_long_name()</b> returns the long name for an ID3v2 frame.</p>
	 * @param string $frameId <p>An ID3v2 frame</p>
	 * @return string <p>Returns the frame long name or <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.id3-get-frame-long-name.php
	 * @see id3_get_frame_short_name()
	 * @since PECL id3 >= 0.2
	 */
	function id3_get_frame_long_name(string $frameId): string {}

	/**
	 * Get the short name of an ID3v2 frame
	 * <p><b>id3_get_frame_short_name()</b> returns the short name for an ID3v2 frame.</p>
	 * @param string $frameId <p>An ID3v2 frame</p>
	 * @return string <p>Returns the frame short name or <b><code>FALSE</code></b> on errors.</p><p>The values returned by <b>id3_get_frame_short_name()</b> are used in the array returned by <code>id3_get_tag()</code>.</p>
	 * @link http://php.net/manual/en/function.id3-get-frame-short-name.php
	 * @see id3_get_frame_long_name()
	 * @since PECL id3 >= 0.2
	 */
	function id3_get_frame_short_name(string $frameId): string {}

	/**
	 * Get the id for a genre
	 * <p><b>id3_get_genre_id()</b> returns the id for a genre.</p>
	 * @param string $genre <p>Genre name as string.</p>
	 * @return int <p>The genre id or <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.id3-get-genre-id.php
	 * @see id3_get_genre_name(), id3_get_genre_list()
	 * @since PECL id3 >= 0.1
	 */
	function id3_get_genre_id(string $genre): int {}

	/**
	 * Get all possible genre values
	 * <p><b>id3_get_genre_list()</b> returns an array containing all possible genres that may be stored in an ID3 tag. This list has been created by Eric Kemp and later extended by WinAmp.</p><p>This function is useful to provide you users a list of genres from which they may choose one. When updating the ID3 tag you will always have to specify the genre as an integer ranging from 0 to 147.</p>
	 * @return array <p>Returns an array containing all possible genres that may be stored in an ID3 tag.</p>
	 * @link http://php.net/manual/en/function.id3-get-genre-list.php
	 * @see id3_get_genre_name(), id3_get_genre_id()
	 * @since PECL id3 >= 0.1
	 */
	function id3_get_genre_list(): array {}

	/**
	 * Get the name for a genre id
	 * <p><b>id3_get_genre_name()</b> returns the name for a genre id.</p>
	 * @param int $genre_id <p>An integer ranging from 0 to 147</p>
	 * @return string <p>Returns the name as a string.</p>
	 * @link http://php.net/manual/en/function.id3-get-genre-name.php
	 * @see id3_get_genre_list(), id3_get_genre_id()
	 * @since PECL id3 >= 0.1
	 */
	function id3_get_genre_name(int $genre_id): string {}

	/**
	 * Get all information stored in an ID3 tag
	 * <p><b>id3_get_tag()</b> is used to get all information stored in the id3 tag of the specified file.</p>
	 * @param string $filename <p>The path to the MP3 file</p> <p>Instead of a filename you may also pass a valid stream resource</p>
	 * @param int $version <p>Allows you to specify the version of the tag as MP3 files may contain both, version 1.x and version 2.x tags</p> <p>Since version 0.2 <b>id3_get_tag()</b> also supports ID3 tags of version 2.2, 2.3 and 2.4. To extract information from these tags, pass one of the constants ID3_V2_2, ID3_V2_3 or ID3_V2_4 as the second parameter. ID3 v2.x tags can contain a lot more information about the MP3 file than ID3 v1.x tags.</p>
	 * @return array <p>Returns an associative array with various keys like: <i>title</i>, <i>artist</i>, ..</p><p>The key <i>genre</i> will contain an integer between 0 and 147. You may use <code>id3_get_genre_name()</code> to convert it to a human readable string.</p>
	 * @link http://php.net/manual/en/function.id3-get-tag.php
	 * @see id3_set_tag(), id3_remove_tag(), id3_get_version()
	 * @since PECL id3 >= 0.1
	 */
	function id3_get_tag(string $filename, int $version = ID3_BEST): array {}

	/**
	 * Get version of an ID3 tag
	 * <p><b>id3_get_version()</b> retrieves the version(s) of the ID3 tag(s) in the MP3 file.</p><p>If a file contains an ID3 v1.1 tag, it always contains a 1.0 tag, as version 1.1 is just an extension of 1.0.</p>
	 * @param string $filename <p>The path to the MP3 file</p> <p>Instead of a filename you may also pass a valid stream resource</p>
	 * @return int <p>Returns the version number of the ID3 tag of the file. As a tag can contain ID3 v1.x and v2.x tags, the return value of this function should be bitwise compared with the predefined constants <b><code>ID3_V1_0</code></b>, <b><code>ID3_V1_1</code></b> and <b><code>ID3_V2</code></b>.</p>
	 * @link http://php.net/manual/en/function.id3-get-version.php
	 * @see id3_set_tag(), id3_get_tag(), id3_remove_tag()
	 * @since PECL id3 >= 0.1
	 */
	function id3_get_version(string $filename): int {}

	/**
	 * Remove an existing ID3 tag
	 * <p><b>id3_remove_tag()</b> is used to remove the information stored of an ID3 tag.</p>
	 * @param string $filename <p>The path to the MP3 file</p> <p>Instead of a filename you may also pass a valid stream resource</p>
	 * @param int $version <p>Allows you to specify the version of the tag as MP3 files may contain both, version 1.x and version 2.x tags.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.id3-remove-tag.php
	 * @see id3_set_tag(), id3_get_tag(), id3_get_version()
	 * @since PECL id3 >= 0.1
	 */
	function id3_remove_tag(string $filename, int $version = ID3_V1_0): bool {}

	/**
	 * Update information stored in an ID3 tag
	 * <p><b>id3_set_tag()</b> is used to change the information stored of an ID3 tag. If no tag has been present, it will be added to the file.</p>
	 * @param string $filename <p>The path to the MP3 file</p> <p>Instead of a filename you may also pass a valid stream resource</p>
	 * @param array $tag <p>An associative array of tag keys and values</p> <p>The following keys may be used in the associative array:</p> <p></p> <b>Keys in the associative array</b>   key possible value available in version     title string with maximum of 30 characters v1.0, v1.1   artist string with maximum of 30 characters v1.0, v1.1   album string with maximum of 30 characters v1.0, v1.1   year 4 digits v1.0, v1.1   genre integer value between 0 and 147 v1.0, v1.1   comment string with maximum of 30 characters (28 in v1.1) v1.0, v1.1   track integer between 0 and 255 v1.1
	 * @param int $version <p>Allows you to specify the version of the tag as MP3 files may contain both, version 1.x and version 2.x tags</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.id3-set-tag.php
	 * @see id3_remove_tag(), id3_get_tag(), id3_get_version()
	 * @since PECL id3 >= 0.1
	 */
	function id3_set_tag(string $filename, array $tag, int $version = ID3_V1_0): bool {}

	/**
	 * <b><code>ID3_BEST</code></b> is used if would like to let the id3 functions determine which tag version should be used.
	 */
	define('ID3_BEST', null);

	/**
	 * <b><code>ID3_V1_0</code></b> is used if you are working with ID3 V1.0 tags. These tags may contain the fields title, artist, album, genre, year and comment.
	 */
	define('ID3_V1_0', null);

	/**
	 * <b><code>ID3_V1_1</code></b> is used if you are working with ID3 V1.1 tags. These tags may all information contained in v1.0 tags plus the track number.
	 */
	define('ID3_V1_1', null);

	/**
	 * <b><code>ID3_V2_1</code></b> is used if you are working with ID3 V2.1 tags.
	 */
	define('ID3_V2_1', null);

	/**
	 * <b><code>ID3_V2_2</code></b> is used if you are working with ID3 V2.2 tags.
	 */
	define('ID3_V2_2', null);

	/**
	 * <b><code>ID3_V2_3</code></b> is used if you are working with ID3 V2.3 tags.
	 */
	define('ID3_V2_3', null);

	/**
	 * <b><code>ID3_V2_4</code></b> is used if you are working with ID3 V2.4 tags.
	 */
	define('ID3_V2_4', null);

}
