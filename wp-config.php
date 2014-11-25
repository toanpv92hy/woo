<?php
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'woo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Q~(@4QYlnt?nNFR7*:_l];i?zM.%+Y~3TIZKD4SVFI?i~xDl`nPZfYD)7|+!zRsi');
define('SECURE_AUTH_KEY',  '(rDMMsZ?lrv?GH(9|7|^.e5i|&d,2_AzvI;P)%zA(QDb+0J/|>eSS*Jl}zaA/|3=');
define('LOGGED_IN_KEY',    'Z|1ho9|S 2mfsuz/IKduXz8}q>RUF?f+o^NJ@XYHltS-MUG+&7+ETbEvl0|Sj1>4');
define('NONCE_KEY',        'rbgYs-?goJ<[u2>}Za-7$W~?UT:T|1M0v,F|/d8|kNNq8LqX>*-/57iKvlOjEzeo');
define('AUTH_SALT',        '<Mybs2j5-[Lyn0-T%J,[v@3u7>%/!iXf|}2%G?&uSw-58/iGS:0!;dqoT-YAi4b&');
define('SECURE_AUTH_SALT', '+E<dYs{D;wsi 0|7{wg,15[TnC*Py~]s{b5_v|,KZF3xrrH &UO%3c3bHg^;,*U&');
define('LOGGED_IN_SALT',   'c}ovon(|xu2%.SXj1yC2]B7Xz}a8-J)4$=]uP91:<NY_|3NOG/C/Y(9i~Q6c[R3Q');
define('NONCE_SALT',       'm]2%HE #yoUpYfX0 )CaEKM|Su-]R~mtJnyvNjbSIQl}FU/jm*QL.-l.)dHfk c)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
