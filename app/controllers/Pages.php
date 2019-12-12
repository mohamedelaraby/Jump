<?php
/*
[  author ] ;- Muhammed alaraby
[  Date   ] ;- 29/10/19
[  Info   ] ;- {  Contollers/Pages  } :- Pages Controlles which handles pages
*/

?>

<?php

class  Pages extends Controller{
    public function  __construct(){
       
    }

    /// [ index ]:- Defualt method if there is not other method
    public function index(){
        $data =[
            'title' => 'Welcome',
            'post' => 'No amount of money buy a second of time',
        ];

        $this->view('pages/index',$data); 
        
    }
    
    // about method
    public function about( ){
        $this->view('pages/about');
    }
}

?>