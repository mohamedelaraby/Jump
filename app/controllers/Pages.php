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
       //Test the database
        $this->postModel = $this->model('Post');

    }

    /// [ index ]:- Defualt method if there is not other method
    public function index(){
        //Get the post from model
        $posts = $this->postModel->getPosts();
        $data =[
            'title' => 'Welcome home',
            'post' => $posts,
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