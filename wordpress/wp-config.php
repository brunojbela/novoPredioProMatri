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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'promatre' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Hc@L!X8@[Zc7C1uLb%ldCD--N^AXC*!sm@!G5Js@~3`:=Y0)4g`oeeKN#=^#^x@E' );
define( 'SECURE_AUTH_KEY',  'N;`b;S?lXYyCXB0ykXWuhrHSzc~N-0kK~{Fjz+)dj`yK:5BS0%abWesp37IJ[cgm' );
define( 'LOGGED_IN_KEY',    'ThhU$}qP;hipPACIz%anULJ2D*n`RUa.dl3m]U-h`_AxiQ^+86qfEHE%dxjAB5{m' );
define( 'NONCE_KEY',        'Pq+U5>[Ya3Q]<yop&mM*wg1Ub`PmsB>EwAEr9*El>k1`n^,b>;/GQ3})LzE$3tf#' );
define( 'AUTH_SALT',        '#(5%&)[!%:a_h)/HWzD${Bx:T@t#-yDZq@:D=67a6G1<Q<^|+&*~mL:T6](<LK5,' );
define( 'SECURE_AUTH_SALT', 'wZYu8fUN(P;TdrY$}#Mch/mdcYOlw*_jHoPscPJJ~V|6>n3Yq=L5@UyXHE5&^+fb' );
define( 'LOGGED_IN_SALT',   '.~T#{FJw@X:sS5^X$ta(sWel3E8[HO?G^HvGR<zFfpgJ>n^+p+5@[ARw7TImxx0V' );
define( 'NONCE_SALT',       'F3T@&@K=}[87g bvQN{$%CbD<bYnd+!3,n7=?Sa(K`2#$6NQmmTooq0x28R2!Emu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
