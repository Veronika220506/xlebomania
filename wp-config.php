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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'u3677576_xlebomania' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u3677576_xlebomania' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'nikusia220506' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'u>.X_X3QV?b1*w p h:PjYA/JsqkYO`/0z/M~OF,:6on@SAX8,(Z,Q0-D+%FDyxa' );
define( 'SECURE_AUTH_KEY',  'L&3Q_jYSN.zs#|?eESHUaL6W*nPO*Y/Kg[BsH:_.~dA&oV-OZ:#4)sf@3sUPG;6Q' );
define( 'LOGGED_IN_KEY',    '1DvBi7(^9DAzwq{YBN:[yF,<?__Mhp*{@u/we,PygB01uk>!mR;ZfI8G(*+Ye3K@' );
define( 'NONCE_KEY',        'WDb:q#0&`FBVHxV1q~3&,_j~5V~12*B=S^zyZ,ApICY{}> *3|dm$bzdDJB0mT_R' );
define( 'AUTH_SALT',        'YaKzPgq5?Q;mWO(FUC/w||>3->2*&^>[Kyv~3Wq: rTc!i2Ae<-.qS8o*[jhebR4' );
define( 'SECURE_AUTH_SALT', 'KEBS!veGqf,^8(dwjbkF4Y49{dQn+2=RkM0B=R6Ro95`ULc[1E>O{@Iky-?T,>y)' );
define( 'LOGGED_IN_SALT',   '-MTI?R{x7yP0HX#k5nSFHI*NlmKXfc/&*E8lN&9j0Xi1,^]NdAzhWmHvDV2ZLjaO' );
define( 'NONCE_SALT',       'cR{X-!_8o[?ED+}ol0paKxc|GsZ4kM~VzO0_V6%oCJ^$w=.tdLcvDB~hn0>zBRyT' );

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
