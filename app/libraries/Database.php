<?php

class Database{
    public $nameOfPost; 
    public $id;
    public $text;
   // public $posts =[];

    public function __construct(){
        $this->posts[0] = array('nameOfPost' => "String", 'id' => 0, 'text' => "text1");
        $this->posts[1] = array('nameOfPost' => "CHAR", 'id' => 1, 'text' => "text2");
        return $this;
    }

 

    public function returnPost($id){
        //echo $this->posts[$id];
        return $this->posts[$id];
    }


}