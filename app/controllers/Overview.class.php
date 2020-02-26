<?php 

class Overview extends Controller{

    public function __construct(){
        
    }


    public function index(){
        $this->view("overview/index");
    }


}