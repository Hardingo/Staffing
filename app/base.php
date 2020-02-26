<?php 
    //Load Libraries
    //CONFIG FILE
    require_once "config/config.cfg.php";

    // LIBRARIES autoload
    spl_autoload_register(function($className){
        require_once "libraries/" .$className . ".lib.php";
    });
