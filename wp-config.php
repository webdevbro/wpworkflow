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
define( 'DB_NAME', 'wpdev20' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'n1col3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY', '0>PTs*1JCAch*Vjl#>+0hoPFytb<bwYfr9dx|Ws+p^eQ!D>SnS0@dX~~$+b&>e$l');
define('SECURE_AUTH_KEY', 'pzp~=>p1xw+).#g#RP:z!YGe+6EYS;q Ro.W.S%4e*O$l%=Pz/)|$^w+5~+8BbJj');
define('LOGGED_IN_KEY', 'sQ7xKr,=KNO]~;@u$4I<kaSfb#V&Z|bz0nha-:n<+l2A~#%kS19.Q-pS&n,EE+K=');
define('NONCE_KEY', 'qNgZ=z_Ba6j`-|e4MY?!7dhV%G1>3+lPUUSlIRbHK#] <CnmP&h>Kgn<66.szkZt');
define('AUTH_SALT', 'j5{e_fZsnY ZtVuFRz_-NiRFfW^r/kLpu.v1>&uS&2GUV-BDx|NMo>?w}P@`#~1[');
define('SECURE_AUTH_SALT', '26Pv^~4Ca]B-ClG|p0j $l:o5oV;ZkHfUrcw*7n+]j_n2`ut}(%kML+5ZvH$+XYa');
define('LOGGED_IN_SALT', 'ns9O/a5?TKd4={6_VPK]|2|vPYe#0+A{>L5;?C@ErG7 FwS-UJ@}BUs28?%fq z0');
define('NONCE_SALT', '8-lOR3).]$vBz[d3]HJh<.r.gLWR[&h}jW*4w_/9a%Z8%dP$I1Z=XT5XYkaIMf|L');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
