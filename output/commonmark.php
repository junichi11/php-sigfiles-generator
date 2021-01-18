<?php



namespace CommonMark {

	/**
	 * Parsing
	 * <p>Shall parse <code>content</code></p>
	 * @param string $content <p>markdown string</p>
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Parser\Normal</code></b> (<code>int</code>)       <b><code>CommonMark\Parser\Normalize</code></b> (<code>int</code>)       <b><code>CommonMark\Parser\ValidateUTF8</code></b> (<code>int</code>)       <b><code>CommonMark\Parser\Smart</code></b> (<code>int</code>)
	 * @return CommonMark\Node <p>Shall return root CommonMark\Node</p>
	 * @link https://php.net/manual/en/function.commonmark-parse.php
	 * @since cmark >= 1.0.0
	 */
	function Parse(string $content, int $options = null): \CommonMark\Node {}

	/**
	 * Rendering
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \CommonMark\Node $node
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Render\Normal</code></b> (<code>int</code>)       <b><code>CommonMark\Render\SourcePos</code></b> (<code>int</code>)       <b><code>CommonMark\Render\HardBreaks</code></b> (<code>int</code>)       <b><code>CommonMark\Render\Safe</code></b> (<code>int</code>)       <b><code>CommonMark\Render\NoBreaks</code></b> (<code>int</code>)
	 * @param int $width
	 * @return string
	 * @link https://php.net/manual/en/function.commonmark-render.php
	 * @since cmark >= 1.0.0
	 */
	function Render(\CommonMark\Node $node, int $options = null, int $width = null): string {}

}

namespace CommonMark\Render {

	/**
	 * Rendering
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \CommonMark\Node $node
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Render\Normal</code></b> (<code>int</code>)       <b><code>CommonMark\Render\SourcePos</code></b> (<code>int</code>)       <b><code>CommonMark\Render\HardBreaks</code></b> (<code>int</code>)       <b><code>CommonMark\Render\Safe</code></b> (<code>int</code>)       <b><code>CommonMark\Render\NoBreaks</code></b> (<code>int</code>)
	 * @return string
	 * @link https://php.net/manual/en/function.commonmark-render-html.php
	 * @since cmark >= 1.0.0
	 */
	function HTML(\CommonMark\Node $node, int $options = null): string {}

	/**
	 * Rendering
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \CommonMark\Node $node
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Render\Normal</code></b> (<code>int</code>)       <b><code>CommonMark\Render\SourcePos</code></b> (<code>int</code>)       <b><code>CommonMark\Render\HardBreaks</code></b> (<code>int</code>)       <b><code>CommonMark\Render\Safe</code></b> (<code>int</code>)       <b><code>CommonMark\Render\NoBreaks</code></b> (<code>int</code>)
	 * @param int $width
	 * @return string
	 * @link https://php.net/manual/en/function.commonmark-render-latex.php
	 * @since cmark >= 1.0.0
	 */
	function Latex(\CommonMark\Node $node, int $options = null, int $width = null): string {}

	/**
	 * Rendering
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \CommonMark\Node $node
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Render\Normal</code></b> (<code>int</code>)       <b><code>CommonMark\Render\SourcePos</code></b> (<code>int</code>)       <b><code>CommonMark\Render\HardBreaks</code></b> (<code>int</code>)       <b><code>CommonMark\Render\Safe</code></b> (<code>int</code>)       <b><code>CommonMark\Render\NoBreaks</code></b> (<code>int</code>)
	 * @param int $width
	 * @return string
	 * @link https://php.net/manual/en/function.commonmark-render-man.php
	 * @since cmark >= 1.0.0
	 */
	function Man(\CommonMark\Node $node, int $options = null, int $width = null): string {}

	/**
	 * Rendering
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \CommonMark\Node $node
	 * @param int $options <p>A mask of:</p>   <b><code>CommonMark\Render\Normal</code></b> (<code>int</code>)       <b><code>CommonMark\Render\SourcePos</code></b> (<code>int</code>)       <b><code>CommonMark\Render\HardBreaks</code></b> (<code>int</code>)       <b><code>CommonMark\Render\Safe</code></b> (<code>int</code>)       <b><code>CommonMark\Render\NoBreaks</code></b> (<code>int</code>)
	 * @return string
	 * @link https://php.net/manual/en/function.commonmark-render-xml.php
	 * @since cmark >= 1.0.0
	 */
	function XML(\CommonMark\Node $node, int $options = null): string {}

}
