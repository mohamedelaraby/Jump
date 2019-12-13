<?php

// Database params
$db['db_host'] = 'localhost';
$db['db_user'] = 'root'; 
$db['db_pass'] = ''; 
$db['db_name'] = 'pdo';

// Make databas params as constants
foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

// App Root :- [ bACKEND INCLUDES]
define('APP_ROOT',dirname(dirname(__FILE__)));
// URL Root :- [ FRONTEND INCLUDES]
define('URL_ROOT','http://localhost/dashboard/developer/Jump');
// Site Name
define('SITE_NAME','Jump');
?>