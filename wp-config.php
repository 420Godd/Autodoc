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
define( 'DB_NAME', 'autodocDBag41r');

/** MySQL database username */
define( 'DB_USER', 'autodocDBag41r');

/** MySQL database password */
define( 'DB_PASSWORD', 'aOA41wicZU');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', '{$FQYJn>>cg4RV>[FzzNkk84R||ZwwKOl8|-_:SZhpalt-9KS_]9pp#aa;LL**6qq');
define( 'SECURE_AUTH_KEY', '4Nv@>0|}8cozks@CNVcRZg[0C:4Gow@[-!:VdkZho-8KRCOV~|18[5Chs-_w_[OZh');
define( 'LOGGED_IN_KEY', ':8dowhpw~CKSZOWh|:5C:5DKpw~#w~#:Sahpahpx5DKWHOWe_]19]25Dhpx~px*#L');
define( 'NONCE_KEY', '4ow@|JRZgRZho:4C18GKRw@![-![:5Zhowhls-8CKSZGOWdh|:59[19DKpw-_t-~#');
define( 'AUTH_SALT', 'Ucjrcgnv@BFMUFJQYg^>07B}4BFkrz!rv@,}RUckVYgov08JN8FNRZ@|>0![04Cgk');
define( 'SECURE_AUTH_SALT', '{3AI3AIMTy^.{$,{7bjqufnry^EIQXIMUbf{3B}3BInv$,v$^}QUcjrcjrz7FMUJ');
define( 'LOGGED_IN_SALT', 'Tfm{3AI3AIQu$.{$,{3Xfnufnu$AIQXIQYf,{3B}3BInv$rz^>MUcjUcjr3BJQBJ');
define( 'NONCE_SALT', 'x#2it*DLTaPWe.]2A]2AHmt+.u+.{PXemXemu2AILTELTb*{2.{3Afmu$mu$.IPXf');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
