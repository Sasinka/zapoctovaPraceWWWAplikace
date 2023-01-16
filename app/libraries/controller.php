<?php
//parent class for every mid controller as Pages
/*Base controller 
* loads models and views
*/

class Controller{

    //Load model 
    public function model($model){
        //Require model file 
        require_once '../app/models/'.$model.'.php';

        //instantiate model - post, user, ...
        return new $model;
        
    }

    //Load view 
    public function view($view, $data = []){
        //check for view file 
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        }else{
            //view does not exists
            die('View does not exists');
        }
    }
}

