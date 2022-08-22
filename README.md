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

```

# ПРОЦЕСС ОБНОВЛЕНИЯ

0) скачать [Проект по новым категориям](https://docs.google.com/spreadsheets/d/1tKIDh4Lo4LjGdXGw5-UzO8ZCRkCDkNYMw4wjB3sU7MM/edit#gid=33988330) в формате `xlsx`
1) положить в папу с проэктом
2) открыть файл `src/parcer.php` и изменить путь до файла в константе `InputFileName`
3) запусить скрипт `src/parcer.php`
