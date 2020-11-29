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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '01091990' );

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
define( 'AUTH_KEY',         '[Y[eT/Stz:?X`~>9ssjEL2WS#VP;R%P,q*UjB`u1aVSX!ol6.UG9@1g5Z+j{bM^9' );
define( 'SECURE_AUTH_KEY',  '`]~Du.v![W)|g.ON@a`u3ec{mP^m2;N5$Z,cRYe$&^}xZ)>,R^d+$5.V0eIlw_TQ' );
define( 'LOGGED_IN_KEY',    '_|q-~3Ydw&9YbGz6-FkMI{ <-o]~#N`T0%LLB;nVj13P$s=G/.l/`H#l-X.y:+}d' );
define( 'NONCE_KEY',        '#:-z&W1qY!k(3gaWFt*d?]G]<Ly}kF90*gK& {lHIHbY;:E,$._|@DAy1bklbES-' );
define( 'AUTH_SALT',        'Lv?-02NUXFu5 $wQ]}*X|W;/_b1.56gW=GNb<:fZ2kp%#944Q/},d 7RkCKO@=:2' );
define( 'SECURE_AUTH_SALT', 'DxVz%HepFU;Fbv>^k~)d}Qhg fx4iI?3Iw9r<Zt+(x4`tv.6Q7h.*KmTM8hu+@=<' );
define( 'LOGGED_IN_SALT',   'O70/^A9.MPhuegyDmu?V4;H$O;Km9IqO$PxOi$ujbN&G?$=E$`lW7Fx@PpeC?dfX' );
define( 'NONCE_SALT',       'pSe@gLL8DNx7(v#djxjnG(w)jL@u%x%$[|E17 `(9:=sa8iM8c%d-_Z<XXFApQU2' );

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
