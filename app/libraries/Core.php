<?php 
/*
[  author ] ;- Muhammed alaraby
[  Date   ] ;- 29/10/19
[  Info   ] ;- { App Core } :- Handle the framework Core
*/

/**
 * App core Class
 * Create URL & loads core controller
 * URL FORMAT - /controller/method/params
 */
?>

<?php 
/**
 *  [ $currentController ] :- Load pages controller if there is  no current controller
 *  [ $currentMethod ] :- Load index mothed if there is  no current method
 *  [ $params ] :- Hold the URl params
 */

class Core {
    protected $currentController = 'Pages'; 
    protected $currentMothed = 'index';
    protected $params = [];


public function __construct(){
    $this->getUrl();
}

// { getUrl() } :- Get any params in URL after / sign
public function getUrl(){
    echo $_GET['url'];
}


}
?>