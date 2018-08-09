<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'id6736705_wptest');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J$T*0+kahUd`h7PuW<jSt%?u/W ^LWHyM,/FKzUtk0rM(JzR?|mCke1e+Ler:akL');
define('SECURE_AUTH_KEY',  'FSQY!oMk@C!+5N-#<c6wi4[Q?AO07tW$%o@;NkgAv5em|:2n6S=&,<?q@X3}[0t!');
define('LOGGED_IN_KEY',    'K2EcFi{`Z~CTHxF-|->(F!j|[+QC{RveeuL7S-yC!YI~x7k0#f1nXCg-wb>fU?6)');
define('NONCE_KEY',        '6}c9:hX$8_%FH?KEkG3@[r@SuIgPG>6fB5-dpYoP@>_XFGl`JMr::G_SiS/kZ(e`');
define('AUTH_SALT',        '.;)7mIY {-~^l4c:OpA9p7ZC nA-_NcO1-2yOY_68u@ZPa9wwcp|,]*t9w`hM`)P');
define('SECURE_AUTH_SALT', 'X=}Mrum9y?<><kTOQWZ(1TZ+C~`+Zp$mGQbz5;aVyj}|{g[Xl+Ij7QXOI.=B?m&$');
define('LOGGED_IN_SALT',   'sljA5DMJu%F-{{/_M?^k%*>a6p|<!cx?22Y/DrkeDB=({H9hy1G6hu6;s#)4^%Oj');
define('NONCE_SALT',       '+SsdnQ&:H$UCXvoAMU?Pcqv*lWLIzF7=UA}nX|Z2/qO^ue68[:ZTrZMqg`3S?%87');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
