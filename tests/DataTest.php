<?php
	/**
	 * Created by Kirill Nefediev.
	 * User: Traineratwot
	 * Date: 29.06.2022
	 * Time: 10:32
	 */

	namespace fandeco\test;
	require_once "../vendor/autoload.php";

	use fandeco\category\Category;
	use fandeco\category\CategoryExtension;
	use PHPUnit\Framework\TestCase;

	class DataTest extends TestCase
	{

		private Category $category;

		public function __construct(?string $name = NULL, array $data = [], $dataName = '')
		{
			parent::__construct($name, $data, $dataName);
			$this->category = new Category();
		}

		/**
		 * @return void
		 */
		public function testData()
		: void
		{
			try {
				$this->category->getDataByCategory("test", "test2");
				$this->fail();
			} catch (CategoryExtension $e) {
				$this->assertTrue(TRUE);
			}
		}

		/**
		 * @return void
		 */
		public function testData2()
		: void
		{
			try {
				$data = $this->category->getDataByCategory("Люстры", "Потолочные люстры");
				$this->assertEquals("Потолочная люстра", $data['singular']);
			} catch (CategoryExtension $e) {
				$this->fail();

			}
		}
	}
