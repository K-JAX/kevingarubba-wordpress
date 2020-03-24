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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IaiQDXbk3w7L/tDjiP9jgbYBFwydtmwozZge8/A6HbHX/7DmX1O7PasWGskwvcooFNL0PXWJKWm1hIrVzY5anw==');
define('SECURE_AUTH_KEY',  'sVBv9/pd+F9psoyFOu6QK4SRHPiJaYpRy0v32mHJgvKPZttE0EhPlSj2glO3TMtS4ii19pujWnbBOLzar2NQOw==');
define('LOGGED_IN_KEY',    'jYIuLeLJdEdyDiu463O1d3JAmDstvUAYGYcwXJmfpP+NbuCL/RVD3lEIxwUMt0Nb2xYiepg/mQzVRkFG39/x0g==');
define('NONCE_KEY',        'Fp6TVyhspwfJN/VxFvW1I5RxGWtyGLYtMKqgqigThxDfgY1qb+NImXT8zfrZXcvYXWxdxt+hOtjtpaWAaEZcyg==');
define('AUTH_SALT',        'ICrbJ33RTNPDTuAjUd/wR7l3NnCbiOe6uuPJSuN3XiwOmuSN2XegGP8ZStqm5fDAHbFsoHf7dMN9pbVnJ+xqPA==');
define('SECURE_AUTH_SALT', 'NxS0HGb35VuegztIDvCGa2d+4TNhi/N2oIomZ4Ur/ivwCzBRQktIQ/CPMezbyz4nM7F/tJIz59h4aUneXFZe5Q==');
define('LOGGED_IN_SALT',   '8sYAlvowYs7UBKF85X869TBCf5bCKZ2u51OUbrjtyL2MrF1jQkiPbzRmNlK39LfZFJN61WYaSJzo7PEdLgMK6Q==');
define('NONCE_SALT',       'Z6hmnQ8k8zBQdiF878lb+/5gDiylsSHmre+RiBSp6nQLcWAGLx4S7UDJY/zI9hpOD4d392J7lt9JgL+/r2WF9Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
