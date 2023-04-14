<?php
	error_reporting(E_ERROR);
	define("INPUT_FILE_NAME", __DIR__ . '/output.json');

	function raw_text($a = '')
	{
		return (string)mb_strtolower(preg_replace('@[^A-zА-я\d]|[/_\\\.,]@u', '', (string)$a));
	}


	$table = json_decode(file_get_contents(INPUT_FILE_NAME), 1);

	$category               = '';
	$list                   = [];
	$data                   = [];
	$categories             = [];
	$categoriesKeys         = [];
	$subCategories          = [0 => ''];
	$subCategoriesKeys      = [0 => ''];
	$originalsCategories    = [];
	$originalsSubCategories = [];

	foreach ($table as $k => $row) {
		$category    = $row['category'];
		$subCategory = $row['subCategory'];

		$categoryKEY     = raw_text($category);
		$subCategoryKEY  = raw_text($subCategory);
		$categories[]    = $categoryKEY;
		$subCategories[] = $subCategoryKEY;
	}
	$categories        = array_unique($categories);
	$subCategories     = array_unique($subCategories);
	$categoriesKeys    = array_flip($categories);
	$subCategoriesKeys = array_flip($subCategories);

	foreach ($table as $k => $row) {
		$category       = $row['category'];
		$subCategory    = $row['subCategory'];
		$template       = $row['template'];
		$feature        = $row['feature'];
		$installType    = $row['installType'];
		$singular       = $row['singular'];
		$categoryKEY    = raw_text($category);
		$subCategoryKEY = raw_text($subCategory);

		$originalsCategories[$categoriesKeys[$categoryKEY]]          = $category;
		$originalsSubCategories[$subCategoriesKeys[$subCategoryKEY]] = $subCategory;

		$list[$categoriesKeys[$categoryKEY]][0] = 0;
		$list[$categoriesKeys[$categoryKEY]][]  = $subCategoriesKeys[$subCategoryKEY];
		$list[$categoriesKeys[$categoryKEY]]    = array_unique($list[$categoriesKeys[$categoryKEY]]);

		$template = strtr($template, [
			'+'                        => ' ',
			'Вид светильника Интернет' => '',
			'Особенность_web'          => '{$osobennost}',
			'Бренд'                    => '{$vendor}',
			'КОЛЛЕКЦИЯ'                => '{$collection}',
			'артикул'                  => '{$article}',
			'[артикул]'                => '{$article}',
			'[пробел ]'                => ' ',
			'[пробел]'                 => ' ',
		]);
		$template = preg_replace('@\s+@', ' ', $template);

		$data[$categoriesKeys[$categoryKEY]][$subCategoriesKeys[$subCategoryKEY]] = [
			'template'    => $template,
			'singular'    => $singular,
			'feature'     => array_map(function ($str) {
				return trim($str, ' "');
			}, explode(',', $feature)),
			'installType' => array_map(function ($str) {
				return trim($str, ' "');
			}, explode(',', $installType)),
		];
	}
	$ec = $categories + $categoriesKeys;
	$es = $subCategories + $subCategoriesKeys;
	ksort($list);
	ksort($ec);
	ksort($es);
	ksort($data);
	ksort($originalsCategories);
	ksort($originalsSubCategories);
	$el    = var_export($list, 1);
	$ec    = var_export($ec, 1);
	$es    = var_export($es, 1);
	$ed    = var_export($data, 1);
	$Ca    = var_export($originalsCategories, 1);
	$SubCa = var_export($originalsSubCategories, 1);
	file_put_contents(dirname(__DIR__) . '/src/data.php', <<<PHP
<?php
\$categories = $ec ;
\$subCategories = $es ;
\$whiteList = $el ;
\$data = $ed ;
\$Ca = $Ca ;
\$SubCa = $SubCa ;
return [
'categories'=> \$categories,
'subCategories'=> \$subCategories,
'whiteList'=> \$whiteList,
'data'=> \$data,
'originalsCategories'=> \$Ca,
'originalsSubCategories'=> \$SubCa,
];
PHP
	);
