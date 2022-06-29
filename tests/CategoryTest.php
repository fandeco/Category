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

		public function testValidate()
		{
			$this->category = new Category();
			try {
				$this->category->validate("test", "test2");
				$this->fail();
			} catch (CategoryExtension $e) {
				$this->assertTrue(TRUE);
			}
			try {
				$this->category->validate("Люстры", "test2");
				$this->fail();
			} catch (CategoryExtension $e) {
				$this->assertTrue(TRUE);
			}
			try {
				$this->category->validate("Люстры", "Настенные светильники");
				$this->fail();
			} catch (CategoryExtension $e) {
				$this->assertTrue(TRUE);
			}
			try {
				$this->category->validate("Люстра", "Настенные светильники");
				$this->fail();
			} catch (CategoryExtension $e) {
				$this->assertTrue(TRUE);
			}
			try {
				$this->category->validate("Люстры", "Люстры");
				$this->assertTrue(TRUE);
			} catch (CategoryExtension $e) {
				$this->fail();
			}
			try {
				$this->category->validate("люстры", "Потолочные люстры");
				$this->assertTrue(TRUE);
			} catch (CategoryExtension $e) {
				$this->fail();
			}
			try {
				$this->category->validate("Люстры", "Люстры");
				$this->assertTrue(TRUE);
			} catch (CategoryExtension $e) {
				$this->fail();
			}
		}
	}
