<?php
    /*
    * App core class 
    *creates URL & loads core controler
    * URL FORMAT - /controller/method/params
    */

class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        //print_r($this->getUrl());
        $url = $this->getUrl();
        

        //look in controlers for controller for 1st value
        //we are in index.php
        //ucworsds dělá upper case
        if(file_exists('../app/controllers/'.ucwords($url[0]).".php")){
            $this->currentController = ucwords($url[0]);
            //unset 0 index
            unset($url[0]);
        }

        //this load the right page from controller
        require_once '../app/controllers/'.$this->currentController.'.php';
        $this->currentController = new $this->currentController;

        //check for second part of url 
        if(isset($url[1])){
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                //unset 1st index - makes write about function with the construcotr with calling http://localhost:4000/public/index.php/?url=pages/about/33
                unset($url[1]);
            }
        }
        //echo $this->currentMethod;
        //get params
        $this->params = $url ? array_values($url) : [];
      

        //call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
       
    }

    public function getUrl(){
      
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
            
        }

        if(isset($_POST['expression'])) {
            //echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_POST['expression'];
            $url = $_POST['expression'];

        }
    }


}