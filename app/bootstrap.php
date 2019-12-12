<?php
/*
[  author ] ;- Muhammed alaraby
[  Date   ] ;- 29/10/19
[  Info   ] ;- { Bootstrap file } :-  Load Important Core files
*/

////////////////////////////////////////////////////////////////////////


    // Load Config
        require_once 'config/config.php';


    // Autoload Core Libraries
    spl_autoload_register(function($className){
        require_once 'libraries/'.$className.'.php';
    })

?>

