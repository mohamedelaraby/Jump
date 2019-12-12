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
            'post' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quasi quia eius tempore voluptates,
                      quae magnam! Earum aperiam repudiandae asperiores',
        ];

        $this->view('pages/index',$data); 
        
    }
    
    // about method
    public function about( ){
        $this->view('pages/about');
    }
}

?>