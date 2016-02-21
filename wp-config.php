<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|[5ren.myp5GTM]5t4E_4@:[m$&WKjd$W:)N-NQWy:^x+:*5H&U@[>9<.]/1KfGO');
define('SECURE_AUTH_KEY',  'bi51.c+:>w8%G->D$|-]*_/iFh#9B5.7|t(AWZKU_QYzGu|v8Z5Wq{F^Ua1vW, #');
define('LOGGED_IN_KEY',    ';x<t+4Fx75!Ew!+%%(M$E}hSh&yS3=T:pMET7eMVf.=CFhq5>um}R&$kLEw!]HZ%');
define('NONCE_KEY',        '<`Vtz!j4>`3Z|lurrs%j.GA4Yaq:vjCX{Dq:D2rf1ge%x0TY+qL}{5TnvZQ_r$)5');
define('AUTH_SALT',        ',6XXPUM6j+?}MDFYBr[L`O+Y[1W@~BTxd^/$K+H$L;x zP&L<P^a{v)+p>z:V^?F');
define('SECURE_AUTH_SALT', 'bR-3&5mU*|K1M1-_9ld1e`XY&&{|uMb0To%I)or:m-,xw /) sKP`1v_a+pU={g4');
define('LOGGED_IN_SALT',   '>Ipj>Z$mPAAHnC=$k$|<q!f:IA;4AH|GS]W/wjfqQ:7dO$SexH|ooFQ!&)K_:@c!');
define('NONCE_SALT',       '%_:U&Ds}9>@i=5;e pfaKMR$[+Y9^{N|u&;J#7N;%=pi2-4CrzVe:$txFP&4MXfr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
