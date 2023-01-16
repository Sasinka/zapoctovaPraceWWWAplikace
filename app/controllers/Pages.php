<?php
    class Pages{
        public function __construct(){
            echo 'Pages Loaded';
        }

        public function index(){
            
        }

        public function about($id){
            echo 'this is about in Pages'.$id;
        }
    }