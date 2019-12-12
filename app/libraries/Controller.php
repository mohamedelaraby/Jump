<?php
/*
[  author ] ;- Muhammed alaraby
[  Date   ] ;- 29/10/19
[  Info   ] ;- Base controller which loads the models and views
*/


class Controller {

    // [ model ] :- Return the required model for the current controller
    // [ $model ]:-  Model file
    public function model($model){
        //Require model file
        require_once '../app/models/'.$model.'.php';
        // Instatiate model
        return new $model();
    }

    // [ view ] :- Return views
    // [ $view ] :- View file
    // [ $data = []] :- Handle  dynamic data into the view
    public function view($view, $data = []){
        // Check for view file
        if(file_exists('../app/views/'.$view/'.php')){
            require_once '../app/views/'.$view/'.php';
        } else {
            die('View does not exist');
        }
    }

}















?>

