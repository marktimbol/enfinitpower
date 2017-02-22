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
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

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
define('AUTH_KEY',         '2*K!dV)G r+$?S!=QG9oB7:?TC&B`A7RpceT`{%+ ;vzmsAU8_|IHNxU%nAoaIu0');
define('SECURE_AUTH_KEY',  '0JdoeK>[XQ]wL)0+}X>fg$ntpB4x3nM{_bgkKS/~ V%wS!XM`,=k0w;>A_[u&vlP');
define('LOGGED_IN_KEY',    '6X`U$??>i]#}6FUm&Z X)3U-<tiIB =:#nXkf,H0v/uf>2saes >)xq9+?hKZ]_=');
define('NONCE_KEY',        '<PFwku:92p0x>Q?g9pIV%~Z=?gb:G8qZ8 HnvMZ;kZd ut!JFaju`zf:zmZ#yc>o');
define('AUTH_SALT',        'UV!qZrjX3rB/:1w}8$c_8*$8]Y$,6fGIP)RtCb q,tfa;[1#S]eN)%}syHbU2%6B');
define('SECURE_AUTH_SALT', 'WS=!jTGZHer%iejo{g9oUNYrLWlqjH>-y9N}cD9ht6cv(sbAIFq;?h_HPWT<py@E');
define('LOGGED_IN_SALT',   '`V}[p4ph^n)C~PHWn}{%M}V$J<~x$%;D5lHzK9#M[E]iB2)V$%`4C[q}>U}3EZlq');
define('NONCE_SALT',       'IzMmTLF*B^04NANe`Oj)w(_!q^ONHj{90[CX;3J&mW.4JMp6D7<CWLCdsV/@2tx^');

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
