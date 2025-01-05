<?php

/** The base configuration for WordPress */

// ** Database settings - You can get this info from your web host ** //
define('DB_NAME', 'local');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 */
define('AUTH_KEY',          '}.oXDXrm#C06[mRz0^C3sg6n]me8C2< hn^Es1!YUtfNiknNo{G89A;gzTo7Nxw#');
define('SECURE_AUTH_KEY',   'Wxo9d7-uAqI}fHv<o9s5uT3Z=YvL`QlB4Dw#^%Zc]S(wX)4Fu+s[Za52u{VAiU-C');
define('LOGGED_IN_KEY',     'oj%1E){_KwpNlj1H<>_!6 (5k7+WOOIi5!{xVK7[T[]!.+=xo`-~n3y#qSoko4rk');
define('NONCE_KEY',         'f7J/~14r(YU<x%|+iXXKEu}+[AN:V;pe8QW<<e(w#eq~l0k0|SJ[kvdhkcyVM+N!');
define('AUTH_SALT',         '`jS>`}E`@Ylvz}YlN/yqSI@0Zz-*F|tjEj_.*W[;]XxFB[VQ.eXK?cu|uwd*%.0n');
define('SECURE_AUTH_SALT',  'SS&H5(#h<B#ZkhWQ+bZ< nE2cI`56w$U:4VXVLB <S:5}VD&@ck+C7vSHEq>:sV2');
define('LOGGED_IN_SALT',    'g5mL/<J^004oEpp)[%Q-4kWv:`Lp8:GV9PJ$b8-y;H*5##$dac@2dXLG).Wx{0O?');
define('NONCE_SALT',        'hCI??ama.<SA>50,9oVZ5vF%/|: gXlKuu_~a17B0XmZ^=md2G[Z]m=d?F[GKj.j');
define('WP_CACHE_KEY_SALT', 'jkO=d-^-|DFY] #+. ~Ci3|b{y3#15T(?=~LEy$96Y8OHUC&1 a^ls,*<<fq2tmK');

/**#@-*/

/** WordPress database table prefix */
$table_prefix = 'wp_';

/** Debugging settings */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false); // デバッグを画面に表示しない
@ini_set('display_errors', 0); // エラーを非表示にする

/** Environment type */
define('WP_ENVIRONMENT_TYPE', 'local');

/** Absolute path to the WordPress directory */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files */
require_once ABSPATH . 'wp-settings.php';
