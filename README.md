# Единый класс категорий

Клас проверки категорий согласно документу ниже

[Проект по новым категориям](https://docs.google.com/spreadsheets/d/1tKIDh4Lo4LjGdXGw5-UzO8ZCRkCDkNYMw4wjB3sU7MM/edit#gid=33988330)

## подключение 
```json
{
	"repositories":[
		{
			"type":"vcs",
			"url" :"https://github.com/fandeco/category"
		}
	],
	"require"     :{
		"fandeco/category":"^1.0.0"
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
	[$validCategory,$validSubCategory] = $categoryValidator->validate("test", "test2");
	
} catch (CategoryExtension $e) {
	echo $e->getMessage().'; '.	$e->getCategory().'; '.	$e->getSubCategory()
}

```