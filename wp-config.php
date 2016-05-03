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
define('DB_NAME', 'db_wpmu');

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
define('AUTH_KEY',         'uBc{_ nGzG9eR45?i1@ZL}_wBM(D@gYnYbLL.g5Q[61a<,+A6G215c>mh! 5ezU}');
define('SECURE_AUTH_KEY',  '(HV5!05|.2HAS!m[j;yJ8j+{zMX11%YQh(byc7p*wC0=3d{;znfB/J:fYoSW[`D>');
define('LOGGED_IN_KEY',    '<*aU2tDz5+alzY:OU>}L{d3W8e1Q2.T8usEJt +j:BKN4g;sBep}^~j!T*.TjObY');
define('NONCE_KEY',        '$.6K2SIF4(7f!Ay/w?Zlkx#,TziM/]]t;5jp)EBO7.H,]5oM+F3eAi`<7@(5PQoL');
define('AUTH_SALT',        'S;a*+OT4{RltxJiYI.dm<(><}wgCL/:h*:nR@$t&M4M*~>i-qc{Kkv_h2t^;YlaU');
define('SECURE_AUTH_SALT', 'uSKzU_*GfeH2hk e%j1COB 4B&|U3cG]X*Q[;V1@ke[odrz<NLbR+ 9>/y,~kHm2');
define('LOGGED_IN_SALT',   'BI8+i3mHyZgW|:mYK0$3$Ig99]?bYp52QRB=t)x<bV-ESFoH>,I9qP6cQ=0QW>rQ');
define('NONCE_SALT',       '*$/bC,E%oHu-D$uIFB@FxiI#Yu?Hq+~@NsM>DS%l,--b+E-Mz<.n}vik&X7mEd_2');

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wpmu/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
