<?php

// Database params
$db['db_host'] = 'localhost';
$db['db_user'] = '__YOUR_USER_NAME'; 
$db['db_pass'] = '__YOUR_PASSWORD'; 
$db['db_name'] = '__YOUR_DBNAME';

// Make databas params as constants
foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

// App Root :- [ bACKEND INCLUDES]
define('APP_ROOT',dirname(dirname(__FILE__)));
// URL Root :- [ FRONTEND INCLUDES]
define('URL_ROOT','__YOUR_URL');
// Site Name
define('SITE_NAME','__YOUR_SITENAME');
?>