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
            'TITLE' => 'JUMP  ',
            'DOCS' => 'This is Jump an open source PHP Framework Which you can use it as you Want,
             okay, Let`s some thing great ',
        ];

        $this->view('pages/index',$data); 
        
    }
    
    // about method
    public function about( ){
        $data =[
            'title' => 'About us',
            'post' => 'No amount of money buy a second of time',
        ];

        $this->view('pages/about', $data);
    }
}

?>