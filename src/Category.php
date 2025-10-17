<?php

namespace fandeco\category;

/**
 * Единый класс категорий
 *
 * [Проект по новым категориям](https://docs.google.com/spreadsheets/d/1tKIDh4Lo4LjGdXGw5-UzO8ZCRkCDkNYMw4wjB3sU7MM/edit#gid=33988330)
 */
class Category
{
    public $categories;
    public $subCategories;
    public $data = [];
    public $categoryOrder = [];
    /**
     * @var mixed
     */
    public $whiteList;
    /**
     * @var mixed
     */
    public $originalsCategories = [];
    /**
     * @var mixed
     */
    public $originalsSubCategories = [];

    public function __construct()
    {
        $data = include __DIR__ . "/data.php";
        $this->categories = $data['categories'];
        $this->subCategories = $data['subCategories'];
        $this->whiteList = $data['whiteList'];
        $this->originalsCategories = $data['originalsCategories'];
        $this->originalsSubCategories = $data['originalsSubCategories'];
        $this->data = $data['data'];
        $this->categoryOrder = [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 8,
            7 => 7,
            8 => 6,
            9 => 9,
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
     * Возвращает имя файла по артикулу заменяя все спец символы на ~ по регламенту
     *
     * '\\' => '~'
     *
     * '/'  => '~'
     *
     * ':'  => '~'
     *
     * '*'  => '~'
     *
     * '?'  => '~'
     *
     * '"'  => '~'
     *
     * '>'  => '~'
     *
     * '<'  => '~'
     *
     * '|'  => '~'
     *
     *
     * @param string $article
     * @return string
     */
    public static function getFileNameFromArticle(string $article)
    {
        return strtr($article, [
            '\\' => '~',
            '/' => '~',
            ':' => '~',
            '*' => '~',
            '?' => '~',
            '"' => '~',
            '>' => '~',
            '<' => '~',
            '|' => '~',
        ]);
    }

    /**
     * Проверяет связи категории и подкатегории.
     * Возвращает: [$category, $subCategory]. В правильном регистре
     * @throws CategoryExtension
     */
    public function validate(string $category, string $subCategory = '')
    {
        $realCategory = '';
        $realSubCategory = '';

        if (empty($category)) {
            throw new CategoryExtension('Отсутствует основная категория', $category, $subCategory);
        }
        if (self::rawText($category) === self::rawText($subCategory)) {
            $subCategory = '';
        }
        if (self::rawText($category, false) === self::rawText('на ручную проверку')) {
            throw new CategoryExtension('На ручную проверку', $category, $subCategory);
        }
        try {
            $categoryId = $this->getCategoryId($category);
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
     * @param string $a
     * @param        $add
     * @return string
     */
    public static function rawText(string $a = ''): string
    {
        return mb_strtolower(preg_replace('@[^A-zА-я\d]|[/_\\\.,]@u', '', (string)$a));
    }

    /**
     * @throws CategoryExtension
     */
    public function getCategoryId(string $category): int
    {
        $category = self::rawText($category);
        if (array_key_exists($category, $this->categories)) {
            return $this->categories[$category];
        }
        throw new CategoryExtension("Не зарегистрированная категория", $category, null);
    }

    /**
     * @throws CategoryExtension
     */
    public function getSubCategoryId(string $subCategory): int
    {
        if (!$subCategory) {
            return 0;
        }
        $subCategory = self::rawText($subCategory);
        if (array_key_exists($subCategory, $this->subCategories)) {
            return $this->subCategories[$subCategory];
        }
        throw new CategoryExtension("Не зарегистрированная подкатегория", null, $subCategory);
    }

    public function getCategoryRealNameById(int $category): string
    {
        return $this->originalsCategories[$category];
    }

    /**
     * @throws CategoryExtension
     */
    public function categoryIsIncludeSubCategory(int $category, int $subCategory): bool
    {
        $whiteList = $this->whiteList[$category];
        if (empty($whiteList)) {
            throw new CategoryExtension("Не зарегистрированная категория", $category, $subCategory);
        }
        if (in_array($subCategory, $whiteList)) {
            return true;
        }
        return false;
    }

    public function getSubCategoryRealNameById(int $subCategory): string
    {
        return $this->originalsSubCategories[$subCategory] ?? '';
    }

    /**
     * Возвращает данные о категории и подкатегории
     * @param int|string $category
     * @param int|string $subCategory
     * @return array
     * @throws CategoryExtension
     */
    public function getDataByCategory($category, $subCategory = 0): array
    {
        if (!is_numeric($category)) {
            $category = $this->getCategoryId($category);
        }
        if (!is_numeric($subCategory)) {
            $subCategory = $this->getSubCategoryId($subCategory);
        }

        $all_data = $this->getData();
        if (!empty($all_data[$category][$subCategory])) {
            return $all_data[$category][$subCategory];
        }

        throw new CategoryExtension("Не удалось получить данные по {$category}/$subCategory", $category, $subCategory);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
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
     * @throws CategoryExtension
     */
    public function getAllCategory()
    {
        $result = [];
        foreach ($this->categories as $key => $value) {
            if (is_int($key)) {
                $value = $this->getCategoryRealNameById($key);
                $result[$value] = $this->getSubCategoriesByCategory($key);
                foreach ($result[$value] as $id => $sub) {
                    $result[$value][$id] = $this->getSubCategoryRealNameById($id);
                }
            }
        }
        return $result;
    }

    /**
     * Возвращает подкатегории внутри категории
     * @param int|string $category
     * @return array
     * @throws CategoryExtension
     */
    public function getSubCategoriesByCategory($category): array
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
}
