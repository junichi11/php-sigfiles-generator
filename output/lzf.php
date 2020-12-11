<?php



namespace {

	/**
	 * LZF compression
	 * <p><b>lzf_compress()</b> compresses the given <code>data</code> string using LZF encoding.</p>
	 * @param string $data <p>The string to compress.</p>
	 * @return string <p>Returns the compressed data or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/function.lzf-compress.php
	 * @see lzf_decompress()
	 * @since PECL lzf >= 0.1.0
	 */
	function lzf_compress(string $data): string {}

	/**
	 * LZF decompression
	 * <p><code>lzf_compress()</code> decompresses the given <code>data</code> string containing lzf encoded data.</p>
	 * @param string $data <p>The compressed string.</p>
	 * @return string <p>Returns the decompressed data or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/function.lzf-decompress.php
	 * @see lzf_compress()
	 * @since PECL lzf >= 0.1.0
	 */
	function lzf_decompress(string $data): string {}

	/**
	 * Determines what LZF extension was optimized for
	 * <p>Determines what was LZF extension optimized for during compilation.</p>
	 * @return int <p>Returns 1 if LZF was optimized for speed, 0 for compression.</p>
	 * @link https://php.net/manual/en/function.lzf-optimized-for.php
	 * @since PECL lzf >= 1.0.0
	 */
	function lzf_optimized_for(): int {}

}
