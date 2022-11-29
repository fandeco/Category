<?php
	require dirname(__DIR__) . '/vendor/autoload.php';
	error_reporting(E_ERROR);
	define("INPUT_FILE_NAME", dirname(__DIR__) . '/category.xlsx');

	function raw_text($a = '')
	{
		return (string)mb_strtolower(preg_replace('@[^A-zА-я\d]|[/_\\\.,]@u', '', (string)$a));
	}

	$testAgainstFormats = [
		\PhpOffice\PhpSpreadsheet\IOFactory::READER_XLSX,
		\PhpOffice\PhpSpreadsheet\IOFactory::READER_XLS,
		\PhpOffice\PhpSpreadsheet\IOFactory::READER_HTML,
	];

	/** Load $inputFileName to a Spreadsheet Object  **/
	$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(INPUT_FILE_NAME, 0, $testAgainstFormats);

	$sheet = $spreadsheet->getSheet(0);

	$table = $sheet->toArray();

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
		if ($k === 0) {
			continue;
		}
		if ($row[1] !== NULL) {
			$category = $row[1];
		}


		$subCategory       = $row[2];
		$categoryKEY       = raw_text($category);
		$subCategoryKEY    = raw_text($subCategory);
		$categories[]      = $categoryKEY;
		$subCategories[]   = $subCategoryKEY;
		$categories        = array_unique($categories);
		$subCategories     = array_unique($subCategories);
		$categoriesKeys    = array_flip($categories);
		$subCategoriesKeys = array_flip($subCategories);

		$originalsCategories[$categoriesKeys[$categoryKEY]]          = $category;
		$originalsSubCategories[$subCategoriesKeys[$subCategoryKEY]] = $subCategory;

		$list[$categoriesKeys[$categoryKEY]][0] = 0;
		$list[$categoriesKeys[$categoryKEY]][]  = $subCategoriesKeys[$subCategoryKEY];
		$list[$categoriesKeys[$categoryKEY]]    = array_unique($list[$categoriesKeys[$categoryKEY]]);

		$template = strtr($row[3], [
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
			'singular'    => $row[8],
			'feature'     => array_map(function ($str) {
				return trim($str, ' "');
			}, explode(',', $row[6])),
			'installType' => array_map(function ($str) {
				return trim($str, ' "');
			}, explode(',', $row[7])),
		];


		if ($k >= 120) {
			break;
		}
	}
	$ec = $categories + $categoriesKeys;
	$es = $subCategories + $subCategoriesKeys;
	sort($list);
	sort($ec);
	sort($es);
	sort($data);
	sort($originalsCategories);
	sort($originalsSubCategories);
	$el    = var_export($list, 1);
	$ec    = var_export($categories + $categoriesKeys, 1);
	$es    = var_export($subCategories + $subCategoriesKeys, 1);
	$ed    = var_export($data, 1);
	$Ca    = var_export($originalsCategories, 1);
	$SubCa = var_export($originalsSubCategories, 1);
	file_put_contents(__DIR__ . '/data.php', <<<PHP
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