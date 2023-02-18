<?php



namespace Vtiful\Kernel {

	/**
	 * <p>Create xlsx files and set cells and output xlsx files</p>
	 * @link https://php.net/manual/en/class.vtiful-kernel-excel.php
	 * @since PECL xlswriter >= 1.2.1
	 */
	class Excel {

		/**
		 * Vtiful\Kernel\Excel constructor
		 * <p><code>Vtiful\Kernel\Excel</code> constructor, create a class object.</p>
		 * @param array $config <p>XLSX file export configuration</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.construct.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function __construct(array $config) {}

		/**
		 * Vtiful\Kernel\Excel addSheet
		 * <p>Create a new worksheet in the xlsx file.</p>
		 * @param string $sheetName <p>Worksheet name</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.addSheet.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function addSheet(string $sheetName) {}

		/**
		 * Vtiful\Kernel\Excel autoFilter
		 * <p>Add autofilter to a worksheet.</p>
		 * @param string $scope <p>Cell start and end coordinate string.</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.autoFilter.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function autoFilter(string $scope) {}

		/**
		 * Vtiful\Kernel\Excel constMemory
		 * <p>Write a large file with constant memory usage.</p>
		 * @param string $fileName <p>XLSX file name</p>
		 * @param string $sheetName <p>Worksheet name</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.constMemory.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function constMemory(string $fileName, string $sheetName = null) {}

		/**
		 * Vtiful\Kernel\Excel data
		 * <p>Write a data in the worksheet.</p>
		 * @param array $data <p>worksheet data</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.data.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function data(array $data) {}

		/**
		 * Vtiful\Kernel\Excel fileName
		 * <p>Create a brand new xlsx file and create a worksheet.</p>
		 * @param string $fileName <p>XLSX file name</p>
		 * @param string $sheetName <p>Worksheet name</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.filename.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function fileName(string $fileName, string $sheetName = null) {}

		/**
		 * Vtiful\Kernel\Excel getHandle
		 * <p>Get the xlsx text resource handle.</p>
		 * @return self <p>Resource</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.getHandle.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function getHandle() {}

		/**
		 * Vtiful\Kernel\Excel header
		 * <p>Write a header in the worksheet.</p>
		 * @param array $headerData <p>worksheet header data</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.header.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function header(array $headerData) {}

		/**
		 * Vtiful\Kernel\Excel insertFormula
		 * <p>Insert calculation formula.</p>
		 * @param int $row <p>cell row</p>
		 * @param int $column <p>cell column</p>
		 * @param string $formula <p>formula string</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.insertFormula.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function insertFormula(int $row, int $column, string $formula) {}

		/**
		 * Vtiful\Kernel\Excel insertImage
		 * <p>Insert a local image into the cell.</p>
		 * @param int $row <p>cell row</p>
		 * @param int $column <p>cell column</p>
		 * @param string $localImagePath <p>local image path</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.insertImage.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function insertImage(int $row, int $column, string $localImagePath) {}

		/**
		 * Vtiful\Kernel\Excel insertText
		 * <p>Write text in a cell.</p>
		 * @param int $row <p>cell row</p>
		 * @param int $column <p>cell column</p>
		 * @param string $data <p>data to be written</p>
		 * @param string $format <p>String format</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.insertText.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function insertText(int $row, int $column, string $data, string $format = null) {}

		/**
		 * Vtiful\Kernel\Excel mergeCells
		 * <p>Merge Cells.</p>
		 * @param string $scope <p>cell start and end coordinate strings</p>
		 * @param string $data <p>string data</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.mergeCells.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function mergeCells(string $scope, string $data) {}

		/**
		 * Vtiful\Kernel\Excel output
		 * <p>Output xlsx file to disk.</p>
		 * @return self <p>XLSX file path;</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.output.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function output() {}

		/**
		 * Vtiful\Kernel\Excel setColumn
		 * <p>Set the format of the column.</p>
		 * @param string $range <p>cell start and end coordinate strings</p>
		 * @param float $width <p>column width</p>
		 * @param resource $format <p>cell format resource</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.setColumn.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function setColumn(string $range, float $width, $format = null) {}

		/**
		 * Vtiful\Kernel\Excel setRow
		 * <p>Set the format of the column.</p>
		 * @param string $range <p>cell start and end coordinate strings</p>
		 * @param float $height <p>row height</p>
		 * @param resource $format <p>cell format resource</p>
		 * @return self <p><code>Vtiful\Kernel\Excel</code> instance</p>
		 * @link https://php.net/manual/en/vtiful-kernel-excel.setRow.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function setRow(string $range, float $height, $format = null) {}
	}

	/**
	 * <p>Create a cell format object</p>
	 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
	 * @since PECL xlswriter >= 1.2.1
	 */
	class Format {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_LEFT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_CENTER = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_RIGHT = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_FILL = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_JUSTIFY = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_CENTER_ACROSS = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_DISTRIBUTED = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_VERTICAL_TOP = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_VERTICAL_BOTTOM = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_VERTICAL_CENTER = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_VERTICAL_JUSTIFY = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_VERTICAL_DISTRIBUTED = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const UNDERLINE_SINGLE = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const UNDERLINE_DOUBLE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const UNDERLINE_SINGLE_ACCOUNTING = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const UNDERLINE_DOUBLE_ACCOUNTING = 4;

		/**
		 * Vtiful\Kernel\Format align
		 * <p>set cell align</p>
		 * @param resource $handle <p>xlsx file handle</p>
		 * @param int $style <p><code>Vtiful\Kernel\Format</code> constant</p>
		 * @return resource <p>Resource</p>
		 * @link https://php.net/manual/en/vtiful-kernel-format.align.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function align($handle, int $style) {}

		/**
		 * Vtiful\Kernel\Format bold
		 * <p><code>Vtiful\Kernel\Format</code> bold format</p>
		 * @param resource $handle <p>xlsx file handle</p>
		 * @return resource <p>Resource</p>
		 * @link https://php.net/manual/en/vtiful-kernel-format.bold.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function bold($handle) {}

		/**
		 * Vtiful\Kernel\Format italic
		 * <p><code>Vtiful\Kernel\Format</code> italic format</p>
		 * @param resource $handle <p>xlsx file handle</p>
		 * @return resource <p>Resource</p>
		 * @link https://php.net/manual/en/vtiful-kernel-format.italic.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function italic($handle) {}

		/**
		 * Vtiful\Kernel\Format underline
		 * <p><code>Vtiful\Kernel\Format</code> underline format</p>
		 * @param resource $handle <p>xlsx file handle</p>
		 * @param int $style <p><code>Vtiful\Kernel\Format</code> constant</p>
		 * @return resource <p>Resource</p>
		 * @link https://php.net/manual/en/vtiful-kernel-format.underline.php
		 * @since PECL xlswriter >= 1.2.1
		 */
		public function underline($handle, int $style) {}
	}

}
