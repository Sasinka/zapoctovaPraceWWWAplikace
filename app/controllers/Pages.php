<?php
    class Pages extends Controller{
        public function __construct(){
           // echo 'Pages Loaded';
        }

        public function index(){
            //$this->view('Hello');//does not exists
            //$this->view('pages/index'); //the file in views>index.php
            $data = ['title'=> 'welcomex'];
            $this->view('pages/index', $data);
        }

       /* public function about($id){
            echo 'this is about in Pages'.$id;
        }
        */
        public function about(){
            $data = ['title'=> 'About us'];
            $this->view('pages/about', $data);
        }

        public function post($id){
            $db = new Database();
            $newPost = $db->returnPost($id);
            
            
            $title = $newPost['nameOfPost'];
            $id = $newPost['id'];
            $text = $newPost['text'];
            
            $data = ['id' => $id, 'nameOfPost'=> $title, 'text' => $text];

            $this->view('pages/post', $data);
            //$this->view('pages/post', $title);
        }


    }