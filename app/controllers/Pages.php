<?php
    class Pages extends Controller{
        public function __construct(){
        }

        public function index(){
            //$this->view('Hello');//does not exists
            //$this->view('pages/index'); //the file in views>index.php
            $data = ['title'=> 'Vítej'];
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
            $cookie_name = "lastpage";
            
            if(isset($_COOKIE[$cookie_name])) {
                $viewedLastPage = substr($_COOKIE[$cookie_name], -1);
                if($viewedLastPage < $id+1){
                    //jdu na další stránku    
                    $newPost = $db->returnPost($id);
            
                    $title = $newPost['nameOfPost'];
                    $id = $newPost['id'];
                    $text = $newPost['text'];
                    
                    $data = ['id' => $id, 'nameOfPost'=> $title, 'text' => $text];
        
                    $this->view('pages/post', $data);
                    setcookie($cookie_name, $id,  time() + (86400 * 30), "/");
                }else{
                    //jdu na str. kde jsem byla
                    $newPost = $db->returnPost($id);
            
                    $title = $newPost['nameOfPost'];
                    $id = $newPost['id'];
                    $text = $newPost['text'];
                    
                    $data = ['id' => $id, 'nameOfPost'=> $title." přečteno k: ".$_COOKIE[$cookie_name], 'text' => $text];
        
                    $this->view('pages/post', $data);
                    
                }

            } else{
                //jsem tu poprvé 
                $newPost = $db->returnPost($id);
            
                $title = $newPost['nameOfPost'];
                $id = $newPost['id'];
                $text = $newPost['text'];
                
                $data = ['id' => $id, 'nameOfPost'=> $title, 'text' => $text];

                $this->view('pages/post', $data);
                setcookie($cookie_name, $id,  time() + (86400 * 30), "/");
            }   
//funkční kód pro post
/*
            $newPost = $db->returnPost($id);
            
            $title = $newPost['nameOfPost'];
            $id = $newPost['id'];
            $text = $newPost['text'];
            
            $data = ['id' => $id, 'nameOfPost'=> $title, 'text' => $text];

            $this->view('pages/post', $data);
*/
         
        }
        


    }