<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<R Q?}Vd7SXQC2-pHc|g1Y9j^%w.W>U[-2unG/H)_9g^6B.hz0Qi5{t0$X[4@]no' );
define( 'SECURE_AUTH_KEY',  '1xTm==SWhHtW,S2Ds=JkzElZfKmk7y_)Zu3T>[-n`+<g;cxwEhgMT#3G0;Es1Ed1' );
define( 'LOGGED_IN_KEY',    '}PKwVDP/y.|*py1UvD[{[u.Uut)U|14xhkU+PH=H:?F|g2x0;9DLl59f($$OR=f ' );
define( 'NONCE_KEY',        '/iW<g.)|4z(/G$3ab7e_6[|c=3@md(eGslVASVV(4Wo%qf4`,k|yjmeG26GuiLXm' );
define( 'AUTH_SALT',        'm/G9`EZPzJt]wAM;><gm0f_tvPHKtu4nJUF4]F@*[[vIkV)Rw~|03Bt=R;76d.yB' );
define( 'SECURE_AUTH_SALT', 'U(FbytFJ]6XqGP!fC;3*It#]S2=]ffSIXD&hZqu.YH/<>aK)fT9P$D^j9.O6FKZi' );
define( 'LOGGED_IN_SALT',   'b~L$;&]XA*>|8}1Z.JTNV#b_ev7z&Jg[2]GZD1R1~{bFt{?Zpvs5C=IXRkayM#]K' );
define( 'NONCE_SALT',       ']5MsF-[n_Ph{OR9[GZnTD<YJd#!Qent*q4B:^CxX[q<M=_-omdZ?YC04qS~}hT[&' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
