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
define( 'DB_NAME', 'real-invest' );

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
define( 'AUTH_KEY',         'qic]^51!gIH?70#_XOKF1@D@Fl`5N(lIY9DVX3,TS+S_-D*4y}N]%I+4]; gy(%L' );
define( 'SECURE_AUTH_KEY',  ']3*3v{M:_+>P)TRKz~<*|zB4qym#l#GKI4>n1{7%6K,)AmY74W#$o%6z9vfP*Md5' );
define( 'LOGGED_IN_KEY',    '9g][nQsZF~d%Fdjs*}~M.9y$2/:ps{0hYWg>.jZUKCSHO?K)^7M{sZ)q5YSW%<1[' );
define( 'NONCE_KEY',        'FlC~OLi/@XnHdPw;!qE$=h6+TyjsK=uzS;*)P{~#u,S=(}5A^$_-X{nP6_v$Buh}' );
define( 'AUTH_SALT',        'M_U.CXRl-ASt?|?f^r^!y-!.Ccr;7;kvye)sP(ki80:sKLy!yr;`aBd!Y5F_rBGK' );
define( 'SECURE_AUTH_SALT', 'GGi(xoEl_94Q,H3>>SW6DxZn6h]+BX~6b$UDuy6#n+2l:iPnXT#;4mZJI`B~P1lX' );
define( 'LOGGED_IN_SALT',   'C0_ Th~/;xB;R3lR!r7Z)TTQnW-3*h4aNHYc+qV:aWP1^<j;Sb~n^-A*OG7M!hb~' );
define( 'NONCE_SALT',       'K;B:iH|V-@DRrIj6YC.!NanQH1M^PG7SEkL{X B#R;T1hT&nX>zPtz@m<M{bRCn;' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
