<?php
    //load config 
    require_once 'config/config.php';

    //load libraries
    /*
    require_once 'libraries/Core.php';
    require_once 'libraries/Controller.php';
    require_once 'libraries/Database.php';
    */
    // Autoload Core Libraries
    //class fileand file has to name same
    spl_autoload_register(function($className){
        require_once 'libraries/'.$className.'.php';
    });