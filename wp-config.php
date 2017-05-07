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
define('DB_NAME', 'restaurant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '){[[R&WCDz3uk/FzQY+[V>^(dU^_-O>W4JR`DY[#>l/@T]cH>^aV$8A1hH{)68cl');
define('SECURE_AUTH_KEY',  'aDtAaYxWlsbEBRy@y}=A4YIM{!IP8`6i;UgjJlZ<nCz<W.A;fSTGf*a~h0F>o6u$');
define('LOGGED_IN_KEY',    'LyyU>T`081W?B8Kz-;,V~x=m8l&;4oA Qj%sfAUIxZkJ*4%G*iZk,*5nHr!WR2:z');
define('NONCE_KEY',        'WurNi./ S0PCWvQ&Jk*{fmmdwnc#5y]a8f~!f-NNqJD,e-?77gMnhArYN:cQEU/L');
define('AUTH_SALT',        'E%Td--9yeDW89x`@HkG3QGE]V^jpho9VUv@df>R}qDd|E2/Cim8Ut[u4j?9{cr^e');
define('SECURE_AUTH_SALT', 'x~ZUe]L%9r(iiFf$AtY&GyuS~CS(=Cx)o?]>?kjFa]TS#4I3>!+r:7&IZsX_sR=V');
define('LOGGED_IN_SALT',   '#=vSw1s+mD9^Ii|}*tMx@5mDiZDcWL@ViI>yc%HX1hC/A76xKH TAZ!+3wC`]yq7');
define('NONCE_SALT',       'Y5G/S:6ND*FrY0lX*5V9vTeo1ER_j$pm^c|W7;[FWE^Z,/!=33YK:{-x{VT.g6og');

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
