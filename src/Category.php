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
		static $text = [];
		/**
		 * @var array
		 */
		public $whiteListCategory;
		/**
		 * @var array
		 */
		public $categoryWhiteList;
		/**
		 * @var array
		 */
		public $whiteListSubCategory;

		public function __construct()
		{
			$this->whiteListCategory    = [
				1  => self::rawText("Люстры"),
				2  => self::rawText("Подвесные светильники"),
				3  => self::rawText("Потолочные светильники"),
				4  => self::rawText("Настенные светильники и бра"),
				5  => self::rawText("Настольные лампы и ночники"),
				6  => self::rawText("Точечные светильники"),
				7  => self::rawText("Споты"),
				8  => self::rawText("Торшеры"),
				9  => self::rawText("Трековые системы"),
				10 => self::rawText("Магнитные трековые системы"),
				11 => self::rawText("Подсветки"),
				12 => self::rawText("Специализированные светильники"),
				13 => self::rawText("Уличное освещение"),
				14 => self::rawText("Офисное освещение"),
				15 => self::rawText("Праздничное освещение"),
				16 => self::rawText("Аксессуары"),
				17 => self::rawText("Лампы"),
				18 => self::rawText("Светодиодные ленты и комплектующие"),
				19 => self::rawText("Электроустановочные изделия"),
				20 => self::rawText("Декор"),
				21 => self::rawText("Мебель"),
			];
			$this->categoryWhiteList    = array_flip($this->whiteListCategory);
			$this->whiteListSubCategory = [
				1  => [
					self::rawText("Потолочные люстры"),
					self::rawText("Подвесные люстры"),
					self::rawText("Люстры на штанге"),
				],
				4  => [
					self::rawText("Настенные светильники"),
					self::rawText("Настенно-потолочные светильники"),
					self::rawText("Бра"),
				],
				5  => [
					self::rawText("Декоративные настольные лампы"),
					self::rawText("Офисные настольные лампы"),
					self::rawText("Кабинетные настольные лампы"),
					self::rawText("Ночники"),
				],
				6  => [
					self::rawText("Точечные встраиваемые светильники"),
					self::rawText("Точечные накладные светильники"),
					self::rawText("Точечные подвесные светильники"),
				],
				7  => [
					self::rawText("Споты с одним плафоном"),
					self::rawText("Споты с двумя плафонами"),
					self::rawText("Споты с тремя и более плафонами"),
				],
				8  => [
					self::rawText("Торшеры с одним плафоном"),
					self::rawText("Торшеры с двумя и более плафонами"),
				],
				9  => [
					self::rawText("Трековые светильники"),
					self::rawText("Шинопроводы"),
					self::rawText("Готовые трековые системы"),
					self::rawText("Комплектующие для трековых систем"),
				],
				10 => [
					self::rawText("Магнитные трековые светильники"),
					self::rawText("Шинопроводы"),
					self::rawText("Комплектующие для трековых систем"),
				],
				11 => [
					self::rawText("Подсветки для картин"),
					self::rawText("Подсветки для зеркал"),
					self::rawText("Подсветки для лестниц"),
					self::rawText("Декоративные подсветки"),
					self::rawText("Мебельные светильники"),
				],
				12 => [
					self::rawText("Светильники для растений"),
					self::rawText("Бактерицидные светильники"),
					self::rawText("Светильники с лупой"),
					self::rawText("Кольцевые лампы"),
					self::rawText("Соляные лампы"),
				],
				13 => [
					self::rawText("Фасадные светильники"),
					self::rawText("Ландшафтные светильники"),
					self::rawText("Парковые светильники"),
					self::rawText("Консольные светильники"),
					self::rawText("Уличные настенные светильники"),
					self::rawText("Уличные потолочные светильники"),
					self::rawText("Уличные подвесные светильники"),
					self::rawText("Грунтовые светильники"),
					self::rawText("Газонные светильники"),
					self::rawText("Тротуарные светильники"),
					self::rawText("Подводные светильники"),
					self::rawText("Прожекторы"),
					self::rawText("Фонарики"),
				],
				14 => [
					self::rawText("Даунлайты"),
					self::rawText("Линейные светильники"),
					self::rawText("Модульные светильники"),
					self::rawText("Карданные светильники"),
					self::rawText("Светодиодные панели"),
					self::rawText("Светильники грильято"),
					self::rawText("Светильники армстронг"),
				],
				15 => [
					self::rawText("Гирлянды"),
					self::rawText("Новогодние подвесы"),
					self::rawText("Белт-лайт"),
					self::rawText("Дюралайт"),
					self::rawText("Световые фигуры"),
					self::rawText("Светодиодные деревья "),
					self::rawText("Интерьерные украшения"),
					self::rawText("Проекторы"),
					self::rawText("Диско-шары"),
					self::rawText("Свечи"),
				],
				16 => [
					self::rawText("Аксессуары для люстр"),
					self::rawText("Аксессуары для подвесных и потолочных светильников"),
					self::rawText("Аксессуары для бра"),
					self::rawText("Аксессуары для точечных светильников"),
					self::rawText("Аксессуары для спотов"),
					self::rawText("Аксессуары для торшеров"),
				],
				17 => [
					self::rawText("Светодиодные лампы"),
					self::rawText("Галогенные лампы"),
					self::rawText("Лампы накаливания"),
				],
				18 => [
					self::rawText("Светодиодные ленты"),
					self::rawText("Управление светодиодными лентами"),
					self::rawText("Блоки питания"),
					self::rawText("Профили для лент"),
					self::rawText("Комплектующие для лент"),
					self::rawText("Комплектующие для профилей"),
					self::rawText("Готовые комплекты"),
				],
				19 => [
					self::rawText("Розетки"),
					self::rawText("Выключатели, переключатели"),
					self::rawText("Рамки"),
					self::rawText("Лицевые панели, заглушки"),
					self::rawText("Диммеры, светорегуляторы"),
					self::rawText("Терморегуляторы"),
					self::rawText("Датчики движения"),
					self::rawText("Датчики освещенности"),
					self::rawText("Реле wifi"),
					self::rawText("Таймеры"),
					self::rawText("Звонки"),
					self::rawText("Удлинители, сетевые фильтры"),
					self::rawText("Кабели"),
					self::rawText("Патроны"),
					self::rawText("Разветвители"),
					self::rawText("Распаячные коробки"),
					self::rawText("Клеммы"),
				],
				20 => [
					self::rawText("Зеркала"),
					self::rawText("Картины"),
					self::rawText("Часы"),
					self::rawText("Постеры"),
					self::rawText("Декоративные панно"),
					self::rawText("Камины"),
					self::rawText("Ключницы"),
				],
				21 => [
					self::rawText("Столы"),
					self::rawText("Стулья"),
					self::rawText("Мягкая мебель"),
					self::rawText("Стеллажи"),
					self::rawText("Комоды, тумбы"),
				],
			];
		}

		/**
		 * Проверяет связи категории и подкатегории.
		 * Возвращает: [$category, $sub_category]. В правильном регистре
		 * @throws CategoryExtension
		 */
		public function validate(string $category, string $sub_category = '')
		{
			if (empty($category)) {
				throw new CategoryExtension('Отсутствует основная категория', $category, $sub_category);
			}
			if (self::rawText($category, FALSE) === self::rawText($sub_category, FALSE)) {
				$sub_category = '';
			}
			if (self::rawText($category, FALSE) === self::rawText('на ручную проверку', FALSE)) {
				throw new CategoryExtension('На ручную проверку', $category, $sub_category);
			}
			if (!in_array(self::rawText($category, FALSE), $this->whiteListCategory, TRUE)) {
				throw new CategoryExtension("Не зарегистрированная категория", $category, $sub_category);
			}
			$category = self::$text[self::rawText($category, FALSE)];
			if ($sub_category) {
				$subs = $this->whiteListSubCategory[$this->categoryWhiteList[self::rawText($category, FALSE)]];
				if (!$subs or !in_array(self::rawText($sub_category, FALSE), $subs, TRUE)) {
					throw new CategoryExtension("Не зарегистрированная подкатегория", $category, $sub_category);
				}
				$sub_category = self::$text[self::rawText($sub_category, FALSE)];
			}
			return [$category, $sub_category];
		}

		public static function rawText($a = '', $add = TRUE)
		{
			$r = mb_strtolower(preg_replace('@[^A-zА-я\d]|[/_\\\.,]@u', '', (string)$a));
			if ($add) {
				self::$text[$r] = $a;
			}
			return $r;
		}
	}