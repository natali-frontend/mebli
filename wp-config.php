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
define( 'DB_NAME', 'mebli' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+Q-cj=udKPr<1_Di[gq7{Qk%M@X#UA1R;XBT+nn!1.QXN]8kMvLB57:bdf>.I rG' );
define( 'SECURE_AUTH_KEY',  'TsS%cN|/}=0I TPDSZ+@I[AovJz{*IUCJJ./ZKMvnTBfa&cf<~hmFhP$yDD|)`1z' );
define( 'LOGGED_IN_KEY',    'h+kk,M*:PW+8[ijqo^ Dj{*a5t_hV6/!l$r(Pe}GBG7!Pg|}5)ym&*EUyTm*.Fib' );
define( 'NONCE_KEY',        'LY(TiCC(TJ!BO4eu{MwGyk(u<U4((A-^q!nM_|LFUCpyC]!WqREs|rV_Xc`,;&A_' );
define( 'AUTH_SALT',        ' <<kT!]1SBW;a>I`4#3d3BNh@TzDOJbd1ztb;x7(3x}fo)$SdJH4035t-Sln~A0-' );
define( 'SECURE_AUTH_SALT', ' Lw!7;{Bs)&Fa91/KjRSa!AojEB=3Y^2t@soOMYB/ttl;:9Jh,w/` =MCqNDf0l[' );
define( 'LOGGED_IN_SALT',   'K3eN{5~y $P<V%+AvemTQcG-up)NPyds-|aC52=54!(yoE2`(BM)d<tNW0utWU,o' );
define( 'NONCE_SALT',       '@Pa6<`6X?t8V8V=[FW=cOv4DR}%_&Y2s?>(y9JJQ]90$5@}Bn{BKGe7;.DjVH{a ' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );
define('WPCF7_AUTOP', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
