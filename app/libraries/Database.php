<?php

class Database{
    public $nameOfPost; 
    public $id;
    public $text;
    public $posts =[];

    public function __construct(){
        $this->posts[0] = array('nameOfPost' => "String", 'id' => 0, 'text' => "text2");
        $posts[1] = array('nameOfPost' => "CHAR", 'id' => 1, 'text' => "text1");
        return $this;
    }

    public function allPosts(){
        $posts[0] = array('nameOfPost' => "String", 'id' => 0, 'text' => "asda");
        $posts[1] = array('nameOfPost' => "CHAR", 'id' => 1, 'text' => "qwererwe");
        return $posts;

    }

    public function returnPost($id){
        //echo $this->posts[$id];
        return $this->posts[$id];
    }


}