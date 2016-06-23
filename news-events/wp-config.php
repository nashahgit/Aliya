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
define('DB_NAME', 'aliya_wp_db');

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
define('AUTH_KEY',         '2@Tw{#x}uQzAn}]7AY@x1;?xY_f1d:v|QIICwju`~o~SZKtQNkWf-LVP61+4LHeH');
define('SECURE_AUTH_KEY',  'ho$Cf1>DZ|U!iT( J-e`T/:Q6Y|s-R7r+lS4BsXXw9-; ,gywcL(t5X1Sy/]5%I%');
define('LOGGED_IN_KEY',    'p/vzT+m,<z`ljfW$Q_)n_T@]f6rWoKRl.]2z.sRmV8U;XL^s1eU[tTx B;-1x@lD');
define('NONCE_KEY',        '{pR&DjwcJ}fx6#S~=hP[>}M2iW8HNhD3duql3,>< D#KnLq!fz]rW6^B2J8&a_XK');
define('AUTH_SALT',        'eytF<jj>a:H<NugSDx@ZWv$rDn3a[,$0o3_X%kq9UxCbGa nd&S bo)WLHM-WnR]');
define('SECURE_AUTH_SALT', 'K@i(3^%9Eh~@ub&!jxGjDv{PCB8]F/w@Z1#[5:L-.<|@If~1gv{|j|B%pi<2:5HW');
define('LOGGED_IN_SALT',   'xuGzA eK+^SC&HL^jAB6Ud-f`-[*Ia`^Hrr?lEmpYg0W*-#wxL#7z5^R$eBCnP1#');
define('NONCE_SALT',       'f2_#Zc}cS~vnJY5XMlCN.y:X<Nqe(t)oYM$YW+)~7.aMDHCVm1blBi@St7ly_X)n');

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
