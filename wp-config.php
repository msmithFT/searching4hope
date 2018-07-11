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
define('DB_NAME', 'searching4hope');

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
define('AUTH_KEY',         'P.#S%owR{]eYlB6@-PD;_`&xG.dbE&M)c0 3/Pp(zKb<p.iW9R@,!%[NSBqFd:dy');
define('SECURE_AUTH_KEY',  ',OlVn2-~M1[J[ybFHh{^qiO2r+!EGH.YDO5+2(k)U}25B}bcZ+Q8=k0E3.Ctye6=');
define('LOGGED_IN_KEY',    'U3)b$j+wd$?;c5i E#NX)%IEBUoe2M?#<|ahSHp@wO>>i~$Eo25a;cL9k-3Uen_0');
define('NONCE_KEY',        '$HBoZb26gU,*#<N<V8fJj|,BO?$OIXhvEHPD(I!DwZcv_++3V1l-EciKeqT<O])[');
define('AUTH_SALT',        'VPs]9miY?*[I~2Q4oT=vM$]$_kgIKFe^0<nXe3c|;hPZNUCN@Bbz?eHMjkyKRuB}');
define('SECURE_AUTH_SALT', 'Ewf&-7A2K3BjfIV%A $XjM=|nZN+[(G7.^T4*bRJ9=M6Xel^o+A%3uH<:*uWjPDt');
define('LOGGED_IN_SALT',   '}wB.Q6AyGu_Tscyx?C.&k],rQ2EYMF~e,O)m_$tP/45!.WUf ~lD[x =x^Lh&}B~');
define('NONCE_SALT',       's(j.96m :&<EAo-77J.YKG|!VW=9!?Y7k)YEDm3wgcG2J=U%Kb$nLU%sB1nEtby)');

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
