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
define('DB_NAME', 'quizpage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Sm120291!!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '*{,~Os-R<>W>J 0VhFX;n7B)xr&aalwlqXw2Dg|s-y$-|z/2P$E/[}Uv nVTPZF&');
define('SECURE_AUTH_KEY',  'x.O?.=W*Z5THwj(~?It_!D|co)P4.53~V4bW_K EWzVE:-0|-|!r/_K-n`?(/f$(');
define('LOGGED_IN_KEY',    '>oJUTCL{iq7h5<}8x/&!l!1D9X!F`E0Qrt1kL%W*JH_#@mIv+yPQE%c+rsl!)|3;');
define('NONCE_KEY',        '@AJT.].p.E3FT&sn}z?5R%FNB*w1m($aK{{yeTFlE?taybaZOEW1Wq+fCqMS1RjE');
define('AUTH_SALT',        'hICJPFpW[@+e1Y@YnZ9JFs,q?Y(3Cw$.6T|c.YaO_N.bcyO%>S#e;eyeN@I}n~f}');
define('SECURE_AUTH_SALT', 'FAxd0ap~OF[>&HztA Ef>^{U|+u>mn_,XlD8qeZ%$QI!g._SAt+d(mUY{*_,miKe');
define('LOGGED_IN_SALT',   ',W3:1cyOL&h-p=?ClD`fwZq*6H_5=!z@7i4g7!gLF,gTa3[!;Y#diqmy6BM-!f)y');
define('NONCE_SALT',       'lLRMJBCLX!FIal}y5PBo!/8$GY21!Lxwh&:jIz4Ij[3l<a|V 4#PD@V0,T{C/9 7');

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
