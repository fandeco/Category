# Единый класс категорий

Клас проверки категорий согласно документу ниже

[Проект по новым категориям](https://docs.google.com/spreadsheets/d/1tKIDh4Lo4LjGdXGw5-UzO8ZCRkCDkNYMw4wjB3sU7MM/edit#gid=33988330)

## подключение

```json
{
	"repositories":[
		{
			"type":"vcs",
			"url" :"https://github.com/fandeco/Category"
		}
	],
	"require"     :{
		"fandeco/category":"dev-master"
	}
}
```

## Использование

### Category

```php
require_once "vendor/autoload.php";

use fandeco\category\Category;
use fandeco\category\CategoryExtension;

$categoryValidator = new Category();

try {
// Возвращает правильные категорию и под категорию. Используйте только ети значения, а не те что переданы в аргументы
	[$validCategory,$validSubCategory] = $categoryValidator->validate("test", "test2");
	
} catch (CategoryExtension $e) {
	echo $e->getMessage().'; '.	$e->getCategory().'; '.	$e->getSubCategory()
}
//Возвращает данные о категории
$categoryValidator->getDataByCategory("Люстры","Потолочные люстры") // 
//[
//	'category'    => 'Люстры',
//	'subCategory' => 'Потолочные люстры',
//	'singular'    => 'Потолочная люстра',
//	'template'    => 'Потолочная люстра {$vendor} {$collection} {$article}',
//]


// Возвращает порядковый номер категории 
$categoryValidator->getOrderByCategory("Люстры") // 1 

// Возвращает имя файла по артикулу заменяя все спец символы на ~ по регламенту
Category::getFileNameFromArticle('6053/17 AP-1'); //6053~17 AP-1

```

### Description

```php
$description = new Description($items);
$description->add($item)
$description->gen()
$description->descriptions //  массив с готовыми описаниями [[articul] =>'discription']
$description->disc_without_html // массив описаний ключ - артикул 1с значение описание с html
$description->Json // Массив описания для seo и иных шаблонов

//-------
$description = new Description();
[$result, $raw, $disc] = $description->description($item)// возвращает массив описаний для $item [$result, $raw, $disc]
$result// описание с html
$raw// описание без html
$disc//  Массив описания для seo и иных шаблонов
```

# ПРОЦЕСС ОБНОВЛЕНИЯ

```bash
composer up:build
```

1) ~~скачать [Проект по новым категориям](https://docs.google.com/spreadsheets/d/1tKIDh4Lo4LjGdXGw5-UzO8ZCRkCDkNYMw4wjB3sU7MM/edit#gid=33988330) в формате `xlsx`~~
2) ~~положить в папу с проектом~~
3) ~~открыть файл `src/parcer.php` и изменить путь до файла в константе `InputFileName`~~
4) ~~запустить скрипт `src/parcer.php`~~
5) ~~запустить тесты, если тесты пройдены git push, и в проектах composer update~~
