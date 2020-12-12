<?php



namespace {

	/**
	 * Make binary diff of two files
	 * <p>Makes a binary diff of two files and stores the result in a patch file. This function works with both text and binary files. Resulting patch file can be later applied using <code>xdiff_file_bpatch()</code>/<code>xdiff_string_bpatch()</code>.</p>
	 * @param string $old_file <p>Path to the first file. This file acts as "old" file.</p>
	 * @param string $new_file <p>Path to the second file. This file acts as "new" file.</p>
	 * @param string $dest <p>Path of the resulting patch file. Resulting file contains differences between "old" and "new" files. It is in binary format and is human-unreadable.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xdiff-file-bdiff.php
	 * @see xdiff_file_bpatch()
	 * @since PECL xdiff >= 1.5.0
	 */
	function xdiff_file_bdiff(string $old_file, string $new_file, string $dest): bool {}

	/**
	 * Read a size of file created by applying a binary diff
	 * <p>Returns a size of a result file that would be created after applying binary patch from file <code>file</code> to the original file.</p>
	 * @param string $file <p>The path to the binary patch created by <code>xdiff_string_bdiff()</code> or <code>xdiff_string_rabdiff()</code> function.</p>
	 * @return int <p>Returns the size of file that would be created.</p>
	 * @link https://php.net/manual/en/function.xdiff-file-bdiff-size.php
	 * @see xdiff_file_bdiff(), xdiff_file_rabdiff(), xdiff_file_bpatch()
	 * @since PECL xdiff >= 1.5.0
	 */
	function xdiff_file_bdiff_size(string $file): int {}

	/**
	 * Patch a file with a binary diff
	 * <p>Patches a <code>file</code> with a binary <code>patch</code> and stores the result in a file <code>dest</code>. This function accepts patches created both via <code>xdiff_file_bdiff()</code> and <code>xdiff_file_rabdiff()</code> functions or their string counterparts.</p>
	 * @param string $file <p>The original file.</p>
	 * @param string $patch <p>The binary patch file.</p>
	 * @param string $dest <p>Path of the resulting file.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xdiff-file-bpatch.php
	 * @see xdiff_file_bdiff(), xdiff_file_rabdiff()
	 * @since PECL xdiff >= 1.5.0
	 */
	function xdiff_file_bpatch(string $file, string $patch, string $dest): bool {}

	/**
	 * Make unified diff of two files
	 * <p>Makes an unified diff containing differences between <code>old_file</code> and <code>new_file</code> and stores it in <code>dest</code> file. The resulting file is human-readable. An optional <code>context</code> parameter specifies how many lines of context should be added around each change. Setting <code>minimal</code> parameter to true will result in outputting the shortest patch file possible (can take a long time).</p>
	 * @param string $old_file <p>Path to the first file. This file acts as "old" file.</p>
	 * @param string $new_file <p>Path to the second file. This file acts as "new" file.</p>
	 * @param string $dest <p>Path of the resulting patch file.</p>
	 * @param int $context <p>Indicates how many lines of context you want to include in diff result.</p>
	 * @param bool $minimal <p>Set this parameter to <b><code>TRUE</code></b> if you want to minimalize size of the result (can take a long time).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xdiff-file-diff.php
	 * @see xdiff_file_patch()
	 * @since PECL xdiff >= 0.2.0
	 */
	function xdiff_file_diff(string $old_file, string $new_file, string $dest, int $context = 3, bool $minimal = FALSE): bool {}

	/**
	 * Alias of xdiff_file_bdiff
	 * <p>Makes a binary diff of two files and stores the result in a patch file. This function works with both text and binary files. Resulting patch file can be later applied using <code>xdiff_file_bpatch()</code>.</p><p>Starting with version 1.5.0 this function is an alias of <code>xdiff_file_bdiff()</code>.</p>
	 * @link https://php.net/manual/en/function.xdiff-file-diff-binary.php
	 * @since PECL xdiff >= 0.2.0
	 */
	function xdiff_file_diff_binary() {}

	/**
	 * Merge 3 files into one
	 * <p>Merges three files into one and stores the result in a file <code>dest</code>. The <code>old_file</code> is an original version while <code>new_file1</code> and <code>new_file2</code> are modified versions of an original.</p>
	 * @param string $old_file <p>Path to the first file. It acts as "old" file.</p>
	 * @param string $new_file1 <p>Path to the second file. It acts as modified version of <code>old_file</code>.</p>
	 * @param string $new_file2 <p>Path to the third file. It acts as modified version of <code>old_file</code>.</p>
	 * @param string $dest <p>Path of the resulting file, containing merged changed from both <code>new_file1</code> and <code>new_file2</code>.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> if merge was successful, string with rejected chunks if it was not or <b><code>FALSE</code></b> if an internal error happened.</p>
	 * @link https://php.net/manual/en/function.xdiff-file-merge3.php
	 * @see xdiff_string_merge3()
	 * @since PECL xdiff >= 0.2.0
	 */
	function xdiff_file_merge3(string $old_file, string $new_file1, string $new_file2, string $dest): mixed {}

	/**
	 * Patch a file with an unified diff
	 * <p>Patches a <code>file</code> with a <code>patch</code> and stores the result in a file. <code>patch</code> has to be an unified diff created by <code>xdiff_file_diff()</code>/<code>xdiff_string_diff()</code> function. An optional <code>flags</code> parameter specifies mode of operation.</p>
	 * @param string $file <p>The original file.</p>
	 * @param string $patch <p>The unified patch file. It has to be created using <code>xdiff_string_diff()</code>, <code>xdiff_file_diff()</code> functions or compatible tools.</p>
	 * @param string $dest <p>Path of the resulting file.</p>
	 * @param int $flags <p>Can be either <b><code>XDIFF_PATCH_NORMAL</code></b> (default mode, normal patch) or <b><code>XDIFF_PATCH_REVERSE</code></b> (reversed patch).</p> <p>Starting from version 1.5.0, you can also use binary OR to enable <b><code>XDIFF_PATCH_IGNORESPACE</code></b> flag.</p>
	 * @return mixed <p>Returns <b><code>FALSE</code></b> if an internal error happened, string with rejected chunks if patch couldn't be applied or <b><code>TRUE</code></b> if patch has been successfully applied.</p>
	 * @link https://php.net/manual/en/function.xdiff-file-patch.php
	 * @see xdiff_file_diff()
	 * @since PECL xdiff >= 0.2.0
	 */
	function xdiff_file_patch(string $file, string $patch, string $dest, int $flags = DIFF_PATCH_NORMAL): mixed {}

	/**
	 * Alias of xdiff_file_bpatch
	 * <p>Patches a <code>file</code> with a binary <code>patch</code> and stores the result in a file <code>dest</code>. This function accepts patches created both via <code>xdiff_file_bdiff()</code> or <code>xdiff_file_rabdiff()</code> functions or their string counterparts.</p><p>Starting with version 1.5.0 this function is an alias of <code>xdiff_file_bpatch()</code>.</p>
	 * @link https://php.net/manual/en/function.xdiff-file-patch-binary.php
	 * @since PECL xdiff >= 0.2.0
	 */
	function xdiff_file_patch_binary() {}

	/**
	 * Make binary diff of two files using the Rabin's polynomial fingerprinting algorithm
	 * <p>Makes a binary diff of two files and stores the result in a patch file. The difference between this function and <code>xdiff_file_bdiff()</code> is different algorithm used which should result in faster execution and smaller diff produced. This function works with both text and binary files. Resulting patch file can be later applied using <code>xdiff_file_bpatch()</code>/<code>xdiff_string_bpatch()</code>.</p><p>For more details about differences between algorithm used please check libxdiff website.</p>
	 * @param string $old_file <p>Path to the first file. This file acts as "old" file.</p>
	 * @param string $new_file <p>Path to the second file. This file acts as "new" file.</p>
	 * @param string $dest <p>Path of the resulting patch file. Resulting file contains differences between "old" and "new" files. It is in binary format and is human-unreadable.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xdiff-file-rabdiff.php
	 * @see xdiff_file_bpatch()
	 * @since PECL xdiff >= 1.5.0
	 */
	function xdiff_file_rabdiff(string $old_file, string $new_file, string $dest): bool {}

	/**
	 * Make binary diff of two strings
	 * <p>Makes a binary diff of two strings and returns the result. This function works with both text and binary data. Resulting patch can be later applied using <code>xdiff_string_bpatch()</code>/<code>xdiff_file_bpatch()</code>.</p>
	 * @param string $old_data <p>First string with binary data. It acts as "old" data.</p>
	 * @param string $new_data <p>Second string with binary data. It acts as "new" data.</p>
	 * @return string <p>Returns string with binary diff containing differences between "old" and "new" data or <b><code>FALSE</code></b> if an internal error occurred.</p>
	 * @link https://php.net/manual/en/function.xdiff-string-bdiff.php
	 * @see xdiff_string_bpatch()
	 * @since PECL xdiff >= 1.5.0
	 */
	function xdiff_string_bdiff(string $old_data, string $new_data): string {}

	/**
	 * Read a size of file created by applying a binary diff
	 * <p>Returns a size of a result file that would be created after applying binary <code>patch</code> to the original file.</p>
	 * @param string $patch <p>The binary patch created by <code>xdiff_string_bdiff()</code> or <code>xdiff_string_rabdiff()</code> function.</p>
	 * @return int <p>Returns the size of file that would be created.</p>
	 * @link https://php.net/manual/en/function.xdiff-string-bdiff-size.php
	 * @see xdiff_string_bdiff(), xdiff_string_rabdiff(), xdiff_string_bpatch()
	 * @since PECL xdiff >= 1.5.0
	 */
	function xdiff_string_bdiff_size(string $patch): int {}

	/**
	 * Patch a string with a binary diff
	 * <p>Patches a string <code>str</code> with a binary <code>patch</code>. This function accepts patches created both via <code>xdiff_string_bdiff()</code> and <code>xdiff_string_rabdiff()</code> functions or their file counterparts.</p>
	 * @param string $str <p>The original binary string.</p>
	 * @param string $patch <p>The binary patch string.</p>
	 * @return string <p>Returns the patched string, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.xdiff-string-bpatch.php
	 * @see xdiff_string_bdiff(), xdiff_string_rabdiff()
	 * @since PECL xdiff >= 1.5.0
	 */
	function xdiff_string_bpatch(string $str, string $patch): string {}

	/**
	 * Make unified diff of two strings
	 * <p>Makes an unified diff containing differences between <code>old_data</code> string and <code>new_data</code> string and returns it. The resulting diff is human-readable. An optional <code>context</code> parameter specifies how many lines of context should be added around each change. Setting <code>minimal</code> parameter to true will result in outputting the shortest patch file possible (can take a long time).</p>
	 * @param string $old_data <p>First string with data. It acts as "old" data.</p>
	 * @param string $new_data <p>Second string with data. It acts as "new" data.</p>
	 * @param int $context <p>Indicates how many lines of context you want to include in the diff result.</p>
	 * @param bool $minimal <p>Set this parameter to <b><code>TRUE</code></b> if you want to minimalize the size of the result (can take a long time).</p>
	 * @return string <p>Returns string with resulting diff or <b><code>FALSE</code></b> if an internal error happened.</p>
	 * @link https://php.net/manual/en/function.xdiff-string-diff.php
	 * @see xdiff_string_patch()
	 * @since PECL xdiff >= 0.2.0
	 */
	function xdiff_string_diff(string $old_data, string $new_data, int $context = 3, bool $minimal = FALSE): string {}

	/**
	 * Alias of xdiff_string_bdiff
	 * <p>Makes a binary diff of two strings and returns the result. This function works with both text and binary data. Resulting patch can be later applied using <code>xdiff_string_bpatch()</code>/<code>xdiff_file_bpatch()</code>.</p><p>Starting with version 1.5.0 this function is an alias of <code>xdiff_string_bdiff()</code>.</p>
	 * @link https://php.net/manual/en/function.xdiff-string-diff-binary.php
	 * @since PECL xdiff >= 0.2.0
	 */
	function xdiff_string_diff_binary() {}

	/**
	 * Merge 3 strings into one
	 * <p>Merges three strings into one and returns the result. The <code>old_data</code> is an original version of data while <code>new_data1</code> and <code>new_data2</code> are modified versions of an original. An optional <code>error</code> is used to pass any rejected parts during merging process.</p>
	 * @param string $old_data <p>First string with data. It acts as "old" data.</p>
	 * @param string $new_data1 <p>Second string with data. It acts as modified version of <code>old_data</code>.</p>
	 * @param string $new_data2 <p>Third string with data. It acts as modified version of <code>old_data</code>.</p>
	 * @param string $error <p>If provided then rejected parts are stored inside this variable.</p>
	 * @return mixed <p>Returns the merged string, <b><code>FALSE</code></b> if an internal error happened, or <b><code>TRUE</code></b> if merged string is empty.</p>
	 * @link https://php.net/manual/en/function.xdiff-string-merge3.php
	 * @see xdiff_file_merge3()
	 * @since PECL xdiff >= 0.2.0
	 */
	function xdiff_string_merge3(string $old_data, string $new_data1, string $new_data2, string &$error = NULL): mixed {}

	/**
	 * Patch a string with an unified diff
	 * <p>Patches a <code>str</code> string with an unified patch in <code>patch</code> parameter and returns the result. <code>patch</code> has to be an unified diff created by <code>xdiff_file_diff()</code>/<code>xdiff_string_diff()</code> function. An optional <code>flags</code> parameter specifies mode of operation. Any rejected parts of the patch will be stored inside <code>error</code> variable if it is provided.</p>
	 * @param string $str <p>The original string.</p>
	 * @param string $patch <p>The unified patch string. It has to be created using <code>xdiff_string_diff()</code>, <code>xdiff_file_diff()</code> functions or compatible tools.</p>
	 * @param int $flags <p><code>flags</code> can be either <b><code>XDIFF_PATCH_NORMAL</code></b> (default mode, normal patch) or <b><code>XDIFF_PATCH_REVERSE</code></b> (reversed patch).</p> <p>Starting from version 1.5.0, you can also use binary OR to enable <b><code>XDIFF_PATCH_IGNORESPACE</code></b> flag.</p>
	 * @param string $error <p>If provided then rejected parts are stored inside this variable.</p>
	 * @return string <p>Returns the patched string, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.xdiff-string-patch.php
	 * @see xdiff_string_diff()
	 * @since PECL xdiff >= 0.2.0
	 */
	function xdiff_string_patch(string $str, string $patch, int $flags = NULL, string &$error = NULL): string {}

	/**
	 * Alias of xdiff_string_bpatch
	 * <p>Patches a string <code>str</code> with a binary <code>patch</code>. This function accepts patches created both via <code>xdiff_string_bdiff()</code> and <code>xdiff_string_rabdiff()</code> functions or their file counterparts.</p><p>Starting with version 1.5.0 this function is an alias of <code>xdiff_string_bpatch()</code>.</p>
	 * @link https://php.net/manual/en/function.xdiff-string-patch-binary.php
	 * @since PECL xdiff >= 0.2.0
	 */
	function xdiff_string_patch_binary() {}

	/**
	 * Make binary diff of two strings using the Rabin's polynomial fingerprinting algorithm
	 * <p>Makes a binary diff of two strings and returns the result. The difference between this function and <code>xdiff_string_bdiff()</code> is different algorithm used which should result in faster execution and smaller diff produced. This function works with both text and binary data. Resulting patch can be later applied using <code>xdiff_string_bpatch()</code>/<code>xdiff_file_bpatch()</code>.</p><p>For more details about differences between algorithm used please check libxdiff website.</p>
	 * @param string $old_data <p>First string with binary data. It acts as "old" data.</p>
	 * @param string $new_data <p>Second string with binary data. It acts as "new" data.</p>
	 * @return string <p>Returns string with binary diff containing differences between "old" and "new" data or <b><code>FALSE</code></b> if an internal error occurred.</p>
	 * @link https://php.net/manual/en/function.xdiff-string-rabdiff.php
	 * @see xdiff_string_bpatch()
	 * @since PECL xdiff >= 1.5.0
	 */
	function xdiff_string_rabdiff(string $old_data, string $new_data): string {}

	/**
	 * This flag indicates that <code>xdiff_string_patch()</code> and <code>xdiff_file_patch()</code> functions should create result by applying patch to original content thus creating newer version of file. This is the default mode of operation.
	 */
	define('XDIFF_PATCH_NORMAL', null);

	/**
	 * This flag indicated that <code>xdiff_string_patch()</code> and <code>xdiff_file_patch()</code> functions should create result by reversing patch changed from newer content thus creating original version.
	 */
	define('XDIFF_PATCH_REVERSE', null);

}
