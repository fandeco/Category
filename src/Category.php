<?php

	namespace fandeco\category;

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
		protected $text          = [];
		protected $categories;
		protected $subCategories;
		protected $data          = [];
		protected $categoryOrder = [];

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
				0   => '',
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
						0 => 0,
						1 => 65,
						2 => 59,
						3 => 47,
					],
				2  =>
					[
						0 => 0,
					],
				3  =>
					[
						0 => 0,
					],
				4  =>
					[
						0 => 0,
						1 => 53,
						2 => 52,
						3 => 10,
					],
				5  =>
					[
						0 => 0,
						1 => 21,
						2 => 56,
						3 => 31,
						4 => 55,
					],
				6  =>
					[
						0 => 0,
						1 => 95,
						2 => 96,
						3 => 97,
					],
				7  =>
					[
						0 => 0,
						1 => 86,
						2 => 85,
						3 => 87,
					],
				8  =>
					[
						0 => 0,
						1 => 94,
						2 => 93,
					],
				9  =>
					[
						0 => 0,
						1 => 98,
						2 => 108,
						3 => 16,
						4 => 41,
					],
				10 =>
					[
						0 => 0,
						1 => 48,
						2 => 108,
						3 => 41,
					],
				11 =>
					[
						0 => 0,
						1 => 62,
						2 => 61,
						3 => 63,
						4 => 23,
						5 => 49,
					],
				12 =>
					[
						0 => 0,
						1 => 76,
						2 => 7,
						3 => 77,
						4 => 37,
						5 => 84,
					],
				13 =>
					[
						0  => 0,
						1  => 105,
						2  => 44,
						3  => 57,
						4  => 42,
						5  => 101,
						6  => 103,
						7  => 102,
						8  => 17,
						9  => 12,
						10 => 99,
						11 => 60,
						12 => 67,
						13 => 106,
					],
				14 =>
					[
						0 => 0,
						1 => 20,
						2 => 45,
						3 => 50,
						4 => 33,
						5 => 82,
						6 => 75,
						7 => 74,
					],
				15 =>
					[
						0  => 0,
						1  => 14,
						2  => 54,
						3  => 8,
						4  => 26,
						5  => 78,
						6  => 79,
						7  => 29,
						8  => 66,
						9  => 25,
						10 => 83,
					],
				16 =>
					[
						0 => 0,
						1 => 2,
						2 => 3,
						3 => 1,
						4 => 6,
						5 => 4,
						6 => 5,
					],
				17 =>
					[
						0 => 0,
						1 => 80,
						2 => 13,
						3 => 43,
					],
				18 =>
					[
						0 => 0,
						1 => 81,
						2 => 104,
						3 => 9,
						4 => 68,
						5 => 39,
						6 => 40,
						7 => 15,
					],
				19 =>
					[
						0  => 0,
						1  => 73,
						2  => 11,
						3  => 70,
						4  => 46,
						5  => 24,
						6  => 92,
						7  => 18,
						8  => 19,
						9  => 72,
						10 => 91,
						11 => 27,
						12 => 100,
						13 => 30,
						14 => 58,
						15 => 69,
						16 => 71,
						17 => 35,
					],
				20 =>
					[
						0 => 0,
						1 => 28,
						2 => 34,
						3 => 107,
						4 => 64,
						5 => 22,
						6 => 32,
						7 => 36,
					],
				21 =>
					[
						0 => 0,
						1 => 89,
						2 => 90,
						3 => 51,
						4 => 88,
						5 => 38,
					],
			];
			$this->categoryOrder = [
				1  => 1,
				2  => 2,
				3  => 3,
				4  => 4,
				5  => 5,
				6  => 8,
				7  => 7,
				8  => 6,
				9  => 9,
				10 => 10,
				11 => 11,
				13 => 12,
				14 => 13,
				15 => 16,
				16 => 17,
				17 => 14,
				18 => 15,
			];
		}

		/**
		 * @return array
		 */
		public function getData()
		: array
		{
			if (empty($this->data)) {
				$this->data = include __DIR__ . "/data.php";
			}
			return $this->data;
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
		 * Возвращает подкатегории внутри категории
		 * @param int|string $category
		 * @return array
		 * @throws CategoryExtension
		 */
		public function getSubCategoriesByCategory($category)
		: array
		{
			if (!is_numeric($category)) {
				$category = $this->getCategoryId($category);
			}
			$result = [];
			foreach ($this->whiteList[$category] as $value) {
				$result[] = $this->subCategories[$value];
			}
			return $result;
		}


		/**
		 * @param $a
		 * @param $add
		 * @return string
		 */
		protected function rawText($a = '', $add = TRUE)
		{
			$r = mb_strtolower(preg_replace('@[^A-zА-я\d]|[/_\\\.,]@u', '', (string)$a));
			if ($add) {
				$this->text[$r] = $a;
			}
			return $r;
		}


		/**
		 * Возвращает данные о категории и подкатегории
		 * @param int|string $category
		 * @param int|string $subCategory
		 * @return array
		 * @throws CategoryExtension
		 */
		public function getDataByCategory($category, $subCategory = 0)
		: array
		{
			if (!is_numeric($category)) {
				$category = $this->getCategoryId($category);
			}
			if (!is_numeric($subCategory)) {
				$subCategory = $this->getSubCategoryId($subCategory);
			}
			$data = $this->getData()[$category][$subCategory];
			if (empty($data)) {
				throw new CategoryExtension('Не удалось получить данные', $category, $subCategory);
			}
			return $data;
		}

		/**
		 * @throws CategoryExtension
		 */
		public function getOrderByCategory($category)
		{
			if (!is_numeric($category)) {
				$category = $this->getCategoryId($category);
			}
			return $this->categoryOrder[$category];
		}

		/**
		 * Парсит csv
		 * @return void
		 */
		private function parser()
		{
			foreach ($this->whiteList as $key => $value) {
				foreach ($value as $k => $item) {
					$sc = $this->getSubCategoryRealNameById($item);
					$c  = $this->getCategoryRealNameById($key);
					$f  = fopen("C:\projects\Category\data.csv", "rb");
					while ($row = fgetcsv($f, 1024, ';', "\n")) {
						if (trim($row[0]) === trim($c) && trim($row[1]) === trim($sc)) {
							$template    = $row[2];
							$singular    = $row[5];
							$feature     = explode(",", $row[3]);
							$installType = explode(",", $row[4]);
							fclose($f);
							break;
						}
					}
					if (!empty($feature)) {
						foreach ($feature as $i1 => $val) {
							$feature[$i1] = trim(trim($val), '"');
						}
					}

					if (!empty($installType)) {
						foreach ($installType as $i1 => $val) {
							$installType[$i1] = trim(trim($val), '"');
						}
					}
					$this->data[$key][$item] = [
						"category"    => $c,
						"subCategory" => $sc,
						"template"    => $template,
						"singular"    => $singular,
						"feature"     => $feature,
						"installType" => $installType,
					];
				}
			}
			file_put_contents(__DIR__ . 'data.php', "<?php\nreturn " . var_export($this->data, 1) . ";");
		}


	}