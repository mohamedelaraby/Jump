
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
 *  [ $currentMethod ] :- Load index method if there is  no current method
 *  [ $params ] :- Hold the URl params
 */

class Core {
    private $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];


public function  __construct(){
    // Get the formated url
    $url = $this->getUrl();

    // Looks in controllers for first controller
    if(file_exists('../app/controllers/' . ucwords($url[0]) .'.php')){
        // If exists, set as controller
        $this->currentController = ucwords($url[0]);
        // Unset 0 Index
        unset($url[0]);
    }

    //Require the controller
    require_once '../app/controllers/'.$this->currentController.'.php';

    //  Instantiate controller class
    $this->currentController =  new $this->currentController;

    // Check for the second part of url  
    if(isset($url[1])){
        // Check to see if method exists in controller
        if(method_exists($this->currentController,$url[1])){
            $this->currentMethod = $url[1];
            //unset index 1
            unset($url[1]);
        }
    }

    // Get url rest params
    $this->params = $url ? array_values($url) : [];

    // Call a callback with array or  params
    call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
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

