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
define('DB_NAME', 'mywp');

/** MySQL database username */
define('DB_USER', 'test1');

/** MySQL database password */
define('DB_PASSWORD', '12345bkalpa');

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
define('AUTH_KEY',         '(x+~#0_h@>Y/7U0ex*Ro~UivyNB#p|+CF$5_YR06b*}cfl_kCGLbWd8Bhkdxht;k');
define('SECURE_AUTH_KEY',  '47bV[jogrO^.vN*Lv}HLYfRZ1%B9X_Mm@R^;EeiZ|LghS1H!6lQ.AFp8.pK<L)hM');
define('LOGGED_IN_KEY',    'w;>5r*obzo2=^5as<0{HJt/N,<_L!*FKsb-,^nrq%RtpYu|x$ONyc pIMZ|o*Fk{');
define('NONCE_KEY',        '{y]T>[^D+xjRnW~+A`cP!P*),bq^U[}5}+%GC/5Mr|fqD=3,n0E%?0Ljj8gK].,a');
define('AUTH_SALT',        'FQ}5V7j]P3I29#R0=?5OIQ[=,jIS,^a]2=[@$-X{wDykOc|;_4?:;p(RJait{pDX');
define('SECURE_AUTH_SALT', 'NWeVAQ4DGPP&QPRZ(.3V,m]4H!YoeMET8uLzji(XuN*9D_%x/*8:k!z^R.17yK&.');
define('LOGGED_IN_SALT',   '[|Ha^~EIucXbDN+Z@VycNNu{A]WHkKdHk5eOXYopL81]eIvvk;fk/lPQg)%c4hbk');
define('NONCE_SALT',       '`&>9Htp3lnl~J<02ZNMO42x%~kA{1C&{`{eGx5[<`t`E2!Zqy-[3La{ayvB_S:$]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'test1_';

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



 define('FS_METHOD', 'direct'); 