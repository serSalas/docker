<?php
// ** Configuración MySQL **//
/** el nombre de la base de datos **/
define('DB_NAME','wordpress');

/** el usuario de la Base de Datos **/
define('DB_USER','root');

/** contraseña de la Base de Datos **/
define('DB_PASSWORD','root');

/** hostname del MySQL **/
define('DB_HOST','localhost');

/** el Charset de la base de datos usado para crear las tablas de las bases de datos **/
define('DB_CHARSET','utf8');

/** collate type **/
define('DB_COLLATE','');

define('AUTH_KEY','put your unique phrase here');
define('SECURE_AUTH_KEY','put your unique phrase here');
define('LOGGED_IN_KEY','put your unique phrase here');
define('NONCE_KEY','put your unique phrase here');
define('AUTH_SALT','put your unique phrase here');
define('SECURE_AUTH_SALT','put your unique phrase here');
define('LOGGED_IN_SALT','put your unique phrase here');
define('NONCE_SALT','put your unique phrase here');

$table_prefix = 'wp_';
define('WP_DEBUG',false);

if ( !defined('ABSPATH') )
	define('ABSPATH',dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php')




