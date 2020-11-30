<?php



namespace Vtiful\Kernel {

	/**
	 * <p>Create xlsx files and set cells and output xlsx files</p>
	 * @link http://php.net/manual/en/class.vtiful-kernel-excel.php
	 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
	 */
	class Excel {

		/**
		 * Vtiful\Kernel\Excel constructor
		 * <p>Vtiful\Kernel\Excel constructor, create a class object.</p>
		 * @param array $config <p>XLSX file export configuration</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.construct.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function __construct(array $config) {}

		/**
		 * Vtiful\Kernel\Excel addSheet
		 * <p>Create a new worksheet in the xlsx file.</p>
		 * @param string $sheetName <p>Worksheet name</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.addSheet.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function addSheet(string $sheetName) {}

		/**
		 * Vtiful\Kernel\Excel autoFilter
		 * <p>Add autofilter to a worksheet.</p>
		 * @param string $scope <p>Cell start and end coordinate string.</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.autoFilter.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function autoFilter(string $scope) {}

		/**
		 * Vtiful\Kernel\Excel constMemory
		 * <p>Write a large file with constant memory usage.</p>
		 * @param string $fileName <p>XLSX file name</p>
		 * @param string $sheetName <p>Worksheet name</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.constMemory.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function constMemory(string $fileName, string $sheetName = NULL) {}

		/**
		 * Vtiful\Kernel\Excel data
		 * <p>Write a data in the worksheet.</p>
		 * @param array $data <p>worksheet data</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.data.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function data(array $data) {}

		/**
		 * Vtiful\Kernel\Excel fileName
		 * <p>Create a brand new xlsx file and create a worksheet.</p>
		 * @param string $fileName <p>XLSX file name</p>
		 * @param string $sheetName <p>Worksheet name</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.filename.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function fileName(string $fileName, string $sheetName = NULL) {}

		/**
		 * Vtiful\Kernel\Excel getHandle
		 * <p>Get the xlsx text resource handle.</p>
		 * @return self <p>Resource</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.getHandle.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function getHandle() {}

		/**
		 * Vtiful\Kernel\Excel header
		 * <p>Write a header in the worksheet.</p>
		 * @param array $headerData <p>worksheet header data</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.header.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function header(array $headerData) {}

		/**
		 * Vtiful\Kernel\Excel insertFormula
		 * <p>Insert calculation formula.</p>
		 * @param int $row <p>cell row</p>
		 * @param int $column <p>cell column</p>
		 * @param string $formula <p>formula string</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.insertFormula.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function insertFormula(int $row, int $column, string $formula) {}

		/**
		 * Vtiful\Kernel\Excel insertImage
		 * <p>Insert a local image into the cell.</p>
		 * @param int $row <p>cell row</p>
		 * @param int $column <p>cell column</p>
		 * @param string $localImagePath <p>local image path</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.insertImage.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function insertImage(int $row, int $column, string $localImagePath) {}

		/**
		 * Vtiful\Kernel\Excel insertText
		 * <p>Write text in a cell.</p>
		 * @param int $row <p>cell row</p>
		 * @param int $column <p>cell column</p>
		 * @param string $data <p>data to be written</p>
		 * @param string $format <p>String format</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.insertText.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function insertText(int $row, int $column, string $data, string $format = NULL) {}

		/**
		 * Vtiful\Kernel\Excel mergeCells
		 * <p>Merge Cells.</p>
		 * @param string $scope <p>cell start and end coordinate strings</p>
		 * @param string $data <p>string data</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.mergeCells.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function mergeCells(string $scope, string $data) {}

		/**
		 * Vtiful\Kernel\Excel output
		 * <p>Output xlsx file to disk.</p>
		 * @return self <p>XLSX file path;</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.output.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function output() {}

		/**
		 * Vtiful\Kernel\Excel setColumn
		 * <p>Set the format of the column.</p>
		 * @param string $range <p>cell start and end coordinate strings</p>
		 * @param float $width <p>column width</p>
		 * @param resource $format <p>cell format resource</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.setColumn.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function setColumn(string $range, float $width, $format = NULL) {}

		/**
		 * Vtiful\Kernel\Excel setRow
		 * <p>Set the format of the column.</p>
		 * @param string $range <p>cell start and end coordinate strings</p>
		 * @param float $height <p>row height</p>
		 * @param resource $format <p>cell format resource</p>
		 * @return self <p>Vtiful\Kernel\Excel instance</p>
		 * @link http://php.net/manual/en/vtiful-kernel-excel.setRow.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function setRow(string $range, float $height, $format = NULL) {}
	}

	/**
	 * <p>Create a cell format object</p>
	 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
	 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
	 */
	class Format {

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_LEFT = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_CENTER = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_RIGHT = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_FILL = 4;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_JUSTIFY = 5;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_CENTER_ACROSS = 6;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_DISTRIBUTED = 7;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_VERTICAL_TOP = 8;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_VERTICAL_BOTTOM = 9;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_VERTICAL_CENTER = 10;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_VERTICAL_JUSTIFY = 11;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const FORMAT_ALIGN_VERTICAL_DISTRIBUTED = 12;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const UNDERLINE_SINGLE = 1;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const UNDERLINE_DOUBLE = 2;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const UNDERLINE_SINGLE_ACCOUNTING = 3;

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.vtiful-kernel-format.php
		 */
		const UNDERLINE_DOUBLE_ACCOUNTING = 4;

		/**
		 * Vtiful\Kernel\Format align
		 * <p>set cell align</p>
		 * @param resource $handle <p>xlsx file handle</p>
		 * @param int $style <p>Vtiful\Kernel\Format constant</p>
		 * @return resource <p>Resource</p>
		 * @link http://php.net/manual/en/vtiful-kernel-format.align.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function align($handle, int $style) {}

		/**
		 * Vtiful\Kernel\Format bold
		 * <p>Vtiful\Kernel\Format bold format</p>
		 * @param resource $handle <p>xlsx file handle</p>
		 * @return resource <p>Resource</p>
		 * @link http://php.net/manual/en/vtiful-kernel-format.bold.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function bold($handle) {}

		/**
		 * Vtiful\Kernel\Format italic
		 * <p>Vtiful\Kernel\Format italic format</p>
		 * @param resource $handle <p>xlsx file handle</p>
		 * @return resource <p>Resource</p>
		 * @link http://php.net/manual/en/vtiful-kernel-format.italic.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function italic($handle) {}

		/**
		 * Vtiful\Kernel\Format underline
		 * <p>Vtiful\Kernel\Format underline format</p>
		 * @param resource $handle <p>xlsx file handle</p>
		 * @param int $style <p>Vtiful\Kernel\Format constant</p>
		 * @return resource <p>Resource</p>
		 * @link http://php.net/manual/en/vtiful-kernel-format.underline.php
		 * @since PHP 7 >= 7.0.0, PECL xlswriter >= 1.2.1
		 */
		public function underline($handle, int $style) {}
	}

}
