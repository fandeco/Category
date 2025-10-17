<?php

namespace fandeco\category;

use Exception;

class Description
{
    public $forma
        = [
            'Изогнутый' => 'Изогнутая',
            'Квадратный' => 'Квадратная',
            'Плоский' => 'Плоская',
            'Круглый' => 'Круглая',
            'Овальный' => 'Овальная',
            'Прямоугольный' => 'Прямоугольная',
            'Конусный' => 'Конусная',
            'Цилиндр' => 'Цилиндрическая',
            'Полукруг' => 'Полукруглая',
            'Шар' => 'Шарообразная',
            'Декоративный' => 'Декоративная',

        ];
    public $interer
        = [
            'офиса' => 'офиса',
            'гостиной' => 'гостиной',
            'столовой' => 'столовой',
            'кухни' => 'кухни',
            'магазина' => 'магазина',
            'прихожей' => 'прихожей',
            'спальни' => 'спальни',
            'улицу' => 'улицу',
            'кафе' => 'кафе',
            'ресторанов' => 'ресторанов',
            'детской' => 'детской',
            'больших' => 'больших',
            'залов' => 'залов',
            'ванной' => 'ванной',
            'экспозиции' => 'экспозиции',

        ];
    public $plafond_color
        = [
            'Хром' => ' цвета Хром',
            'Бежевый' => 'Бежевый',
            'Белый' => ' Белого цвета',
            'Медный' => ' цвета Меди',
            'Прозрачный' => 'Прозрачный',
            'Серебристый' => 'Серебристый',
            'Бронза' => ' цвета Бронзы',
            'Коричневый' => 'Коричневый',
            'Желтый' => ' Желтого цвета',
            'Разноцветный' => ' Разноцветный',
            'Черный' => ' Черного цвета',
            'Матовый' => 'Матовый',
            'Серый' => ' Серого цвета',
            'Фиолетовый' => ' Фиолетового цвета',
            'Золотистый' => 'Золотистый',
            'Красный' => 'Красный',
            'Зеленый' => 'Зеленый',
            'Оранжевый' => 'Оранжевый',
            'Розовый' => 'Розовый',
            'Синий' => ' синего цвета',
            'Янтарный' => ' цвета Янтаря',
            'Латунь' => '  цвета Латуни',
            'Голубой' => ' Голубого цвета',
            'Никель' => ' цвета Никеля',
            'Сиреневый' => 'Сиреневый',
            'Дерево' => ' цвета Дерева',
            'мульти' => null,
            'Бронзовый' => ' цвета Бронзы',
            'Бирюзовый' => 'Бирюзовый',
            'Коньячный' => ' Коньячного цвета',
            'Жёлтый' => 'Жёлтого',

        ];
    public $plafond_mat
        = [
            'Металл' => 'Плафон Металлический',
            'Текстиль' => 'Плафон Текстильный',
            'Стекло' => 'Плафон Стеклянный',
            'Хрусталь' => 'Плафон Хрустальный',
            'Акрил' => 'Плафон Акриловый',
            'Пластик' => 'Плафон Пластиковый',
            'Полимер' => 'Плафон Полимерный',
            'Дерево' => 'Плафон Деревянный',
            'Алюминий' => 'Плафон Алюминевый',
            'Керамика' => 'Плафон Керамический',
            'Органза' => 'Плафон Органзовый',
            'Камень' => 'Плафон Каменный',
            'Сталь' => 'Плафон Стальной',
            'Кожа' => 'Плафон Кожаный',
            'Бумага' => 'Плафон Бумажный',
            'Бетон' => 'Плафон Бетонный',
            'Гипс' => 'Плафон Гипсовый',
            'Ротанг' => 'Плафон Ротанговый',
            'Ракушка' => 'Плафон Ракушечный',
            'Зеркало' => 'Плафон Зеркальный',
            'Силикон' => 'Плафон Силиконовый',
            'Перо' => 'Плафон Перьевой',
            'Канат' => 'Плафон Канатный',
            'Лен' => 'Плафон Льняной',
            'Мрамор' => 'Плафон Мраморный',
            'стекло' => 'Плафон Стеклянный',
            'cталь' => 'Плафон Стальной',
            'Ткань' => 'Плафон Тканный',
            'Латунь' => 'Плафон Латунный',

        ];
    public $invalid
        = [
            'треков',
            'Новогодняя продукция',
        ];
    public $vendor
        = [
            'Globo Акция' => 'Globo',
        ];
    public $ignore
        = [
            'лампочки',
        ];
    public $streets
        = [
            'Уличн',
            'Наружн',
        ];
    public $fish
        = [
            'default' => [
                'Будет хорошим решением для квартиры',
                'Оживит ваш интерьер',
                'Даст комфортный свет в комнате',
                'Освежит ваш интерьер',
                'Придаст особый шарм вашему интерьеру',
                'Хорошо впишется в любой интерьер',
                'Подчеркнет индивидуальность вашего интерьера',
                'Создаст в помещении атмосферу комфорта',
                'Подчеркнет стиль помещения',
            ],
            'street' => [
                'Будет хорошим решением для сада',
                'Придаст изюминку вашему дворику',
                'Даст комфортный свет на участке',
                'Добавит волшебства в атмосферу вашего сада',
                'Подчеркнет индивидуальность ландшафта',
                'Создаст гармоничную атмосферу в вашем саду',
                'Заполнит мягким светом окружающее пространство',
                'Создан для ландшафтного освещения',
                'Cтанет замечательным дополнением вашего сада',
                'Сделает ваш участок безопасным и удобным',
                'Сделает ваш садовый участок безопасным и удобным',
                'Будет прекрасным дополнением декора в вашем сада',
                'Будет прекрасным дополнением декора в вашем саду',
                'Обеспечит максимальный уровень комфорта для загородного участка',
            ],
            'lamp' => [
                'Имеет приятный свет',
            ],
        ];
    public $style
        = [
            'Современный' => 'в современном стиле',
            'Классический' => 'в классическом стиле',
            'Модерн' => 'в стиле модерн',
            'Хай-тек' => 'в стиле хай-тек',
            'Лофт' => 'в стиле лофт',
            'Технический' => 'в техническом стиле',
            'Арт-деко' => 'в стиле арт-деко',
            'Прованс' => 'в стиле прованс',
            'Кантри' => 'в стиле кантри',
            'Флористика' => 'в стиле флористика',
            'Минимализм' => 'в стиле минимализм',
            'Замковый' => 'в замковом стиле',
            'Ретро' => 'в стиле ретро',
            'Восточный' => 'в восточном стиле',
            'Детский' => 'в детском стиле',
            'Венецианский' => 'в венецианском стиле',
            'Тиффани' => 'в стиле тиффани',
            'Этно' => 'в этническом стиле',
        ];
    public $category;

    /**
     * Массив с готовыми описаниями [[articul] =>'discription']
     * @var array
     */
    public $descriptions = [];
    /**
     * Массив с готовыми описаниями [[articul] =>'discription'] без html
     * @var array
     */
    public $disc_without_html = [];

    /**
     * @var array{forma:string,style:string,width:string,power:string,vendor:string,weight:string,length:string,height:string,interer:string,voltage:string,category:string,diameter:string,
     *     ip_class:string,lamp_type:string,artikul_1c:string,collection:string,tsvet_temp:string,lamp_socket:array,num_of_lamp:int,show_artikul:string,sub_category:string,country_orig:string,
     *     plafond_color:string,armature_color:string,plafond_material:string,armature_material:string,ploshad_osvesheniya:string}[] $items
     */
    public $items = [];    #массив товаров и их атрибутов [articul=>[atributs]]
    /**
     * Массив описания для seo и иных шаблонов
     * @var array
     */
    public $Json = [];
    public $last = '';
    public $last_without_html = '';
    public Category $categoryValidator;
    public $singulars = [];
    public ?string $result;
    public ?string $raw;
    public ?array $disc;

    /**
     * @param array<String,mixed> $items
     */
    public function __construct($items = [])
    {
        $this->items = $items;
        $this->categoryValidator = new Category();
        $this->category = $this->categoryValidator->originalsCategories;
    }

    /**
     * @param string $str
     * @return string
     */
    public static function DeUnicode(string $str)
    { // декодирование unicode
        $converter = [
            '\u0410' => 'А',
            '\u0430' => 'а',
            '\u0411' => 'Б',
            '\u0431' => 'б',
            '\u0412' => 'В',
            '\u0432' => 'в',
            '\u0413' => 'Г',
            '\u0433' => 'г',
            '\u0414' => 'Д',
            '\u0434' => 'д',
            '\u0415' => 'Е',
            '\u0435' => 'е',
            '\u0401' => 'Ё',
            '\u0451' => 'ё',
            '\u0416' => 'Ж',
            '\u0436' => 'ж',
            '\u0417' => 'З',
            '\u0437' => 'з',
            '\u0418' => 'И',
            '\u0438' => 'и',
            '\u0419' => 'Й',
            '\u0439' => 'й',
            '\u041a' => 'К',
            '\u043a' => 'к',
            '\u041b' => 'Л',
            '\u043b' => 'л',
            '\u041c' => 'М',
            '\u043c' => 'м',
            '\u041d' => 'Н',
            '\u043d' => 'н',
            '\u041e' => 'О',
            '\u043e' => 'о',
            '\u041f' => 'П',
            '\u043f' => 'п',
            '\u0420' => 'Р',
            '\u0440' => 'р',
            '\u0421' => 'С',
            '\u0441' => 'с',
            '\u0422' => 'Т',
            '\u0442' => 'т',
            '\u0423' => 'У',
            '\u0443' => 'у',
            '\u0424' => 'Ф',
            '\u0444' => 'ф',
            '\u0425' => 'Х',
            '\u0445' => 'х',
            '\u0426' => 'Ц',
            '\u0446' => 'ц',
            '\u0427' => 'Ч',
            '\u0447' => 'ч',
            '\u0428' => 'Ш',
            '\u0448' => 'ш',
            '\u0429' => 'Щ',
            '\u0449' => 'щ',
            '\u042a' => 'Ъ',
            '\u044a' => 'ъ',
            '\u042b' => 'Ы',
            '\u044b' => 'ы',
            '\u042c' => 'Ь',
            '\u044c' => 'ь',
            '\u042d' => 'Э',
            '\u044d' => 'э',
            '\u042e' => 'Ю',
            '\u044e' => 'ю',
            '\u042f' => 'Я',
            '\u044f' => 'я',
            '["' => null,
            '"]' => null,
            'globo_new' => 'Globo',
            'globo-new' => 'Globo',
        ];
        return strtr($str, $converter);
    }

    /**
     * @param array{forma:string,style:string,width:string,power:string,vendor:string,weight:string,length:string,height:string,interer:string,voltage:string,category:string,diameter:string,
     *     ip_class:string,lamp_type:string,artikul_1c:string,collection:string,tsvet_temp:string,lamp_socket:array,num_of_lamp:int,show_artikul:string,sub_category:string,country_orig:string,
     *     plafond_color:string,armature_color:string,plafond_material:string,armature_material:string,ploshad_osvesheniya:string} $items
     */
    public function add($items = [])
    {
        $this->items[] = $items;
        return $this;
    }

    /**
     * @throws Exception
     */
    public function gen()
    {
        foreach ($this->items as $item) {
            [$result, $raw, $disc] = $this->description($item);
//            $this->discriptions[(string)$artikul_1c] = $result;
//            $this->disc_without_html[(string)$artikul_1c] = $raw;
//            $this->Json[(string)$artikul_1c] = $disc;
            $this->last_without_html = $raw;
            $this->last = $result;
        }
        return $this;
    }

    public function description($item)
    {
        $disc = [];
        $artikul_1c = (string)$item['artikul_1c'];
        $show_artikul = $item['show_artikul'];
        $sub_category = $item['sub_category'];
        $category = $item['category'];
        $vendor = $item['vendor'];
        $SEED = (int)preg_replace('/\D/', '', $artikul_1c);
        mt_srand($SEED);

        // Инициализация переменных
        $arma = null;
        $interer2 = null;
        $fom = 'cm'; // значение по умолчанию
        $plafond = null;
        $diameter = null;
        $collection = null;
        $style = null;
        $fish = null;
        $size = null;
        $ip_class = null;
        $country_orig = null;
        $lamp = null;
        $ploshad_osvesv = null;
        $weight = null;
        $forma = null;

        if (mb_strtolower($category) != 'лампочки') {
            $diameter = $item['diameter'] ?? null;
            $country_orig = $item['country_orig'] ?? null;
            $collection = $item['collection'] ?? null;
            $weight = $item['weight'] ?? null;
            $forma = $item['forma'] ?? null;
            $ip_class = $item['ip_class'] ?? null;
            $style = $item['style'] ?? null;
            $plafond_color = $item['plafond_color'] ?? null;
            $plafond_mat = $item['plafond_material'] ?? null;
            $armature_color = $item['armature_color'] ?? null;
            $armature_mat = $item['armature_material'] ?? null;
            $lamp_socket = $item['lamp_socket'] ?? null;
            $interer = $item['interer'] ?? null;
            $length = $item['length'] ?? null;
            $width = $item['width'] ?? null;
            $height = $item['height'] ?? null;
            $num_of_lamp = $item['num_of_lamp'] ?? null;
            $ploshad_osvesv = $item['ploshad_osvesheniya'] ?? null;

            //fish
            $fish = null;
            if ($category && self::indexSearch($category, $this->ignore)) {
                return ['', '', []];
            }
            if (self::indexSearch($sub_category, $this->streets) or self::indexSearch($category, $this->streets)) {
                $fish = $this->fish['street'][array_rand($this->fish['street'])];
            } else {
                $fish = $this->fish['default'][array_rand($this->fish['default'])];
            }
            if ($fish) {
                $fish .= '.';
            }
            //vendor
            if ($vendor && !is_numeric($vendor)) {
                $vendor = strtr((string)$vendor, $this->vendor);
            } else {
                $vendor = $item['vendor.name_1c'] ?? null;
            }
            //sub_category
            try {
                [$category, $sub_category] = $this->categoryValidator->validate(
                    (string)$category,
                    (string)$sub_category
                );
                $catData = $this->categoryValidator->getDataByCategory((string)$category, (string)$sub_category);
                if (!empty($catData['singular'])) {
                    $cat = $catData['singular'];
                } else {
                    $cat = 'Светильник';
                }
            } catch (Exception $e) {
                try {
                    $catData = $this->categoryValidator->getDataByCategory((string)$category);
                    if (!empty($catData['singular'])) {
                        $cat = $catData['singular'];
                    } else {
                        $cat = 'Светильник';
                    }
                } catch (Exception $e) {
                    $cat = 'Светильник';
                }
            }
            if ($cat === 'Светильник' && (isset($this->singulars[$sub_category]) || isset($this->singulars[$category]))) {
                $cat = $this->singulars[$sub_category] ?? $this->singulars[$category];
            }
            if (empty($cat)) {
                $cat = 'Светильник';
            }
            //collection
            if ($collection) {
                $collection = 'серии ' . $collection;
            }
            //style
            if ($style && is_array($style)) {
                $style = strtr($style[0], $this->style);
            } else {
                $style = null;
            }
            //Размеры (ДхШхВ)
            $size = null;
            if ((int)$length > 0 || (int)$width > 0 || (int)$height > 0) {
                $sz = [
                    'length' => (float)($length ?? 0),
                    'width' => (float)($width ?? 0),
                    'height' => (float)($height ?? 0)
                ];
                $max = array_keys($sz, max($sz))[0];
                $sz2[$max] = self::format_len($sz[$max]);
                unset($sz[$max]);
                $fom = $sz2[$max][1];
                foreach ($sz as $key => $value) {
                    $sz2[$key] = self::format_len($value, $fom);
                    $sz[$key] = $sz2[$key][0];
                }
                $sz[$max] = $sz2[$max][0];
                switch (array_sum($sz)) {
                    case $sz['length']:
                        $sz2 = $sz['length'];
                        $size = 'Длина ' . $sz2 . ' ' . $fom . '.';
                        break;
                    case $sz['width']:
                        $sz2 = $sz['width'];
                        $size = 'Ширина ' . $sz2 . ' ' . $fom . '.';
                        break;
                    case $sz['height']:
                        $sz2 = $sz['height'];
                        $size = 'Высота ' . $sz2 . ' ' . $fom . '.';
                        break;
                    default:
                        $size = 'Размеры ' . $sz2['length'][0] . 'x' . $sz2['width'][0] . 'x' . $sz2['height'][0] . ' ' . $fom . '.';
                        break;
                }
                unset($sz2, $sz);
            }
            if ($diameter) {
                $dim = self::format_len($diameter, $fom);
                $diameter = 'Диаметр ' . $dim[0] . ' ' . $fom;
            } else {
                $diameter = null;
            }
            //Форма
            if ($forma && is_array($forma)) {
                $forma_value = strtr($forma[0], $this->forma);
                $forma = 'Форма ' . $forma_value . '.';
            } else {
                $forma = null;
            }
            //арматура
            if ($armature_mat && $armature_color && is_array($armature_mat) && is_array($armature_color)) {
                $arma = 'материал/цвет арматуры ' . $armature_mat[0] . '/' . $armature_color[0] . '.';
            } else {
                $arma = null;
            }
            //Плафон
            if ($plafond_mat && is_array($plafond_mat)) {
                $plafond = strtr($plafond_mat[0], $this->plafond_mat) . ' ';
            } else {
                $plafond = null;
            }
            if ($plafond_color && is_array($plafond_color)) {
                if ($plafond == null) {
                    $plafond = 'Плафон ';
                }
                $plafond .= strtr($plafond_color[0], $this->plafond_color);
                if ($arma) {
                    $plafond .= ', а';
                } else {
                    $plafond .= '.';
                }
            } else {
                $plafond = null;
            }
            //пылевлагозащиты
            if ((int)$ip_class > 0) {
                $ip_class = 'Параметры пылевлагозащиты IP — ' . (int)$ip_class . '.';
            } else {
                $ip_class = null;
            }
            if ($country_orig) {
                $country_orig = 'Страна происхождения бренда — ' . $country_orig . '.';
            } else {
                $country_orig = null;
            }
            //лампы и цоколи
            $lamp = null;
            if ($num_of_lamp || $lamp_socket) {
                $lamp = 'Использует ';
                if ($num_of_lamp) {
                    $num_of_lamp_text = self::plural(
                        $num_of_lamp,
                        'лампу ',
                        'лампы ',
                        'ламп '
                    );
                    $lamp .= $num_of_lamp . ' ' . $num_of_lamp_text;
                }
                if ($lamp_socket && is_array($lamp_socket)) {
                    if (count($lamp_socket) > 1) {
                        if (!$num_of_lamp) {
                            $lamp .= 'лампы ';
                        }
                        $lamp .= 'с цоколями ' . implode(',', $lamp_socket);
                    } elseif ($lamp_socket[0] == 'LED') {
                        $lamp = 'Имеются встроенные светодиодные лампы, рассчитанные на весь срок службы светильника';
                    } else {
                        if (!$num_of_lamp) {
                            $lamp .= 'лампу ';
                        }
                        $lamp .= 'с цоколем ' . $lamp_socket[0];
                    }
                    $lamp .= '.';
                }
            }
            //вес
            if ((int)$weight > 0) {
                $weight_formatted = self::format_weight($weight);
                $weight = 'Вес с упаковкой ' . $weight_formatted[0] . ' ' . $weight_formatted[1];
            } else {
                $weight = null;
            }
            //interer
            if ($interer && is_array($interer)) {
                $interer2 = 'Идеально подходит ';
                $int_arr = implode(', ', $interer);
                if (count($interer) == 2) {
                    $int_arr = str_replace(', Для', ' или', $int_arr);
                }
                $interer2 .= mb_strtolower($int_arr . '.');
            }
            //Площадь освещения
            if ((float)$ploshad_osvesv > 0) {
                $ploshad_osvesv = 'Площадь освещения охватывает ' . $ploshad_osvesv . ' m<span style="font-family: \'Arial\',serif">²</span>.';
            } else {
                $ploshad_osvesv = null;
            }

            if ($plafond && $arma) {
                $plafond .= ' ' . $arma;
            }
            if ($plafond) {
                $plafond = mb_strtolower($plafond);
                $plafond = self::mb_ucfirst($plafond);
            }
            if ($forma) {
                $forma = mb_strtolower($forma);
                $forma = self::mb_ucfirst($forma);
            }
        } else {
            // Блок для лампочек
            if ($item['lamp_type'] ?? null) {
                if ($item['lamp_type'] == 'накаливания') {
                    $cat = 'Лампа накаливания ';
                } else {
                    $cat = $item['lamp_type'] . ' лампочка';
                }
            } else {
                $cat = 'лампочка';
            }
            if ($item['lamp_socket'] ?? null) {
                $collection = 'С цоколем ' . $item['lamp_socket'][0];
            }
            if ($item['tsvet_temp'] ?? null) {
                $style = 'Имеет приятный ' . $item['tsvet_temp'][0] . ' свет';
            } else {
                $style = null;
            }
            if ($item['power'] ?? null) {
                $fish = 'Потребляет ' . $item['power'] . ' W.';
            } else {
                $fish = null;
            }
            if ($item['voltage'] ?? null) {
                $size = 'Рассчитана на напряжение ' . $item['voltage'] . ' V';
            } else {
                $size = null;
            }
        }

        //сборка
        $disc['category'] = $cat;
        $disc['vendor'] = $vendor;
        $disc['show_artikul'] = $show_artikul;
        $disc['collection'] = $collection;
        $disc['style'] = $style;
        $disc['fish'] = $fish;
        $disc['size'] = $size;
        $disc['diameter'] = $diameter;
        $disc['ip_class'] = $ip_class;
        $disc['forma'] = $forma;
        $disc['plafond'] = $plafond;
        $disc['lamp'] = $lamp;
        $disc['ploshad_osvesv'] = $ploshad_osvesv;
        $disc['interer'] = $interer2 ?? null;
        $disc['country_orig'] = $country_orig;
        $disc['weight'] = $weight;

        foreach ($disc as $key => $value) {
            if ($value) {
                $disc[$key] = '<span class="' . $key . '">' . $value . '</span>';
            } else {
                unset($disc[$key]);
            }
        }

        $dk = array_keys($disc);
        foreach ($dk as $k => $val) {
            if ($val == 'fish') {
                $disc[$dk[$k - 1]] = str_replace('</span>', '.</span>', $disc[$dk[$k - 1]]);
            }
        }

        $result = implode(' ', $disc);
        $re = '/\s{2,}/m';
        $subst = ' ';

        $result = str_replace('кафе. ресторанов', 'кафе и ресторанов', $result);
        $result = preg_replace('/(Array)/', $subst, $result);
        $result = preg_replace($re, $subst, $result);
        $raw = preg_replace('/<.*?>/', '', strip_tags($result));
        $raw = preg_replace('/(\.{2,})|(\s+\.+)/', '.', $raw);

        $this->result = $result;
        $this->raw = $raw;
        $this->disc = $disc;
        return [$result, $raw, $disc];
    }

    /**
     * @param null $str
     * @param array $array
     * @return bool
     */
    public static function indexSearch($str = null, $array = [])
    {
        foreach ($array as $value) {
            $str = mb_strtolower($str);
            $value = mb_strtolower($value);
            if (stripos($str, $value) !== false) {
                return true;
            }
        }
        return false;
    }

    public static function format_len($s, $fom = 'def')
    {
        $size = (float)$s;

        switch ($fom) {
            case 'mm':
                $size *= 10;
                break;
            case 'cm':
                break;
            case 'm':
                $size /= 100;
                break;
            default:
                if ($size < 1) {
                    $size *= 10;
                    $fom = 'mm';
                }
                if ($size > 1) {
                    $fom = 'cm';
                }
                if ($size > 100) {
                    $size /= 100;
                    $fom = 'm';
                }
                break;
        }
        return [round($size, 1), $fom];
    }

    /**
     * @param int|float $n
     * @param string $w1
     * @param string $w2
     * @param string $w3
     * @return string
     */
    public static function plural($n, $w1, $w2, $w3)
    {
        if ($n != null) {
            if ($n % 10 == 1 && $n % 100 != 11) {
                return $w1;
            }
            if ($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20)) {
                return $w2;
            }
            return $w3;
        }
        return null;
    }

    public static function format_weight($s)
    {
        $size = (float)$s;
        if ($size < 1) {
            $size /= 1000;
            $fom = 'g';
        }
        if ($size >= 1) {
            $fom = 'kg';
        }
        return [round($size, 1), $fom];
    }

    /**
     * @param string $str
     * @param string $encoding
     * @return false|string
     */
    public static function mb_ucfirst(string $str, $encoding = 'UTF-8')
    {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        return mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) .
            mb_substr($str, 1, mb_strlen($str), $encoding);
    }

    public function fromArray(array $data)
    {
        $this->description($data);
        return $this;
    }

    /**
     * @return string|null
     */
    public function html()
    {
        return $this->result;
    }

    /**
     * @return string|null
     */
    public function raw()
    {
        return $this->raw;
    }

    /**
     * @return array|null
     */
    public function disc()
    {
        return $this->disc;
    }

    /**
     * @return array|null
     */
    public function toArray()
    {
        return $this->disc;
    }

    /**
     * @return array|mixed
     */
    public function setSingular($text, $singular)
    {
        $this->singulars[$text] = $singular;
        return $this;
    }
}
