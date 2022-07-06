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

	class CategoryTest extends TestCase
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
		public function testValidate()
		: void
		{
			try {
				$this->category->validate("test", "test2");
				$this->fail();
			} catch (CategoryExtension $e) {
				$this->assertTrue(TRUE);
			}
		}

		/**
		 * @return void
		 */
		public function testValidate1()
		: void
		{
			try {
				$this->category->validate("Люстры", "test2");
				$this->fail();
			} catch (CategoryExtension $e) {
				$this->assertTrue(TRUE);
			}
		}

		/**
		 * @return void
		 */
		public function testValidate2()
		: void
		{
			try {
				$this->category->validate("Люстры", "Настенные светильники");
				$this->fail();
			} catch (CategoryExtension $e) {
				$this->assertTrue(TRUE);
			}
		}

		/**
		 * @return void
		 */
		public function testValidate3()
		: void
		{
			try {
				$this->category->validate("Люстра", "Настенные светильники");
				$this->fail();
			} catch (CategoryExtension $e) {
				$this->assertTrue(TRUE);
			}
		}

		/**
		 * @return void
		 */
		public function testValidate4()
		: void
		{
			try {
				$this->category->validate("Люстры", "Люстры");
				$this->assertTrue(TRUE);
			} catch (CategoryExtension $e) {
				$this->fail();
			}
		}

		/**
		 * @return void
		 */
		public function testValidate5()
		: void
		{
			try {
				[$category, $subCategory] = $this->category->validate("люстры", "ПоТоЛоЧнЫе    лЮсТрЫ");
				$this->assertTrue(TRUE);
				$this->assertEquals('Люстры', $category);
				$this->assertEquals("Потолочные люстры", $subCategory);
			} catch (CategoryExtension $e) {
				$this->fail();
			}
		}

		/**
		 * @return void
		 */
		public function testValidate6()
		: void
		{
			try {
				$this->category->validate("Люстры", "Люстры");
				$this->assertTrue(TRUE);
			} catch (CategoryExtension $e) {
				$this->fail();
			}
		}

		public function testValidate7()
		: void
		{
			try {
				[$category, $subCategory] = $this->category->validate("Трековые системы", "Трековые светильники");
				$this->assertTrue(TRUE);
				$this->assertEquals('Трековые системы', $category);
				$this->assertEquals("Трековые светильники", $subCategory);
			} catch (CategoryExtension $e) {
				$this->fail();
			}
		}
	}
