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
define( 'DB_NAME', 'buckthorn_staging' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bVgOMTccVNTuflllnRpc' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('WP_SITEURL', 'https://buckthornpartners.com');
define('WP_HOME',    'https://buckthornpartners.com');

define('ALLOW_UNFILTERED_UPLOADS', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`lfn4[:r {_3SDbf5AqYsOJuMBcs_>-) z7;.)x`@q3AHm-P>QBwBsCqe^<FLVg ' );
define( 'SECURE_AUTH_KEY',  'i6!p;T`ju8VXh6rey-Is:;}H&2p(<i:|o DSe7aX^s@h8=beg+/__#H3mjybP%jY' );
define( 'LOGGED_IN_KEY',    '7 oY)$jkdk[M9E%DYtCV#8+Z3%2L#;^HeQ]bp1N].(XT2z3@%?Qa#=.;|.I&Yh-J' );
define( 'NONCE_KEY',        'FRNCUr.-yn@V!/{]OKsin$i$IM,XnqDijE2Oo=uZRPN<6::3d2W&Ee/.LQp@Y-H.' );
define( 'AUTH_SALT',        '_Ru@9d?9ts%UoBbvCFXu%Nc^pWf,y,yG[.[VdXMS(!Y,6;`?*amP,H{PN5BnoSAB' );
define( 'SECURE_AUTH_SALT', '#x5AM8u1|CfHpYz+;i[+4XesLp7wJ|Sm#h+Acxc_e*[m=j$WQn+,!Yy<(F:p>hKN' );
define( 'LOGGED_IN_SALT',   'w`4xKDeV5%Pfxm+h/VEX[uA@aOz2~{1q#m({,BNnbgIvl:0*E9z,!o9LDL{H+ZO>' );
define( 'NONCE_SALT',       'w6| uSzq_.apVMU;I4T?PELVJ7mfoJ8iRukGMtiB15<TQ[4[ic|cC`;`[kDS(O@[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'buckthorn_';

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
