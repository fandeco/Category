<?php

	namespace fandeco\category;

	use function PHPUnit\Framework\throwException;

	/**
	 * Единый класс категорий
	 *
	 * [Проект по новым категориям](https://docs.google.com/spreadsheets/d/1tKIDh4Lo4LjGdXGw5-UzO8ZCRkCDkNYMw4wjB3sU7MM/edit#gid=33988330)
	 */
	class Category
	{
		/**
		 * Список правильных имен категорий и подкатегорий
		 * @var array
		 */
		private array $text = [];
		private array $categories;
		private array $subCategories;

		public function __construct()
		{
			$this->categories    = [
				1  => $this->rawText("Люстры"),
				2  => $this->rawText("Подвесные светильники"),
				3  => $this->rawText("Потолочные светильники"),
				4  => $this->rawText("Настенные светильники и бра"),
				5  => $this->rawText("Настольные лампы и ночники"),
				6  => $this->rawText("Точечные светильники"),
				7  => $this->rawText("Споты"),
				8  => $this->rawText("Торшеры"),
				9  => $this->rawText("Трековые системы"),
				10 => $this->rawText("Магнитные трековые системы"),
				11 => $this->rawText("Подсветки"),
				12 => $this->rawText("Специализированные светильники"),
				13 => $this->rawText("Уличное освещение"),
				14 => $this->rawText("Офисное освещение"),
				15 => $this->rawText("Праздничное освещение"),
				16 => $this->rawText("Аксессуары"),
				17 => $this->rawText("Лампы"),
				18 => $this->rawText("Светодиодные ленты и комплектующие"),
				19 => $this->rawText("Электроустановочные изделия"),
				20 => $this->rawText("Декор"),
				21 => $this->rawText("Мебель"),
			];
			$this->categories    += array_flip($this->categories);
			$this->subCategories = [
				1   => $this->rawText("Аксессуары для бра"),
				2   => $this->rawText("Аксессуары для люстр"),
				3   => $this->rawText("Аксессуары для подвесных и потолочных светильников"),
				4   => $this->rawText("Аксессуары для спотов"),
				5   => $this->rawText("Аксессуары для торшеров"),
				6   => $this->rawText("Аксессуары для точечных светильников"),
				7   => $this->rawText("Бактерицидные светильники"),
				8   => $this->rawText("Белт-лайт"),
				9   => $this->rawText("Блоки питания"),
				10  => $this->rawText("Бра"),
				11  => $this->rawText("Выключатели, переключатели"),
				12  => $this->rawText("Газонные светильники"),
				13  => $this->rawText("Галогенные лампы"),
				14  => $this->rawText("Гирлянды"),
				15  => $this->rawText("Готовые комплекты"),
				16  => $this->rawText("Готовые трековые системы"),
				17  => $this->rawText("Грунтовые светильники"),
				18  => $this->rawText("Датчики движения"),
				19  => $this->rawText("Датчики освещенности"),
				20  => $this->rawText("Даунлайты"),
				21  => $this->rawText("Декоративные настольные лампы"),
				22  => $this->rawText("Декоративные панно"),
				23  => $this->rawText("Декоративные подсветки"),
				24  => $this->rawText("Диммеры, светорегуляторы"),
				25  => $this->rawText("Диско-шары"),
				26  => $this->rawText("Дюралайт"),
				27  => $this->rawText("Звонки"),
				28  => $this->rawText("Зеркала"),
				29  => $this->rawText("Интерьерные украшения"),
				30  => $this->rawText("Кабели"),
				31  => $this->rawText("Кабинетные настольные лампы"),
				32  => $this->rawText("Камины"),
				33  => $this->rawText("Карданные светильники"),
				34  => $this->rawText("Картины"),
				35  => $this->rawText("Клеммы"),
				36  => $this->rawText("Ключницы"),
				37  => $this->rawText("Кольцевые лампы"),
				38  => $this->rawText("Комоды, тумбы"),
				39  => $this->rawText("Комплектующие для лент"),
				40  => $this->rawText("Комплектующие для профилей"),
				41  => $this->rawText("Комплектующие для трековых систем"),
				42  => $this->rawText("Консольные светильники"),
				43  => $this->rawText("Лампы накаливания"),
				44  => $this->rawText("Ландшафтные светильники"),
				45  => $this->rawText("Линейные светильники"),
				46  => $this->rawText("Лицевые панели, заглушки"),
				47  => $this->rawText("Люстры на штанге"),
				48  => $this->rawText("Магнитные трековые светильники"),
				49  => $this->rawText("Мебельные светильники"),
				50  => $this->rawText("Модульные светильники"),
				51  => $this->rawText("Мягкая мебель"),
				52  => $this->rawText("Настенно-потолочные светильники"),
				53  => $this->rawText("Настенные светильники"),
				54  => $this->rawText("Новогодние подвесы"),
				55  => $this->rawText("Ночники"),
				56  => $this->rawText("Офисные настольные лампы"),
				57  => $this->rawText("Парковые светильники"),
				58  => $this->rawText("Патроны"),
				59  => $this->rawText("Подвесные люстры"),
				60  => $this->rawText("Подводные светильники"),
				61  => $this->rawText("Подсветки для зеркал"),
				62  => $this->rawText("Подсветки для картин"),
				63  => $this->rawText("Подсветки для лестниц"),
				64  => $this->rawText("Постеры"),
				65  => $this->rawText("Потолочные люстры"),
				66  => $this->rawText("Проекторы"),
				67  => $this->rawText("Прожекторы"),
				68  => $this->rawText("Профили для лент"),
				69  => $this->rawText("Разветвители"),
				70  => $this->rawText("Рамки"),
				71  => $this->rawText("Распаячные коробки"),
				72  => $this->rawText("Реле wifi"),
				73  => $this->rawText("Розетки"),
				74  => $this->rawText("Светильники армстронг"),
				75  => $this->rawText("Светильники грильято"),
				76  => $this->rawText("Светильники для растений"),
				77  => $this->rawText("Светильники с лупой"),
				78  => $this->rawText("Световые фигуры"),
				79  => $this->rawText("Светодиодные деревья "),
				80  => $this->rawText("Светодиодные лампы"),
				81  => $this->rawText("Светодиодные ленты"),
				82  => $this->rawText("Светодиодные панели"),
				83  => $this->rawText("Свечи"),
				84  => $this->rawText("Соляные лампы"),
				85  => $this->rawText("Споты с двумя плафонами"),
				86  => $this->rawText("Споты с одним плафоном"),
				87  => $this->rawText("Споты с тремя и более плафонами"),
				88  => $this->rawText("Стеллажи"),
				89  => $this->rawText("Столы"),
				90  => $this->rawText("Стулья"),
				91  => $this->rawText("Таймеры"),
				92  => $this->rawText("Терморегуляторы"),
				93  => $this->rawText("Торшеры с двумя и более плафонами"),
				94  => $this->rawText("Торшеры с одним плафоном"),
				95  => $this->rawText("Точечные встраиваемые светильники"),
				96  => $this->rawText("Точечные накладные светильники"),
				97  => $this->rawText("Точечные подвесные светильники"),
				98  => $this->rawText("Трековые светильники"),
				99  => $this->rawText("Тротуарные светильники"),
				100 => $this->rawText("Удлинители, сетевые фильтры"),
				101 => $this->rawText("Уличные настенные светильники"),
				102 => $this->rawText("Уличные подвесные светильники"),
				103 => $this->rawText("Уличные потолочные светильники"),
				104 => $this->rawText("Управление светодиодными лентами"),
				105 => $this->rawText("Фасадные светильники"),
				106 => $this->rawText("Фонарики"),
				107 => $this->rawText("Часы"),
				108 => $this->rawText("Шинопроводы"),
			];
			$this->subCategories += array_flip($this->subCategories);
			$this->whiteList     = [
				1  =>
					[
						0 => 65,
						1 => 59,
						2 => 47,
					],
				4  =>
					[
						0 => 53,
						1 => 52,
						2 => 10,
					],
				5  =>
					[
						0 => 21,
						1 => 56,
						2 => 31,
						3 => 55,
					],
				6  =>
					[
						0 => 95,
						1 => 96,
						2 => 97,
					],
				7  =>
					[
						0 => 86,
						1 => 85,
						2 => 87,
					],
				8  =>
					[
						0 => 94,
						1 => 93,
					],
				9  =>
					[
						0 => 98,
						1 => 108,
						2 => 16,
						3 => 41,
					],
				10 =>
					[
						0 => 48,
						1 => 108,
						2 => 41,
					],
				11 =>
					[
						0 => 62,
						1 => 61,
						2 => 63,
						3 => 23,
						4 => 49,
					],
				12 =>
					[
						0 => 76,
						1 => 7,
						2 => 77,
						3 => 37,
						4 => 84,
					],
				13 =>
					[
						0  => 105,
						1  => 44,
						2  => 57,
						3  => 42,
						4  => 101,
						5  => 103,
						6  => 102,
						7  => 17,
						8  => 12,
						9  => 99,
						10 => 60,
						11 => 67,
						12 => 106,
					],
				14 =>
					[
						0 => 20,
						1 => 45,
						2 => 50,
						3 => 33,
						4 => 82,
						5 => 75,
						6 => 74,
					],
				15 =>
					[
						0 => 14,
						1 => 54,
						2 => 8,
						3 => 26,
						4 => 78,
						5 => 79,
						6 => 29,
						7 => 66,
						8 => 25,
						9 => 83,
					],
				16 =>
					[
						0 => 2,
						1 => 3,
						2 => 1,
						3 => 6,
						4 => 4,
						5 => 5,
					],
				17 =>
					[
						0 => 80,
						1 => 13,
						2 => 43,
					],
				18 =>
					[
						0 => 81,
						1 => 104,
						2 => 9,
						3 => 68,
						4 => 39,
						5 => 40,
						6 => 15,
					],
				19 =>
					[
						0  => 73,
						1  => 11,
						2  => 70,
						3  => 46,
						4  => 24,
						5  => 92,
						6  => 18,
						7  => 19,
						8  => 72,
						9  => 91,
						10 => 27,
						11 => 100,
						12 => 30,
						13 => 58,
						14 => 69,
						15 => 71,
						16 => 35,
					],
				20 =>
					[
						0 => 28,
						1 => 34,
						2 => 107,
						3 => 64,
						4 => 22,
						5 => 32,
						6 => 36,
					],
				21 =>
					[
						0 => 89,
						1 => 90,
						2 => 51,
						3 => 88,
						4 => 38,
					],
			];
		}


		/**
		 * Проверяет связи категории и подкатегории.
		 * Возвращает: [$category, $subCategory]. В правильном регистре
		 * @throws CategoryExtension
		 */
		public function validate(string $category, string $subCategory = '')
		{
			$realCategory    = '';
			$realSubCategory = '';
			if (empty($category)) {
				throw new CategoryExtension('Отсутствует основная категория', $category, $subCategory);
			}
			if ($this->rawText($category, FALSE) === $this->rawText($subCategory, FALSE)) {
				$subCategory = '';
			}
			if ($this->rawText($category, FALSE) === $this->rawText('на ручную проверку', FALSE)) {
				throw new CategoryExtension('На ручную проверку', $category, $subCategory);
			}
			try {
				$categoryId    = $this->getCategoryId($category);
				$subCategoryId = $this->getSubCategoryId($subCategory);
			} catch (CategoryExtension $e) {
				throw new CategoryExtension($e->getMessage(), $category, $subCategory, 0, $e);
			}
			$realCategory = $this->getCategoryRealNameById($categoryId);
			if ($subCategoryId) {
				if (!$this->categoryIsIncludeSubCategory($categoryId, $subCategoryId)) {
					throw new CategoryExtension('Подкатегория не принадлежит этой категории', $category, $subCategory);
				}
				$realSubCategory = $this->getSubCategoryRealNameById($subCategoryId);
			}
			return [$realCategory, $realSubCategory];
		}


		/**
		 * @throws CategoryExtension
		 */
		public function getCategoryId(string $category)
		: int
		{
			$category = $this->rawText($category, FALSE);
			if (array_key_exists($category, $this->categories)) {
				return $this->categories[$category];
			}
			throw new CategoryExtension("Не зарегистрированная категория", $category, NULL);
		}

		/**
		 * @throws CategoryExtension
		 */
		public function getSubCategoryId(string $subCategory)
		: int
		{
			if (!$subCategory) {
				return 0;
			}
			$subCategory = $this->rawText($subCategory, FALSE);
			if (array_key_exists($subCategory, $this->subCategories)) {
				return $this->subCategories[$subCategory];
			}
			throw new CategoryExtension("Не зарегистрированная подкатегория", NULL, $subCategory);
		}

		public function getCategoryRealNameById(int $category)
		: string
		{
			return $this->text[$this->categories[$category]];
		}

		public function getSubCategoryRealNameById(int $subCategory)
		: string
		{
			return $this->text[$this->subCategories[$subCategory]] ?? '';
		}

		/**
		 * @throws CategoryExtension
		 */
		public function categoryIsIncludeSubCategory(int $category, int $subCategory)
		: bool
		{
			$whiteList = $this->whiteList[$category];
			if (empty($whiteList)) {
				throw new CategoryExtension("Не зарегистрированная категория", $category, $subCategory);
			}
			if (in_array($subCategory, $whiteList)) {
				return TRUE;
			}
			return FALSE;
		}

		/**
		 * @param $category
		 * @return array
		 */
		public function getSubCategoriesByCategory($category)
		: array
		{
			$result = [];
			foreach ($this->whiteList[$this->categories[$category]] as $value) {
				$result[] = $this->subCategories[$value];
			}
			return $result;
		}


		public function getSingular(string $category, string $subCategory = '')
		: string
		{

			return "";
		}

		public function rawText($a = '', $add = TRUE)
		{
			$r = mb_strtolower(preg_replace('@[^A-zА-я\d]|[/_\\\.,]@u', '', (string)$a));
			if ($add) {
				$this->text[$r] = $a;
			}
			return $r;
		}
	}