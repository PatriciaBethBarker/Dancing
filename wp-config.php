<?php
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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/dh_vnx836/dancinggypsies.net/dev/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'dance16');

/** MySQL database username */
define('DB_USER', 'dgdata');

/** MySQL database password */
define('DB_PASSWORD', '@dg2016!!');

/** MySQL hostname */
define('DB_HOST', 'mysql.dancinggypsies.net');

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
define('AUTH_KEY',         'fR@IabtFuVcktFoy1%+qbP#zvT|rxsGe9;gW*^12MrISzoMit~n39+E(;#+Ok3_2');
define('SECURE_AUTH_KEY',  'YBX8n|W?WqnE)4%1Z^l+U(N@U_KNF~Vzwr7OO`@Uq!WN!Q!Ty$eFQe7Nab%Alw?2');
define('LOGGED_IN_KEY',    'SdL*F"z&8OWJ~WOC3HEAnCqni#|%1k!m8yzUeUUrA)H^7fp(esE4EIya)P53krr4');
define('NONCE_KEY',        'hsbnv6Kr&(zZ38klBqBy_xs|%`Pg6E@ZYQ$CVoti?zS7"J/+b)xDAo;LB2gM(oBi');
define('AUTH_SALT',        'CjQv&4dNYCCMzF6fG/eW:9#2@WFV^cYTT$9u2*IuX#1CGuu:^5GKLm2)#zlq&v%V');
define('SECURE_AUTH_SALT', 'mKK?#O60^Jb?_m_%o"3s&A9?G&wW:nGuJSdo$X?uH|M`oD:QT*cERn`)BX#2KWRq');
define('LOGGED_IN_SALT',   'VVbad7+F%Z&0Fbs1WJsZz":%D4B:*)mzhP)9@uFCynT8V^91&l~Hyz#~SbILo9TD');
define('NONCE_SALT',       '64hIIo8Z&oVHaRs0o*g0P`T0rr;_:8^;Q*b:$pdtBy:m;(xgvgSecn?aTK:Z:dr3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_feqidh_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

