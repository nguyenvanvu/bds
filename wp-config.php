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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mikonmiken');

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
define('AUTH_KEY',         '5oP|upvJ!J5Ph(>hF[|=v/~<vFTiGy;Snb%t7S+-4HR75wJr-Ufx5?w-[(6DC{i$');
define('SECURE_AUTH_KEY',  '6kH*7$MyxV_=B;%H=O|dImuR+e7lO+Hoc!0+}Maxo dt6[ua<D76@.3<~S!YsV<!');
define('LOGGED_IN_KEY',    '.Q]-=*RZC@|TIsMH_m-)!M7ea^DAPZvh{PShgnZFfbu9[lD,& ]ftN`++UJvye|~');
define('NONCE_KEY',        'R$~i R>Mzx/$X9jsXY:-j+1G/|;%-v-oGtvZ;VO;oFR RP4rGeV_+i$wQm6+XD<$');
define('AUTH_SALT',        '#bnSC(bXOP+-ns,b;w:@/_-l[}APj9.b=+a|$f5OURdEc ggJjf=Q%G{E^[JgO[)');
define('SECURE_AUTH_SALT', ',i.m<#qSHqz~.7-|B5VN{UY8}^5t-yqN%QwL^<uOSrkSMRP74V%9T1Q/fBnCFra8');
define('LOGGED_IN_SALT',   '%=If4+Y}Ga}~zCB!Ng$;==K6hpe3Omo{-x_*3,{?kj@0J?i{{^q_:@]<a0)v3wnn');
define('NONCE_SALT',       'z98jWz>n9vkkFPUxsRC`VyOmi3leWf+#^v<1~VBS(>[(a^/JYhlv^*y^9YxTo68 ');

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
