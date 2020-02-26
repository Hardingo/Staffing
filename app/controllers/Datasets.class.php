<?php

class Datasets extends Controller {

    public function __construct(){

        $this->datasetModel = $this->model("Dataset");
        

    }

    public function index(){
        $data = [];

        if(isset($_POST["location-submit"])){
            $this->datasetModel->addData("location", $_POST["location"]);
        }
        
        $this->view("data/data", $data);
    }

}