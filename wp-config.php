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
define('DB_NAME', 'filmsdb');

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
define('AUTH_KEY',         'H124]4m4a{GJ9G7r1RC8}-dX[4N}<J+l_?cl|:d!Vx_*&bRDYfZv3?Z~J]^j8nrC');
define('SECURE_AUTH_KEY',  'xW,d;%[+7vKk1<N8XqLlNQd0@,]Kw5+1FU-w_5g}F?E(co0Fc /BiqgcgUcH6at/');
define('LOGGED_IN_KEY',    'Xfo#boWh%WC^m5oXB~i<ORpgBHw;H&hGz!KK-~ds_@#Jx7g<YFZ]24iTt0W7YS<W');
define('NONCE_KEY',        '0A3|H2d:~PteTQ 7)ux;#wjtglQS8Ss&a(xZZzb?0y@I,Xr4)J-t*,P!C`dkfISo');
define('AUTH_SALT',        'iQY|}4I,;oiF2A9b@`WU#1rz)uzUpu#L0?>mjCWmTWqNqi(tHoyT1h.FS@D.xf#S');
define('SECURE_AUTH_SALT', 'BQ8<?MeT~)5|H`yDz):l)sMmV_bzGwY*{~NCJ`vnDi$Un5O3zZo*3vEFdJ^|~R,1');
define('LOGGED_IN_SALT',   'lR}Sq{A,&^eLsB0VoR(-70ma8Ha T3p!KGZX{-CfH]3S/D,opHuHZ.^&O[hP!uf*');
define('NONCE_SALT',       'J]^O gw#mrD:mjv8*w$[gKm7wpZI(Tua]QAj)V0Ml$PN,>M>aP/LAN.sQTEP5foG');

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
