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
define('DB_NAME', 'vcon');

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
define('AUTH_KEY',         '74*g0|BiII*U8[d;qu53}CMPc;6LH-w07{47$f073[u2cR.6]v.5dLn6_|VG^(9{');
define('SECURE_AUTH_KEY',  'y#l,loup$iY35[buAkFPMMgOqIiTsShaq$p|3sqz)_OB[YdZ~(b7U~Dng|P+cu+e');
define('LOGGED_IN_KEY',    '/g.bOF{YUu &;Axx&*}1Xy~sBporYlpg)eu3e:|ivq+Bx4np)ojo?y!jz=+Sd}B1');
define('NONCE_KEY',        'egm8%gI@$TW^;{XrxhiH_|.Idfpw!FE1;QosC}TRduGh*/%zwPPJ-q @}$+m&)8q');
define('AUTH_SALT',        '!-[KmLl~1pMThKw//l UvdVFhSAMbS<vd|P0SYR4_iG^4hf>Qef|Q7j*V%FTc!?~');
define('SECURE_AUTH_SALT', '@ifs|PrY}RU)37y8zbK,9HvXd#+3Vo+3f[|gRetygL}LuOl`X}]}7y= ak7X~G6q');
define('LOGGED_IN_SALT',   '#OJNZ_p<>1`?OAr3@bgQirU3LkbS/s5GF [0<I(W/CDsxR_U|Mj@I]xg(s.]NsPN');
define('NONCE_SALT',       '/b)z~L1Uy79 hGZlLjy0Gp7|]D1WL#I>Nj<N}LNnB6u0{n^;k3yHvKE~MYifea{9');

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
