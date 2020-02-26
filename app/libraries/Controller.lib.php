<?php
    /* Main controller 
    * Loading models & views 
     */

class Controller {
    //Load model
    public function model($model){
        // require the specific model file
            require_once "../app/models/" . $model . ".class.php";
        // instantiate model

        return new $model();
    }


    //load view 
    public function view($view, $data=[]) {
        //Check for the view file
        if(file_exists("../app/views/" . $view . ".php")){
            require_once("../app/views/" . $view . ".php");

        }else{
            die("View does not exist");
        }


    }

}
