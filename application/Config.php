<?php

define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'default');
define('APP_NAME', 'Sistema TKSIS');
define('APP_EMAIL', 'contacto@tksis.co');
define('APP_SLOGAN', 'TKSIS');
define('APP_COMPANY', 'www.tksis.co');
define('SESSION_TIME', 100);
define('HASH_KEY', '4f6a6d832be79');

/*if (in_array(@$_SERVER['REMOTE_ADDR'], array(
    '127.0.0.1',
    '::1'
))) {
	define('BASE_URL', 'http://localhost/mvc_base_2018/');
	define('DB_HOST', 'localhost');
	define('DB_HOST_LOCAL', true);	
}else {
	
	define('BASE_URL', 'http://tksis.com/');
	define('DB_HOST', 'localhost');	
	define('DB_HOST_LOCAL', false);	
}*/
define('BASE_URL', 'http://localhost/ontime/');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ontime_bd');
define('DB_PORT', '');
define('DB_CHAR', 'utf8');

?>