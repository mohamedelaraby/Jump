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
    // Get the formated url
    $url = $this->getUrl();

    // Looks in controllers for first controller
    if(file_exists('../app/controllers/' . ucwords($url[0]) .'.php')){
        // If exists, set as controller
        $this->currentController = ucwords($url[0]);
        // Unset 0 Index
        unset($url[0]);
    }
}

// { getUrl() } :- Get any params in URL after / sign
// [ $url ] :- Handles the URl different parts
public function getUrl(){
    if(isset($_GET['url'])){
    // Strips '/' sign from tthe end of th url
    $url = rtrim($_GET['url'], '/');

    // filter the url characters
    $url = filter_var($url, FILTER_SANITIZE_URL);

    //Breaks url contents into array
    $url =  explode('/', $url);
        
    return $url;
 }
}


}  
?>