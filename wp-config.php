<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'foundation-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U.j=YN^}}faWHt5~2+-ctC&oK$>E :vWP^NZ-P,$,.qF<Uf[KH _CT?|ON03DElz' );
define( 'SECURE_AUTH_KEY',  '9a2ns~<{%-tO[SgLo|Tzi@A9gk|H9H#uwiVFvDR^?8uBxCVpIy8hsVjf0B2r,*x5' );
define( 'LOGGED_IN_KEY',    '_bh4%R;^|Q_oj_FiClqC4+R%HLSr<YsDYcrp4WJ+iqToo{B.;u8s!qd@_]OC`:V3' );
define( 'NONCE_KEY',        'ncG0ZQFQd,a?yASP[o!,E3z#?R8&8@Vko?0#]2:l9%`>[e6MH`mq~/^!T|Me~hK%' );
define( 'AUTH_SALT',        '|Rv4o(?V(;=7!Zc{gB3{+ogJyc-# id`DS) lQUJh$ml~H?z2l^eY!t)G8JY;btV' );
define( 'SECURE_AUTH_SALT', '[x%vl{X *QI3*%=nOXr:.a)ZxMK8VoC)CAj]#Gi{j2Ighdb*N/q&Uc8~``RlDnW`' );
define( 'LOGGED_IN_SALT',   'CZY9KPba,6&M#&TmeOJm2+AR8o$&drCn2L9Nr$Ki1`Mt4BBW2j1tiEomc+5{}vBf' );
define( 'NONCE_SALT',       '{sU@=SQA?(<PtQIcm9oWU%hIfXY0INU^BUq{KIf;#/s]5z7O?VF%<moV1U^`LlRZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
