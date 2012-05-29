<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'td');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/N)N7uX;JXqypr657Tp)*qP@|MwcLd[9!-vY4^KF1NMZ+HXbo2p1T]*NRUM,PNas');
define('SECURE_AUTH_KEY',  '4ODNlrMwr+3hY+0>`zH=5ob13 4W9KG1-nW4J+4zz;Y~mgf[H7KGi+FyoKu%L+AB');
define('LOGGED_IN_KEY',    '}++|FN;JaZ%wC0]Z+}9Ie^G-`4aFqP-n]?X kl*Sxu8>2@-NCut]]b=hK4TrI|zI');
define('NONCE_KEY',        'nfHC$kd,-5=%tTC7}h9b$dj7VWLqc~+-T>W= @8-s`m)*Q q|TpXn]zHuv3RvOG@');
define('AUTH_SALT',        ';UDv VBc;Zt8yOYj*1MDLTJBmKBIZ}#a)*(ec>4|?Ufu:FW.-+^R+xbea1VrD!ua');
define('SECURE_AUTH_SALT', 'tC|BI2+6U!x^,;PI5qi.:aF!^:vzLMq@?SUTAlsd?JsL+.#Fk;KS3)i_gq*:-d:I');
define('LOGGED_IN_SALT',   'wVe_[~Kozr$usYJRE+OaBK.5wu8MDyuQ77L9vARh&G+dD*~HP{^WZ/Q4+;(yo=r1');
define('NONCE_SALT',       'Bd^$s?0,<|he|~8yc)ZNE* L~$UCh>BU$bE5MB>wTw?+^gccq-=!bRMD+Yu]<qfu');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
