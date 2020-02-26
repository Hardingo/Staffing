<?php 
class Pages extends Controller{
    public function __construct(){
        // load models for each function
    }

    // index function (DO NOT DELET it is REAQUIRED!!)
    public function index(){
      
        $this->view("index");

    }
}

